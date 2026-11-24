/**
 * RANJITH C V — Interactive UI, AI Chatbot & Enquiry System
 * Minimal Header Scroll, "BOOK YOUR TESTING" Modal, & AI QA Assistant
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // 1. Editorial Header Scroll Glass Transition
  const header = document.querySelector('.editorial-navbar, .minimal-floating-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  });

  // 2. "BOOK YOUR TESTING" Modal Logic (Notebook Restyle)
  const enquiryModal = document.getElementById('enquiry-modal');
  const btnOpenEnquiry = document.getElementById('btn-open-enquiry');
  const btnCloseEnquiry = document.getElementById('btn-close-enquiry');
  const btnSuccessClose = document.getElementById('btn-success-close');

  function openEnquiryModal() {
    if (enquiryModal) {
      enquiryModal.classList.add('open', 'active');
      enquiryModal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeEnquiryModal() {
    if (enquiryModal) {
      enquiryModal.classList.remove('open', 'active');
      enquiryModal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';

      // Close dropdown if open
      const dropdownWrap = document.getElementById('modal-scope-dropdown');
      if (dropdownWrap) dropdownWrap.classList.remove('open');

      // Reset success view / form after modal fades out
      setTimeout(() => {
        const successView = document.getElementById('modal-success-view');
        const modalForm = document.getElementById('modal-enquiry-form');
        const feedback = document.getElementById('modal-form-feedback');
        if (successView && modalForm && successView.style.display !== 'none') {
          successView.style.display = 'none';
          modalForm.style.display = 'block';
          modalForm.reset();
          if (typeof window.resetCustomDropdown === 'function') {
            window.resetCustomDropdown();
          }
          const charCount = document.getElementById('char-count');
          if (charCount) charCount.textContent = '0';
        }
        if (feedback) {
          feedback.style.display = 'none';
          feedback.innerHTML = '';
        }
      }, 400);
    }
  }

  if (btnOpenEnquiry) {
    btnOpenEnquiry.addEventListener('click', openEnquiryModal);
  }

  if (btnCloseEnquiry) {
    btnCloseEnquiry.addEventListener('click', closeEnquiryModal);
  }

  if (btnSuccessClose) {
    btnSuccessClose.addEventListener('click', closeEnquiryModal);
  }

  // Close modal if clicking on background overlay (backdrop click)
  if (enquiryModal) {
    enquiryModal.addEventListener('click', (e) => {
      if (e.target === enquiryModal) {
        closeEnquiryModal();
      }
    });
  }

  // Close on Escape key (dropdown first if open, then modal)
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && enquiryModal && enquiryModal.classList.contains('open')) {
      const dropdownWrap = document.getElementById('modal-scope-dropdown');
      if (dropdownWrap && dropdownWrap.classList.contains('open')) {
        dropdownWrap.classList.remove('open');
        const trigger = document.getElementById('modal-dropdown-trigger');
        if (trigger) {
          trigger.setAttribute('aria-expanded', 'false');
          trigger.focus();
        }
        return;
      }
      closeEnquiryModal();
    }
  });

  // Global triggers with data-open-enquiry
  document.querySelectorAll('[data-open-enquiry]').forEach(el => {
    el.addEventListener('click', (e) => {
      e.preventDefault();
      openEnquiryModal();
    });
  });

  // 3. AI QA Chatbot Engine (delegated to assets/js/chatbot.js)
  // Legacy chat handlers bypassed to prevent duplicate listener bindings
  if (false) {
  const aichatDrawer = document.getElementById('aichat-drawer');
  const btnToggleAichat = document.getElementById('btn-toggle-aichat');
  const btnCloseAichat = document.getElementById('btn-close-aichat');
  const btnResetAichat = document.getElementById('btn-reset-aichat');
  const aichatMessages = document.getElementById('aichat-messages');
  const aichatForm = document.getElementById('aichat-form');
  const aichatInput = document.getElementById('aichat-input') || document.getElementById('aichat-text-input');
  const aichatSendBtn = document.getElementById('aichat-send-btn') || document.querySelector('.aichat-send-btn');

  function openAiChat() {
    if (!aichatDrawer) return;
    aichatDrawer.classList.add('open');
    aichatDrawer.setAttribute('aria-hidden', 'false');
    document.body.classList.add('aichat-open');
    setTimeout(() => aichatInput?.focus(), 250);
  }

  function closeAiChat() {
    if (!aichatDrawer) return;
    aichatDrawer.classList.remove('open');
    aichatDrawer.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('aichat-open');
  }

  function toggleAiChat() {
    if (!aichatDrawer) return;
    if (aichatDrawer.classList.contains('open')) {
      closeAiChat();
    } else {
      openAiChat();
    }
  }

  if (btnToggleAichat) {
    btnToggleAichat.addEventListener('click', toggleAiChat);
  }

  if (btnCloseAichat) {
    btnCloseAichat.addEventListener('click', closeAiChat);
  }

  if (btnResetAichat) {
    btnResetAichat.addEventListener('click', () => {
      if (!aichatMessages) return;
      aichatMessages.innerHTML = `
        <div class="chat-bubble bot">
          Hi! 👋 I'm Ranjith's AI QA Assistant at <strong>Astraz Software Solutions</strong>. I can walk you through manual testing strategies, automated regression pipelines (Playwright &amp; Cypress), AI testing guardrails, or review Ranjith's 200+ tested projects. How can I assist your project today?
        </div>
      `;
      if (aichatInput) aichatInput.value = '';
      aichatSendBtn?.classList.remove('has-text');
      aichatInput?.focus();
    });
  }

  function appendChatBubble(sender, text, isHtml = false) {
    if (!aichatMessages) return;
    const bubble = document.createElement('div');
    bubble.className = `chat-bubble ${sender}`;
    if (isHtml) {
      bubble.innerHTML = text;
    } else {
      bubble.textContent = text;
    }
    aichatMessages.appendChild(bubble);
    aichatMessages.scrollTop = aichatMessages.scrollHeight;
  }

  function showTypingIndicator() {
    if (!aichatMessages) return null;
    const typing = document.createElement('div');
    typing.className = 'chat-bubble bot typing';
    typing.id = 'bot-typing-indicator';
    typing.innerHTML = '<span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span>';
    aichatMessages.appendChild(typing);
    aichatMessages.scrollTop = aichatMessages.scrollHeight;
    return typing;
  }

  function removeTypingIndicator() {
    const el = document.getElementById('bot-typing-indicator');
    if (el) el.remove();
  }

  function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text || '';
    return div.innerHTML;
  }

  function handleAiQuery(query) {
    const q = (query || '').toLowerCase().trim();
    if (!q) return;

    showTypingIndicator();

    setTimeout(() => {
      removeTypingIndicator();

      // 1. GREETINGS & CONVERSATIONAL COURTESY
      const isHowAreYou = /how\s*(are|r)\s*(you|u)|how's\s*it\s*going|how\s*do\s*you\s*do|how\s*is\s*everything|hru\b/i.test(q);
      const isGreeting = /^(h[yei]+|hello|helo|heyy?|greetings|good\s*(morning|afternoon|evening)|sup|howdy|yo|ola|namaste|whats?\s*up|wassup)\b/i.test(q);

      if (isHowAreYou) {
        appendChatBubble('bot', `Hello! I'm doing great, thank you so much for asking! 😊 How are you doing today?<br><br>
I'm Ranjith's AI QA Assistant at <strong>Astraz Software Solutions</strong>. I'm here to help you with:<br>
• <strong>Manual &amp; Automated QA</strong>: Functional matrices, Playwright, Cypress &amp; CI/CD<br>
• <strong>Proven Track Record</strong>: 200+ commercial projects tested, 4,000+ critical bugs identified<br>
• <strong>1-on-1 QA Consultation</strong>: Booking direct architecture reviews with Ranjith<br><br>
How can I assist your project today?`, true);
        return;
      }

      if (isGreeting) {
        appendChatBubble('bot', `Hi there! 👋 How are you doing? I'm doing fantastic and glad to assist you!<br><br>
I'm Ranjith's AI QA Assistant at <strong>Astraz Software Solutions</strong>. I'm ready to answer any questions about software quality assurance, test automation frameworks, or Ranjith's testing experience.<br><br>
What would you like to explore today? You can also click any of the suggestion chips below!`, true);
        return;
      }

      // 1b. USER REPLIES THEY ARE GOOD / FINE
      if (/^(i('?m| am)?\s*(good|fine|doing well|great|awesome|well)|all good|cool|not bad)\b/i.test(q)) {
        appendChatBubble('bot', `Glad to hear that! 😊 How can I help you today? Feel free to ask about Ranjith's testing experience at Astraz Software Solutions, test automation frameworks, or booking a QA consultation for your application.`, false);
        return;
      }

      // 2. WHO IS RANJITH / ROLE / TITLE / ABOUT
      if (q.includes('who is') || q.includes('who are you') || q.includes('about ranjith') || q.includes('tell me about') || q === 'role' || q.includes('designation') || q.includes('job') || q.includes('profile') || q.includes('title')) {
        appendChatBubble('bot', `<strong>Ranjith C V</strong> is a <strong>Senior Software Tester</strong> at <strong>Astraz Software Solutions</strong>.<br><br>He specializes in delivering bulletproof software quality across Web, Mobile, and AI platforms. With over <strong>200+ verified projects tested</strong> and <strong>4,000+ critical bugs identified</strong>, he guarantees zero defect escapes into production.`, true);
        return;
      }

      // 3. COMPANY / ASTRAZ SOFTWARE SOLUTIONS / CAREER TIMELINE
      if (q.includes('astraz') || q.includes('company') || q.includes('experience') || q.includes('career') || q.includes('joined') || q.includes('history') || q.includes('where do you work')) {
        appendChatBubble('bot', `Ranjith is currently leading quality assurance as <strong>Senior Software Tester at Astraz Software Solutions</strong> (career started on <strong>June 10, 2025</strong>).<br><br>At Astraz, he is responsible for comprehensive manual testing, automated regression pipelines, AI model evaluations, and ensuring 100% production-ready release confidence for enterprise clients across India and the UAE.`, true);
        return;
      }

      // 4. MANUAL TESTING
      if (q.includes('manual') || q.includes('functional') || q.includes('exploratory') || q.includes('ui/ux test') || q.includes('cross-browser') || q.includes('responsive test') || q.includes('sanity') || q.includes('smoke')) {
        appendChatBubble('bot', `<strong>Manual Testing Specialization:</strong><br>
• <strong>Functional & UI/UX Testing</strong>: Full user journey coverage, boundary value checks, and responsive viewports (Chrome, Safari, iOS, Android).<br>
• <strong>Exploratory Bug Hunting</strong>: Uncovering elusive edge-case defects, memory leaks, and state desyncs.<br>
• <strong>Structured Defect Lifecycle</strong>: Logging reproducible Jira bug reports with steps, screenshots, console traces, and payload data.<br>
• <strong>Regression Audits</strong>: Exhaustive pre-release regression sign-offs ensuring zero defect leakage.`, true);
        return;
      }

      // 5. AUTOMATION TESTING & CI/CD
      if (q.includes('automation') || q.includes('automated') || q.includes('playwright') || q.includes('cypress') || q.includes('selenium') || q.includes('ci/cd') || q.includes('pipeline') || q.includes('script') || q.includes('coverage')) {
        appendChatBubble('bot', `<strong>Automation Frameworks & CI/CD:</strong><br>
• <strong>End-to-End Web Suites</strong>: Built with <strong>Playwright</strong>, <strong>Cypress</strong>, and <strong>Selenium WebDriver</strong>.<br>
• <strong>API Automation</strong>: Automated endpoint assertions, JSON schema checks, and authentication flows with <strong>Postman & Newman</strong>.<br>
• <strong>Continuous Testing Gates</strong>: Automated GitHub Actions regression workflows triggered on every pull request and merge.<br>
• <strong>85% Continuous Coverage</strong>: Slashing regression cycle durations from days to minutes.`, true);
        return;
      }

      // 6. AI TESTING & LLM EVALUATION
      if (q.includes('ai') || q.includes('llm') || q.includes('prompt') || q.includes('hallucination') || q.includes('model') || q.includes('rag') || q.includes('injection')) {
        appendChatBubble('bot', `<strong>AI Testing & LLM Guardrails:</strong><br>
• <strong>Prompt Injection & Jailbreak Defense</strong>: Adversarial stress testing to prevent unauthorized system prompt bypass.<br>
• <strong>Hallucination Detection</strong>: Validating citation fidelity and factual grounding in RAG & generative workflows.<br>
• <strong>Non-Deterministic Output Checks</strong>: Setting tolerance assertions for variable model responses under heavy token load.<br>
• <strong>Data Leakage Prevention</strong>: Verifying that proprietary corporate data and PII cannot leak through model responses.`, true);
        return;
      }

      // 7. SECURITY & VULNERABILITY TESTING
      if (q.includes('security') || q.includes('vulnerability') || q.includes('penetration') || q.includes('owasp') || q.includes('xss') || q.includes('sqli') || q.includes('auth')) {
        appendChatBubble('bot', `<strong>Security & Vulnerability Auditing:</strong><br>
• <strong>OWASP Top 10 Auditing</strong>: Checking for broken authentication, IDOR, sensitive data exposure, and CSRF/XSS vectors.<br>
• <strong>API Authorization Bypass</strong>: Verifying role-based access control (RBAC) and JWT token expirations.<br>
• <strong>Data Encryption & TLS</strong>: Auditing client-to-server data transit security and secure cookie flags.`, true);
        return;
      }

      // 8. PROJECTS & CASE STUDIES
      if (q.includes('lensfed')) {
        appendChatBubble('bot', `<strong>LENSFED Members Welfare App (Tested by Ranjith):</strong><br>
• Member authentication & biometric login validation<br>
• Multi-device Android & iOS responsive matrix across 20+ screen sizes<br>
• Payment gateway reconciliation & offline data synchronization<br>
• 100% QA Sign-Off delivered with zero production defects.`, true);
        return;
      }

      if (q.includes('asraya') || q.includes('kvves')) {
        appendChatBubble('bot', `<strong>Asraya KVVES Kannur App (Tested by Ranjith):</strong><br>
• Financial calculation precision & benefit tier assertions<br>
• Automated PDF statement generation & download stress testing<br>
• Push notification gateway delivery under network throttling<br>
• Zero production defect escapes recorded.`, true);
        return;
      }

      if (q.includes('aawk') || q.includes('automobile') || q.includes('roadside')) {
        appendChatBubble('bot', `<strong>AAWK Mobile App & Life Line (Tested by Ranjith):</strong><br>
• Real-time geolocation breakdown dispatch algorithm testing<br>
• Workshop directory indexing with zero latency lag<br>
• Broad compatibility matrix tested across 25+ Android OS versions.`, true);
        return;
      }

      if (q.includes('freshpick') || q.includes('g-mart') || q.includes('ecommerce') || q.includes('shopping') || q.includes('cart')) {
        appendChatBubble('bot', `<strong>FreshPick Logistics & G-Mart Hypermarket:</strong><br>
• High-concurrency shopping cart race conditions & inventory synchronization<br>
• Payment gateway multi-currency reconciliation (Razorpay, Stripe, Cash-on-delivery)<br>
• Order dispatch notifications and live tracking testing.`, true);
        return;
      }

      if (q.includes('project') || q.includes('work') || q.includes('tested') || q.includes('portfolio') || q.includes('app') || q.includes('case stud')) {
        appendChatBubble('bot', `Ranjith has tested over <strong>200+ commercial projects</strong> at Astraz Software Solutions!<br><br>
<strong>Featured Tested Projects:</strong><br>
1. <strong>LENSFED Welfare App</strong> (Mobile member benefits & biometrics)<br>
2. <strong>Asraya KVVES Kannur App</strong> (Financial welfare disbursement & PDFs)<br>
3. <strong>AAWK Mobile App & Life Line</strong> (Emergency roadside dispatch & GPS)<br>
4. <strong>CareSync EHR Platform</strong> (HIPAA-compliant healthcare records)<br>
5. <strong>FreshPick Logistics & G-Mart</strong> (E-commerce cart, payments & inventory)<br><br>
Ask me about any specific project name for full QA details!`, true);
        return;
      }

      // 9. METRICS, BUGS, NUMBERS & STATISTICS
      if (q.includes('bug') || q.includes('stat') || q.includes('metric') || q.includes('number') || q.includes('achieve') || q.includes('how many')) {
        appendChatBubble('bot', `<strong>Ranjith's Verified QA Track Record:</strong><br>
• <strong>200+ Projects Tested</strong>: Commercial web, mobile, and AI platforms.<br>
• <strong>4,000+ Bugs Identified</strong>: Intercepted before reaching staging or production.<br>
• <strong>99.8% Release Stability</strong>: Verified by clean production deploy sign-offs.<br>
• <strong>85% Automation Coverage</strong>: Continuous Cypress and Playwright regression gates.<br>
• <strong>Zero Defect Escapes</strong>: Zero critical defects leaking into client production.`, true);
        return;
      }

      // 10. TOOLS & TECHNOLOGIES
      if (q.includes('tool') || q.includes('tech') || q.includes('stack') || q.includes('language') || q.includes('postman') || q.includes('jira')) {
        appendChatBubble('bot', `<strong>Testing Stack & Tools:</strong><br>
• <strong>Test Automation</strong>: Playwright, Cypress, Selenium WebDriver, Appium<br>
• <strong>API & Performance</strong>: Postman, Newman, REST APIs, JMeter, k6<br>
• <strong>Defect Tracking & Agile</strong>: Jira, TestRail, Confluence, GitHub Issues<br>
• <strong>Languages & Code</strong>: JavaScript, Python, PHP, HTML5/CSS3, SQL<br>
• <strong>DevOps & CI/CD</strong>: GitHub Actions, Docker, Chrome DevTools`, true);
        return;
      }

      // 11. HIRE / BOOK / CONTACT / PRICING / AVAILABILITY
      if (q.includes('hire') || q.includes('book') || q.includes('contact') || q.includes('email') || q.includes('phone') || q.includes('whatsapp') || q.includes('audit') || q.includes('price') || q.includes('cost') || q.includes('rate') || q.includes('available') || q.includes('consultation')) {
        appendChatBubble('bot', `Ranjith is <strong>Available for High-Impact QA Opportunities</strong> (Remote-first worldwide)!<br><br>
• <strong>Corporate Email</strong>: <a href="mailto:ranjith7317002@gmail.com" style="color:#38BDF8;font-weight:600;text-decoration:underline;">ranjith7317002@gmail.com</a><br>
• <strong>Direct WhatsApp</strong>: <a href="https://wa.me/918921570799" target="_blank" style="color:#22C55E;font-weight:600;text-decoration:underline;">+91 89215 70799</a><br>
• <strong>Company</strong>: Astraz Software Solutions<br><br>
Click below to schedule your software testing consultation:<br>
<button onclick="window.openEnquiryModalGlobal()" class="chat-action-btn"><span>Book Testing Consultation</span> <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>`, true);
        return;
      }

      // 12. QA CONCEPTS: DIFFERENCE BETWEEN REGRESSION AND RETESTING
      if (q.includes('difference between regression and retesting') || q.includes('regression vs retesting') || (q.includes('regression') && q.includes('retesting'))) {
        appendChatBubble('bot', `<strong>Difference Between Regression & Re-Testing:</strong><br><br>
• <strong>Re-Testing</strong>: Validates that a <em>specific defect</em> previously detected and fixed by a developer actually passes now.<br><br>
• <strong>Regression Testing</strong>: Verifies that recent code modifications, patches, or bug fixes have <em>not inadvertently broken existing, unchanged features</em> across the application.<br><br>
Ranjith automates regression suites using Playwright and Cypress to ensure fast, continuous feedback.`, true);
        return;
      }

      // 13. QA CONCEPTS: SEVERITY VS PRIORITY
      if (q.includes('severity') || q.includes('priority')) {
        appendChatBubble('bot', `<strong>Severity vs Priority in QA:</strong><br><br>
• <strong>Severity</strong>: Measures the technical impact of a defect on the system (e.g. system crash, database corruption = Critical).<br>
• <strong>Priority</strong>: Measures the business urgency with which the defect must be fixed (e.g. broken payment gateway = High priority; typo on legal disclaimer = Low priority).`, true);
        return;
      }

      // 14. QA CONCEPTS: API TESTING
      if (q.includes('how to test api') || q.includes('api test') || q.includes('rest api')) {
        appendChatBubble('bot', `<strong>API Testing Methodology:</strong><br>
1. <strong>Status Code Validation</strong>: Asserting 200 OK, 201 Created, 400 Bad Request, 401 Unauthorized, 404 Not Found, 500 Server Error.<br>
2. <strong>Payload & Schema Assertion</strong>: Verifying required JSON keys, data types, and boundary constraints.<br>
3. <strong>Authentication & Security</strong>: Testing Bearer JWT tokens, role scopes, and expired sessions.<br>
4. <strong>Performance & Latency</strong>: Measuring response times under high-concurrency requests.`, true);
        return;
      }

      // 15. THANKS & COURTESY
      if (q.includes('thank') || q.includes('thanks') || q.includes('appreciate') || q.includes('great') || q.includes('awesome')) {
        appendChatBubble('bot', `You're very welcome! If you'd like to collaborate, review test plans, or have Ranjith audit your application, please don't hesitate to reach out:<br><br>
<button onclick="window.openEnquiryModalGlobal()" class="chat-action-btn"><span>Book Consultation</span> <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>`, true);
        return;
      }

      // 16. PROFESSIONAL AI CATCH-ALL FOR SPECIALIZED INQUIRIES
      appendChatBubble('bot', `I'd be glad to help with that! As Ranjith's AI QA Assistant, I specialize in all facets of software testing, test automation architecture, and Ranjith's professional experience at <strong>Astraz Software Solutions</strong>.<br><br>
Here are primary QA areas I can assist you with right now:<br>
• <strong>Manual &amp; Functional Testing</strong>: Full user journey coverage, boundary tests &amp; responsive matrices<br>
• <strong>Test Automation &amp; CI/CD</strong>: E2E Playwright/Cypress suites with GitHub Actions continuous gates<br>
• <strong>AI &amp; Security Audits</strong>: LLM guardrail evaluations, prompt injections &amp; OWASP Top 10 checks<br>
• <strong>Verified Track Record</strong>: 200+ projects tested &amp; 4,000+ critical bugs identified<br><br>
Would you like to explore any of these topics, or schedule a direct consultation with Ranjith?<br><br>
<button onclick="window.openEnquiryModalGlobal()" class="chat-action-btn"><span>Book QA Consultation</span> <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>`, true);

    }, 300);
  }

  // Global window function for inline chat buttons
  window.openEnquiryModalGlobal = function () {
    closeAiChat();
    openEnquiryModal();
  };

  // Chat chips handler
  document.querySelectorAll('.chat-chip').forEach(chip => {
    chip.addEventListener('click', function () {
      const queryType = this.getAttribute('data-chip') || this.getAttribute('data-query') || this.textContent.trim();
      const labelText = this.querySelector('span:not(.chip-icon)')?.textContent.trim() || this.textContent.trim();
      appendChatBubble('user', labelText);
      handleAiQuery(queryType);
    });
  });

  // Chat input typing state for send button
  if (aichatInput && aichatSendBtn) {
    aichatInput.addEventListener('input', () => {
      if (aichatInput.value.trim().length > 0) {
        aichatSendBtn.classList.add('has-text');
      } else {
        aichatSendBtn.classList.remove('has-text');
      }
    });
  }

  // Chat form submit
  if (aichatForm) {
    aichatForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const val = aichatInput ? aichatInput.value.trim() : '';
      if (!val) return;

      // Launch animation on send button
      if (aichatSendBtn) {
        aichatSendBtn.classList.add('sending');
        setTimeout(() => aichatSendBtn.classList.remove('sending'), 500);
      }

      appendChatBubble('user', val);
      if (aichatInput) {
        aichatInput.value = '';
        aichatSendBtn?.classList.remove('has-text');
      }

      handleAiQuery(val);
    });
  }
  } // End legacy chatbot handlers bypassed

  // Close modals on Escape key
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      const modalEl = document.getElementById('enquiry-modal');
      const chatEl = document.getElementById('aichat-drawer');
      if (modalEl && modalEl.classList.contains('open') && typeof closeEnquiryModal === 'function') {
        closeEnquiryModal();
      }
      if (chatEl && chatEl.classList.contains('open')) {
        if (typeof window.closeAiChat === 'function') {
          window.closeAiChat();
        } else {
          chatEl.classList.remove('open');
          document.body.classList.remove('aichat-open');
        }
      }
    }
  });

  // 4. Back To Top Button
  const backToTopBtn = document.querySelector('.back-to-top-btn');
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', () => {
      if (typeof window.scrollToSection === 'function') {
        window.scrollToSection('body');
      } else {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    });
  }

  // 5. Dynamic Footer Year
  const yearElement = document.getElementById('current-year');
  if (yearElement) {
    yearElement.textContent = new Date().getFullYear();
  }

  // 6. Professional Form Validation & AJAX Submitter
  // Handles: Name, Corporate Email, Phone (Max 15 digits), Scope, Message
  function setupFormValidation(formId, feedbackId, btnId) {
    const form = document.getElementById(formId);
    const feedback = document.getElementById(feedbackId);
    const btn = document.getElementById(btnId);

    if (!form) return;

    // Helper: Find or create error container below input
    function getErrorEl(field) {
      let err = form.querySelector(`#error-${field.id}`);
      if (!err) {
        err = document.createElement('div');
        err.className = 'field-error-msg';
        err.id = `error-${field.id}`;
        field.parentElement.appendChild(err);
      }
      return err;
    }

    function showFieldError(field, msg) {
      field.classList.add('is-invalid');
      field.classList.remove('is-valid');
      const err = getErrorEl(field);
      err.innerHTML = `
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="8" x2="12" y2="12"></line>
          <line x1="12" y1="16" x2="12.01" y2="16"></line>
        </svg>
        <span>${msg}</span>
      `;
      err.classList.add('visible');
    }

    function clearFieldError(field) {
      field.classList.remove('is-invalid');
      const err = getErrorEl(field);
      err.classList.remove('visible');
      err.innerHTML = '';
      if (field.value.trim().length > 0) {
        field.classList.add('is-valid');
      } else {
        field.classList.remove('is-valid');
      }
    }

    // Single Field Validator
    function validateField(field) {
      const val = field.value.trim();
      const name = field.name || field.id;

      // 1. Phone Field Validation (Strict Max 15 Digits as requested)
      if (field.type === 'tel' || name === 'phone' || field.id.includes('phone')) {
        if (!val && field.hasAttribute('required')) {
          return 'Please enter your phone number.';
        }
        if (val) {
          const digits = val.replace(/\D/g, '');
          if (digits.length < 7) {
            return 'Phone number must have at least 7 digits.';
          }
          if (digits.length > 15) {
            return 'Phone number cannot exceed 15 digits.';
          }
          if (!/^\+?[0-9\s\-()]{7,20}$/.test(val)) {
            return 'Please enter a valid phone number format.';
          }
        }
        return null;
      }

      // 2. Name Validation
      if (name === 'name' || field.id.includes('name')) {
        if (!val) return 'Please enter your name.';
        if (val.length < 2) return 'Name must be at least 2 characters.';
        if (!/^[a-zA-Z\s.'-]+$/.test(val)) return 'Name should contain letters only.';
        return null;
      }

      // 3. Email Validation
      if (field.type === 'email' || name === 'email') {
        if (!val) return 'Please enter your email address.';
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(val)) return 'Please enter a valid corporate email.';
        return null;
      }

      // 4. Service / Dropdown Selection
      if (field.tagName === 'SELECT' || name === 'service' || field.id === 'modal-service') {
        if (!val || val === '') return 'Please select a testing scope.';
        return null;
      }

      // 5. Message / Details Textarea
      if (field.tagName === 'TEXTAREA' || name === 'message') {
        if (!val) return 'Please provide your project details or QA objectives.';
        if (val.length < 10) return 'Please enter at least 10 characters.';
        return null;
      }

      // 6. Generic Required Check
      if (field.hasAttribute('required') && !val) {
        return 'This field is required.';
      }

      return null;
    }

    // Attach Real-Time Listeners to All Form Fields
    const fields = form.querySelectorAll('input:not([type="hidden"]), select, textarea');

    fields.forEach(field => {
      // Real-time phone sanitization & strict 15-digit capping
      if (field.type === 'tel' || field.name === 'phone' || field.id.includes('phone')) {
        field.setAttribute('maxlength', '15');
        field.setAttribute('inputmode', 'tel');

        field.addEventListener('input', function () {
          const raw = this.value;
          const hasPlus = raw.startsWith('+');
          let digits = raw.replace(/\D/g, '');

          // Strictly cap at 15 digits
          if (digits.length > 15) {
            digits = digits.slice(0, 15);
          }

          this.value = (hasPlus ? '+' : '') + digits;

          // Re-validate if previously flagged
          if (this.classList.contains('is-invalid')) {
            const err = validateField(this);
            if (!err) clearFieldError(this);
          }
        });
      }

      // Validate on Blur
      field.addEventListener('blur', function () {
        const error = validateField(this);
        if (error) {
          showFieldError(this, error);
        } else {
          clearFieldError(this);
        }
      });

      // Clear on Input when user starts typing valid input
      field.addEventListener('input', function () {
        if (this.classList.contains('is-invalid')) {
          const error = validateField(this);
          if (!error) {
            clearFieldError(this);
          }
        }
      });

      if (field.tagName === 'SELECT') {
        field.addEventListener('change', function () {
          const error = validateField(this);
          if (error) {
            showFieldError(this, error);
          } else {
            clearFieldError(this);
          }
        });
      }
    });

    // Form Submission Handling
    form.addEventListener('submit', async function (e) {
      e.preventDefault();

      let hasErrors = false;
      let firstInvalidField = null;

      // Validate every interactive field
      fields.forEach(field => {
        const error = validateField(field);
        if (error) {
          showFieldError(field, error);
          hasErrors = true;
          if (!firstInvalidField) firstInvalidField = field;
        } else {
          clearFieldError(field);
        }
      });

      // Also validate Custom Dropdown Service if present
      const serviceHidden = form.querySelector('[name="service"]');
      if (serviceHidden && serviceHidden.hasAttribute('required')) {
        const serviceErr = validateField(serviceHidden);
        const triggerBtn = form.querySelector('.custom-dropdown-trigger');
        const errServiceEl = form.querySelector('#error-modal-service');
        if (serviceErr) {
          hasErrors = true;
          if (triggerBtn) {
            triggerBtn.classList.add('is-invalid');
            triggerBtn.classList.remove('modalInputShake');
            void triggerBtn.offsetWidth;
            triggerBtn.classList.add('modalInputShake');
            if (!firstInvalidField) firstInvalidField = triggerBtn;
          }
          if (errServiceEl) {
            errServiceEl.innerHTML = `
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
              </svg>
              <span>${serviceErr}</span>
            `;
            errServiceEl.classList.add('visible');
          }
        } else {
          if (triggerBtn) triggerBtn.classList.remove('is-invalid');
          if (errServiceEl) {
            errServiceEl.classList.remove('visible');
            errServiceEl.innerHTML = '';
          }
        }
      }

      if (hasErrors) {
        // Tactile shake animation
        const modalCard = form.closest('.modal-card') || form;
        modalCard.classList.remove('shake');
        void modalCard.offsetWidth; // Reflow
        modalCard.classList.add('shake');

        if (firstInvalidField) {
          firstInvalidField.focus();
        }
        return;
      }

      // Form is 100% valid -> Send AJAX request
      if (feedback) {
        feedback.style.display = 'none';
        feedback.className = 'form-feedback';
        feedback.innerHTML = '';
      }

      const originalBtnText = btn ? btn.innerHTML : 'Submit';
      if (btn) {
        btn.disabled = true;
        btn.innerHTML = `
          <span class="btn-spinner" style="margin-right: 10px;"></span>
          <span>Transmitting Request...</span>
        `;
      }

      const formData = new FormData(form);

      try {
        const response = await fetch('process-contact.php', {
          method: 'POST',
          headers: { 'X-Requested-With': 'XMLHttpRequest' },
          body: formData
        });

        const result = await response.json();

        if (response.ok && result.success) {
          const successView = document.getElementById('modal-success-view');
          if (formId === 'modal-enquiry-form' && successView) {
            form.style.display = 'none';
            successView.style.display = 'block';
            const ticketEl = document.getElementById('success-ticket-id');
            if (ticketEl && result.ticket_id) {
              ticketEl.innerHTML = `Confirmation Ticket: <strong>${result.ticket_id}</strong>`;
            }
          } else if (feedback) {
            feedback.className = 'form-feedback success';
            feedback.style.display = 'block';
            feedback.innerHTML = `
              <strong>✓ Consultation Request Transmitted!</strong><br>
              ${result.message}<br>
              <small style="opacity:0.85;">Confirmation Ticket: <strong>${result.ticket_id}</strong></small>
            `;
          }

          form.reset();
          fields.forEach(f => f.classList.remove('is-valid'));
          if (typeof window.resetCustomDropdown === 'function') {
            window.resetCustomDropdown();
          }

          if (result.new_csrf) {
            document.querySelectorAll('input[name="csrf_token"]').forEach(input => {
              input.value = result.new_csrf;
            });
          }

          if (formId !== 'modal-enquiry-form') {
            setTimeout(() => {
              if (feedback) feedback.style.display = 'none';
            }, 4500);
          }
        } else {
          if (feedback) {
            feedback.className = 'form-feedback error';
            feedback.style.display = 'block';
            let errHtml = `<strong>Transmission Failed:</strong> ${result.message || 'Please check the required fields.'}`;
            if (result.errors) {
              errHtml += '<ul style="margin-top:0.4rem;padding-left:1.25rem;">';
              for (const [field, msg] of Object.entries(result.errors)) {
                errHtml += `<li>${msg}</li>`;
                const fieldEl = form.querySelector(`[name="${field}"]`);
                if (fieldEl) showFieldError(fieldEl, msg);
              }
              errHtml += '</ul>';
            }
            feedback.innerHTML = errHtml;
          }
        }
      } catch (err) {
        if (feedback) {
          feedback.className = 'form-feedback error';
          feedback.style.display = 'block';
          feedback.innerHTML = `<strong>Network Error:</strong> Unable to connect to transmission gateway. Please reach out directly at <a href="mailto:ranjith7317002@gmail.com" style="text-decoration:underline;color:#FFD600;">ranjith7317002@gmail.com</a> or WhatsApp at <a href="https://wa.me/918921570799" style="text-decoration:underline;color:#25D366;">+91 89215 70799</a>.`;
        }
      } finally {
        if (btn) {
          btn.disabled = false;
          btn.innerHTML = originalBtnText;
        }
      }
    });
  }

  // 7. Custom Dropdown Controller (ARIA, Keyboard Navigation, Option Stagger)
  function initModalCustomDropdown() {
    const dropdownWrap = document.getElementById('modal-scope-dropdown');
    if (!dropdownWrap) return;

    const trigger = document.getElementById('modal-dropdown-trigger');
    const popover = document.getElementById('modal-dropdown-popover');
    const hiddenInput = document.getElementById('modal-service');
    const options = Array.from(popover.querySelectorAll('.dropdown-option'));
    const selectedLabel = trigger.querySelector('.dropdown-selected-label');
    let focusedIndex = -1;

    function openDropdown() {
      dropdownWrap.classList.add('open');
      const row = dropdownWrap.closest('.form-row');
      if (row) row.classList.add('dropdown-open');
      const item = dropdownWrap.closest('.modal-form-item');
      if (item) item.classList.add('has-dropdown');
      trigger.setAttribute('aria-expanded', 'true');
      const selectedOpt = popover.querySelector('.dropdown-option.is-selected');
      if (selectedOpt) {
        focusedIndex = options.indexOf(selectedOpt);
      } else {
        focusedIndex = 0;
      }
      updateFocusedOption(focusedIndex);
    }

    function closeDropdown(refocusTrigger = true) {
      dropdownWrap.classList.remove('open');
      const row = dropdownWrap.closest('.form-row');
      if (row) row.classList.remove('dropdown-open');
      const item = dropdownWrap.closest('.modal-form-item');
      if (item) item.classList.remove('has-dropdown');
      trigger.setAttribute('aria-expanded', 'false');
      options.forEach(opt => opt.classList.remove('is-focused'));
      focusedIndex = -1;
      if (refocusTrigger) trigger.focus();
    }

    function toggleDropdown() {
      if (dropdownWrap.classList.contains('open')) {
        closeDropdown(false);
      } else {
        openDropdown();
      }
    }

    function selectOption(option) {
      const val = option.getAttribute('data-value');
      const code = option.getAttribute('data-code');
      const title = option.getAttribute('data-title');
      const iconSpan = option.querySelector('.option-icon');
      const iconClass = iconSpan ? iconSpan.className : 'option-icon';

      hiddenInput.value = val;
      hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));

      // Update trigger label with colored rounded badge + title
      selectedLabel.innerHTML = `
        <span class="trigger-badge-icon ${iconClass}">${code}</span>
        <span>${title}</span>
      `;

      // Update selection status
      options.forEach(opt => {
        const isCur = opt === option;
        opt.classList.toggle('is-selected', isCur);
        opt.setAttribute('aria-selected', isCur ? 'true' : 'false');
      });

      // Clear error on trigger
      trigger.classList.remove('is-invalid');
      const errEl = document.getElementById('error-modal-service');
      if (errEl) {
        errEl.classList.remove('visible');
        errEl.innerHTML = '';
      }

      closeDropdown(true);
    }

    function updateFocusedOption(index) {
      if (index < 0) index = 0;
      if (index >= options.length) index = options.length - 1;
      focusedIndex = index;
      options.forEach((opt, i) => {
        opt.classList.toggle('is-focused', i === index);
        if (i === index) {
          opt.scrollIntoView({ block: 'nearest' });
        }
      });
    }

    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      toggleDropdown();
    });

    // Keyboard navigation on trigger button
    trigger.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowDown' || e.key === 'ArrowUp' || e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        if (!dropdownWrap.classList.contains('open')) {
          openDropdown();
        } else {
          if (e.key === 'ArrowDown') updateFocusedOption(focusedIndex + 1);
          if (e.key === 'ArrowUp') updateFocusedOption(focusedIndex - 1);
          if (e.key === 'Enter' || e.key === ' ') {
            if (focusedIndex >= 0 && options[focusedIndex]) {
              selectOption(options[focusedIndex]);
            }
          }
        }
      } else if (e.key === 'Escape' && dropdownWrap.classList.contains('open')) {
        e.preventDefault();
        closeDropdown(true);
      }
    });

    // Option interaction
    options.forEach((opt, idx) => {
      opt.addEventListener('click', (e) => {
        e.stopPropagation();
        selectOption(opt);
      });
      opt.addEventListener('mouseenter', () => {
        updateFocusedOption(idx);
      });
    });

    // Popover keyboard navigation
    popover.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowDown') {
        e.preventDefault();
        updateFocusedOption((focusedIndex + 1) % options.length);
      } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        updateFocusedOption((focusedIndex - 1 + options.length) % options.length);
      } else if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        if (focusedIndex >= 0 && options[focusedIndex]) {
          selectOption(options[focusedIndex]);
        }
      } else if (e.key === 'Escape') {
        e.preventDefault();
        closeDropdown(true);
      }
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
      if (!dropdownWrap.contains(e.target)) {
        dropdownWrap.classList.remove('open');
        const row = dropdownWrap.closest('.form-row');
        if (row) row.classList.remove('dropdown-open');
        const item = dropdownWrap.closest('.modal-form-item');
        if (item) item.classList.remove('has-dropdown');
        trigger.setAttribute('aria-expanded', 'false');
        options.forEach(opt => opt.classList.remove('is-focused'));
      }
    });

    window.resetCustomDropdown = function () {
      hiddenInput.value = '';
      dropdownWrap.classList.remove('open');
      const row = dropdownWrap.closest('.form-row');
      if (row) row.classList.remove('dropdown-open');
      const item = dropdownWrap.closest('.modal-form-item');
      if (item) item.classList.remove('has-dropdown');
      selectedLabel.innerHTML = '<span class="dropdown-placeholder">Select scope of testing...</span>';
      options.forEach(opt => {
        opt.classList.remove('is-selected', 'is-focused');
        opt.setAttribute('aria-selected', 'false');
      });
      trigger.classList.remove('is-invalid');
    };
  }

  // 8. Textarea Character Counter (0 / 500)
  function initModalTextareaCounter() {
    const textarea = document.getElementById('modal-details');
    const counter = document.getElementById('char-count');
    if (!textarea || !counter) return;

    textarea.addEventListener('input', function () {
      counter.textContent = this.value.length;
    });
  }

  // Initialize interactive features
  initModalCustomDropdown();
  initModalTextareaCounter();

  // Initialize validation for both modal and standalone contact form
  setupFormValidation('portfolio-contact-form', 'form-feedback', 'contact-submit-btn');
  setupFormValidation('modal-enquiry-form', 'modal-form-feedback', 'modal-submit-btn');
});
