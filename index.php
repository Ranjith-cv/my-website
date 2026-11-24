<?php
/**
 * RANJITH C V — PORTFOLIO & SOFTWARE TESTING SERVICES
 * Visual Design, Animation Style, & Transitions from Reference Video
 * (Rishi Thakur Theme: 3D Spiral Calendar, Interactive Doors, Time Travel & Dark Minimalist Aesthetic)
 * Senior Software Tester | Astraz Software Solutions
 */

require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     SECTION 1: HERO SECTION COMPONENT (MODULAR)
     Matches ref1_light_theme, ref2_dark_spotlight, ref3_dark_cursor
     ========================================================================== -->
<?php include __DIR__ . '/components/hero.php'; ?>

<!-- ==========================================================================
     INLINE SVG DEFINITIONS FOR BUG CATCHER SPECIMEN JARS & GLOSSY 3D BUGS
     ========================================================================== -->
<svg width="0" height="0" style="position:absolute; display:none;" aria-hidden="true">
  <defs>
    <!-- Shaded Bug Body Gradient (Orange-Red Gloss) -->
    <linearGradient id="bc-bug-grad" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#ff8a00" />
      <stop offset="45%" stop-color="#ff4d1f" />
      <stop offset="100%" stop-color="#ff3b30" />
    </linearGradient>

    <!-- Glossy Radial Sheen for 3D Bug Carapace -->
    <radialGradient id="bc-bug-sheen" cx="35%" cy="25%" r="75%">
      <stop offset="0%" stop-color="#ffffff" stop-opacity="0.65" />
      <stop offset="35%" stop-color="#ffffff" stop-opacity="0.1" />
      <stop offset="100%" stop-color="#000000" stop-opacity="0.45" />
    </radialGradient>

    <!-- Specimen Jar Glass Gradient -->
    <linearGradient id="bc-glass-grad" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#ffffff" stop-opacity="0.5" />
      <stop offset="15%" stop-color="#ffffff" stop-opacity="0.1" />
      <stop offset="85%" stop-color="#ffffff" stop-opacity="0.05" />
      <stop offset="100%" stop-color="#ffffff" stop-opacity="0.4" />
    </linearGradient>

    <!-- Lid Gradient (Brushed Metallic Orange) -->
    <linearGradient id="bc-lid-grad" x1="0%" y1="0%" x2="0%" y2="100%">
      <stop offset="0%" stop-color="#ff8a00" />
      <stop offset="50%" stop-color="#ff4d1f" />
      <stop offset="100%" stop-color="#d6360e" />
    </linearGradient>

    <!-- Reusable Bug Master Symbol -->
    <symbol id="bc-bug-symbol" viewBox="0 0 44 44">
      <g stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none">
        <path d="M14 17 L5 12 L2 6" />
        <path d="M30 17 L39 12 L42 6" />
        <path d="M13 24 L4 23 L2 29" />
        <path d="M31 24 L40 23 L42 29" />
        <path d="M14 31 L6 36 L4 42" />
        <path d="M30 31 L38 36 L40 42" />
        <path d="M18 7 C16 3, 12 2, 9 3" />
        <path d="M26 7 C28 3, 32 2, 35 3" />
      </g>
      <circle cx="22" cy="10" r="5" fill="currentColor" />
      <circle cx="19.5" cy="8.5" r="1.2" fill="#ffffff" />
      <circle cx="24.5" cy="8.5" r="1.2" fill="#ffffff" />
      <ellipse cx="22" cy="25" rx="10.5" ry="13.5" fill="url(#bc-bug-grad)" />
      <ellipse cx="22" cy="25" rx="10.5" ry="13.5" fill="url(#bc-bug-sheen)" />
      <path d="M22 13 L22 38" stroke="rgba(0, 0, 0, 0.45)" stroke-width="1.4" />
      <circle cx="17" cy="21" r="1.8" fill="#ffffff" opacity="0.85" />
      <circle cx="27" cy="21" r="1.8" fill="#ffffff" opacity="0.85" />
      <circle cx="16" cy="28" r="1.6" fill="#ffffff" opacity="0.85" />
      <circle cx="28" cy="28" r="1.6" fill="#ffffff" opacity="0.85" />
      <circle cx="21" cy="33" r="1.5" fill="#ffffff" opacity="0.85" />
    </symbol>

    <!-- Glass Specimen Jar Master Symbol -->
    <symbol id="bc-jar-symbol" viewBox="0 0 64 82">
      <rect x="15" y="2" width="34" height="9" rx="3" fill="url(#bc-lid-grad)" stroke="#ffffff" stroke-width="0.8" />
      <path d="M19 11 H45 V15 H19 Z" fill="#c0c0c0" opacity="0.5" />
      <path d="M18 15 C13 18, 10 24, 10 32 V68 C10 74, 15 79, 21 79 H43 C49 79, 54 74, 54 68 V32 C54 24, 51 18, 46 15 Z" 
            fill="url(#bc-glass-grad)" stroke="#9e9e9e" stroke-width="1.8" stroke-linejoin="round" />
      <path d="M14 30 V68 C14 71, 17 74, 21 75" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" opacity="0.75" />
      <path d="M50 32 V66" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-linecap="round" opacity="0.4" />
    </symbol>
  </defs>
</svg>

<!-- ==========================================================================
     SECTION 2: PROVEN QA METRICS & STATISTICS — BUG CATCHER EXPERIENCE
     "Quality measured in bulletproof numbers."
     ========================================================================== -->
