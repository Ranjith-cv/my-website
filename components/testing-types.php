<?php
/**
 * TESTING TYPES I COVER — DUAL-ROW CLIENT-LOGO SLIDER
 * High-performance 60fps infinite marquee with premium Lucide gradient icon badges
 */

$testingTypes = [
  [
    'id' => 'manual',
    'class' => 'type-manual',
    'title' => 'Manual Testing',
    'line' => 'Exploratory & Functional QA',
    'badge_grad' => 'linear-gradient(145deg, #FF5722 0%, #FF8A00 100%)',
    'glow' => 'rgba(255, 87, 34, 0.36)',
    'border' => '#FFC8B3',
    'tint' => '#FFF4ED',
    // Lucide: search-check
    'icon' => '<circle cx="10" cy="10" r="7"/><path d="m21 21-4.3-4.3"/><path d="m8 10 2 2 4-4"/>'
  ],
  [
    'id' => 'automation',
    'class' => 'type-automation',
    'title' => 'Automation Testing',
    'line' => 'Playwright, Cypress & CI/CD',
    'badge_grad' => 'linear-gradient(145deg, #4F46E5 0%, #7C3AED 100%)',
    'glow' => 'rgba(79, 70, 229, 0.36)',
    'border' => '#C7D2FE',
    'tint' => '#EEF2FF',
    // Lucide: cpu
    'icon' => '<rect width="16" height="16" x="4" y="4" rx="2"/><rect width="6" height="6" x="9" y="9" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/>'
  ],
  [
    'id' => 'api',
    'class' => 'type-api',
    'title' => 'API Testing',
    'line' => 'REST, GraphQL & Webhooks',
    'badge_grad' => 'linear-gradient(145deg, #0D9488 0%, #06B6D4 100%)',
    'glow' => 'rgba(13, 148, 136, 0.36)',
    'border' => '#99F6E4',
    'tint' => '#F0FDFA',
    // Lucide: network
    'icon' => '<rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/><path d="M12 12V8"/>'
  ],
  [
    'id' => 'performance',
    'class' => 'type-performance',
    'title' => 'Performance Testing',
    'line' => 'Load, Stress & Concurrency',
    'badge_grad' => 'linear-gradient(145deg, #D97706 0%, #F59E0B 100%)',
    'glow' => 'rgba(217, 119, 6, 0.36)',
    'border' => '#FDE68A',
    'tint' => '#FFFBEB',
    // Lucide: gauge
    'icon' => '<path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/>'
  ],
  [
    'id' => 'security',
    'class' => 'type-security',
    'title' => 'Security & Auditing',
    'line' => 'OWASP & Vulnerability Audits',
    'badge_grad' => 'linear-gradient(145deg, #E11D48 0%, #F43F5E 100%)',
    'glow' => 'rgba(225, 29, 72, 0.36)',
    'border' => '#FECDD3',
    'tint' => '#FFF1F2',
    // Lucide: shield-alert
    'icon' => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="M12 8v4"/><path d="M12 16h.01"/>'
  ],
  [
    'id' => 'ai',
    'class' => 'type-ai',
    'title' => 'AI & LLM Testing',
    'line' => 'Determinism & Hallucinations',
    'badge_grad' => 'linear-gradient(145deg, #16A34A 0%, #10B981 100%)',
    'glow' => 'rgba(22, 163, 74, 0.36)',
    'border' => '#A7F3D0',
    'tint' => '#F0FDF4',
    // Lucide: sparkles
    'icon' => '<path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/>'
  ],
  [
    'id' => 'mobile',
    'class' => 'type-mobile',
    'title' => 'Mobile Testing',
    'line' => 'Native iOS & Android QA',
    'badge_grad' => 'linear-gradient(145deg, #2563EB 0%, #38BDF8 100%)',
    'glow' => 'rgba(37, 99, 235, 0.36)',
    'border' => '#BAE6FD',
    'tint' => '#EFF6FF',
    // Lucide: smartphone
    'icon' => '<rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/>'
  ],
  [
    'id' => 'regression',
    'class' => 'type-regression',
    'title' => 'Regression Testing',
    'line' => 'Zero Defect Leaks on Release',
    'badge_grad' => 'linear-gradient(145deg, #9333EA 0%, #C084FC 100%)',
    'glow' => 'rgba(147, 51, 234, 0.36)',
    'border' => '#E9D5FF',
    'tint' => '#FAF5FF',
    // Lucide: repeat
    'icon' => '<path d="m17 2 4 4-4 4"/><path d="M3 11v-1a4 4 0 0 1 4-4h14"/><path d="m7 22-4-4 4-4"/><path d="M21 13v1a4 4 0 0 1-4 4H3"/>'
  ],
  [
    'id' => 'functional',
    'class' => 'type-functional',
    'title' => 'Functional Testing',
    'line' => 'End-to-End User Journeys',
    'badge_grad' => 'linear-gradient(145deg, #65A30D 0%, #84CC16 100%)',
    'glow' => 'rgba(101, 163, 13, 0.36)',
    'border' => '#D9F99D',
    'tint' => '#F7FEE7',
    // Lucide: check-circle-2
    'icon' => '<circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>'
  ],
  [
    'id' => 'usability',
    'class' => 'type-usability',
    'title' => 'Usability Testing',
    'line' => 'UX Fidelity & Accessibility',
    'badge_grad' => 'linear-gradient(145deg, #DB2777 0%, #F472B6 100%)',
    'glow' => 'rgba(219, 39, 119, 0.36)',
    'border' => '#FBCFE8',
    'tint' => '#FDF2F8',
    // Lucide: smile
    'icon' => '<circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>'
  ],
  [
    'id' => 'compatibility',
    'class' => 'type-compatibility',
    'title' => 'Compatibility Testing',
    'line' => 'Cross-Browser & Multi-OS',
    'badge_grad' => 'linear-gradient(145deg, #0891B2 0%, #0EA5E9 100%)',
    'glow' => 'rgba(8, 145, 178, 0.36)',
    'border' => '#BAE6FD',
    'tint' => '#ECFEFF',
    // Lucide: monitor-smartphone
    'icon' => '<path d="M18 8V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h8"/><path d="M10 19v-3.96 3.15"/><path d="M7 19h5"/><rect width="6" height="10" x="16" y="12" rx="2"/>'
  ],
  [
    'id' => 'uat',
    'class' => 'type-uat',
    'title' => 'UAT Testing',
    'line' => 'Client Sign-Off & Staging',
    'badge_grad' => 'linear-gradient(145deg, #334155 0%, #64748B 100%)',
    'glow' => 'rgba(51, 65, 85, 0.36)',
    'border' => '#CBD5E1',
    'tint' => '#F1F5F9',
    // Lucide: badge-check
    'icon' => '<path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/>'
  ],
];

