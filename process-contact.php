<?php
/**
 * RANJITH C V - Portfolio Contact Processing Endpoint
 * Server-side validation, CSRF verification, Honeypot protection, & Audit Logging
 */

require_once __DIR__ . '/includes/config.php';

header('Content-Type: application/json; charset=UTF-8');

$response = [
    'success' => false,
    'message' => 'An unexpected error occurred.',
    'errors'  => []
];

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    $response['message'] = 'Method Not Allowed.';
    echo json_encode($response);
    exit;
}

// Honeypot check (anti-bot)
if (!empty($_POST['contact_verification_token_bypass'])) {
    // Bot detected
    http_response_code(200);
    $response['success'] = true;
    $response['message'] = 'Thank you for reaching out!';
    echo json_encode($response);
    exit;
}

// Verify CSRF Token
$csrf_token = $_POST['csrf_token'] ?? '';
if (!verify_csrf($csrf_token)) {
    http_response_code(403);
    $response['message'] = 'Security verification failed. Please refresh the page and try again.';
    $response['errors']['csrf'] = 'Invalid CSRF token.';
    echo json_encode($response);
    exit;
}

// Retrieve & Sanitize Inputs
$name         = trim($_POST['name'] ?? '');
$email        = trim($_POST['email'] ?? '');
$phone        = trim($_POST['phone'] ?? '');
$subject      = trim($_POST['subject'] ?? '');
$service      = trim($_POST['service'] ?? '');
$inquiry_type = trim($_POST['inquiry_type'] ?? ($service ?: 'Testing Consultation'));
$message      = trim($_POST['message'] ?? '');

$errors = [];

// Name Validation
if (empty($name) || mb_strlen($name) < 2) {
    $errors['name'] = 'Please enter your name (minimum 2 characters).';
} elseif (mb_strlen($name) > 100) {
    $errors['name'] = 'Name cannot exceed 100 characters.';
}

// Email Validation
if (empty($email)) {
    $errors['email'] = 'Please enter your email address.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please provide a valid email address.';
}

// Phone Validation (Maximum 15 digits)
if (!empty($phone)) {
    $digitsOnly = preg_replace('/\D/', '', $phone);
    if (strlen($digitsOnly) > 15) {
        $errors['phone'] = 'Phone number cannot exceed 15 digits.';
    } elseif (strlen($digitsOnly) < 7) {
        $errors['phone'] = 'Phone number must contain at least 7 digits.';
    }
}

// Service / Scope Validation (if modal consultation form)
if (isset($_POST['service']) && empty($service)) {
    $errors['service'] = 'Please select a testing scope.';
}

// Subject Validation (for standard contact form)
if (isset($_POST['subject'])) {
    if (empty($subject) || mb_strlen($subject) < 3) {
        $errors['subject'] = 'Please provide a meaningful subject (minimum 3 characters).';
    } elseif (mb_strlen($subject) > 150) {
        $errors['subject'] = 'Subject cannot exceed 150 characters.';
    }
}

// Message Validation
if (empty($message) || mb_strlen($message) < 10) {
    $errors['message'] = 'Please enter a message with at least 10 characters.';
} elseif (mb_strlen($message) > 4000) {
    $errors['message'] = 'Message cannot exceed 4000 characters.';
}

if (!empty($errors)) {
    http_response_code(422);
    $response['message'] = 'Please fix the errors in the form.';
    $response['errors']  = $errors;
    echo json_encode($response);
    exit;
}

// Sanitize for storage
$cleanData = [
    'id'           => 'QA-MSG-' . strtoupper(substr(uniqid(), -6)),
    'timestamp'    => date('Y-m-d H:i:s'),
    'name'         => sanitize_text($name),
    'email'        => filter_var($email, FILTER_SANITIZE_EMAIL),
    'phone'        => sanitize_text($phone),
    'subject'      => sanitize_text($subject),
    'inquiry_type' => sanitize_text($inquiry_type),
    'message'      => sanitize_text($message),
    'ip_hash'      => hash('sha256', $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'),
    'user_agent'   => sanitize_text($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'),
    'status'       => 'NEW'
];

// Secure JSON message storage
$dataFile = __DIR__ . '/data/messages.json';
$existingMessages = [];

if (file_exists($dataFile)) {
    $content = file_get_contents($dataFile);
    if (!empty($content)) {
        $decoded = json_decode($content, true);
        if (is_array($decoded)) {
            $existingMessages = $decoded;
        }
    }
}

// Prepend newest message
array_unshift($existingMessages, $cleanData);

// Keep last 100 messages to prevent unbounded file growth
if (count($existingMessages) > 100) {
    $existingMessages = array_slice($existingMessages, 0, 100);
}

// Save with file lock
$saved = file_put_contents($dataFile, json_encode($existingMessages, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), LOCK_EX);

if ($saved !== false) {
    // Optional: Forward enquiry to Google Sheets Web App Webhook
    $sheetWebhook = getenv('GOOGLE_SHEET_WEBAPP_URL') ?: ($_ENV['GOOGLE_SHEET_WEBAPP_URL'] ?? '');
    if (empty($sheetWebhook)) {
        $envFile = __DIR__ . '/.env';
        if (file_exists($envFile)) {
            $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                if (strpos(trim($line), 'GOOGLE_SHEET_WEBAPP_URL=') === 0) {
                    $parts = explode('=', $line, 2);
                    $sheetWebhook = trim(trim($parts[1] ?? ''), "\"'");
                    break;
                }
            }
        }
    }

    if (!empty($sheetWebhook) && filter_var($sheetWebhook, FILTER_VALIDATE_URL)) {
        try {
            $payload = json_encode([
                'ticket_id' => $cleanData['id'],
                'name'      => $cleanData['name'],
                'email'     => $cleanData['email'],
                'phone'     => $cleanData['phone'],
                'service'   => $cleanData['inquiry_type'] ?: $cleanData['subject'],
                'message'   => $cleanData['message'],
                'form_type' => $_POST['form_type'] ?? 'testing_consultation'
            ]);

            $ch = curl_init($sheetWebhook);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($payload)
            ]);
            curl_setopt($ch, CURLOPT_TIMEOUT, 6);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            @curl_exec($ch);
            @curl_close($ch);
        } catch (\Throwable $t) {
            // Error ignored to avoid blocking the user response
        }
    }

    // Regenerate CSRF token for next submission
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    http_response_code(200);
    $response['success']   = true;
    $response['message']   = 'Message transmitted successfully! Ranjith C V will review your QA requirements shortly.';
    $response['ticket_id'] = $cleanData['id'];
    $response['new_csrf']  = $_SESSION['csrf_token'];
} else {
    http_response_code(500);
    $response['message'] = 'Internal storage error. Please try again or reach out directly at ' . SITE_EMAIL;
}

echo json_encode($response);
exit;
