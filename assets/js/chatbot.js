/**
 * RANJITH C V — DEDICATED AI ASSISTANT CHATBOT ENGINE
 * Complete rich animation system, spring micro-interactions, word-by-word streaming,
 * robot eye tracking, chip ripple physics, and executive QA knowledge base.
 */

(function () {
  'use strict';

  /* ==========================================================================
     GLOBAL CONFIGURATION & TIMINGS (Tweakable in one object)
     ========================================================================== */
  const CHATBOT_CONFIG = {
    timings: {
      openDuration: 420,
      closeDuration: 200,
      staggerDelay: 80,
      typingMin: 700,
      typingMax: 1100,
      typewriterSpeed: 25, // ms per word
      speechBubbleInterval: 8000,
      speechBubbleDuration: 4000,
      placeholderCycle: 3000
    },
    placeholders: [
      "Ask about QA practices, bug metrics...",
      "Ask about Playwright vs Cypress...",
      "Review Ranjith's 200+ tested projects...",
      "How do you test AI & LLM models?",
      "What is your regression test strategy?",
      "Ask about manual vs automated testing..."
    ]
  };

  const isReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  document.addEventListener('DOMContentLoaded', initChatbotEngine);

  function initChatbotEngine() {
    const drawer = document.getElementById('aichat-drawer');
    const toggleBtn = document.getElementById('btn-toggle-aichat');
    const closeBtn = document.getElementById('btn-close-aichat');
    const resetBtn = document.getElementById('btn-reset-aichat');
    const messagesBox = document.getElementById('aichat-messages');
    const form = document.getElementById('aichat-form');
    const input = document.getElementById('aichat-input');
    const sendBtn = document.getElementById('aichat-send-btn');
    const speechBubble = document.getElementById('aichat-speech-bubble');
    const unreadBadge = document.getElementById('aichat-unread-badge');
    const chipsShelf = document.getElementById('aichat-chips-shelf');

    if (!drawer) return;

    let hasOpenedChat = false;
    let speechTimer = null;
    let speechHideTimer = null;
    let placeholderInterval = null;
    let placeholderIndex = 0;
    let unreadCount = 0;
    let isStreaming = false;
    let currentStreamSkipper = null;

    /* ------------------------------------------------------------------------
       1. LAUNCHER BUTTON: EYE TRACKING & IDLE SPEECH BUBBLE
       ------------------------------------------------------------------------ */
    if (toggleBtn) {
      // Robot Eyes Track Cursor on Hover
      toggleBtn.addEventListener('mousemove', (e) => {
        if (isReduced) return;
        const rect = toggleBtn.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        const dx = Math.max(-1, Math.min(1, (e.clientX - centerX) / (rect.width / 2)));
        const dy = Math.max(-1, Math.min(1, (e.clientY - centerY) / (rect.height / 2)));
        toggleBtn.style.setProperty('--look-x', dx.toFixed(2));
        toggleBtn.style.setProperty('--look-y', dy.toFixed(2));
      });

      toggleBtn.addEventListener('mouseleave', () => {
        toggleBtn.style.removeProperty('--look-x');
        toggleBtn.style.removeProperty('--look-y');
      });

      // Quick squish on click before opening
      toggleBtn.addEventListener('click', (e) => {
        e.preventDefault();
        toggleBtn.classList.remove('squishing');
        void toggleBtn.offsetWidth;
        toggleBtn.classList.add('squishing');
        setTimeout(() => toggleBtn.classList.remove('squishing'), 350);

        toggleAiChat();
      });
    }

    // Periodic Speech Bubble Popup every ~8s
    function startSpeechBubbleCycle() {
      if (hasOpenedChat || isReduced || !speechBubble) return;

      speechTimer = setInterval(() => {
        if (hasOpenedChat || drawer.classList.contains('open')) {
          stopSpeechBubbleCycle();
          return;
        }

        speechBubble.classList.add('visible');

        if (speechHideTimer) clearTimeout(speechHideTimer);
        speechHideTimer = setTimeout(() => {
          speechBubble?.classList.remove('visible');
        }, CHATBOT_CONFIG.timings.speechBubbleDuration);
      }, CHATBOT_CONFIG.timings.speechBubbleInterval);
    }

    function stopSpeechBubbleCycle() {
      if (speechTimer) clearInterval(speechTimer);
      if (speechHideTimer) clearTimeout(speechHideTimer);
      speechBubble?.classList.remove('visible');
    }

    if (speechBubble) {
      speechBubble.addEventListener('click', () => {
        stopSpeechBubbleCycle();
        openAiChat();
      });
    }

    startSpeechBubbleCycle();

    /* ------------------------------------------------------------------------
       2. OPEN / CLOSE DRAWER & ESCAPE KEY
       ------------------------------------------------------------------------ */
    function openAiChat() {
      hasOpenedChat = true;
      stopSpeechBubbleCycle();
      clearUnread();

      drawer.classList.add('open');
      drawer.setAttribute('aria-hidden', 'false');
      document.body.classList.add('aichat-open');

      // Sequence focus on input
      setTimeout(() => {
        input?.focus();
        scrollToBottom();
      }, CHATBOT_CONFIG.timings.staggerDelay * 3);
    }

    function closeAiChat() {
      drawer.classList.remove('open');
      drawer.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('aichat-open');
    }

    function toggleAiChat() {
      if (drawer.classList.contains('open')) {
        closeAiChat();
      } else {
        openAiChat();
      }
    }

    if (closeBtn) closeBtn.addEventListener('click', closeAiChat);

    // Close on Escape key
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && drawer.classList.contains('open')) {
        closeAiChat();
      }
    });

    // Parallax panel background on mousemove
    drawer.addEventListener('mousemove', (e) => {
      if (isReduced) return;
      const rect = drawer.getBoundingClientRect();
      const nx = (e.clientX - rect.left) / rect.width - 0.5;
      const ny = (e.clientY - rect.top) / rect.height - 0.5;
      drawer.style.setProperty('--panel-gx', `${(nx * 30).toFixed(1)}px`);
      drawer.style.setProperty('--panel-gy', `${(ny * 30).toFixed(1)}px`);
    });

    drawer.addEventListener('mouseleave', () => {
      drawer.style.removeProperty('--panel-gx');
      drawer.style.removeProperty('--panel-gy');
    });

    /* ------------------------------------------------------------------------
       3. CONVERSATION RESET (360deg spin & smooth reset)
       ------------------------------------------------------------------------ */
    if (resetBtn) {
      resetBtn.addEventListener('click', () => {
        resetBtn.classList.remove('spinning');
        void resetBtn.offsetWidth;
        resetBtn.classList.add('spinning');
        setTimeout(() => resetBtn.classList.remove('spinning'), 600);

        if (!messagesBox) return;

        // Fade out old messages
        messagesBox.style.opacity = '0';
        messagesBox.style.transform = 'translateY(6px)';
        messagesBox.style.transition = 'all 0.22s ease';

        setTimeout(() => {
          messagesBox.innerHTML = `
            <div class="chat-bubble bot">
              Hi! 👋 I'm Ranjith's AI QA Assistant at <strong>Astraz Software Solutions</strong>. I can walk you through manual testing strategies, automated regression pipelines (Playwright &amp; Cypress), AI testing guardrails, or review Ranjith's 200+ tested projects. How can I assist your project today?
            </div>
          `;
          messagesBox.style.opacity = '1';
          messagesBox.style.transform = 'translateY(0)';
          if (input) input.value = '';
          sendBtn?.classList.remove('has-text');
          input?.focus();
          restoreChips();
        }, 220);
      });
    }

    /* ------------------------------------------------------------------------
       4. INPUT BAR & PLACEHOLDER CYCLING
       ------------------------------------------------------------------------ */
    function cyclePlaceholder() {
      if (!input || document.activeElement === input || input.value.trim().length > 0) return;

      input.classList.add('placeholder-fading');
      setTimeout(() => {
        placeholderIndex = (placeholderIndex + 1) % CHATBOT_CONFIG.placeholders.length;
        input.placeholder = CHATBOT_CONFIG.placeholders[placeholderIndex];
        input.classList.remove('placeholder-fading');
      }, 220);
    }

    function startPlaceholderCycle() {
      if (placeholderInterval) clearInterval(placeholderInterval);
      placeholderInterval = setInterval(cyclePlaceholder, CHATBOT_CONFIG.timings.placeholderCycle);
    }

    startPlaceholderCycle();

    if (input) {
      input.addEventListener('focus', () => {
        // Pause cycling while user is interacting
        if (placeholderInterval) clearInterval(placeholderInterval);
      });

      input.addEventListener('blur', () => {
        if (!input.value.trim()) startPlaceholderCycle();
      });

      input.addEventListener('input', () => {
        if (input.value.trim().length > 0) {
          sendBtn?.classList.add('has-text');
        } else {
          sendBtn?.classList.remove('has-text');
        }
      });
    }

    /* ------------------------------------------------------------------------
       5. SEND FORM SUBMISSION & FLYING PLANE ANIMATION
       ------------------------------------------------------------------------ */
    if (form) {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        const text = input ? input.value.trim() : '';
        if (!text) return;

        // Paper plane flyout animation
        if (sendBtn) {
          sendBtn.classList.remove('launching');
          void sendBtn.offsetWidth;
          sendBtn.classList.add('launching');
          setTimeout(() => sendBtn.classList.remove('launching'), 520);
        }

        // Append user bubble
        appendUserMessage(text);

        // Clear input smoothly
        if (input) {
          input.value = '';
          sendBtn?.classList.remove('has-text');
        }

        // Trigger bot AI analysis
        handleAiQuery(text);
      });
    }

    /* ------------------------------------------------------------------------
       6. QUICK-ACTION CHIPS: RIPPLE & FLYING LAUNCH
       ------------------------------------------------------------------------ */
    if (chipsShelf) {
      chipsShelf.querySelectorAll('.chat-chip').forEach((chip) => {
        chip.addEventListener('click', function (e) {
          const queryType = this.getAttribute('data-chip') || this.textContent.trim();
          const labelText = this.querySelector('span:not(.chip-icon)')?.textContent.trim() || this.textContent.trim();

          // Ripple effect from click coordinates
          const rect = this.getBoundingClientRect();
          const ripple = document.createElement('span');
          ripple.className = 'chip-ripple';
          const size = Math.max(rect.width, rect.height);
          ripple.style.width = ripple.style.height = `${size}px`;
          ripple.style.left = `${e.clientX - rect.left - size / 2}px`;
          ripple.style.top = `${e.clientY - rect.top - size / 2}px`;
          this.appendChild(ripple);
          setTimeout(() => ripple.remove(), 600);

          // Fly clicked chip up/into messages while fading out siblings
          this.classList.add('flying');
          chipsShelf.querySelectorAll('.chat-chip').forEach((c) => {
            if (c !== this) c.classList.add('fading-out');
          });

          // Append user message and send query
          setTimeout(() => {
            appendUserMessage(labelText);
            handleAiQuery(queryType);

            // Restore chips state after a short delay
            setTimeout(restoreChips, 1200);
          }, 320);
        });
      });
    }

    function restoreChips() {
      if (!chipsShelf) return;
      chipsShelf.querySelectorAll('.chat-chip').forEach((c) => {
        c.classList.remove('flying', 'fading-out');
      });
    }

    /* ------------------------------------------------------------------------
       7. MESSAGES: USER SLIDE-IN + TICK & BOT STREAMING
       ------------------------------------------------------------------------ */
    function scrollToBottom() {
      if (!messagesBox) return;
      messagesBox.scrollTo({
        top: messagesBox.scrollHeight,
        behavior: 'smooth'
      });
    }

    function appendUserMessage(text) {
      if (!messagesBox) return;
      const bubble = document.createElement('div');
      bubble.className = 'chat-bubble user';

      const textNode = document.createElement('div');
      textNode.textContent = text;
      bubble.appendChild(textNode);

      // Delivered tick
      const tick = document.createElement('span');
      tick.className = 'msg-delivered-tick';
      tick.innerHTML = 'Delivered &#10003;&#10003;';
      bubble.appendChild(tick);

      messagesBox.appendChild(bubble);
      scrollToBottom();
    }

    function showTypingIndicator() {
      if (!messagesBox) return null;
      const typing = document.createElement('div');
      typing.className = 'chat-bubble bot typing';
      typing.id = 'bot-typing-indicator';
      typing.innerHTML = '<span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span>';
      messagesBox.appendChild(typing);
      scrollToBottom();
      return typing;
    }

    function removeTypingIndicator() {
      const el = document.getElementById('bot-typing-indicator');
      if (el) el.remove();
    }

    /**
     * Streams in text word-by-word with fade animation.
     * Clicking the bubble skips the streaming and reveals all text instantly.
     */
    function streamBotMessage(htmlString) {
      if (!messagesBox) return;

      const bubble = document.createElement('div');
      bubble.className = 'chat-bubble bot';
      messagesBox.appendChild(bubble);

      if (isReduced) {
        bubble.innerHTML = htmlString;
        scrollToBottom();
        checkUnreadNotification();
        return;
      }

      // Parse HTML tokens (tags vs plain words)
      const tokenRegex = /(<[^>]+>|[\s\n\r]+|[^\s<]+)/g;
      const tokens = htmlString.match(tokenRegex) || [htmlString];
      let tokenIndex = 0;
      let streamFinished = false;

      function finishImmediately() {
        if (streamFinished) return;
        streamFinished = true;
        bubble.innerHTML = htmlString;
        scrollToBottom();
        bubble.removeEventListener('click', finishImmediately);
        checkUnreadNotification();
      }

      bubble.addEventListener('click', finishImmediately);
      currentStreamSkipper = finishImmediately;

      function step() {
        if (streamFinished) return;

        if (tokenIndex >= tokens.length) {
          streamFinished = true;
          bubble.innerHTML = htmlString;
          scrollToBottom();
          bubble.removeEventListener('click', finishImmediately);
          checkUnreadNotification();
          return;
        }

        const token = tokens[tokenIndex++];
        if (token.startsWith('<') || /^\s+$/.test(token)) {
          // HTML tags or whitespace append immediately
          bubble.innerHTML += token;
          step();
        } else {
          // Plain word: append with subtle fade
          const wordSpan = document.createElement('span');
          wordSpan.className = 'word-fade';
          wordSpan.textContent = token;
          bubble.appendChild(wordSpan);
          scrollToBottom();
          setTimeout(step, CHATBOT_CONFIG.timings.typewriterSpeed);
        }
      }

      step();
    }

    function checkUnreadNotification() {
      if (!drawer.classList.contains('open')) {
        unreadCount++;
        if (unreadBadge) {
          unreadBadge.textContent = unreadCount.toString();
          unreadBadge.classList.add('active');
        }
      }
    }

    function clearUnread() {
      unreadCount = 0;
      if (unreadBadge) {
        unreadBadge.classList.remove('active');
      }
    }

    /* ------------------------------------------------------------------------
       8. EXECUTIVE QA KNOWLEDGE BASE QUERY HANDLER
       ------------------------------------------------------------------------ */
    function handleAiQuery(query) {
      const q = (query || '').toLowerCase().trim();
      if (!q) return;

      showTypingIndicator();

      const typingDuration = Math.floor(
        Math.random() * (CHATBOT_CONFIG.timings.typingMax - CHATBOT_CONFIG.timings.typingMin) +
        CHATBOT_CONFIG.timings.typingMin
      );

      setTimeout(() => {
        removeTypingIndicator();

        // 1. GREETINGS & COURTESY
        const isHowAreYou = /how\s*(are|r)\s*(you|u)|how's\s*it\s*going|how\s*do\s*you\s*do|how\s*is\s*everything|hru\b/i.test(q);
        const isGreeting = /^(h[yei]+|hello|helo|heyy?|greetings|good\s*(morning|afternoon|evening)|sup|howdy|yo|ola|namaste|whats?\s*up|wassup)\b/i.test(q);

        if (isHowAreYou) {
          streamBotMessage(`Hello! I'm doing great, thank you so much for asking! 😊 How are you doing today?<br><br>
I'm Ranjith's AI QA Assistant at <strong>Astraz Software Solutions</strong>. I'm here to help you with:<br>
• <strong>Manual &amp; Automated QA</strong>: Functional matrices, Playwright, Cypress &amp; CI/CD<br>
• <strong>Proven Track Record</strong>: 200+ commercial projects tested, 4,000+ critical bugs identified<br>
• <strong>AI Testing</strong>: Hallucination audits, BLEU scoring &amp; prompt injection defense.<br><br>
What QA challenges can I help you unpack today?`);
          return;
        }

        if (isGreeting) {
          streamBotMessage(`Hi there! 👋 Welcome! I'm Ranjith's AI QA Assistant at <strong>Astraz Software Solutions</strong>.<br><br>
Whether you're planning a new web/mobile launch, looking to automate existing regression suites, or need enterprise-grade security testing, I'm here to help.<br><br>
Feel free to ask a question or tap one of the suggested topics below!`);
          return;
        }

        // 2. WHO IS RANJITH & CURRENT POSITION
        if (q.includes('who is') || q.includes('about ranjith') || q.includes('tell me about') || q.includes('ranjith')) {
          streamBotMessage(`<strong>Ranjith C V</strong> is a <strong>Senior Software Tester</strong> at <strong>Astraz Software Solutions</strong>.<br><br>
He specializes in delivering bulletproof software quality across Web, Mobile, and AI platforms. With over <strong>200+ verified projects tested</strong> and <strong>4,000+ critical bugs identified</strong>, he guarantees zero defect escapes into production.`);
          return;
        }

        if (q.includes('experience') || q.includes('company') || q.includes('astraz') || q.includes('current role')) {
          streamBotMessage(`Ranjith is currently leading quality assurance as <strong>Senior Software Tester at Astraz Software Solutions</strong> (career started on <strong>June 10, 2025</strong>).<br><br>
At Astraz, he is responsible for comprehensive manual testing, automated regression pipelines, AI model evaluations, and ensuring 100% production-ready release confidence for enterprise clients across India and the UAE.`);
          return;
        }

        // 3. MANUAL QA
        if (q.includes('manual') || q.includes('exploratory') || q.includes('smoke') || q.includes('sanity') || q.includes('test case')) {
          streamBotMessage(`<strong>Ranjith's Manual Testing Practice:</strong><br><br>
• <strong>Edge-Case Defect Hunting</strong>: Uncovering elusive defects that automated scripts miss, including state race conditions and UI render glitches.<br>
• <strong>Cross-Browser &amp; OS Coverage</strong>: Rigorous compatibility validation across Chrome, Safari, Firefox, Edge, Android &amp; iOS.<br>
• <strong>Defect Traceability</strong>: Clear, reproducible bug reports with steps, environment telemetry, video evidence, and severity metrics.<br>
• <strong>Zero Escaped Bugs</strong>: 99.8% production deploy release stability.`);
          return;
        }

        // 4. AUTOMATION & CI/CD
        if (q.includes('automation') || q.includes('playwright') || q.includes('cypress') || q.includes('selenium') || q.includes('ci/cd') || q.includes('pipeline')) {
          streamBotMessage(`<strong>Test Automation &amp; CI/CD Architecture:</strong><br><br>
Ranjith builds modern, resilient, non-flaky end-to-end automation suites:<br>
• <strong>Playwright &amp; Cypress</strong>: Modular Page Object Model (POM) architecture.<br>
• <strong>85% Continuous Regression Coverage</strong>: Slashing manual regression cycles from days to under 15 minutes.<br>
• <strong>GitHub Actions CI/CD</strong>: Headless parallel test runs, automated failure screenshots, and PR validation gates.<br>
• <strong>API Automation</strong>: REST &amp; GraphQL contract testing with Postman and Newman.`);
          return;
        }

        // 5. AI TESTING & LLM VERIFICATION
        if (q.includes('ai') || q.includes('llm') || q.includes('rag') || q.includes('hallucination') || q.includes('prompt')) {
          streamBotMessage(`<strong>AI Testing &amp; LLM Quality Engineering:</strong><br><br>
Ranjith ensures Generative AI applications perform safely and predictably:<br>
• <strong>Hallucination Detection &amp; BLEU Scoring</strong>: Measuring output factual accuracy against ground truth.<br>
• <strong>Prompt Injection Defense</strong>: Adversarial jailbreak and system-prompt extraction penetration audits.<br>
• <strong>RAG Verification</strong>: Context retrieval relevance and citation precision testing.<br>
• <strong>API Guardrails</strong>: Rate limiting, schema validation, and structured JSON latency testing.`);
          return;
        }

        // 6. TESTED PROJECTS (200+)
        if (q.includes('project') || q.includes('portfolio') || q.includes('lensfed') || q.includes('work') || q.includes('200')) {
          streamBotMessage(`<strong>Featured Projects Tested by Ranjith:</strong><br><br>
1. <strong>LENSFED Welfare App</strong> (Mobile member benefits, biometrics &amp; offline data sync)<br>
2. <strong>Asraya KVVES Kannur App</strong> (Financial welfare disbursement &amp; PDF statement calculation)<br>
3. <strong>AAWK Mobile App</strong> (Emergency roadside breakdown dispatch &amp; push notification matrices)<br>
4. <strong>Hote Restaurant Staff App</strong> (High-speed table order concurrency &amp; real-time KOT routing)<br><br>
You can explore the live interactive cards in the <strong>Featured QA Projects</strong> section!`);
          return;
        }

        // 7. REGRESSION VS RETESTING
        if (q.includes('regression') || q.includes('retesting')) {
          streamBotMessage(`<strong>Regression Testing vs Retesting:</strong><br><br>
• <strong>Retesting</strong>: Verifies that a specific reported bug has been resolved and passes the original reproduction steps.<br>
• <strong>Regression Testing</strong>: Verifies that code modifications, bug fixes, or new features did NOT inadvertently break existing, previously working system functionality.<br><br>
Ranjith automates 85% of critical regression suites via CI/CD pipelines so every deploy is certified defect-free.`);
          return;
        }

        // 8. BOOK CONSULTATION
        if (q.includes('consultation') || q.includes('book') || q.includes('hire') || q.includes('contact') || q.includes('call') || q.includes('rate')) {
          streamBotMessage(`Ranjith is open for freelance consulting, automated framework audits, and enterprise QA engagements.<br><br>
<button type="button" class="chat-action-btn" onclick="openEnquiryModalGlobal()">
  <span>Book a Testing Consultation &rarr;</span>
</button><br><br>
Or connect directly via WhatsApp anytime!`);
          return;
        }

        // DEFAULT INTELLIGENT QA FALLBACK
        streamBotMessage(`Great question regarding "${escapeHtml(query)}"!<br><br>
In software quality assurance, Ranjith focuses on three non-negotiable pillars:<br>
1. <strong>Exhaustive Coverage</strong>: Zero untested critical paths.<br>
2. <strong>Speed &amp; Automation</strong>: 85% continuous regression via CI/CD.<br>
3. <strong>Measurable Stability</strong>: 99.8% production sign-off confidence.<br><br>
Would you like to explore <strong>Manual QA</strong>, <strong>Automation Frameworks</strong>, or <strong>AI Testing</strong> in more detail?`);
      }, typingDuration);
    }

    function escapeHtml(text) {
      const div = document.createElement('div');
      div.textContent = text || '';
      return div.innerHTML;
    }
  }

  // Global helper for in-chat buttons
  window.openEnquiryModalGlobal = function () {
    const drawer = document.getElementById('aichat-drawer');
    if (drawer) {
      drawer.classList.remove('open');
      document.body.classList.remove('aichat-open');
    }
    if (typeof window.openEnquiryModal === 'function') {
      window.openEnquiryModal();
    }
  };

})();
