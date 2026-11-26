<?php
/**
 * GEMINI AI QA ASSISTANT BACKEND (PHP / XAMPP)
 * Proxies chat requests securely to Google Gemini Generative Language API
 */

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'POST';

if ($requestMethod === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($requestMethod !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed. Use POST.']);
    exit;
}

// 1. Read API Key from environment or .env
function getGeminiApiKey() {
    $envKey = getenv('GEMINI_API_KEY');
    if ($envKey) return trim($envKey);

    if (isset($_ENV['GEMINI_API_KEY']) && !empty($_ENV['GEMINI_API_KEY'])) {
        return trim($_ENV['GEMINI_API_KEY']);
    }

    $envFile = dirname(__DIR__) . '/.env';
    if (file_exists($envFile)) {
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if (strpos($line, '#') === 0) continue;
            if (preg_match('/^GEMINI_API_KEY\s*=\s*(.+)$/', $line, $matches)) {
                return trim(trim($matches[1], "\"'"));
            }
        }
    }

    return '';
}

$rawInput = file_get_contents('php://input');
if (empty($rawInput)) {
    $rawInput = file_get_contents('php://stdin');
}
$inputData = json_decode($rawInput, true);
if (!is_array($inputData)) {
    $inputData = $_POST;
}

$userMessage = isset($inputData['message']) ? trim($inputData['message']) : '';
if (empty($userMessage) && isset($inputData['prompt'])) {
    $userMessage = trim($inputData['prompt']);
}
if (empty($userMessage) && isset($inputData['query'])) {
    $userMessage = trim($inputData['query']);
}

if (empty($userMessage)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Message is required.']);
    exit;
}

$apiKey = getGeminiApiKey();

$systemInstruction = "You are the official AI QA Assistant for Ranjith C V, Senior Software Tester at Astraz Software Solutions.\n"
    . "Key facts:\n"
    . "- Name: Ranjith C V\n"
    . "- Position: Senior Software Tester at Astraz Software Solutions (joined June 10, 2025).\n"
    . "- Experience: 200+ commercial projects tested and certified; 4,000+ critical defects discovered.\n"
    . "- Specialties: Manual Testing, Automation with Playwright & Cypress, CI/CD with GitHub Actions, REST/GraphQL API testing, Performance/Load testing, OWASP Security audits, AI & LLM model verification (hallucination audits, BLEU scoring, prompt injection defense).\n"
    . "- Notable Projects: LENSFED Welfare App, Asraya KVVES Kannur App, AAWK Emergency Roadside App, Hote Staff App, Vajra Gold & Diamonds.\n"
    . "Guidelines: Answer clearly, professionally, and concisely in 2-4 short paragraphs or bullet points. When relevant, invite the user to book a consultation or connect on WhatsApp.";

$models = ['gemini-3.5-flash-lite', 'gemini-3.8-flash', 'gemini-flash-latest'];
$replyText = null;

$payload = json_encode([
    'systemInstruction' => [
        'parts' => [['text' => $systemInstruction]]
    ],
    'contents' => [
        [
            'role' => 'user',
            'parts' => [['text' => $userMessage]]
        ]
    ],
    'generationConfig' => [
        'temperature' => 0.7,
        'topP' => 0.95,
        'maxOutputTokens' => 600
    ]
], JSON_UNESCAPED_SLASHES);

foreach ($models as $model) {
    $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key=" . urlencode($apiKey);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    ]);
    curl_setopt($ch, CURLOPT_TIMEOUT, 12);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response && $httpCode === 200) {
        $data = json_decode($response, true);
        if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
            $replyText = $data['candidates'][0]['content']['parts'][0]['text'];
            break;
        }
    }
}

if ($replyText) {
    echo json_encode([
        'success' => true,
        'reply' => $replyText
    ]);
} else {
    // Intelligent fallback
    echo json_encode([
        'success' => true,
        'reply' => "I'm Ranjith's AI QA Assistant at Astraz Software Solutions! Ranjith specializes in manual testing, automated regression pipelines (Playwright & Cypress), API testing, and AI model verification across 200+ tested applications. How can I assist with your software testing requirements today?",
        'is_fallback' => true
    ]);
}