<section id="metrics-section" class="bc-section rishi-metrics-section" aria-label="Proven Track Record Stats and Bug Catcher Experience">

  <!-- Interactive HUD: Bug Catch Counter & Reset Button -->
  <div class="bc-hud" role="status" aria-live="polite">
    <div class="bc-hud-status">
      <span class="bc-hud-icon" aria-hidden="true">
        <svg viewBox="0 0 44 44" width="18" height="18"><use href="#bc-bug-symbol"/></svg>
      </span>
      <span>Caught <span id="bc-caught-count" class="bc-hud-count">0</span>/7</span>
    </div>
    <button type="button" class="bc-reset-btn" id="bc-reset-bugs" aria-label="Release all caught bugs back to the section">Release bugs</button>
  </div>

  <!-- Victory Toast Message when 7 Bugs Caught -->
  <div class="bc-victory-toast" id="bc-victory-toast" role="alert">
    <span class="bc-victory-dot" aria-hidden="true"></span>
    <span>All caught. We do the same before your release.</span>
  </div>

  <div class="bc-container rishi-container">

    <!-- 3D Floating & Spinning Bug Stage -->
    <div class="bc-stage-3d" aria-hidden="true">
      <div class="bc-spin-wrapper">
        <div class="bc-spinning-bug">
          <svg viewBox="0 0 44 44" width="72" height="72">
            <use href="#bc-bug-symbol" />
          </svg>
        </div>
      </div>
      <div class="bc-spin-shadow"></div>
    </div>

    <!-- Section Header (Exact Required Content) -->
    <header class="bc-header metrics-header">
      <h2 class="bc-title metrics-title">Quality in Numbers</h2>
      <p class="bc-subtext metrics-subtitle">Every metric reflects intercepted defects, preserved revenue, and flawless production sign-offs. Catch a few loose bugs while you read.</p>
    </header>

    <!-- 4 Stats Cards Grid -->
    <div class="bc-grid metrics-grid">

      <!-- CARD 1: 200+ Projects Tested -->
      <article class="bc-card metric-card" data-tilt-card tabindex="0">
        <div class="bc-card-top-group">
          <!-- Specimen Jar with 3 Bugs Wiggling Inside -->
          <div class="bc-card-jar-wrap" aria-hidden="true">
            <svg class="bc-jar-svg" viewBox="0 0 64 82">
              <use href="#bc-jar-symbol" />
              <g class="bc-in-jar-bug">
                <svg x="12" y="27" width="20" height="20" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
              <g class="bc-in-jar-bug-2">
                <svg x="29" y="37" width="22" height="22" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
              <g class="bc-in-jar-bug-3">
                <svg x="16" y="49" width="21" height="21" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
            </svg>
          </div>
          <div class="bc-card-number-wrap">
            <span class="bc-card-number metric-number" data-target="200" data-suffix="+">0</span>
          </div>
        </div>
        <div class="bc-card-bottom-group">
          <h3 class="bc-card-title">Projects Tested</h3>
          <p class="bc-card-desc">Web, Mobile &amp; AI Enterprise Platforms across India and UAE</p>
        </div>
      </article>

      <!-- CARD 2: 4,000+ Bugs Identified -->
      <article class="bc-card metric-card" data-tilt-card tabindex="0">
        <div class="bc-card-top-group">
          <!-- Specimen Jar with 3 Bugs Wiggling Inside -->
          <div class="bc-card-jar-wrap" aria-hidden="true">
            <svg class="bc-jar-svg" viewBox="0 0 64 82">
              <use href="#bc-jar-symbol" />
              <g class="bc-in-jar-bug">
                <svg x="11" y="26" width="21" height="21" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
              <g class="bc-in-jar-bug-2">
                <svg x="29" y="35" width="22" height="22" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
              <g class="bc-in-jar-bug-3">
                <svg x="15" y="49" width="20" height="20" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
            </svg>
          </div>
          <div class="bc-card-number-wrap">
            <span class="bc-card-number metric-number" data-target="4000" data-suffix="+" data-comma="true" data-format="comma">0</span>
          </div>
        </div>
        <div class="bc-card-bottom-group">
          <h3 class="bc-card-title">Bugs Identified</h3>
          <p class="bc-card-desc">Critical security vulnerabilities, edge-case leaks &amp; API regressions</p>
        </div>
      </article>

      <!-- CARD 3: 99.8% Release Stability (INVERTED BLACK CARD - FOCAL POINT) -->
      <article class="bc-card bc-card-inverted metric-card" data-tilt-card tabindex="0">
        <div class="bc-card-top-group">
          <!-- Empty Specimen Jar with Bold Green Tick (Zero Bugs Escaped) -->
          <div class="bc-card-jar-wrap" aria-hidden="true">
            <svg class="bc-jar-svg" viewBox="0 0 64 82">
              <use href="#bc-jar-symbol" />
              <path d="M21 48 L29 57 L45 34" fill="none" stroke="#22c55e" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="bc-card-number-wrap">
            <span class="bc-card-number metric-number" data-target="99.8" data-suffix="%" data-decimals="1">0</span>
          </div>
        </div>
        <div class="bc-card-bottom-group">
          <h3 class="bc-card-title">Release Stability</h3>
          <p class="bc-card-desc">Flawless production deploy sign-offs backed by rigorous QA auditing</p>
        </div>
      </article>

      <!-- CARD 4: 85% Automation Coverage -->
      <article class="bc-card metric-card" data-tilt-card tabindex="0">
        <div class="bc-card-top-group">
          <!-- Specimen Jar with 3 Automated Bugs Inside -->
          <div class="bc-card-jar-wrap" aria-hidden="true">
            <svg class="bc-jar-svg" viewBox="0 0 64 82">
              <use href="#bc-jar-symbol" />
              <g class="bc-in-jar-bug">
                <svg x="12" y="27" width="20" height="20" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
              <g class="bc-in-jar-bug-2">
                <svg x="28" y="36" width="22" height="22" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
              <g class="bc-in-jar-bug-3">
                <svg x="16" y="49" width="21" height="21" viewBox="0 0 44 44">
                  <use href="#bc-bug-symbol" />
                </svg>
              </g>
            </svg>
          </div>
          <div class="bc-card-number-wrap">
            <span class="bc-card-number metric-number" data-target="85" data-suffix="%">0</span>
          </div>
        </div>
        <div class="bc-card-bottom-group">
          <h3 class="bc-card-title">Automation Coverage</h3>
          <p class="bc-card-desc">Playwright, Cypress &amp; continuous GitHub Actions regression gates</p>
        </div>
      </article>

    </div>
  </div>

  <!-- Container for the 7 Live Crawling Bugs -->
  <div id="bc-bugs-layer" class="bc-bugs-layer" aria-label="Interactive Loose Bugs Field"></div>

