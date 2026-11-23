<?php
/**
 * RANJITH C V — ABOUT & TESTING PHILOSOPHY
 * Senior Software Tester | Astraz Software Solutions
 */

$customTitle = 'About & Testing Philosophy — Ranjith C V | Senior Software Tester';
$customDesc  = 'Explore the testing philosophy, career trajectory at Astraz Software Solutions, and engineering methodology of Senior Software Tester Ranjith C V.';

require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';
?>

<!-- ABOUT HERO BANNER -->
<section class="section hero-section" style="min-height: 70vh; padding-top: calc(var(--header-height, 80px) + 3rem); padding-bottom: 4rem;">
  <div class="container hero-cinematic-grid">
    <div style="max-width: 680px;">
      <div class="section-tag">
        <span class="pulse-dot"></span>
        <span>ENGINEERING PHILOSOPHY // RANJITH C V</span>
      </div>

      <h1 class="hero-name-huge" style="font-size: clamp(2.5rem, 5.5vw, 4.5rem); margin-bottom: 1.5rem;">
        ARCHITECTING <span class="text-accent">CONFIDENCE.</span>
      </h1>

      <p class="hero-slogan-cinematic" style="font-size: clamp(1.2rem, 2vw, 1.6rem);">
        "Behind every great digital product is a tester who refused to accept 'good enough'."
      </p>

      <p class="hero-desc-narrative" style="font-size: 1.125rem;">
        As a Senior Software Tester at Astraz Software Solutions, my mission goes beyond standard pass/fail assertions. I examine systems holistically — uncovering subtle architectural flaws, performance bottlenecks, and user experience friction before code ever reaches production.
      </p>

      <div style="display: flex; gap: 1rem; margin-top: 2rem; flex-wrap: wrap;">
        <a href="#philosophy" class="btn btn-primary btn-sm">Explore Philosophy</a>
        <a href="contact.php" class="btn btn-secondary btn-sm">Connect With Ranjith</a>
      </div>
    </div>

    <!-- Right Side Portrait in About -->
    <div class="hero-portrait-stage">
      <div class="hero-portrait-card" style="max-width: 520px;">
        <div class="cyber-corner top-left"></div>
        <div class="cyber-corner top-right"></div>
        <div class="cyber-corner bottom-left"></div>
        <div class="cyber-corner bottom-right"></div>
        <img 
          src="assets/images/ranjith-portrait.jpg" 
          alt="Ranjith C V — Senior Software Tester" 
          class="hero-portrait-img"
        >
      </div>
    </div>
  </div>
</section>

<!-- SECTION: DEEP DIVE PHILOSOPHY -->
<section id="philosophy" class="section" style="border-top: 1px solid var(--border-subtle); background: rgba(14, 18, 24, 0.4);">
  <div class="container">
    <div class="about-grid">
      <div>
        <div class="section-tag">
          <span class="pulse-dot"></span>
          <span>CORE PERSPECTIVE</span>
        </div>
        <h2 class="section-title">
          THE MINDSET OF A <br>
          <span class="text-accent">SENIOR TESTER</span>
        </h2>
        <div class="about-paragraphs">
          <p>
            Effective testing is not merely executing scripted steps; it is an investigative science. When examining complex web architectures, microservices, or mobile apps, the true risks reside in unwritten assumptions.
          </p>
          <p>
            At <strong>Astraz Software Solutions</strong>, I have tested over <strong>200+ projects</strong> and identified more than <strong>4,000+ software defects</strong>. Each defect represents an intercepted failure, a preserved customer experience, and protected business value.
          </p>
          <p>
            Because I also engineer websites using PHP, HTML5, CSS3, and JavaScript, I understand how developers construct DOM trees, handle asynchronous promises, and manage state. This technical foundation allows me to isolate bugs down to specific lines of code, network calls, and database transactions.
          </p>
        </div>
      </div>

      <div class="about-inspector">
        <div class="cyber-corner top-left"></div>
        <div class="cyber-corner top-right"></div>
        <div class="cyber-corner bottom-left"></div>
        <div class="cyber-corner bottom-right"></div>

        <div class="inspector-header">
          <div class="inspector-title">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
            <span>THE 4 TESTING PILLARS</span>
          </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1.25rem;">
          <div style="border-left: 2px solid var(--accent-yellow); padding-left: 1rem;">
            <div style="font-family: var(--font-heading); font-weight: 700; color: #FFF; font-size: 1.05rem;">
              1. Empathy-Driven Manual Testing
            </div>
            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-top: 0.25rem;">
              Simulating human fatigue, varied network latencies, unexpected device orientations, and complex user behaviors that automated scripts cannot sense.
            </div>
          </div>

          <div style="border-left: 2px solid var(--accent-yellow); padding-left: 1rem;">
            <div style="font-family: var(--font-heading); font-weight: 700; color: #FFF; font-size: 1.05rem;">
              2. Scalable Automation Frameworks
            </div>
            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-top: 0.25rem;">
              Creating resilient automated regression suites integrated with CI/CD gates that execute rapidly without false positive flakiness.
            </div>
          </div>

          <div style="border-left: 2px solid var(--accent-yellow); padding-left: 1rem;">
            <div style="font-family: var(--font-heading); font-weight: 700; color: #FFF; font-size: 1.05rem;">
              3. Next-Gen AI Quality Protocols
            </div>
            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-top: 0.25rem;">
              Stress-testing LLMs, neural pipelines, safety filters, context retention, and validating output accuracy in dynamic generative software.
            </div>
          </div>

          <div style="border-left: 2px solid var(--accent-yellow); padding-left: 1rem;">
            <div style="font-family: var(--font-heading); font-weight: 700; color: #FFF; font-size: 1.05rem;">
              4. Code & Architecture Awareness
            </div>
            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-top: 0.25rem;">
              Leveraging deep understanding of PHP, server responses, browser rendering engines, and DOM performance to provide developers actionable root causes.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: TOOL ARSENAL -->
