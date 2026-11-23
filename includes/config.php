<?php
/**
 * RANJITH C V - Portfolio Configuration
 * Senior Software Tester | Astraz Software Solutions
 */

// Configure session save path to local writable directory
$sessionPath = __DIR__ . '/../data/sessions';
if (!is_dir($sessionPath)) {
    @mkdir($sessionPath, 0777, true);
}
if (is_dir($sessionPath) && is_writable($sessionPath)) {
    @session_save_path($sessionPath);
}

// Start session if not active
if (session_status() === PHP_SESSION_NONE) {
    @session_start();
}

// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Site Configuration
define('SITE_NAME', 'Ranjith C V');
define('SITE_TITLE', 'Ranjith C V — Senior Software Tester | Astraz Software Solutions');
define('SITE_ROLE', 'Senior Software Tester');
define('SITE_COMPANY', 'Astraz Software Solutions');
define('SITE_CAREER_START', 'June 10, 2025');
define('SITE_STATUS', 'Available for High-Impact Opportunities');
define('SITE_EMAIL', 'ranjith7317002@gmail.com');
define('SITE_PHONE', '+91 89215 70799');
define('SITE_LOCATION', 'India');
define('SITE_TAGLINE', 'Breaking Bugs. Building Quality. Delivering Confidence.');
define('WHATSAPP_NUMBER', '+91 89215 70799');
define('WHATSAPP_URL', 'https://wa.me/918921570799?text=Hi%20Ranjith,%20I%20would%20like%20to%20book%20software%20testing%20services%20for%20my%20project.');

// Social & Professional Links (Easily Editable)
$socialLinks = [
    'linkedin' => [
        'name' => 'LinkedIn',
        'url'  => 'https://www.linkedin.com/in/ranjith-cv',
        'icon' => 'linkedin'
    ],
    'github' => [
        'name' => 'GitHub',
        'url'  => 'https://github.com/ranjithcv',
        'icon' => 'github'
    ],
    'twitter' => [
        'name' => 'X / Twitter',
        'url'  => 'https://x.com/ranjithcv_qa',
        'icon' => 'twitter'
    ],
    'email' => [
        'name' => 'Email',
        'url'  => 'mailto:' . SITE_EMAIL,
        'icon' => 'mail'
    ]
];

// Key Statistics
$siteStats = [
    [
        'id'       => 'projects-counter',
        'number'   => 200,
        'suffix'   => '+',
        'label'    => 'Projects Tested',
        'sublabel' => 'Web, Mobile & AI Platforms'
    ],
    [
        'id'       => 'bugs-counter',
        'number'   => 4000,
        'suffix'   => '+',
        'label'    => 'Bugs Identified',
        'sublabel' => 'Critical, Functional & Edge Cases'
    ],
    [
        'id'       => 'accuracy-counter',
        'number'   => 99,
        'suffix'   => '.8%',
        'label'    => 'Release Stability',
        'sublabel' => 'Flawless Production Deployments'
    ],
    [
        'id'       => 'automation-counter',
        'number'   => 85,
        'suffix'   => '%',
        'label'    => 'Automation Coverage',
        'sublabel' => 'CI/CD Pipeline Integration'
    ]
];

// Core Expertise Areas
$expertiseCards = [
    [
        'id'          => 'manual-testing',
        'index'       => '01',
        'title'       => 'Manual Testing',
        'badge'       => 'Human Intuition & Rigor',
        'description' => 'Comprehensive manual evaluation focusing on human-centric user flows, edge condition discovery, and real-world system behavior.',
        'tags'        => ['Functional Testing', 'Regression Testing', 'UI Testing', 'Responsive Testing', 'Exploratory Testing'],
        'icon'        => 'shield-check',
        'color'       => '#B6FF5C',
        'metrics'     => '99.9% Defect Catch Rate'
    ],
    [
        'id'          => 'automation-testing',
        'index'       => '02',
        'title'       => 'Automation Testing',
        'badge'       => 'High-Speed Validation',
        'description' => 'Architecting robust automated test frameworks, end-to-end regression suites, and continuous delivery validation workflows.',
        'tags'        => ['Automation Workflows', 'Automated Test Execution', 'Test Validation', 'API Testing', 'Continuous Integration'],
        'icon'        => 'cpu',
        'color'       => '#00F0FF',
        'metrics'     => '10x Faster Feedback Cycles'
    ],
    [
        'id'          => 'ai-testing',
        'index'       => '03',
        'title'       => 'AI Testing',
        'badge'       => 'Next-Gen Intelligence QA',
        'description' => 'Specialized QA protocols for AI/LLM-powered applications, validating non-deterministic outputs, latency, hallucinations, and conversational integrity.',
        'tags'        => ['AI-Powered Apps', 'AI Output Validation', 'Intelligent Workflows', 'Model Guardrails', 'Edge Case Stress'],
        'icon'        => 'sparkles',
        'color'       => '#D946EF',
        'metrics'     => 'Zero Hallucination Leaks'
    ],
    [
        'id'          => 'website-development',
        'index'       => '04',
        'title'       => 'Website Development',
        'badge'       => 'Full-Stack QA Understanding',
        'description' => 'Deep architectural understanding of web engineering. Building fast, accessible, responsive websites with PHP, modern HTML5, CSS3, and JavaScript.',
        'tags'        => ['PHP Architecture', 'Modern HTML5/CSS3', 'JavaScript Interactions', 'DOM Performance', 'Semantic & A11y'],
        'icon'        => 'code-2',
        'color'       => '#EAB308',
        'metrics'     => '100% Lighthouse Performance'
    ]
];