</section>

<!-- ==========================================================================
     SECTION 3: "MAGIC HAPPENS BEHIND THE DOORS" (00:04 - 00:06 IN VIDEO)
     4 Interactive Colored Arched Doors + Live Service Details Panel
     ========================================================================== -->
<section id="doors-section" class="rishi-doors-section">
  <div class="rishi-container">
    
    <div class="doors-section-header">
      <div class="doors-mask-heading">
        <h2 class="doors-main-title">Magic happens behind the doors</h2>
      </div>
      <div class="doors-mask-sub">
        <p class="doors-sub-title">Step inside to inspect execution blueprints, live test telemetries, and QA methodologies.</p>
      </div>
    </div>

    <!-- 3D Cinematic Doors Stage -->
    <div class="doors-stage-container" id="doors-stage">
      <div class="doors-grid" id="doors-grid">
        
        <!-- Door 1: Manual Testing -->
        <button type="button" class="door-btn door-manual" data-door-id="0" id="door-btn-0" aria-label="Enter Manual Testing Room">
          <div class="door-frame">
            <div class="door-behind"></div>
            <div class="door-leaf">
              <div class="door-wood-grain"></div>
              <div class="door-inner-arch"></div>
              <div class="door-hinges">
                <span class="gold-hinge"></span>
                <span class="gold-hinge"></span>
                <span class="gold-hinge"></span>
              </div>
              <div class="door-handle orange-handle"></div>
              <div class="door-gold-plate">MANUAL TESTING</div>
            </div>
            <div class="door-floor-shadow"></div>
          </div>
        </button>

        <!-- Door 2: Automation Testing -->
        <button type="button" class="door-btn door-automation" data-door-id="1" id="door-btn-1" aria-label="Enter Automation Testing Room">
          <div class="door-frame door-overflow-hidden">
            <div class="door-behind"></div>
            <div class="door-half door-half-left">
              <div class="circuit-grid"></div>
            </div>
            <div class="door-half door-half-right">
              <div class="circuit-grid"></div>
            </div>
            <div class="door-center-seam-glow"></div>
            <div class="door-gold-plate plate-pinned">AUTOMATION TESTING</div>
            <div class="door-floor-shadow"></div>
          </div>
        </button>

        <!-- Door 3: AI Testing -->
        <button type="button" class="door-btn door-ai" data-door-id="2" id="door-btn-2" aria-label="Enter AI Testing Room">
          <div class="door-frame door-overflow-hidden">
            <div class="door-behind"></div>
            <div class="door-leaf shutter-leaf">
              <div class="shutter-slats"></div>
              <div class="ai-eye-wrapper">
                <div class="ai-eye-ring ring-outer"></div>
                <div class="ai-eye-ring ring-mid"></div>
                <div class="ai-eye-pupil"></div>
              </div>
              <div class="ai-scan-line"></div>
              <div class="door-gold-plate">AI TESTING</div>
            </div>
            <div class="door-floor-shadow"></div>
          </div>
        </button>

        <!-- Door 4: Security & Auditing -->
        <button type="button" class="door-btn door-security" data-door-id="3" id="door-btn-3" aria-label="Enter Security & Auditing Room">
          <div class="door-frame">
            <div class="door-behind"></div>
            <div class="door-leaf vault-leaf">
              <div class="vault-rivet-border"></div>
              <div class="vault-wheel-wrap">
                <div class="vault-wheel">
                  <div class="vault-spoke spoke-1"></div>
                  <div class="vault-spoke spoke-2"></div>
                  <div class="vault-spoke spoke-3"></div>
                  <div class="vault-hub"></div>
                </div>
              </div>
              <div class="door-gold-plate">SECURITY &amp; AUDITING</div>
            </div>
            <div class="door-floor-shadow"></div>
          </div>
        </button>

      </div>

      <!-- Instruction Pill with bobbing arrow -->
      <div class="doors-instruction-wrap">
        <div class="doors-instruction-pill">
          <span class="pill-arrow-bob" aria-hidden="true">&#8593;</span>
          <span class="pill-text">Click a door to step inside</span>
        </div>
      </div>

      <!-- Modern Interactive Service Ticker Ribbon (Elevated Badge UI) -->
      <div class="doors-marquee-wrap" aria-label="Testing Services Ticker">
        <div class="doors-marquee-track">
          <!-- SET 1 -->
          <div class="service-ticker-chip chip-manual" data-door-id="0" role="button" tabindex="0" title="Inspect Manual Testing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                <polyline points="9 12 11 14 15 10"></polyline>
              </svg>
            </span>
            <span class="chip-title">MANUAL TESTING</span>
            <span class="chip-badge-tag">01 • QA</span>
            <span class="chip-status-dot dot-manual"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>

          <div class="service-ticker-chip chip-automation" data-door-id="1" role="button" tabindex="0" title="Inspect Automation Testing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polyline>
              </svg>
            </span>
            <span class="chip-title">AUTOMATION TESTING</span>
            <span class="chip-badge-tag">02 • CI/CD</span>
            <span class="chip-status-dot dot-auto"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>

          <div class="service-ticker-chip chip-ai" data-door-id="2" role="button" tabindex="0" title="Inspect AI Testing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z"></path>
                <circle cx="19" cy="5" r="1.5" fill="currentColor"></circle>
              </svg>
            </span>
            <span class="chip-title">AI TESTING &amp; LLM VERIFICATION</span>
            <span class="chip-badge-tag">03 • GENAI</span>
            <span class="chip-status-dot dot-ai"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>

          <div class="service-ticker-chip chip-security" data-door-id="3" role="button" tabindex="0" title="Inspect Security & Auditing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                <circle cx="12" cy="16" r="1.5"></circle>
              </svg>
            </span>
            <span class="chip-title">SECURITY &amp; AUDITING</span>
            <span class="chip-badge-tag">04 • SEC</span>
            <span class="chip-status-dot dot-sec"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>

          <!-- SET 2 (Identical for seamless infinite marquee loop) -->
          <div class="service-ticker-chip chip-manual" data-door-id="0" role="button" tabindex="0" title="Inspect Manual Testing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                <polyline points="9 12 11 14 15 10"></polyline>
              </svg>
            </span>
            <span class="chip-title">MANUAL TESTING</span>
            <span class="chip-badge-tag">01 • QA</span>
            <span class="chip-status-dot dot-manual"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>

          <div class="service-ticker-chip chip-automation" data-door-id="1" role="button" tabindex="0" title="Inspect Automation Testing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polyline>
              </svg>
            </span>
            <span class="chip-title">AUTOMATION TESTING</span>
            <span class="chip-badge-tag">02 • CI/CD</span>
            <span class="chip-status-dot dot-auto"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>

          <div class="service-ticker-chip chip-ai" data-door-id="2" role="button" tabindex="0" title="Inspect AI Testing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z"></path>
                <circle cx="19" cy="5" r="1.5" fill="currentColor"></circle>
              </svg>
            </span>
            <span class="chip-title">AI TESTING &amp; LLM VERIFICATION</span>
            <span class="chip-badge-tag">03 • GENAI</span>
            <span class="chip-status-dot dot-ai"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>

          <div class="service-ticker-chip chip-security" data-door-id="3" role="button" tabindex="0" title="Inspect Security & Auditing">
            <span class="chip-icon-box">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                <circle cx="12" cy="16" r="1.5"></circle>
              </svg>
            </span>
            <span class="chip-title">SECURITY &amp; AUDITING</span>
            <span class="chip-badge-tag">04 • SEC</span>
            <span class="chip-status-dot dot-sec"></span>
          </div>
          <div class="marquee-separator" aria-hidden="true"><span class="separator-diamond">◆</span></div>
        </div>
      </div>

    </div>
  </div>

  <!-- ========================================================================
       UNIFIED HIGH-PERFORMANCE SERVICE ROOM (SINGLE REUSABLE DOM ELEMENT)
       ======================================================================== -->
  <div class="unified-service-room" id="unified-service-room" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="room-ambient-aurora" id="room-ambient-aurora"></div>
    <div class="room-content-wrapper">
      
      <!-- Room Navigation Top Bar -->
      <div class="room-top-nav">
        <button type="button" class="room-back-btn" id="room-back-btn" aria-label="Back to the doors">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
          </svg>
          <span>BACK TO THE DOORS</span>
        </button>

        <div class="room-badge-indicator">
          <span class="room-pulse-dot" id="room-pulse-dot"></span>
          <span class="room-service-num" id="room-service-num">01 // 04</span>
        </div>
      </div>

      <!-- Room Main Content Grid -->
      <div class="room-grid">
        
        <!-- Left Column: Service Details & Verified Blueprint -->
        <div class="room-details-col">
          <div class="room-category-pill" id="room-category-pill">SERVICE BLUEPRINT</div>
          <h2 class="room-title" id="room-title">Manual Testing</h2>
          <div class="room-tagline" id="room-tagline">FROM FIRST SPECIFICATION TO ZERO-DEFECT SIGN-OFF</div>
          <p class="room-desc" id="room-desc">
            Exhaustive functional and exploratory defect hunting. Ensuring pixel-perfect design fidelity, bulletproof user journeys, and zero critical escapes across multi-browser responsive ecosystems.
          </p>

          <div class="room-blueprint-header">VERIFIED QA BLUEPRINT</div>
          <ul class="room-bullets-list" id="room-bullets-list">
            <!-- 4 check bullets injected dynamically -->
          </ul>

          <div class="room-tags-container" id="room-tags-container">
            <!-- Badges injected dynamically -->
          </div>

          <div class="room-action-ctas">
            <button type="button" class="btn btn-primary room-consult-btn" data-open-consultation>
              <span>Book a Testing Consultation</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
            <button type="button" class="btn btn-outline-pill-dark room-return-btn" id="room-return-btn">
              <span>Return to Doors</span>
            </button>
          </div>
        </div>

        <!-- Right Column: Live Test Run Card (Telemetry with sequential lines) -->
        <div class="room-telemetry-col">
          <div class="telemetry-terminal-card" id="telemetry-card">
            <div class="terminal-header">
              <div class="terminal-dots">
                <span class="tdot red"></span>
                <span class="tdot yellow"></span>
                <span class="tdot green"></span>
              </div>
              <div class="terminal-title" id="terminal-title">LIVE TEST RUN &bull; CONSOLE</div>
              <div class="terminal-badge" id="terminal-badge">STABLE</div>
            </div>
            <div class="terminal-body" id="terminal-lines-container">
              <!-- Sequential lines will appear one by one -->
            </div>
            <div class="terminal-footer">
              <span class="terminal-footer-dot"></span>
              <span class="terminal-footer-text" id="terminal-footer-text">EXECUTION COMPLETE &mdash; 0 FAILURES</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION 3: ASTRAZ TESTED PROJECTS — HORIZONTAL PINNED GALLERY
     Interactive Category Filter + Horizontal Pinned Showcase Tested by Ranjith C V
     ========================================================================== -->
