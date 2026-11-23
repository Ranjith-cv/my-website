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
     SECTION 1: HERO (00:00 - 00:03 IN VIDEO)
     Left: Freelancer badge + Hi, I'm Ranjith + 3D Spiral Notebook with Flipping Roles + CTAs
     Right: Portrait with "My ability card" badge + Lamp pull cord
     Bottom: Available for work status bar
     ========================================================================== -->
<section id="hero" class="rishi-hero-section">
  <div class="rishi-container">
    <div class="rishi-hero-grid">
      
      <!-- Left Column: Introduction & 3D Spiral Notebook -->
      <div class="rishi-hero-left">
        <div class="rishi-status-pill">
          <span class="status-dot-pulse"></span>
          <span>Senior Software Tester // Astraz</span>
        </div>

        <h1 class="rishi-hero-greeting">
          Hi, I'm Ranjith.
        </h1>

        <div class="rishi-hero-subhead">
          <span class="i-am-a">I am a</span>
          
          <!-- 3D SPIRAL NOTEBOOK CARD (EXACT VIDEO COMPONENT) -->
          <div class="spiral-notebook-card" id="spiral-notebook">
            <!-- Wire Binding Rings on Top (16 Metallic Rings) -->
            <div class="spiral-rings-track">
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
              <span class="spiral-ring"></span>
            </div>

            <!-- Flipping Text Container (5 Exact Titles from Video / Prompt) -->
            <div class="spiral-content">
              <span class="spiral-role-text active" data-index="0">Software Tester</span>
              <span class="spiral-role-text" data-index="1">Quality Assurance Professional</span>
              <span class="spiral-role-text" data-index="2">Manual Testing Specialist</span>
              <span class="spiral-role-text" data-index="3">API Testing</span>
              <span class="spiral-role-text" data-index="4">Performance Testing</span>
            </div>

            <!-- Page / Role Counter (01 / 05) -->
            <span class="spiral-corner-index" id="spiral-counter">01 / 05</span>
          </div>
        </div>

        <p class="rishi-hero-desc">
          Astraz Software Solutions Senior Software Tester. Delivering bulletproof reliability across Manual, Automation, and AI workflows. 200+ projects tested with 4,000+ bugs identified.
        </p>

        <div class="rishi-hero-cta-row">
          <button class="btn btn-dark-pill" data-open-enquiry>
            <span>START A PROJECT</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
          <a href="#doors-section" class="btn btn-outline-pill-dark">
            <span>VIEW MY WORK</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Ranjith's Portrait with 3D Depth & Lighting (100% Preserved Original Photograph) -->
      <div class="rishi-hero-right">
        <div class="hero-ambient-glow" aria-hidden="true"></div>
        <div class="rishi-portrait-wrapper" id="hero-portrait-wrap">
          <div class="portrait-lighting-rim" aria-hidden="true"></div>
          <img 
            src="assets/images/ranjith-portrait-theme.png" 
            alt="Ranjith C V — Senior Software Tester" 
            class="rishi-portrait-img"
            loading="eager"
            id="hero-portrait-img"
          >
          
          <!-- Floating "My ability card" badge (exact from video) -->
          <div class="ability-card-pill" data-open-enquiry title="Click to view QA credentials">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
            </svg>
            <span>My ability card</span>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Hero Status Bar (Exact Video Feature 00:03) -->
  <div class="rishi-hero-bottom-bar">
    <div class="rishi-container rishi-bottom-bar-inner">
      <div class="bar-item">
        <span class="bar-dot green-pulse"></span>
        <span>AVAILABLE FOR WORK</span>
      </div>
      <div class="bar-item">
        <span class="bar-dot"></span>
        <span>REMOTE-FIRST, WORLDWIDE</span>
      </div>
      <a href="#metrics-section" class="bar-item bar-scroll-link">
        <span>SCROLL TO EXPLORE</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="7" y1="7" x2="17" y2="17"></line>
          <polyline points="17 7 17 17 7 17"></polyline>
        </svg>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION 2: PROVEN QA METRICS & STATISTICS (SCROLL-TRIGGERED COUNTERS)
     "200+ Projects Tested" & "4,000+ Bugs Identified"
     ========================================================================== -->
