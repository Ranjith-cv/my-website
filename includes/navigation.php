<?php
/**
 * RISHI THAKUR INVENTIVE THEME — MINIMAL HEADER & FLOATING SHORTCUTS
 * Senior Software Tester | Astraz Software Solutions
 */
?>
<!-- Interactive Studio Lamp Pull-Cord (Fixed at Top-Right for Theme Toggling) -->
<div class="lamp-pull-cord" id="lamp-cord" title="Pull to toggle Dark/Light Theme" role="button" tabindex="0" aria-label="Toggle dark and light theme">
  <div class="cord-line"></div>
  <div class="cord-bead"></div>
  <div class="cord-drop cord-ring"></div>
</div>

<!-- Floating Contact Shortcuts in Bottom-Right (WhatsApp + AI Chat) -->
<div class="floating-shortcuts-container" aria-label="Quick Communication Channels">
  <!-- Speech Bubble above Launcher -->
  <div class="aichat-speech-bubble" id="aichat-speech-bubble" aria-hidden="true">
    <span>Need help with QA? 👋</span>
    <div class="speech-bubble-tail"></div>
  </div>

  <!-- 1. AI CHAT Floating Icon -->
  <button class="floating-action-btn aichat-btn" id="btn-toggle-aichat" title="Open AI QA Assistant" aria-label="Open AI QA Assistant" data-tooltip="AI QA Assistant">
    <span class="floating-status-dot" aria-hidden="true"></span>
    <span class="aichat-unread-badge" id="aichat-unread-badge" aria-hidden="true">1</span>
    <div class="launcher-icon-wrap" aria-hidden="true">
      <div class="launcher-robot-icon">
        <svg class="friendly-robot-icon" width="30" height="30" viewBox="0 0 48 48" fill="none" stroke="#FFFFFF" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
          <g class="robot-antenna">
            <line x1="24" y1="14" x2="24" y2="8"></line>
            <circle cx="24" cy="6" r="2.8" fill="#FFFFFF" stroke="none"></circle>
          </g>
          <rect x="6" y="23" width="3" height="7" rx="1.5" fill="#FFFFFF" opacity="0.8"></rect>
          <rect x="39" y="23" width="3" height="7" rx="1.5" fill="#FFFFFF" opacity="0.8"></rect>
          <rect class="robot-head" x="9" y="14" width="30" height="25" rx="8"></rect>
          <g class="robot-eyes">
            <ellipse class="robot-eye robot-eye-left" cx="18.5" cy="24.5" rx="2.6" ry="3" fill="#FFFFFF" stroke="none"></ellipse>
            <ellipse class="robot-eye robot-eye-right" cx="29.5" cy="24.5" rx="2.6" ry="3" fill="#FFFFFF" stroke="none"></ellipse>
          </g>
          <path class="robot-mouth" d="M19 31.5 Q24 35 29 31.5" stroke-width="2.4" fill="none"></path>
          <circle cx="15" cy="28" r="1.3" fill="#22C55E" opacity="0.9" stroke="none"></circle>
          <circle cx="33" cy="28" r="1.3" fill="#22C55E" opacity="0.9" stroke="none"></circle>
        </svg>
      </div>
      <div class="launcher-close-icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </div>
    </div>
  </button>

  <!-- 2. WhatsApp Floating Icon -->
  <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="floating-action-btn whatsapp-btn" title="Chat on WhatsApp" aria-label="Chat on WhatsApp" data-tooltip="WhatsApp">
    <span class="btn-icon">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.301-.15-1.78-.878-2.056-.978-.275-.1-.475-.15-.675.15-.2.301-.775.979-.95 1.18-.175.2-.35.225-.65.075-.3-.15-1.267-.467-2.413-1.488-.893-.796-1.496-1.78-1.671-2.081-.175-.301-.019-.464.131-.613.136-.135.301-.35.451-.525.15-.175.2-.301.3-.5.1-.2.05-.375-.025-.525-.075-.15-.675-1.627-.925-2.228-.243-.585-.49-.506-.675-.515-.175-.009-.375-.009-.575-.009-.2 0-.525.075-.8.375-.275.3-1.05 1.028-1.05 2.506 0 1.478 1.075 2.906 1.225 3.107.15.2 2.115 3.23 5.124 4.531.716.31 1.275.495 1.71.634.72.229 1.375.197 1.893.12.577-.087 1.78-.727 2.03-1.43.25-.702.25-1.303.175-1.43-.075-.127-.275-.2-.575-.35zM12.04 2C6.527 2 2.04 6.487 2.04 12c0 1.895.53 3.666 1.45 5.185L2 22l4.98-1.438C8.423 21.442 10.177 22 12.04 22c5.513 0 10-4.487 10-10s-4.487-10-10-10zm0 18.25c-1.62 0-3.125-.49-4.385-1.332l-.315-.21-2.955.853.87-2.875-.23-.335A8.192 8.192 0 0 1 3.79 12c0-4.549 3.7-8.25 8.25-8.25 4.549 0 8.25 3.701 8.25 8.25 0 4.549-3.701 8.25-8.25 8.25z"/>
      </svg>
    </span>
  </a>