<section id="work-section" class="rishi-work-section">
  <div class="projects-horizontal-pin-wrapper" id="projects-pin-wrapper">
    
    <div class="rishi-container work-header-container">
      <div class="work-header">
        <h2 class="work-title">Featured QA Projects</h2>
      </div>

      <!-- Live Category Filter Chips & Manual Horizontal Controls -->
      <div class="gallery-controls-bar">
        <div class="gallery-category-chips" id="gallery-category-chips">
          <button class="g-filter-chip active" data-category="all">
            <span>All Projects</span> <span class="g-count">14</span>
          </button>
          <button class="g-filter-chip" data-category="mobile">
            <span>Mobile &amp; Welfare</span> <span class="g-count">4</span>
          </button>
          <button class="g-filter-chip" data-category="web">
            <span>Web Apps &amp; SaaS</span> <span class="g-count">3</span>
          </button>
          <button class="g-filter-chip" data-category="ecommerce">
            <span>E-Commerce</span> <span class="g-count">3</span>
          </button>
          <button class="g-filter-chip" data-category="corporate">
            <span>Corporate</span> <span class="g-count">4</span>
          </button>
        </div>

        <!-- Manual Navigation Controls -->
        <div class="gallery-nav-arrows" aria-label="Horizontal scroll controls">
          <button class="gallery-arrow-btn" id="gallery-prev-btn" aria-label="Previous Projects" title="Previous Projects">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="19" y1="12" x2="5" y2="12"></line>
              <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
          </button>
          <button class="gallery-arrow-btn" id="gallery-next-btn" aria-label="Next Projects" title="Next Projects">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Pinned Horizontal Scroll Viewport -->
    <div class="projects-horizontal-viewport" id="projects-horizontal-viewport">
      <div class="projects-horizontal-track" id="projects-horizontal-track">
        
        <!-- 1. LENSFED App -->
        <div class="astraz-project-card card-style-lensfed" data-category="mobile" tabindex="0" role="article" aria-label="LENSFED Members Welfare App">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/lensfed-app.jpg" alt="LENSFED Members Welfare App" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Licensed Engineers &amp; Supervisors Federation</div>
            <h3 class="p-title">LENSFED Members Welfare App</h3>
            <p class="p-desc">Large-scale member welfare mobile application managing federation benefits, automated fund contributions, scheme enrollments, and organizational bulletins across Kerala.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Member authentication &amp; biometric login validation</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Multi-device Android &amp; iOS responsive matrix</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Payment gateway reconciliation &amp; offline data sync</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Mobile QA</span>
                <span class="pchip">Android / iOS</span>
                <span class="pchip">Payment Gates</span>
                <span class="pchip">Offline Cache</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. Asraya KVVES App -->
        <div class="astraz-project-card card-style-asraya" data-category="mobile" tabindex="0" role="article" aria-label="Asraya KVVES Kannur App">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/asraya-kvves.jpg" alt="Asraya KVVES Kannur App" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Kerala Vyapari Vyavasayi Ekopana Samithi</div>
            <h3 class="p-title">Asraya KVVES Kannur App</h3>
            <p class="p-desc">Family welfare benefit mobile system supporting thousands of district merchant families with claim processing, financial disbursement calculations, and instant digital statements.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Financial calculation precision &amp; benefit tier assertions</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Automated PDF statement compilation &amp; download tests</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Push notification gateway stress &amp; delivery verification</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Functional QA</span>
                <span class="pchip">Financial Audit</span>
                <span class="pchip">PDF Engine</span>
                <span class="pchip">Push Delivery</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 3. AAWK App -->
        <div class="astraz-project-card card-style-aawk" data-category="mobile" tabindex="0" role="article" aria-label="AAWK Mobile App & Life Line">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/aawk-mobile.jpg" alt="AAWK Mobile App &amp; Life Line" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Association of Automobile Workshops Kerala</div>
            <h3 class="p-title">AAWK Mobile App &amp; Life Line</h3>
            <p class="p-desc">Network platform uniting statewide automobile workshop owners for mutual assistance, emergency roadside breakdown dispatching, and technical parts updates.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Geolocation breakdown dispatch algorithm testing</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Fast workshop directory lookup with zero latency lag</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Compatibility matrix across 25+ Android OS builds</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Location QA</span>
                <span class="pchip">Directory Index</span>
                <span class="pchip">Stress Test</span>
                <span class="pchip">Cross-OS Matrix</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. Hote Restaurant App -->
        <div class="astraz-project-card card-style-hote" data-category="mobile" tabindex="0" role="article" aria-label="Hote Restaurant Staff App">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/hote-restaurant.jpg" alt="Hote Restaurant Staff App" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Hospitality Operations &amp; Dining</div>
            <h3 class="p-title">Hote Restaurant Staff App</h3>
            <p class="p-desc">High-speed staff and shift coordination app synchronizing table turns, kitchen order tickets (KOT), employee schedules, and live service floor communications.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Real-time WebSocket sync between waitstaff and kitchen</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Offline order queueing with automated retry reconciliation</div>
                <div class="qa-bullet"><span class="qmark">✓</span> POS printer gateway integration &amp; receipt accuracy</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">WebSockets</span>
                <span class="pchip">POS Hardware</span>
                <span class="pchip">Offline Queue</span>
                <span class="pchip">Concurrency</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 5. SL Logistics -->
        <div class="astraz-project-card card-style-sl" data-category="web" tabindex="0" role="article" aria-label="SL Logistics Management System">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/granite-udyog.jpg" alt="Granite Udyog Digital Showcase" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Premium Granite &amp; Marble Solutions</div>
            <h3 class="p-title">Granite Udyog Digital Showcase</h3>
            <p class="p-desc">Architectural stone and marble presentation platform showcasing 3D slab collections, dimensional specifications, finish variants, and global supply logistics.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Playwright automated regression pipeline across all user roles</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Complex freight tariff calculation matrix audit</div>
                <div class="qa-bullet"><span class="qmark">✓</span> REST API schema validation &amp; webhook payload assertions</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Playwright</span>
                <span class="pchip">REST API</span>
                <span class="pchip">RBAC Security</span>
                <span class="pchip">CI/CD Gates</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 6. Lyfvo Platform -->
        <div class="astraz-project-card card-style-lyfvo" data-category="web" tabindex="0" role="article" aria-label="Lyfvo Coaching & Growth Platform">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/lyfvo-platform.jpg" alt="Lyfvo Coaching &amp; Growth Platform" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Online Mentorship &amp; EdTech</div>
            <h3 class="p-title">Lyfvo Coaching &amp; Growth Platform</h3>
            <p class="p-desc">Interactive web application connecting certified personal coaches with global learners for scheduled 1-on-1 video sessions, interactive goal milestones, and subscription billing.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Video room WebRTC handshake &amp; bandwidth throttle testing</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Recurring Stripe subscription renewal logic &amp; grace periods</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Timezone conversion assertions for international booking slots</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">WebRTC QA</span>
                <span class="pchip">Stripe Billing</span>
                <span class="pchip">Timezone Matrix</span>
                <span class="pchip">Cypress E2E</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 7. IBNCC Web Application -->
        <div class="astraz-project-card card-style-ibncc" data-category="web" tabindex="0" role="article" aria-label="IBNCC Catholic Congress Business Network">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/ibncc-network.jpg" alt="IBNCC Catholic Congress Business Network" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">International Business Network</div>
            <h3 class="p-title">IBNCC Catholic Congress Business Network</h3>
            <p class="p-desc">Global institutional directory and business exchange portal connecting entrepreneurs across multiple international chapters with verified company listings and convention registration.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Directory database indexing &amp; multifaceted category search</div>
                <div class="qa-bullet"><span class="qmark">✓</span> OWASP Top 10 web audit (CSRF, XSS, and SQL injection safety)</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Event registration ticketing &amp; automated badge generation</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Security QA</span>
                <span class="pchip">OWASP Web</span>
                <span class="pchip">Directory Search</span>
                <span class="pchip">Event Tickets</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 8. Vajra Gold & Diamonds -->
        <div class="astraz-project-card card-style-vajra" data-category="ecommerce" tabindex="0" role="article" aria-label="Vajra Gold & Diamonds E-Store">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/vajra-jewellery.jpg" alt="Vajra Gold &amp; Diamonds E-Store" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Luxury Fine Jewellery Retail</div>
            <h3 class="p-title">Vajra Gold &amp; Diamonds E-Store</h3>
            <p class="p-desc">High-end digital jewellery storefront featuring live gold rate calculation engines, ring size configurators, 360-degree product zoom, and high-value insured order processing.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Live market gold rate API dynamic pricing formula assertions</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Cart persistence across devices with coupon &amp; making charge rules</div>
                <div class="qa-bullet"><span class="qmark">✓</span> End-to-end checkout encryption &amp; payment tokenization</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Live Price API</span>
                <span class="pchip">Cart Logic</span>
                <span class="pchip">SSL/TLS Security</span>
                <span class="pchip">Checkout Flow</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 9. Cruise Kerala -->
        <div class="astraz-project-card card-style-cruise" data-category="ecommerce" tabindex="0" role="article" aria-label="Cruise Kerala Houseboat Booking">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/cruise-kerala.jpg" alt="Cruise Kerala Houseboat Booking" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Backwater Tourism &amp; Luxury Houseboats</div>
            <h3 class="p-title">Cruise Kerala Houseboat Booking</h3>
            <p class="p-desc">Direct booking platform for backwater cruises and luxury houseboats in Alleppey, featuring real-time date availability, cabin selection, and dynamic peak-season rates.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Calendar date locking to prevent double-booking collisions</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Dynamic pricing logic based on weekend and festive season tiers</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Instant booking voucher generation &amp; WhatsApp confirmation webhook</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Booking Engine</span>
                <span class="pchip">Concurrency Locks</span>
                <span class="pchip">Dynamic Rates</span>
                <span class="pchip">Webhooks</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 10. Kripa Pickles -->
        <div class="astraz-project-card card-style-kripa" data-category="ecommerce" tabindex="0" role="article" aria-label="Kripa Pickles E-Commerce Store">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/kripa-pickles.jpg" alt="Kripa Pickles E-Commerce Store" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Traditional Homemade Food Products</div>
            <h3 class="p-title">Kripa Pickles E-Commerce Store</h3>
            <p class="p-desc">Direct-to-consumer e-commerce shop delivering traditional authentic pickles and homemade culinary delicacies nationwide with automated courier integration.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Multi-tier coupon discount algorithm &amp; shipping fee calculations</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Real-time stock decrement and out-of-stock cart preventions</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Mobile-first checkout performance under slow 3G network throttle</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">D2C E-Store</span>
                <span class="pchip">Inventory Logic</span>
                <span class="pchip">Mobile Checkout</span>
                <span class="pchip">Network Throttle</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 11. Skin Tone Aesthetic Clinic -->
        <div class="astraz-project-card card-style-skintone" data-category="corporate" tabindex="0" role="article" aria-label="Skin Tone Aesthetic Clinic Portal">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/skintone-clinic.jpg" alt="Skin Tone Aesthetic Clinic Portal" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Aesthetic Clinic &amp; Skincare Center</div>
            <h3 class="p-title">Skin Tone Aesthetic Clinic Portal</h3>
            <p class="p-desc">Clean corporate healthcare portal showcasing professional aesthetic dermatological services, practitioner bios, client consultations, and treatment catalogs.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Clinical consultation appointment scheduling flow verification</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Cross-browser font and SVG icon rendering consistency</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Form input sanitization and patient inquiry delivery assurance</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Clinic Booking</span>
                <span class="pchip">Form Triage</span>
                <span class="pchip">UI Precision</span>
                <span class="pchip">Cross-Browser</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 12. UK Granite Co. -->
        <div class="astraz-project-card card-style-granite" data-category="corporate" tabindex="0" role="article" aria-label="UK Granite Co. Architectural Stone">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/uk-granite.jpg" alt="UK Granite Co. Architectural Stone" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Granite Manufacturing &amp; Global Export</div>
            <h3 class="p-title">UK Granite Co. Architectural Stone</h3>
            <p class="p-desc">Global corporate website highlighting industrial quarry stone manufacturing, cut-to-size granite slab specifications, and international export container quote workflows.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> High-resolution slab image gallery lazy loading &amp; CDN cache audit</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Global B2B quotation pipeline validation with file attachments</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Core Web Vitals optimization score testing across desktop &amp; mobile</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Core Web Vitals</span>
                <span class="pchip">CDN Cache QA</span>
                <span class="pchip">B2B RFQ Logic</span>
                <span class="pchip">Performance</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 13. Lazzaro Academy -->
        <div class="astraz-project-card card-style-lazzaro" data-category="corporate" tabindex="0" role="article" aria-label="Lazzaro Academy Training Portal">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/lazzaro-academy.jpg" alt="Lazzaro Academy Training Portal" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Vocational Training &amp; Professional Education</div>
            <h3 class="p-title">Lazzaro Academy Training Portal</h3>
            <p class="p-desc">Educational institute portal managing vocational course admissions, syllabus distribution, student portal authentication, and placement partnership portfolios.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Student admission multi-step application form validation</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Secure syllabus PDF streaming &amp; brochure download tracking</div>
                <div class="qa-bullet"><span class="qmark">✓</span> WCAG 2.1 accessibility and keyboard tab navigation compliance</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Admission Forms</span>
                <span class="pchip">WCAG a11y</span>
                <span class="pchip">Multi-step QA</span>
                <span class="pchip">PDF Security</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 14. MK Tiles & Bathware -->
        <div class="astraz-project-card card-style-mktiles" data-category="corporate" tabindex="0" role="article" aria-label="MK Tiles & Bathware Showcase">
          <div class="card-primary-col">
          <!-- Spiral Notebook 14 Capsule Binder Rings (7x22px, sticking up 14px) -->
          <div class="card-spiral-rings" aria-hidden="true">
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
            <span class="card-ring"></span>
          </div>
          <div class="card-image-wrap">
            <img src="assets/images/projects/mktiles-bathware.jpg" alt="MK Tiles &amp; Bathware Showcase" class="card-project-cover-img" loading="lazy">
            <div class="card-image-overlay"></div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Architectural Ceramic Tiles &amp; Sanitaryware</div>
            <h3 class="p-title">MK Tiles &amp; Bathware Showcase</h3>
            <p class="p-desc">Product catalog and architectural showcase for high-grade ceramic tiles, luxury bath fixtures, and wholesale distributor inquiry workflows.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-scope">
                <div class="qa-scope-heading">VERIFIED QA BLUEPRINT</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Multi-parameter catalog filtering (finish, dimensions, materials)</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Dealer bulk quotation routing &amp; email delivery reliability</div>
                <div class="qa-bullet"><span class="qmark">✓</span> Fluid responsiveness across high-DPI tablets and smartphones</div>
              </div>
              <div class="p-tags-row">
                <span class="pchip">Catalog Filters</span>
                <span class="pchip">RFQ Routing</span>
                <span class="pchip">High-DPI Matrix</span>
                <span class="pchip">Mobile QA</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     SECTION 5: "GOT A PROJECT? LET'S BUILD IT TOGETHER." (00:15 IN VIDEO)
     Editorial Contact Finale & 4-Column Footer
     ========================================================================== -->
