<?php
/**
 * RANJITH C V — DEDICATED CONTACT & CONSULTATION
 * Senior Software Tester | Astraz Software Solutions
 */

$customTitle = 'Contact & QA Consultation — Ranjith C V | Senior Software Tester';
$customDesc  = 'Connect with Ranjith C V, Senior Software Tester at Astraz Software Solutions, for software testing inquiries, automated testing consulting, or high-impact opportunities.';

require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';
?>

<!-- CONTACT HERO -->
<section class="section hero-section" style="min-height: 50vh; padding-top: calc(var(--header-height, 80px) + 3rem); padding-bottom: 2rem;">
  <div class="container">
    <div style="max-width: 820px;">
      <div class="section-tag">
        <span class="pulse-dot"></span>
        <span>DIRECT TRANSMISSION GATEWAY</span>
      </div>

      <h1 class="hero-name-huge" style="font-size: clamp(2.5rem, 5.5vw, 4.5rem); margin-bottom: 1.5rem;">
        LET'S CONNECT <span class="text-accent">&amp; COLLABORATE.</span>
      </h1>

      <p class="hero-slogan-cinematic" style="font-size: clamp(1.2rem, 2vw, 1.6rem);">
        Ready to take software quality, stability, and test coverage to the highest industry benchmark.
      </p>

      <p class="hero-desc-narrative">
        Whether you are planning a high-stakes software release, seeking senior automated testing expertise, or looking for a dedicated quality assurance engineer, let's start a conversation.
      </p>
    </div>
  </div>
</section>

<!-- MAIN CONTACT FORM & DETAILS SECTION -->
<section class="section" style="padding-top: 1rem;">
  <div class="container">
    <div class="contact-grid">
      <!-- Left Column: Details -->
      <div class="contact-info-col">
        <div>
          <div style="font-family: var(--font-heading); font-size: 1.85rem; font-weight: 700; color: #FFF; margin-bottom: 1rem;">
            Direct Channel Details
          </div>

          <p style="color: var(--text-secondary); line-height: 1.7; margin-bottom: 2rem;">
            Feel free to reach out directly via email or submit your project details using the secure transmission form. I review and respond to inquiries promptly.
          </p>

          <div class="contact-meta-list">
            <div class="contact-meta-item">
              <div class="contact-meta-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
              </div>
              <div>
                <div class="contact-meta-label">Primary Inquiries</div>
                <div class="contact-meta-val">
                  <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                </div>
              </div>
            </div>

            <div class="contact-meta-item">
              <div class="contact-meta-icon" style="color: #25D366; border-color: rgba(37, 211, 102, 0.4);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.888 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
              </div>
              <div>
                <div class="contact-meta-label">Direct WhatsApp &amp; Mobile</div>
                <div class="contact-meta-val">
                  <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" style="color: #25D366;"><?= SITE_PHONE ?></a>
                </div>
                <div style="font-size: 0.8125rem; color: var(--text-secondary); margin-top: 0.2rem;">
                  Instant Consultation &amp; Quick Messages
                </div>
              </div>
            </div>

            <div class="contact-meta-item">
              <div class="contact-meta-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                  <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
              </div>
              <div>
                <div class="contact-meta-label">Current Role</div>
                <div class="contact-meta-val">Senior Software Tester</div>
                <div style="font-size: 0.8125rem; color: var(--accent-yellow); margin-top: 0.2rem;">
                  Astraz Software Solutions (Since June 10, 2025)
                </div>
              </div>
            </div>

            <div class="contact-meta-item">
              <div class="contact-meta-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" y1="12" x2="22" y2="12"></line>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
              </div>
              <div>
                <div class="contact-meta-label">Location & Availability</div>
                <div class="contact-meta-val"><?= SITE_LOCATION ?></div>
                <div style="font-size: 0.8125rem; color: var(--text-secondary); margin-top: 0.2rem;">
                  Available for Remote & Hybrid Opportunities
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="contact-socials-box">
          <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase; margin-bottom: 0.85rem;">
            Professional Profiles
          </div>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/ranjith-cv" target="_blank" rel="noopener noreferrer" class="social-link" title="LinkedIn Profile" aria-label="LinkedIn">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                <rect x="2" y="9" width="4" height="12"></rect>
                <circle cx="4" cy="4" r="2"></circle>
              </svg>
            </a>
            <a href="https://github.com/ranjithcv" target="_blank" rel="noopener noreferrer" class="social-link" title="GitHub Profile" aria-label="GitHub">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
              </svg>
            </a>
            <a href="https://x.com/ranjithcv_qa" target="_blank" rel="noopener noreferrer" class="social-link" title="X Twitter Profile" aria-label="X Twitter">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
              </svg>
            </a>
            <a href="mailto:<?= SITE_EMAIL ?>" class="social-link" title="Direct Email" aria-label="Email">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Column: Form -->
      <div class="contact-form-card">
        <div class="cyber-corner top-left"></div>
        <div class="cyber-corner top-right"></div>
        <div class="cyber-corner bottom-left"></div>
        <div class="cyber-corner bottom-right"></div>

        <div style="font-family: var(--font-mono); font-size: 0.8125rem; color: var(--accent-yellow); letter-spacing: 0.1em; margin-bottom: 1.5rem;">
          QA CONSULTATION DISPATCH // SECURE
        </div>

        <div id="form-feedback" class="form-feedback" role="alert"></div>

        <form id="portfolio-contact-form" action="process-contact.php" method="POST" novalidate>
          <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
          <input type="text" name="contact_verification_token_bypass" class="honeypot-field" tabindex="-1" autocomplete="off">

          <div class="form-group">
            <label for="contact-name" class="form-label">Your Name *</label>
            <input type="text" id="contact-name" name="name" class="form-control" placeholder="e.g. Elena Rostova" required>
          </div>

          <div class="form-group">
            <label for="contact-email" class="form-label">Work / Contact Email *</label>
            <input type="email" id="contact-email" name="email" class="form-control" placeholder="e.g. elena@company.com" required>
          </div>

          <div class="form-group">
            <label for="contact-subject" class="form-label">Subject *</label>
            <input type="text" id="contact-subject" name="subject" class="form-control" placeholder="e.g. End-to-End QA Audit & Automation Roadmap" required>
          </div>

          <div class="form-group">
            <label for="contact-inquiry" class="form-label">Inquiry Type</label>
            <select id="contact-inquiry" name="inquiry_type" class="form-control">
              <option value="Enterprise QA Audit">Enterprise QA Audit</option>
              <option value="Automation Framework Setup">Automation Framework Setup (Web/Mobile)</option>
              <option value="AI Application Testing">AI / LLM Application Testing</option>
              <option value="Senior QA Role Offer">Senior Software Tester Opportunity</option>
              <option value="Web Development & Testing">Web Development & Quality Assurance</option>
            </select>
          </div>

          <div class="form-group">
            <label for="contact-message" class="form-label">Project Details & Requirements *</label>
            <textarea id="contact-message" name="message" class="form-control" placeholder="Please share details regarding your application stack, release timeline, and quality goals..." required></textarea>
          </div>

          <button type="submit" id="contact-submit-btn" class="btn btn-primary" style="width: 100%;">
            <span>SEND MESSAGE</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="22" y1="2" x2="11" y2="13"></line>
              <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
            </svg>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FREQUENTLY ASKED QUESTIONS SECTION -->