</div>

<!-- ==========================================================================
     SERVICE CONSULTATION / TESTING BOOKING MODAL (NOTEBOOK CARD REDESIGN)
     ========================================================================== -->
<div class="enquiry-modal" id="enquiry-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modal-consultation-title">
  <div class="modal-card">
    
    <!-- 14 Wire Binding Spiral Rings Along Top Edge (Matching Hero Notebook) -->
    <div class="modal-spiral-rings" aria-hidden="true">
      <span class="modal-ring" style="--ring-i: 0;"></span>
      <span class="modal-ring" style="--ring-i: 1;"></span>
      <span class="modal-ring" style="--ring-i: 2;"></span>
      <span class="modal-ring" style="--ring-i: 3;"></span>
      <span class="modal-ring" style="--ring-i: 4;"></span>
      <span class="modal-ring" style="--ring-i: 5;"></span>
      <span class="modal-ring" style="--ring-i: 6;"></span>
      <span class="modal-ring" style="--ring-i: 7;"></span>
      <span class="modal-ring" style="--ring-i: 8;"></span>
      <span class="modal-ring" style="--ring-i: 9;"></span>
      <span class="modal-ring" style="--ring-i: 10;"></span>
      <span class="modal-ring" style="--ring-i: 11;"></span>
      <span class="modal-ring" style="--ring-i: 12;"></span>
      <span class="modal-ring" style="--ring-i: 13;"></span>
    </div>

    <!-- Modal Header with 32px Space Grotesk Title & 54px Round Close Button -->
    <div class="modal-header">
      <div class="modal-title-wrap">
        <h3 class="modal-title" id="modal-consultation-title">Book a Software Testing Consultation</h3>
      </div>
      <button type="button" class="modal-close-btn" id="btn-close-enquiry" aria-label="Close Consultation Modal" title="Close">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <div id="modal-form-feedback" class="form-feedback" style="display: none;"></div>

    <form id="modal-enquiry-form" method="POST" action="process-contact.php" class="modal-form" novalidate>
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
      <input type="hidden" name="form_type" value="testing_consultation">

      <!-- Row 1: Your Name & Corporate Email -->
      <div class="form-row">
        <div class="form-group modal-form-item" style="--field-i: 0;">
          <label class="form-label" for="modal-name">Your Name *</label>
          <input type="text" id="modal-name" name="name" class="form-control" placeholder="e.g. Alex Miller" maxlength="60" required autocomplete="name">
          <div class="field-error-msg" id="error-modal-name"></div>
        </div>
        <div class="form-group modal-form-item" style="--field-i: 1;">
          <label class="form-label" for="modal-email">Corporate Email *</label>
          <input type="email" id="modal-email" name="email" class="form-control" placeholder="alex@company.com" maxlength="80" required autocomplete="email">
          <div class="field-error-msg" id="error-modal-email"></div>
        </div>
      </div>

      <!-- Row 2: Requested Testing Scope (Custom Popover Dropdown) & WhatsApp/Phone -->
      <div class="form-row">
        <div class="form-group modal-form-item" style="--field-i: 2;">
          <label class="form-label" for="modal-dropdown-trigger" id="lbl-modal-scope">Requested Testing Scope *</label>
          <div class="custom-dropdown-wrap" id="modal-scope-dropdown">
            <input type="hidden" name="service" id="modal-service" value="" required>
            <button type="button" class="form-control custom-dropdown-trigger" id="modal-dropdown-trigger" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="lbl-modal-scope modal-dropdown-trigger">
              <span class="dropdown-selected-label">
                <span class="dropdown-placeholder">Select scope of testing...</span>
              </span>
              <span class="dropdown-chevron-icon" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </span>
            </button>

            <div class="custom-dropdown-popover" id="modal-dropdown-popover" role="listbox" aria-labelledby="lbl-modal-scope" tabindex="-1">
              <div class="dropdown-option" role="option" aria-selected="false" data-value="Manual Testing Audit" data-code="M" data-title="Manual Testing" style="--opt-i: 0;">
                <span class="option-icon opt-icon-m">M</span>
                <div class="option-text-group">
                  <div class="option-title">Manual Testing</div>
                  <div class="option-desc">Functional, UI/UX, regression and exploratory testing.</div>
                </div>
                <div class="option-check-icon" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3DBE6A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
              </div>

              <div class="dropdown-option" role="option" aria-selected="false" data-value="End-to-End Automation" data-code="A" data-title="Automation Testing" style="--opt-i: 1;">
                <span class="option-icon opt-icon-a">A</span>
                <div class="option-text-group">
                  <div class="option-title">Automation Testing</div>
                  <div class="option-desc">Playwright, Cypress, Selenium CI/CD automated test suites.</div>
                </div>
                <div class="option-check-icon" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3DBE6A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
              </div>

              <div class="dropdown-option" role="option" aria-selected="false" data-value="API & Performance Testing" data-code="API" data-title="API Testing" style="--opt-i: 2;">
                <span class="option-icon opt-icon-api">API</span>
                <div class="option-text-group">
                  <div class="option-title">API Testing</div>
                  <div class="option-desc">REST, GraphQL endpoints, schema validation &amp; contracts.</div>
                </div>
                <div class="option-check-icon" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3DBE6A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
              </div>

              <div class="dropdown-option" role="option" aria-selected="false" data-value="Performance Testing" data-code="P" data-title="Performance Testing" style="--opt-i: 3;">
                <span class="option-icon opt-icon-p">P</span>
                <div class="option-text-group">
                  <div class="option-title">Performance Testing</div>
                  <div class="option-desc">JMeter load testing, high-traffic concurrency &amp; latency.</div>
                </div>
                <div class="option-check-icon" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3DBE6A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
              </div>

              <div class="dropdown-option" role="option" aria-selected="false" data-value="Mobile App Testing" data-code="MOB" data-title="Mobile App Testing" style="--opt-i: 4;">
                <span class="option-icon opt-icon-mob">MOB</span>
                <div class="option-text-group">
                  <div class="option-title">Mobile App Testing</div>
                  <div class="option-desc">Native iOS &amp; Android device testing, memory &amp; gestures.</div>
                </div>
                <div class="option-check-icon" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3DBE6A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
              </div>

              <div class="dropdown-option" role="option" aria-selected="false" data-value="Full QA Strategy Consultation" data-code="QA" data-title="Full QA Partnership" style="--opt-i: 5;">
                <span class="option-icon opt-icon-qa">QA</span>
                <div class="option-text-group">
                  <div class="option-title">Full QA Partnership</div>
                  <div class="option-desc">End-to-end QA architecture, release gating &amp; QA leadership.</div>
                </div>
                <div class="option-check-icon" aria-hidden="true">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3DBE6A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="field-error-msg" id="error-modal-service"></div>
        </div>

        <div class="form-group modal-form-item" style="--field-i: 3;">
          <label class="form-label" for="modal-phone">WhatsApp / Phone *</label>
          <input type="tel" id="modal-phone" name="phone" class="form-control" placeholder="+91 89215 70799" maxlength="15" inputmode="tel" autocomplete="tel" required>
          <div class="field-error-msg" id="error-modal-phone"></div>
        </div>
      </div>

      <!-- Row 3: Project Architecture & Timeline Textarea with 0 / 500 Counter -->
      <div class="form-group modal-form-item" style="--field-i: 4;">
        <div class="form-label-row">
          <label class="form-label" for="modal-details">Project Architecture &amp; Timeline *</label>
          <span class="textarea-counter" id="modal-char-counter"><span id="char-count">0</span> / 500</span>
        </div>
        <textarea id="modal-details" name="message" class="form-control modal-textarea" rows="4" placeholder="Briefly describe your tech stack, test environments, and key QA objectives..." maxlength="500" required></textarea>
        <div class="field-error-msg" id="error-modal-details"></div>
      </div>

      <!-- Row 4: 80px Full-Width Black Pill Submit Button -->
      <div class="modal-form-item modal-submit-wrap" style="--field-i: 5;">
        <button type="submit" id="modal-submit-btn" class="modal-submit-btn">
          <span class="btn-text">Transmit Consultation Request</span>
          <span class="btn-arrow-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </button>
      </div>
    </form>

    <!-- Success View State (110px Green Circle + Self-drawing White Tick + Thank-you line) -->
    <div class="modal-success-view" id="modal-success-view" style="display: none;">
      <div class="success-circle-wrap">
        <div class="success-circle">
          <svg class="success-tick-svg" viewBox="0 0 52 52" aria-hidden="true">
            <path class="tick-path" fill="none" stroke="#FFFFFF" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" d="M14 27 l9 9 l16 -16"/>
          </svg>
        </div>
      </div>
      <h3 class="success-heading">Request received.</h3>
      <p class="success-desc">Thank you for reaching out. Ranjith will review your project requirements and test architecture, and get back to you within 24 hours.</p>
      <div class="success-ticket-id" id="success-ticket-id"></div>
      <div class="success-actions-row">
        <button type="button" class="btn btn-dark-pill" id="btn-success-close">Done</button>
      </div>
    </div>

  </div>
