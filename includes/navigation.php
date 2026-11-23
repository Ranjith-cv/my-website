<?php
/**
 * RISHI THAKUR INVENTIVE THEME — MINIMAL HEADER & FLOATING SHORTCUTS
 * Senior Software Tester | Astraz Software Solutions
 */
?>
<!-- Interactive Studio Lamp Pull-Cord (Fixed in Top-Right Corner) -->
<div class="lamp-pull-cord" id="lamp-cord" title="Toggle Studio Light">
  <div class="cord-line"></div>
  <div class="cord-bead"></div>
  <div class="cord-ring"></div>
</div>

<!-- Floating Contact Shortcuts in Bottom-Right (WhatsApp + AI Chat) -->
<div class="floating-shortcuts-container" aria-label="Quick Communication Channels">
  <!-- 1. AI CHAT Floating Icon -->
  <button class="floating-action-btn aichat-btn" id="btn-toggle-aichat" title="Open AI QA Assistant" aria-label="Open AI QA Assistant" data-tooltip="AI QA Assistant">
    <span class="floating-status-dot"></span>
    <span class="btn-icon">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <rect x="3" y="11" width="18" height="10" rx="2"></rect>
        <circle cx="12" cy="5" r="2"></circle>
        <path d="M12 7v4"></path>
        <line x1="8" y1="16" x2="8" y2="16"></line>
        <line x1="16" y1="16" x2="16" y2="16"></line>
      </svg>
    </span>
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
     SERVICE CONSULTATION / TESTING BOOKING MODAL (PREMIUM REDESIGN)
     ========================================================================== -->
<div class="enquiry-modal" id="enquiry-modal" aria-hidden="true">
  <div class="modal-card">
    <div class="modal-header">
      <div class="modal-title-wrap">
        <h3 class="modal-title">Book a Software Testing Consultation</h3>
      </div>
      <button class="modal-close-btn" id="btn-close-enquiry" aria-label="Close Modal" title="Close">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <div id="modal-form-feedback" class="form-feedback" style="display: none;"></div>

    <form id="modal-enquiry-form" method="POST" action="process-contact.php" class="modal-form" novalidate>
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
      <input type="hidden" name="form_type" value="testing_consultation">

      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="modal-name">Your Name *</label>
          <input type="text" id="modal-name" name="name" class="form-control" placeholder="e.g. Alex Miller" maxlength="60" required autocomplete="name">
          <div class="field-error-msg" id="error-modal-name"></div>
        </div>
        <div class="form-group">
          <label class="form-label" for="modal-email">Corporate Email *</label>
          <input type="email" id="modal-email" name="email" class="form-control" placeholder="alex@company.com" maxlength="80" required autocomplete="email">
          <div class="field-error-msg" id="error-modal-email"></div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="modal-service">Requested Testing Scope *</label>
          <div class="select-wrapper">
            <select id="modal-service" name="service" class="form-control form-select" required>
              <option value="" disabled selected>Select Scope of Testing...</option>
              <option value="Manual Testing Audit">Manual Testing Audit (Functional, UI/UX, Exploratory)</option>
              <option value="End-to-End Automation">End-to-End Automation (Playwright, Cypress, CI/CD)</option>
              <option value="AI Application Auditing">AI Application Auditing (LLM Determinism, Guardrails)</option>
              <option value="API & Performance Testing">API &amp; Performance Testing (Postman, JMeter)</option>
              <option value="Full QA Strategy Consultation">Complete Software Quality Strategy</option>
            </select>
          </div>
          <div class="field-error-msg" id="error-modal-service"></div>
        </div>
        <div class="form-group">
          <label class="form-label" for="modal-phone">WhatsApp / Phone *</label>
          <input type="tel" id="modal-phone" name="phone" class="form-control" placeholder="+91 89215 70799" maxlength="15" inputmode="tel" autocomplete="tel" required>
          <div class="field-error-msg" id="error-modal-phone"></div>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label" for="modal-details">Project Architecture &amp; Timeline *</label>
        <textarea id="modal-details" name="message" class="form-control" rows="4" placeholder="Briefly describe your tech stack, test environments, and key QA objectives..." maxlength="1500" required></textarea>
        <div class="field-error-msg" id="error-modal-details"></div>
      </div>

      <button type="submit" id="modal-submit-btn" class="btn btn-primary btn-block">
        <span>Transmit Consultation Request</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </button>
    </form>
  </div>
</div>

<!-- Interactive AI Chatbot Drawer -->
<div class="aichat-drawer" id="aichat-drawer" aria-hidden="true" role="dialog" aria-label="AI QA Assistant">
  <div class="aichat-header">
    <div class="aichat-title-wrap">
      <div class="bot-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="11" width="18" height="10" rx="2"></rect>
          <circle cx="12" cy="5" r="2"></circle>
          <path d="M12 7v4"></path>
          <circle cx="9" cy="16" r="1" fill="currentColor"></circle>
          <circle cx="15" cy="16" r="1" fill="currentColor"></circle>
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