<section class="section" style="border-top: 1px solid var(--border-subtle); background: rgba(14, 18, 24, 0.4);">
  <div class="container">
    <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem auto;">
      <div class="section-tag">
        <span class="pulse-dot"></span>
        <span>QA CLARIFICATIONS</span>
      </div>
      <h2 class="section-title">
        FREQUENTLY ASKED <span class="text-accent">QUESTIONS</span>
      </h2>
      <p class="section-desc" style="margin: 0 auto;">
        Key insights into engagement models, QA workflows, and testing deliverables.
      </p>
    </div>

    <div style="max-width: 860px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">
      <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 1.75rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700; color: #FFF; margin-bottom: 0.5rem;">
          How do you approach a new software testing engagement?
        </h3>
        <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6;">
          I begin with a thorough requirements audit and risk analysis (Phase 01: Understand), followed by exploratory vulnerability mapping (Phase 02: Explore). From there, I structure detailed manual test scenarios alongside automated regression pipelines (Phase 03: Test) to ensure complete coverage.
        </p>
      </div>

      <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 1.75rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700; color: #FFF; margin-bottom: 0.5rem;">
          What sets your testing methodology apart?
        </h3>
        <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6;">
          Because I also construct responsive websites using PHP, HTML5, CSS3, and JavaScript, I bridge the gap between quality assurance and software engineering. I report bugs with actionable developer telemetry (console stack traces, network payloads, DOM element states) rather than vague symptom descriptions.
        </p>
      </div>

      <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 1.75rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700; color: #FFF; margin-bottom: 0.5rem;">
          What does your AI testing protocol involve?
        </h3>
        <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6;">
          AI applications require specialized evaluation: testing non-deterministic outputs, detecting hallucinations, verifying context memory, and testing adversarial prompt injections to ensure model guardrails remain airtight.
        </p>
      </div>
    </div>
  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