<section id="contact-section" class="rishi-contact-section">
  <div class="rishi-container">
    
    <div class="contact-cta-wrapper">

      <h2 class="contact-giant-headline">
        Got a project?<br>
        Let's build it together.
      </h2>

      <p class="contact-subhead">
        I'm taking on new software testing audits, automated test suites, and QA consulting. Tell me what you're building and I'll get back to you within a day.
      </p>

      <div class="contact-action-row">
        <button class="btn btn-white-pill" data-open-enquiry>
          <span>Book Testing</span>
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
        <a href="#work-section" class="btn btn-outline-pill-light">
          <span>See my work</span>
        </a>
      </div>

      <div class="contact-direct-badges">
        <a href="mailto:<?= SITE_EMAIL ?>" class="contact-email-link">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
          </svg>
          <span><?= SITE_EMAIL ?></span>
        </a>
        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="contact-whatsapp-link">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.634.074-1.897-.449-1.615-.67-2.651-2.316-2.733-2.427-.082-.11-1.666-2.22-1.666-4.238 0-2.019 1.05-3.011 1.423-3.419.373-.408.814-.51 1.087-.51.272 0 .544.004.783.015.25.011.587-.095.918.701.341.819 1.163 2.84 1.265 3.048.102.208.17.452.034.723-.136.271-.204.441-.408.679-.204.238-.429.531-.613.714-.204.204-.417.426-.18.834.237.408 1.054 1.737 2.261 2.812 1.552 1.383 2.859 1.812 3.267 2.015.408.204.646.17.884-.102.238-.272 1.02-1.19 1.292-1.599.272-.408.544-.34.918-.204.374.136 2.379 1.122 2.787 1.326.408.204.68.306.782.476.102.17.102.986-.272 1.99z"/>
          </svg>
          <span>WhatsApp: <?= SITE_PHONE ?></span>
        </a>
      </div>
    </div>

    <!-- 4-Column Editorial Footer (From 00:15 in Video) -->
    <div class="rishi-footer-nav-grid">
      <div class="f-col">
        <div class="f-col-title">WORK</div>
        <a href="#doors-section" class="f-link" data-door="0">Manual Testing</a>
        <a href="#doors-section" class="f-link" data-door="1">Automation Testing</a>
        <a href="#doors-section" class="f-link" data-door="2">AI Testing</a>
        <a href="#doors-section" class="f-link" data-door="3">Security &amp; Load Auditing</a>
      </div>

      <div class="f-col">
        <div class="f-col-title">SERVICES</div>
        <a href="#doors-section" class="f-link" data-door="1">Playwright &amp; Cypress</a>
        <a href="#doors-section" class="f-link" data-door="1">Postman REST API</a>
        <a href="#doors-section" class="f-link" data-door="3">JMeter Load Simulations</a>
        <a href="#doors-section" class="f-link" data-door="2">LLM Determinism Audits</a>
      </div>

      <div class="f-col">
        <div class="f-col-title">SOCIAL PLATFORMS</div>
        <a href="https://www.linkedin.com/in/ranjith-cv" target="_blank" rel="noopener noreferrer" class="f-link f-social-link">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
            <rect x="2" y="9" width="4" height="12"></rect>
            <circle cx="4" cy="4" r="2"></circle>
          </svg>
          <span>LinkedIn</span>
        </a>
        <a href="https://github.com/ranjithcv" target="_blank" rel="noopener noreferrer" class="f-link f-social-link">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
          </svg>
          <span>GitHub</span>
        </a>
        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="f-link f-social-link">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.634.074-1.897-.449-1.615-.67-2.651-2.316-2.733-2.427-.082-.11-1.666-2.22-1.666-4.238 0-2.019 1.05-3.011 1.423-3.419.373-.408.814-.51 1.087-.51.272 0 .544.004.783.015.25.011.587-.095.918.701.341.819 1.163 2.84 1.265 3.048.102.208.17.452.034.723-.136.271-.204.441-.408.679-.204.238-.429.531-.613.714-.204.204-.417.426-.18.834.237.408 1.054 1.737 2.261 2.812 1.552 1.383 2.859 1.812 3.267 2.015.408.204.646.17.884-.102.238-.272 1.02-1.19 1.292-1.599.272-.408.544-.34.918-.204.374.136 2.379 1.122 2.787 1.326.408.204.68.306.782.476.102.17.102.986-.272 1.99z"/>
          </svg>
          <span>WhatsApp Chat</span>
        </a>
        <a href="mailto:<?= SITE_EMAIL ?>" class="f-link f-social-link">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
          </svg>
          <span>Email Inquiry</span>
        </a>
      </div>

      <div class="f-col">
        <div class="f-col-title">STATUS</div>
        <div class="f-status-text">Available for work</div>
        <div class="f-status-sub">Remote-first, Worldwide</div>
        <div class="f-status-time">Astraz QA Lead</div>
      </div>
    </div>

    <div class="rishi-footer-bottom-bar">
      <div>&copy; <span id="current-year"><?= date('Y') ?></span> Ranjith C V. Senior Software Tester | Astraz Software Solutions.</div>
      <button class="back-to-top-btn" aria-label="Back to top">
        <span>TOP</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="12" y1="19" x2="12" y2="5"></line>
          <polyline points="5 12 12 5 19 12"></polyline>
        </svg>
      </button>
    </div>

  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