$testingTypesReverse = array_reverse($testingTypes);
?>

<section id="testing-types-section" class="testing-types-section" aria-label="Testing Types I Cover">
  <div class="testing-types-container">
    <div class="testing-types-header">
      <h2 class="testing-types-heading">Testing Types I Cover</h2>
      <p class="testing-types-subline">Comprehensive manual, automated, and specialized testing practices across digital platforms</p>
    </div>
  </div>

  <div class="testing-types-slider-wrapper">
    
    <!-- ROW 1: Slides Right to Left (70s) -->
    <div class="testing-types-row row-left" aria-label="Testing Types Row 1">
      <div class="testing-types-track track-left">
        <?php for ($rep = 0; $rep < 2; $rep++): ?>
          <?php foreach ($testingTypes as $idx => $t): ?>
            <div class="testing-tile" style="--tile-tint: <?= $t['tint'] ?>; --tile-glow: <?= $t['glow'] ?>; --tile-border: <?= $t['border'] ?>;" data-type="<?= $t['id'] ?>" tabindex="0" role="group" aria-label="<?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?>">
              <div class="type-badge" style="background: <?= $t['badge_grad'] ?>; --badge-glow: <?= $t['glow'] ?>;" aria-hidden="true">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                  <?= $t['icon'] ?>
                </svg>
              </div>
              <h3 class="type-title"><?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?></h3>
              <p class="type-subline"><?= htmlspecialchars($t['line'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>

    <!-- ROW 2: Slides Left to Right (80s in reverse order) -->
    <div class="testing-types-row row-right" aria-label="Testing Types Row 2">
      <div class="testing-types-track track-right">
        <?php for ($rep = 0; $rep < 2; $rep++): ?>
          <?php foreach ($testingTypesReverse as $idx => $t): ?>
            <div class="testing-tile" style="--tile-tint: <?= $t['tint'] ?>; --tile-glow: <?= $t['glow'] ?>; --tile-border: <?= $t['border'] ?>;" data-type="<?= $t['id'] ?>" tabindex="0" role="group" aria-label="<?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?>">
              <div class="type-badge" style="background: <?= $t['badge_grad'] ?>; --badge-glow: <?= $t['glow'] ?>;" aria-hidden="true">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round">
                  <?= $t['icon'] ?>
                </svg>
              </div>
              <h3 class="type-title"><?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?></h3>
              <p class="type-subline"><?= htmlspecialchars($t['line'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>

  </div>
</section>