// What I Do Capabilities
$capabilities = [
    [
        'title'       => 'Web Application Testing',
        'description' => 'End-to-end multi-browser testing across Chrome, Safari, Firefox, and Edge ensuring zero DOM breaks and flawless functional delivery.',
        'icon'        => 'globe',
        'category'    => 'Platforms'
    ],
    [
        'title'       => 'Mobile Application Testing',
        'description' => 'Testing native and hybrid iOS/Android applications across diverse viewport dimensions, OS variations, and network conditions.',
        'icon'        => 'smartphone',
        'category'    => 'Platforms'
    ],
    [
        'title'       => 'Functional Testing',
        'description' => 'Rigorous business logic validation, state machine verification, data integrity assertions, and boundary value analysis.',
        'icon'        => 'check-circle-2',
        'category'    => 'Core QA'
    ],
    [
        'title'       => 'UI/UX Testing',
        'description' => 'Pixel-perfect visual audit, typography hierarchy, micro-interaction smoothness, usability heuristics, and accessibility compliance.',
        'icon'        => 'layout',
        'category'    => 'User Experience'
    ],
    [
        'title'       => 'Automation Testing',
        'description' => 'Scripted test automation suites executing thousands of continuous assertions without human latency or manual oversight fatigue.',
        'icon'        => 'zap',
        'category'    => 'Engineering'
    ],
    [
        'title'       => 'AI Application Testing',
        'description' => 'Evaluating generative AI models, agentic workflows, contextual memory retention, output safety, and edge-case prompt responses.',
        'icon'        => 'bot',
        'category'    => 'Next-Gen'
    ],
    [
        'title'       => 'Responsive Testing',
        'description' => 'Granular validation across standard and non-standard viewports, folding screens, landscape orientations, and high-DPI displays.',
        'icon'        => 'monitor-smartphone',
        'category'    => 'User Experience'
    ],
    [
        'title'       => 'Website Development',
        'description' => 'Creating standards-compliant, high-performance web systems using PHP, HTML5, CSS3, and modern vanilla JavaScript.',
        'icon'        => 'terminal',
        'category'    => 'Engineering'
    ]
];

// Approach / Testing Methodology
$approachSteps = [
    [
        'step'        => '01',
        'title'       => 'UNDERSTAND',
        'subtitle'    => 'Requirements & Expected Behaviour',
        'description' => 'Deep dive into specifications, user stories, architecture diagrams, and edge cases to establish bulletproof testing requirements before writing a single test case.',
        'deliverables'=> ['Requirement Traceability Matrix', 'Boundary Analysis', 'Risk Assessment'],
        'icon'        => 'search'
    ],
    [
        'step'        => '02',
        'title'       => 'EXPLORE',
        'subtitle'    => 'Application Exploration & Vulnerability Mapping',
        'description' => 'Heuristic exploratory testing to uncover unscripted quirks, latent behavioral anomalies, unexpected user inputs, and asynchronous state conflicts.',
        'deliverables'=> ['Exploratory Session Charters', 'User Flow Maps', 'Edge-Case Logs'],
        'icon'        => 'compass'
    ],
    [
        'step'        => '03',
        'title'       => 'TEST',
        'subtitle'    => 'Execute Manual & Automation Testing',
        'description' => 'Parallelized execution of rigorous test suites spanning regression, cross-browser, responsive viewports, API contracts, and high-frequency automation runs.',
        'deliverables'=> ['Executed Test Suites', 'Automated Test Reports', 'Performance Benchmarks'],
        'icon'        => 'play-circle'
    ],
    [
        'step'        => '04',
        'title'       => 'IDENTIFY',
        'subtitle'    => 'Find, Document & Report Bugs',
        'description' => 'Precision bug reporting with crystal-clear steps to reproduce, network request HAR logs, console stack traces, video recordings, and severity scoring.',
        'deliverables'=> ['Detailed Bug Tickets', 'Root-Cause Telemetry', 'Reproducible Repros'],
        'icon'        => 'bug'
    ],
    [
        'step'        => '05',
        'title'       => 'VALIDATE',
        'subtitle'    => 'Verify Fixes & Ensure Quality',
        'description' => 'Post-fix sanity checks, strict regression sweeps to prevent regression propagation, and final QA certification for zero-defect production release.',
        'deliverables'=> ['Fix Verification Reports', 'Sign-Off Certificate', 'Production Green-Light'],
        'icon'        => 'badge-check'
    ]
];

// Sanitization & Security Helper Functions
function sanitize_text($input) {
    return htmlspecialchars(trim((string)$input), ENT_QUOTES, 'UTF-8');
}

function verify_csrf($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}