<section id="metrics-section" class="rishi-metrics-section">
  <div class="rishi-container">
    <div class="metrics-header">
      <div class="section-badge">PROVEN TRACK RECORD // ASTRAZ SOFTWARE SOLUTIONS</div>
      <h2 class="metrics-title">Quality measured in bulletproof numbers.</h2>
      <p class="metrics-subtitle">
        Every metric reflects intercepted defects, preserved revenue, and flawless production sign-offs.
      </p>
    </div>

    <div class="metrics-grid">
      
      <!-- Metric 1: 200+ Projects Tested -->
      <div class="metric-card" data-stat-card>
        <div class="metric-top-row">
          <div class="metric-value-wrap">
            <span class="metric-number" data-target="200" data-suffix="+">0</span>
          </div>
        </div>
        <div class="metric-title">Projects Tested</div>
        <p class="metric-desc">Web, Mobile &amp; AI Enterprise Platforms across India and UAE</p>
      </div>

      <!-- Metric 2: 4,000+ Bugs Identified -->
      <div class="metric-card" data-stat-card>
        <div class="metric-top-row">
          <div class="metric-value-wrap">
            <span class="metric-number" data-target="4000" data-suffix="+" data-format="comma">0</span>
          </div>
        </div>
        <div class="metric-title">Bugs Identified</div>
        <p class="metric-desc">Critical security vulnerabilities, edge-case leaks &amp; API regressions</p>
      </div>

      <!-- Metric 3: 99.8% Release Stability -->
      <div class="metric-card" data-stat-card>
        <div class="metric-top-row">
          <div class="metric-value-wrap">
            <span class="metric-number" data-target="99.8" data-suffix="%" data-decimals="1">0</span>
          </div>
        </div>
        <div class="metric-title">Release Stability</div>
        <p class="metric-desc">Flawless production deploy sign-offs backed by rigorous QA auditing</p>
      </div>

      <!-- Metric 4: 85% Automation Coverage -->
      <div class="metric-card" data-stat-card>
        <div class="metric-top-row">
          <div class="metric-value-wrap">
            <span class="metric-number" data-target="85" data-suffix="%">0</span>
          </div>
        </div>
        <div class="metric-title">Automation Coverage</div>
        <p class="metric-desc">Playwright, Cypress &amp; continuous GitHub Actions regression gates</p>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION 3: "MAGIC HAPPENS BEHIND THE DOORS" (00:04 - 00:06 IN VIDEO)
     4 Interactive Colored Arched Doors + Live Service Details Panel
     ========================================================================== -->