<section class="section">
  <div class="container">
    <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem auto;">
      <div class="section-tag">
        <span class="pulse-dot"></span>
        <span>TESTING TOOLKIT</span>
      </div>
      <h2 class="section-title">
        ARSENAL & <span class="text-accent">INSTRUMENTATION</span>
      </h2>
      <p class="section-desc" style="margin: 0 auto;">
        Industry-standard test suites, diagnostic tools, and development utilities deployed daily to maintain elite quality standards.
      </p>
    </div>

    <div class="capabilities-grid">
      <div class="capability-card">
        <div class="cap-category">AUTOMATION & DRIVERS</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">Selenium & Cypress</h3>
        <p class="cap-desc">Cross-browser automated test runner execution, DOM interaction scripts, and parallel test execution.</p>
      </div>

      <div class="capability-card">
        <div class="cap-category">API & CONTRACTS</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">Postman & REST Assured</h3>
        <p class="cap-desc">Validation of JSON payloads, status response headers, schema integrity, and authentication security.</p>
      </div>

      <div class="capability-card">
        <div class="cap-category">TRACKING & TRIAGE</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">JIRA & TestRail</h3>
        <p class="cap-desc">Comprehensive defect lifecycle tracking, test case management, traceability matrices, and QA velocity analytics.</p>
      </div>

      <div class="capability-card">
        <div class="cap-category">DEVELOPMENT & SCRIPTING</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">PHP & Modern JS</h3>
        <p class="cap-desc">Deep engineering capability to author mock endpoints, build custom testing scripts, and analyze application logic.</p>
      </div>

      <div class="capability-card">
        <div class="cap-category">PERFORMANCE & AUDIT</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">Chrome DevTools & Lighthouse</h3>
        <p class="cap-desc">Memory leak diagnostics, network waterfall inspection, Cumulative Layout Shift (CLS), and Time to First Byte (TTFB).</p>
      </div>

      <div class="capability-card">
        <div class="cap-category">MOBILE QA</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">Appium & Emulators</h3>
        <p class="cap-desc">Native Android & iOS application inspection, gesture validation, screen orientation transitions, and battery stress.</p>
      </div>

      <div class="capability-card">
        <div class="cap-category">SECURITY & HEADERS</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">Burp Suite & OWASP ZAP</h3>
        <p class="cap-desc">Basic vulnerability probing, XSS testing, CSRF validation, header security audits, and SQL injection prevention checks.</p>
      </div>

      <div class="capability-card">
        <div class="cap-category">AI WORKFLOWS</div>
        <h3 class="cap-title" style="margin-top: 0.5rem;">LLM Evaluation Tools</h3>
        <p class="cap-desc">Testing prompt robustness, model output determinism, hallucination guardrail boundary stress, and latency under token load.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: CAREER NARRATIVE -->
<section class="section" style="border-top: 1px solid var(--border-subtle); background: rgba(7, 7, 9, 0.9);">
  <div class="container">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;">
      <div class="section-tag">
        <span class="pulse-dot"></span>
        <span>ASTRAZ SOFTWARE SOLUTIONS</span>
      </div>
      <h2 class="section-title">
        DRIVING EXCELLENCE <br>
        <span class="text-accent">SINCE JUNE 10, 2025</span>
      </h2>
      <p class="section-desc" style="margin: 0 auto 2.5rem auto;">
        Joining Astraz Software Solutions marked a milestone in leading high-impact software quality initiatives. Working closely with cross-functional development teams, I have helped establish standardized QA benchmarks that empower rapid releases without compromising user trust.
      </p>

      <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
        <a href="contact.php" class="btn btn-primary">
          <span>DISCUSS A QA ENGAGEMENT</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
        <a href="index.php" class="btn btn-secondary">
          <span>BACK TO HOMEPAGE</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
