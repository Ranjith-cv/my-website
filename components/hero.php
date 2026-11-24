<?php
/**
 * DEDICATED HERO SECTION COMPONENT
 * Content: Ranjith C V | Senior Software Tester
 */
$portraitVersion = file_exists(__DIR__ . '/../assets/images/ranjith-portrait-transparent.png') 
  ? filemtime(__DIR__ . '/../assets/images/ranjith-portrait-transparent.png') 
  : time();
?>
<section id="hero" class="ref-hero-section">
  
  <!-- Main 2-Column Hero Body -->
  <div class="hero-body-container">
    <div class="hero-grid">
      
      <!-- Left Column: Vertically Centred Content -->
      <div class="hero-col-left">
        
        <!-- Small label with tiny dot -->
        <div class="hero-badge-label hero-anim-item" style="--anim-order: 0;">
          <span class="badge-dot"></span>
          <span class="badge-text">Independent QA Consultant &amp; Freelancer</span>
        </div>

        <!-- Large bold greeting heading -->
        <h1 class="hero-greeting-heading hero-anim-item" style="--anim-order: 1;">
          Hi, I'm Ranjith.
        </h1>

        <!-- "I am a" subhead in lighter grey -->
        <div class="hero-iam-subhead hero-anim-item" style="--anim-order: 2;">
          I am a
        </div>

        <!-- White Spiral Notebook Card with 3D Page Flip -->
        <div class="hero-notebook-card hero-anim-item" id="hero-notebook-card" style="--anim-order: 3;">
          <!-- 14 Wire Binding Spiral Rings across top edge -->
          <div class="hero-notebook-rings" aria-hidden="true">
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
            <span class="nb-ring"></span>
          </div>

          <!-- Inside Notebook: Role text & bottom-right counter -->
          <div class="hero-notebook-body">
            <div class="hero-role-stage" id="hero-role-stage">
              <span class="hero-role-text" id="hero-role-text">Quality Assurance Professional</span>
            </div>
            <div class="hero-role-counter" id="hero-role-counter">01 / 05</div>
          </div>
        </div>

        <!-- Two Buttons Side by Side -->
        <div class="hero-cta-group hero-anim-item" style="--anim-order: 4;">
          <!-- 1. "START A PROJECT ->" Pill Button -->
          <button type="button" class="hero-btn-start-project" data-open-enquiry>
            <span class="btn-label">START A PROJECT</span>
            <span class="btn-arrow-badge" aria-hidden="true">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </button>

          <!-- 2. "VIEW MY WORK" Button (Navigates to Featured QA Projects) -->
          <a href="#work-section" class="hero-btn-view-work" id="hero-btn-view-work" title="Navigate to Featured QA Projects">
            <span>VIEW MY WORK</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Transparent Photo with Dark Mode Cursor Spotlight -->
      <div class="hero-col-right hero-anim-item" style="--anim-order: 5;">
        <div class="hero-photo-wrapper" id="hero-photo-wrap">
          <!-- Floor shadow under desk -->
          <div class="hero-desk-shadow"></div>

          <div class="hero-photo-container" id="hero-photo-container">
            <!-- Base Layer (Dimmed in dark mode) -->
            <img 
              src="assets/images/ranjith-portrait-transparent.png?v=<?= $portraitVersion ?>" 
              alt="Ranjith C V — Senior Software Tester" 
              class="hero-photo-img hero-photo-base"
              loading="eager"
              id="hero-photo-base"
            >
            <!-- Spotlight Layer (Full colour revealed by mouse spotlight in dark mode) -->
            <img 
              src="assets/images/ranjith-portrait-transparent.png?v=<?= $portraitVersion ?>" 
              alt="" 
              class="hero-photo-img hero-photo-spotlight"
              id="hero-photo-spotlight"
              aria-hidden="true"
              loading="eager"
            >
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
