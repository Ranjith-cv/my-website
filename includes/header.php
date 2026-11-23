<?php
/**
 * Global Header Component
 * Contains HTML head, Meta tags, CDNs, Custom Cursor, Canvas, Preloader
 */
require_once __DIR__ . '/config.php';

$pageTitle = isset($customTitle) ? $customTitle : SITE_TITLE;
$pageDesc  = isset($customDesc) ? $customDesc : 'Portfolio of Ranjith C V, Senior Software Tester at Astraz Software Solutions. Specializing in Manual, Automation and AI Testing with 200+ projects tested and 4,000+ bugs identified.';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="keywords" content="Ranjith C V, Senior Software Tester, Astraz Software Solutions, Manual Testing, Automation Testing, AI Testing, Website Development, QA Engineer, Bug Hunter, Quality Assurance">
  <meta name="author" content="Ranjith C V">
  <meta name="theme-color" content="#080808">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://localhost/mywebsite/">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="assets/images/favicon.svg">

  <!-- Twitter Meta -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
  <link rel="apple-touch-icon" href="assets/images/favicon.svg">

  <!-- Google Fonts Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Core Stylesheets with Cache Busting -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?= file_exists(__DIR__ . '/../assets/css/style.css') ? filemtime(__DIR__ . '/../assets/css/style.css') : time() ?>">
  <link rel="stylesheet" href="assets/css/animations.css?v=<?= file_exists(__DIR__ . '/../assets/css/animations.css') ? filemtime(__DIR__ . '/../assets/css/animations.css') : time() ?>">
  <link rel="stylesheet" href="assets/css/responsive.css?v=<?= file_exists(__DIR__ . '/../assets/css/responsive.css') ? filemtime(__DIR__ . '/../assets/css/responsive.css') : time() ?>">

  <!-- Lucide Icons CDN (Fallback to SVG) -->
  <script src="https://unpkg.com/lucide@latest" defer></script>
</head>
<body>

  <!-- Custom Magnetic Cursor -->
  <div class="cursor-dot" aria-hidden="true"></div>
  <div class="cursor-ring" aria-hidden="true"></div>

  <div class="site-content">
    <?php include __DIR__ . '/navigation.php'; ?>