</div>

<!-- Interactive AI Chatbot Drawer -->
<div class="aichat-drawer" id="aichat-drawer" aria-hidden="true" role="dialog" aria-label="AI QA Assistant">
  <div class="aichat-header">
    <div class="aichat-title-wrap">
      <div class="bot-icon" aria-hidden="true">
        <svg class="friendly-robot-icon" width="24" height="24" viewBox="0 0 48 48" fill="none" stroke="#22C55E" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
          <g class="robot-antenna">
            <line x1="24" y1="14" x2="24" y2="8"></line>
            <circle cx="24" cy="6" r="2.8" fill="#22C55E" stroke="none"></circle>
          </g>
          <rect x="6" y="23" width="3" height="7" rx="1.5" fill="#22C55E" opacity="0.8"></rect>
          <rect x="39" y="23" width="3" height="7" rx="1.5" fill="#22C55E" opacity="0.8"></rect>
          <rect class="robot-head" x="9" y="14" width="30" height="25" rx="8"></rect>
          <g class="robot-eyes">
            <ellipse class="robot-eye robot-eye-left" cx="18.5" cy="24.5" rx="2.6" ry="3" fill="#22C55E" stroke="none"></ellipse>
            <ellipse class="robot-eye robot-eye-right" cx="29.5" cy="24.5" rx="2.6" ry="3" fill="#22C55E" stroke="none"></ellipse>
          </g>
          <path class="robot-mouth" d="M19 31.5 Q24 35 29 31.5" stroke-width="2.4" fill="none"></path>
          <circle cx="15" cy="28" r="1.3" fill="#22C55E" opacity="0.9" stroke="none"></circle>
          <circle cx="33" cy="28" r="1.3" fill="#22C55E" opacity="0.9" stroke="none"></circle>
        </svg>
      </div>
      <div>
        <div class="bot-name">Ranjith's AI Assistant</div>
        <div class="bot-status">
          <span class="bot-status-dot"></span>
          <span>Online &bull; Astraz QA Intelligence</span>
        </div>
      </div>
    </div>
    <div class="aichat-header-actions">
      <button class="aichat-header-btn" id="btn-reset-aichat" title="Restart conversation" aria-label="Restart conversation">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
          <polyline points="3 3 3 8 8 8"></polyline>
        </svg>
      </button>
      <button class="aichat-header-btn modal-close-btn" id="btn-close-aichat" title="Close Chat" aria-label="Close Chat">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
  </div>

  <div class="aichat-messages-box" id="aichat-messages">
    <div class="chat-bubble bot">
      Hi! 👋 I'm Ranjith's AI QA Assistant at <strong>Astraz Software Solutions</strong>. I can walk you through manual testing strategies, automated regression pipelines (Playwright &amp; Cypress), AI testing guardrails, or review Ranjith's 200+ tested projects. How can I assist your project today?
    </div>
  </div>

  <!-- Dedicated Quick Action Suggestion Chips Shelf -->
  <div class="aichat-chips-shelf" id="aichat-chips-shelf" aria-label="Suggested QA topics">
    <button class="chat-chip" data-chip="Manual Testing">
      <span class="chip-icon">🎯</span>
      <span>Manual QA</span>
    </button>
    <button class="chat-chip" data-chip="Automation Frameworks">
      <span class="chip-icon">⚡</span>
      <span>Automation &amp; CI/CD</span>
    </button>
    <button class="chat-chip" data-chip="AI Workflows">
      <span class="chip-icon">🤖</span>
      <span>AI Testing</span>
    </button>
    <button class="chat-chip" data-chip="Tested Projects">
      <span class="chip-icon">📊</span>
      <span>200+ Projects</span>
    </button>
    <button class="chat-chip" data-chip="Regression vs Retesting">
      <span class="chip-icon">🔄</span>
      <span>Regression QA</span>
    </button>
    <button class="chat-chip" data-chip="Book Consultation">
      <span class="chip-icon">📅</span>
      <span>Book Consultation</span>
    </button>
  </div>

  <form id="aichat-form" class="aichat-input-bar">
    <div class="aichat-input-wrap">
      <input type="text" id="aichat-input" class="aichat-input" placeholder="Ask about QA practices, bug metrics..." autocomplete="off">
    </div>
    <button type="submit" id="aichat-send-btn" class="aichat-send-btn" aria-label="Send Message" title="Send Message">
      <svg class="send-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
        <line x1="22" y1="2" x2="11" y2="13"></line>
        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
      </svg>
    </button>
  </form>
</div>