<section id="doors-section" class="rishi-doors-section">
  <div class="rishi-container">
    
    <div class="doors-section-header">
      <h2 class="doors-main-title">Magic happens behind the doors</h2>
      <p class="doors-sub-title">Select a door to reveal my specialized software testing practices and execution blueprints.</p>
    </div>

    <!-- 3D Cinematic Stage Wrapper -->
    <div class="doors-cinema-stage" id="doors-stage">
      
      <!-- Camera Rig that zooms toward the selected door -->
      <div class="doors-camera-rig" id="doors-camera-rig">
        <div class="doors-row" id="doors-row">
          
          <!-- Door 1: Manual Testing (Blue Door) -->
          <div class="door-frame door-blue" data-door-id="0" id="door-0" tabindex="0" role="button" aria-label="Enter Manual Testing Room">
            <div class="door-leaf">
              <div class="door-plate">MANUAL TESTING</div>
              <div class="door-handle"></div>
              <div class="door-panel-grooves"></div>
            </div>
            <div class="door-portal-glow"></div>
            <div class="door-light-beam"></div>
          </div>

          <!-- Door 2: Automation Testing (Dark Purple Door) -->
          <div class="door-frame door-obsidian door-purple" data-door-id="1" id="door-1" tabindex="0" role="button" aria-label="Enter Automation Testing Room">
            <div class="door-leaf">
              <div class="door-plate">AUTOMATION TESTING</div>
              <div class="door-handle"></div>
              <div class="door-panel-grooves"></div>
            </div>
            <div class="door-portal-glow"></div>
            <div class="door-light-beam"></div>
          </div>

          <!-- Door 3: AI Testing (Sage Green Door) -->
          <div class="door-frame door-green" data-door-id="2" id="door-2" tabindex="0" role="button" aria-label="Enter AI Testing Room">
            <div class="door-leaf">
              <div class="door-plate">AI TESTING</div>
              <div class="door-handle"></div>
              <div class="door-panel-grooves"></div>
            </div>
            <div class="door-portal-glow"></div>
            <div class="door-light-beam"></div>
          </div>

          <!-- Door 4: Security & Audit (Amber / Brown Door) -->
          <div class="door-frame door-amber door-brown" data-door-id="3" id="door-3" tabindex="0" role="button" aria-label="Enter Security & Auditing Room">
            <div class="door-leaf">
              <div class="door-plate">SECURITY &amp; AUDITING</div>
              <div class="door-handle"></div>
              <div class="door-panel-grooves"></div>
            </div>
            <div class="door-portal-glow"></div>
            <div class="door-light-beam"></div>
          </div>

        </div>
      </div>
      
      <!-- Subtle instruction hint under doors -->
      <div class="doors-hint" id="doors-hint">
        <span class="hint-pulse"></span>
        <span>Click any door to step inside the testing environment</span>
      </div>
    </div>
  </div>

  <!-- ========================================================================
       CINEMATIC TESTING ROOMS (FULL-SCREEN IMMERSIVE ENVIRONMENTS)
       ======================================================================== -->
  <div class="testing-room-viewport" id="testing-room-viewport" aria-hidden="true">
    
    <!-- ROOM 1: MANUAL TESTING (BLUE THEME) -->
    <div class="testing-room room-theme-blue" id="room-0" data-room-id="0">
      <div class="room-ambient-aurora"></div>
      <div class="room-inner-container">
        
        <!-- Room Top Bar: Back to Doors Button & Room Badge -->
        <div class="room-top-bar">
          <button class="room-back-btn" data-back-to-doors aria-label="Back to the Doors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="19" y1="12" x2="5" y2="12"></line>
              <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            <span>BACK TO THE DOORS</span>
          </button>
          <div class="room-badge">
            <span class="room-badge-dot"></span>
            <span>DOOR 01 // MANUAL TESTING ENVIRONMENT</span>
          </div>
        </div>

        <!-- Room Header -->
        <div class="room-header">
          <h2 class="room-title">Manual Testing</h2>
          <div class="room-tagline">FROM FIRST SPECIFICATION TO ZERO-DEFECT SIGN-OFF</div>
          <p class="room-desc">
            Exhaustive functional and exploratory defect hunting. Ensuring pixel-perfect design fidelity, bulletproof user journeys, and zero critical escapes across multi-browser responsive ecosystems.
          </p>
        </div>

        <!-- Room Capabilities Grid (8 Cards) -->
        <div class="room-capabilities-grid">
          
          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            </div>
            <h3 class="cap-title">Functional Testing</h3>
            <p class="cap-desc">Complete end-to-end user journey verification, business logic validation, boundary value testing, and state transition auditing.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
            </div>
            <h3 class="cap-title">UI/UX Testing</h3>
            <p class="cap-desc">Design fidelity inspection, typography flow, layout alignment, contrast compliance, and micro-interaction verification against Figma specs.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
            </div>
            <h3 class="cap-title">Regression Testing</h3>
            <p class="cap-desc">Exhaustive pre-release regression passes ensuring new feature rollouts, bug fixes, or framework patches never compromise existing workflows.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
            </div>
            <h3 class="cap-title">Cross-Browser Testing</h3>
            <p class="cap-desc">Full behavioral and visual validation across Chrome, Firefox, Safari, Microsoft Edge, and WebKit rendering engines.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
            </div>
            <h3 class="cap-title">Responsive Testing</h3>
            <p class="cap-desc">Device matrix testing spanning 20+ viewport dimensions across modern Android builds, iOS handsets, tablets, and desktop displays.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
            <h3 class="cap-title">Exploratory Testing</h3>
            <p class="cap-desc">Creative, non-linear defect hunting to uncover elusive edge-case anomalies, memory leaks, and asynchronous state desynchronizations.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
            </div>
            <h3 class="cap-title">Test Case Design</h3>
            <p class="cap-desc">Structured, reusable test suites, equivalence partitioning, boundary value assertions, and requirement traceability matrices.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <h3 class="cap-title">Bug Reporting and Documentation</h3>
            <p class="cap-desc">Actionable Jira bug tickets with reproducible step-by-step traces, console outputs, network payloads, and video evidence.</p>
          </div>

        </div>

        <!-- Room Actions -->
        <div class="room-footer-actions">
          <button class="btn btn-dark-pill" data-open-enquiry>
            <span>Book Manual Testing Audit</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <button class="btn btn-outline-pill-dark" data-back-to-doors>
            <span>← Back to the Doors</span>
          </button>
        </div>

      </div>
    </div>

    <!-- ROOM 2: AUTOMATION TESTING (DARK PURPLE THEME) -->
    <div class="testing-room room-theme-purple" id="room-1" data-room-id="1">
      <div class="room-ambient-aurora"></div>
      <div class="room-inner-container">
        
        <div class="room-top-bar">
          <button class="room-back-btn" data-back-to-doors aria-label="Back to the Doors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="19" y1="12" x2="5" y2="12"></line>
              <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            <span>BACK TO THE DOORS</span>
          </button>
          <div class="room-badge">
            <span class="room-badge-dot"></span>
            <span>DOOR 02 // AUTOMATION TESTING ENVIRONMENT</span>
          </div>
        </div>

        <div class="room-header">
          <h2 class="room-title">Automation Testing</h2>
          <div class="room-tagline">END-TO-END PIPELINES &amp; CONTINUOUS REGRESSION GATES</div>
          <p class="room-desc">
            Scalable, maintainable test automation frameworks delivering 85% continuous regression coverage. Slashing QA cycles from days to minutes with zero flaky failures.
          </p>
        </div>

        <div class="room-capabilities-grid">
          
          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
            </div>
            <h3 class="cap-title">Selenium Automation</h3>
            <p class="cap-desc">Robust cross-browser WebDriver suites with modular Page Object Models, explicit synchronization, and cross-platform grid execution.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
            </div>
            <h3 class="cap-title">Java Automation</h3>
            <p class="cap-desc">Enterprise-grade automation built on Java, TestNG, JUnit, and Maven with data-driven providers and parallel execution threads.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            </div>
            <h3 class="cap-title">Test Automation Frameworks</h3>
            <p class="cap-desc">High-speed Playwright and Cypress architectures featuring resilient auto-waiting, network interceptors, and headless execution.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path></svg>
            </div>
            <h3 class="cap-title">Regression Automation</h3>
            <p class="cap-desc">Automated regression test packs integrated into GitHub Actions CI/CD to prevent regressions on every pull request and merge.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
            </div>
            <h3 class="cap-title">Automated Test Execution</h3>
            <p class="cap-desc">High-concurrency headless test runs with isolated browser contexts, dynamic test retries, and comprehensive trace logs.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
            </div>
            <h3 class="cap-title">Cross-Browser Automation</h3>
            <p class="cap-desc">Simultaneous cross-platform test executions across Chromium, Firefox, and WebKit ensuring identical behavior everywhere.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <h3 class="cap-title">Test Reporting</h3>
            <p class="cap-desc">Actionable Allure and HTML test reports with execution timelines, video artifacts, DOM snapshots, and error stack analyses.</p>
          </div>

        </div>

        <div class="room-footer-actions">
          <button class="btn btn-dark-pill" data-open-enquiry>
            <span>Book Automation Architecture Session</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <button class="btn btn-outline-pill-dark" data-back-to-doors>
            <span>← Back to the Doors</span>
          </button>
        </div>

      </div>
    </div>

    <!-- ROOM 3: AI TESTING (GREEN THEME) -->
    <div class="testing-room room-theme-green" id="room-2" data-room-id="2">
      <div class="room-ambient-aurora"></div>
      <div class="room-inner-container">
        
        <div class="room-top-bar">
          <button class="room-back-btn" data-back-to-doors aria-label="Back to the Doors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="19" y1="12" x2="5" y2="12"></line>
              <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            <span>BACK TO THE DOORS</span>
          </button>
          <div class="room-badge">
            <span class="room-badge-dot"></span>
            <span>DOOR 03 // AI TESTING ENVIRONMENT</span>
          </div>
        </div>

        <div class="room-header">
          <h2 class="room-title">AI Testing &amp; LLM Verification</h2>
          <div class="room-tagline">LLM DETERMINISM, ADVERSARIAL ATTACKS &amp; GUARDRAILS</div>
          <p class="room-desc">
            Next-generation QA auditing for artificial intelligence, LLM pipelines, and automated intelligence. Enforcing factual grounding, guardrail safety, and non-deterministic response tolerance.
          </p>
        </div>

        <div class="room-capabilities-grid">
          
          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            </div>
            <h3 class="cap-title">AI-Assisted Testing</h3>
            <p class="cap-desc">Leveraging intelligent LLM evaluation harnesses to autonomously generate edge-case inputs, stress parameters, and assertion heuristics.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
            </div>
            <h3 class="cap-title">Test Case Generation</h3>
            <p class="cap-desc">Synthesizing comprehensive test matrices from functional requirements, covering happy paths, negative boundaries, and adversarial vectors.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
            </div>
            <h3 class="cap-title">Intelligent Test Analysis</h3>
            <p class="cap-desc">Defect pattern detection, flaky test classification, automated failure triage, and predictive risk scoring on core application areas.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
            </div>
            <h3 class="cap-title">AI-Powered Test Workflows</h3>
            <p class="cap-desc">Adaptive test suites that automatically heal broken DOM locators, analyze multimodal image outputs, and verify generative responses.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
            </div>
            <h3 class="cap-title">Test Data Assistance</h3>
            <p class="cap-desc">Automated generation of production-realistic mock databases, internationalized string payloads, and privacy-compliant synthetic datasets.</p>
          </div>

        </div>

        <div class="room-footer-actions">
          <button class="btn btn-dark-pill" data-open-enquiry>
            <span>Book AI Quality Audit</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <button class="btn btn-outline-pill-dark" data-back-to-doors>
            <span>← Back to the Doors</span>
          </button>
        </div>

      </div>
    </div>

    <!-- ROOM 4: SECURITY & AUDITING (BROWN/AMBER THEME) -->
    <div class="testing-room room-theme-brown" id="room-3" data-room-id="3">
      <div class="room-ambient-aurora"></div>
      <div class="room-inner-container">
        
        <div class="room-top-bar">
          <button class="room-back-btn" data-back-to-doors aria-label="Back to the Doors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="19" y1="12" x2="5" y2="12"></line>
              <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            <span>BACK TO THE DOORS</span>
          </button>
          <div class="room-badge">
            <span class="room-badge-dot"></span>
            <span>DOOR 04 // SECURITY &amp; AUDITING ENVIRONMENT</span>
          </div>
        </div>

        <div class="room-header">
          <h2 class="room-title">Security &amp; Vulnerability Auditing</h2>
          <div class="room-tagline">ZERO-TRUST ACCESS, OWASP TOP 10 DEFENSE &amp; LOAD RESILIENCE</div>
          <p class="room-desc">
            Rigorous penetration audits, role-based authorization verification, and data encryption testing protecting production infrastructure against critical security exploits.
          </p>
        </div>

        <div class="room-capabilities-grid">
          
          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            </div>
            <h3 class="cap-title">Authentication Testing</h3>
            <p class="cap-desc">Multi-factor authentication (MFA) validation, brute-force mitigation, password policy enforcement, and secure OAuth2 token exchange.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <h3 class="cap-title">Authorization Testing</h3>
            <p class="cap-desc">Role-Based Access Control (RBAC) verification, IDOR (Insecure Direct Object Reference) prevention, and vertical/horizontal privilege escalation checks.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <h3 class="cap-title">Session Management</h3>
            <p class="cap-desc">Cookie security flags (HttpOnly, Secure, SameSite), session fixation tests, idle timeouts, and token invalidation on logout.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line></svg>
            </div>
            <h3 class="cap-title">Input Validation</h3>
            <p class="cap-desc">Sanitization defenses against SQL Injection (SQLi), Cross-Site Scripting (XSS), command execution, and malicious boundary payloads.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
            </div>
            <h3 class="cap-title">API Security Testing</h3>
            <p class="cap-desc">JWT signature tampering validation, REST endpoint rate-limiting, CORS policy validation, and unauthorized payload leakage audits.</p>
          </div>

          <div class="capability-card">
            <div class="cap-icon-wrap">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <h3 class="cap-title">Vulnerability Assessment</h3>
            <p class="cap-desc">Structured OWASP Top 10 auditing, dependency CVE auditing, network transit TLS enforcement, and executive security sign-off reports.</p>
          </div>

        </div>

        <div class="room-footer-actions">
          <button class="btn btn-dark-pill" data-open-enquiry>
            <span>Book Security &amp; Vulnerability Audit</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <button class="btn btn-outline-pill-dark" data-back-to-doors>
            <span>← Back to the Doors</span>
          </button>
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
        <h2 class="work-title">Software tested to bulletproof reliability.</h2>
        <p class="work-subtitle">
          Explore enterprise platforms, welfare mobile apps, and e-commerce ecosystems engineered by 
          <a href="https://astrasoftwaresolutions.com/projects" target="_blank" rel="noopener noreferrer" class="astraz-link-highlight">Astraz Software Solutions</a> 
          and rigorously verified by Ranjith C V.
        </p>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <rect x="5" y="2" width="14" height="20" rx="3" ry="3"></rect>
                  <circle cx="12" cy="11" r="3.5"></circle>
                  <path d="M9 18h6"></path>
                  <line x1="12" y1="5" x2="12.01" y2="5" stroke-width="2.5"></line>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Mobile // Welfare</span>
              <span class="card-number-tag">01 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">QA SIGN-OFF: 100%</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                  <line x1="3" y1="9" x2="21" y2="9"></line>
                  <line x1="9" y1="21" x2="9" y2="9"></line>
                  <circle cx="15" cy="15" r="2"></circle>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Mobile // Family Welfare</span>
              <span class="card-number-tag">02 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">ZERO DEFECT ESCAPES</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Mobile // Workshop Network</span>
              <span class="card-number-tag">03 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">VERIFIED RELEASE</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                  <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                  <line x1="6" y1="1" x2="6" y2="4"></line>
                  <line x1="10" y1="1" x2="10" y2="4"></line>
                  <line x1="14" y1="1" x2="14" y2="4"></line>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Mobile // Hospitality</span>
              <span class="card-number-tag">04 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">CONCURRENCY PASSED</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <rect x="1" y="3" width="15" height="13"></rect>
                  <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                  <circle cx="5.5" cy="18.5" r="2.5"></circle>
                  <circle cx="18.5" cy="18.5" r="2.5"></circle>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Web // Enterprise SaaS</span>
              <span class="card-number-tag">05 // 14</span>
            </div>
          </div>
          <div class="card-primary-body">
            <div class="card-client-meta">Freight &amp; Supply Chain Logistics</div>
            <h3 class="p-title">SL Logistics Management System</h3>
            <p class="p-desc">End-to-end cloud logistics platform managing multimodal shipment consignments, fleet dispatches, automated tariff billing, and multi-hub warehouse inventories.</p>
            <div class="card-reveal-prompt">
              <span>View QA Scope &amp; Tech Stack</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </div>
          </div>
          <div class="card-expandable-drawer">
            <div class="drawer-inner-content">
              <div class="p-qa-status-pill">PLAYWRIGHT AUTOMATED</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <polygon points="23 7 16 12 23 17 23 7"></polygon>
                  <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Web // EdTech &amp; Coaching</span>
              <span class="card-number-tag">06 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">ZERO ESCAPES</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" y1="12" x2="22" y2="12"></line>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Web // Global Directory</span>
              <span class="card-number-tag">07 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">OWASP AUDITED</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <polygon points="6 3 18 3 22 9 12 22 2 9"></polygon>
                  <line x1="2" y1="9" x2="22" y2="9"></line>
                  <line x1="12" y1="22" x2="7" y2="9"></line>
                  <line x1="12" y1="22" x2="17" y2="9"></line>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">E-Commerce // Luxury</span>
              <span class="card-number-tag">08 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">ZERO CALCULATION ERROR</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <path d="M2 20a2.4 2.4 0 0 0 2 1 2.4 2.4 0 0 0 2-1 2.4 2.4 0 0 1 2-1 2.4 2.4 0 0 1 2 1 2.4 2.4 0 0 0 2 1 2.4 2.4 0 0 0 2-1 2.4 2.4 0 0 1 2-1 2.4 2.4 0 0 1 2 1 2.4 2.4 0 0 0 2 1 2.4 2.4 0 0 0 2-1"></path>
                  <path d="M4 18L3 12h18l-1 6"></path>
                  <path d="M12 4v8"></path>
                  <path d="M8 8l4-4 4 4"></path>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">E-Commerce // Tourism</span>
              <span class="card-number-tag">09 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">DATE CONCURRENCY PASSED</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <path d="M6 2h12v4H6z"></path>
                  <path d="M5 6h14a1 1 0 0 1 1 1v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a1 1 0 0 1 1-1z"></path>
                  <circle cx="12" cy="14" r="3"></circle>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">E-Commerce // FMCG D2C</span>
              <span class="card-number-tag">10 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">100% REGRESSION PASS</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  <circle cx="12" cy="11" r="3"></circle>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Corporate // Health &amp; Beauty</span>
              <span class="card-number-tag">11 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">UI/UX AUDITED</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <rect x="2" y="3" width="20" height="14" rx="2"></rect>
                  <line x1="8" y1="21" x2="16" y2="21"></line>
                  <line x1="12" y1="17" x2="12" y2="21"></line>
                  <polyline points="7 9 10 12 17 6"></polyline>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Corporate // Manufacturing</span>
              <span class="card-number-tag">12 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">PERFORMANCE AUDITED</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                  <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"></path>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Corporate // Education</span>
              <span class="card-number-tag">13 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">ACCESSIBILITY AUDITED</div>
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
          <div class="card-image-wrap">
            <div class="card-visual-art">
              <div class="visual-ambient-glow"></div>
              <div class="visual-device-mockup">
                <svg width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                  <rect x="3" y="3" width="7" height="7"></rect>
                  <rect x="14" y="3" width="7" height="7"></rect>
                  <rect x="14" y="14" width="7" height="7"></rect>
                  <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
              </div>
            </div>
            <div class="card-banner-badges">
              <span class="card-category-badge">Corporate // Building Materials</span>
              <span class="card-number-tag">14 // 14</span>
            </div>
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
              <div class="p-qa-status-pill">QA VERIFIED</div>
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

    <!-- Pinned Gallery Bottom Navigation & Consultation Action -->
    <div class="rishi-container">
      <div class="work-footer-actions">
        <a href="#doors-section" class="btn btn-outline-pill-dark">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
          </svg>
          <span>Back to the doors</span>
        </a>
        <button class="btn btn-dark-pill" data-open-enquiry>
          <span>Book a Testing Consultation</span>
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
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
      <div class="contact-status-pill">
        <span class="status-dot-pulse"></span>
        <span>AVAILABLE FOR NEW WORK</span>
      </div>

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
