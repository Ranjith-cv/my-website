<?php
/**
 * TESTING TYPES I COVER — DUAL-ROW CLIENT-LOGO SLIDER
 * High-performance 60fps infinite marquee with colorful gradient icon badges
 */

$testingTypes = [
  [
    'id' => 'manual',
    'class' => 'type-manual',
    'title' => 'Manual Testing',
    'line' => 'Exploratory & Functional',
    'badge_grad' => 'linear-gradient(135deg, #FF4500 0%, #FF7A45 100%)',
    'tint' => '#FFF2EB',
    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>'
  ],
  [
    'id' => 'automation',
    'class' => 'type-automation',
    'title' => 'Automation Testing',
    'line' => 'Playwright, Cypress & CI/CD',
    'badge_grad' => 'linear-gradient(135deg, #4338CA 0%, #6366F1 100%)',
    'tint' => '#EEF2FF',
    'icon' => '<polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>'
  ],
  [
    'id' => 'api',
    'class' => 'type-api',
    'title' => 'API Testing',
    'line' => 'REST, GraphQL & Contract',
    'badge_grad' => 'linear-gradient(135deg, #0F766E 0%, #14B8A6 100%)',
    'tint' => '#F0FDFA',
    'icon' => '<rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>'
  ],
  [
    'id' => 'performance',
    'class' => 'type-performance',
    'title' => 'Performance Testing',
    'line' => 'Load, Stress & Concurrency',
    'badge_grad' => 'linear-gradient(135deg, #B45309 0%, #F59E0B 100%)',
    'tint' => '#FFFBEB',
    'icon' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>'
  ],
  [
    'id' => 'security',
    'class' => 'type-security',
    'title' => 'Security & Auditing',
    'line' => 'OWASP & Vulnerability Audits',
    'badge_grad' => 'linear-gradient(135deg, #BE123C 0%, #F43F5E 100%)',
    'tint' => '#FFF1F2',
    'icon' => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1.5"/>'
  ],
  [
    'id' => 'ai',
    'class' => 'type-ai',
    'title' => 'AI & LLM Testing',
    'line' => 'Determinism & Hallucinations',
    'badge_grad' => 'linear-gradient(135deg, #15803D 0%, #22C55E 100%)',
    'tint' => '#F0FDF4',
    'icon' => '<path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z"/><circle cx="19" cy="5" r="1.5" fill="#FFFFFF"/>'
  ],
  [
    'id' => 'mobile',
    'class' => 'type-mobile',
    'title' => 'Mobile Testing',
    'line' => 'Native iOS & Android QA',
    'badge_grad' => 'linear-gradient(135deg, #1D4ED8 0%, #3B82F6 100%)',
    'tint' => '#EFF6FF',
    'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>'
  ],
  [
    'id' => 'regression',
    'class' => 'type-regression',
    'title' => 'Regression Testing',
    'line' => 'Zero Defect Leaks on Release',
    'badge_grad' => 'linear-gradient(135deg, #7E22CE 0%, #A855F7 100%)',
    'tint' => '#FAF5FF',
    'icon' => '<polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/>'
  ],
  [
    'id' => 'functional',
    'class' => 'type-functional',
    'title' => 'Functional Testing',
    'line' => 'End-to-End User Journeys',
    'badge_grad' => 'linear-gradient(135deg, #4D7C0F 0%, #84CC16 100%)',
    'tint' => '#F7FEE7',
    'icon' => '<path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>'
  ],
  [
    'id' => 'usability',
    'class' => 'type-usability',
    'title' => 'Usability Testing',
    'line' => 'UX Fidelity & Accessibility',
    'badge_grad' => 'linear-gradient(135deg, #BE185D 0%, #EC4899 100%)',
    'tint' => '#FDF2F8',
    'icon' => '<circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>'
  ],
  [
    'id' => 'compatibility',
    'class' => 'type-compatibility',
    'title' => 'Compatibility Testing',
    'line' => 'Cross-Browser & Multi-OS',
    'badge_grad' => 'linear-gradient(135deg, #0E7490 0%, #06B6D4 100%)',
    'tint' => '#ECFEFF',
    'icon' => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>'
  ],
  [
    'id' => 'uat',
    'class' => 'type-uat',
    'title' => 'UAT Testing',
    'line' => 'Client Sign-Off & Staging',
    'badge_grad' => 'linear-gradient(135deg, #334155 0%, #64748B 100%)',
    'tint' => '#F1F5F9',
    'icon' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><polyline points="9 15 11 17 15 13"/>'
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
            <div class="testing-tile tile-h-<?= $idx % 3 ?>" style="--tile-tint: <?= $t['tint'] ?>;" data-type="<?= $t['id'] ?>" tabindex="0" role="group" aria-label="<?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?>">
              <div class="type-badge" style="background: <?= $t['badge_grad'] ?>;" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
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
            <div class="testing-tile tile-h-<?= $idx % 3 ?>" style="--tile-tint: <?= $t['tint'] ?>;" data-type="<?= $t['id'] ?>" tabindex="0" role="group" aria-label="<?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?>">
              <div class="type-badge" style="background: <?= $t['badge_grad'] ?>;" aria-hidden="true">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
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
