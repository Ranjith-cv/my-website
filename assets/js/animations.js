/**
 * RANJITH C V — INVENTIVE PORTFOLIO ANIMATION ENGINE (RISHI THAKUR THEME)
 * 3D Spiral Notebook Flip, Interactive Doors, Time Travel, Live Clock & Pull Cord
 */

(function () {
  'use strict';

  // Wait for DOM
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initRishiPortfolio);
  } else {
    initRishiPortfolio();
  }

  function initRishiPortfolio() {
    // 1. Live Clock & Date Engine
    initLiveClock();

    // 2. Interactive Lamp Pull-Cord
    initLampPullCord();

    // 3. 3D Spiral Notebook Flipping Roles Animation
    initSpiralNotebookFlipper();

    // 3b. Interactive 3D Depth & Mouse Parallax on Portrait
    initPortraitParallax();

    // 4. Interactive Arched Doors Engine (Cinematic 3D Zoom & Portal Entry)
    initArchedDoors();

    // 5. "Let's Go Back In Time" Timeline Engine
    initTimeTravelTimeline();

    // 6. Smooth Section Navigation
    initSmoothNavigation();

    // 7. GSAP ScrollTrigger Reveals
    initScrollReveals();

    // 8. Astraz Tested Projects Horizontal Gallery & Filter
    initHorizontalProjectGallery();

    // 9. Bug Catcher Specimen Section & 3D Interactive Bugs
    initBugCatcher();
  }

  /* ----------------------------------------------------
     1. LIVE REAL-TIME CLOCK
     ---------------------------------------------------- */
  function initLiveClock() {
    const timeDisplay = document.getElementById('live-time-display');
    const dateDisplay = document.getElementById('live-date-display');
    if (!timeDisplay) return;

    function updateTime() {
      const now = new Date();
      let hours = now.getHours();
      const minutes = now.getMinutes();
      const ampm = hours >= 12 ? 'pm' : 'am';
      hours = hours % 12;
      hours = hours ? hours : 12; // 0 should be 12
      const formattedMin = minutes < 10 ? '0' + minutes : minutes;
      timeDisplay.textContent = `${hours}:${formattedMin}${ampm}`;

      if (dateDisplay) {
        const day = now.getDate();
        const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
        const month = months[now.getMonth()];
        const year = now.getFullYear();
        dateDisplay.textContent = `${day}, ${month}, ${year}`;
      }
    }

    updateTime();
    setInterval(updateTime, 1000);
  }

  /* ----------------------------------------------------
     2. INTERACTIVE HANGING LAMP PULL CORD & PORTRAIT ANIMATION
     (Clicking the cord or portrait triggers studio flash & spring pop animation — NO website color change)
     ---------------------------------------------------- */
  function triggerPortraitAnimation() {
    const portraitWrapper = document.querySelector('.rishi-portrait-wrapper');
    if (!portraitWrapper) return;

    // Gentle bounce without filter shifts or flash overlays (zero image flicker)
    portraitWrapper.classList.remove('animating-pop');
    void portraitWrapper.offsetWidth;
    portraitWrapper.classList.add('animating-pop');

    // Synchronize ability card hop
    const abilityCard = portraitWrapper.querySelector('.ability-card-pill');
    if (abilityCard) {
      abilityCard.classList.remove('pill-hop');
      void abilityCard.offsetWidth;
      abilityCard.classList.add('pill-hop');
      setTimeout(() => abilityCard?.classList.remove('pill-hop'), 700);
    }

    setTimeout(() => {
      portraitWrapper.classList.remove('animating-pop');
    }, 600);
  }

  // Make globally available
  window.triggerPortraitAnimation = triggerPortraitAnimation;

  function initLampPullCord() {
    const cord = document.getElementById('lamp-cord');
    const portraitWrapper = document.querySelector('.rishi-portrait-wrapper');

    // Restore saved theme preference if present
    try {
      const savedTheme = localStorage.getItem('portfolio-theme');
      if (savedTheme === 'dark') {
        document.body.classList.add('dark-theme');
      } else if (savedTheme === 'light') {
        document.body.classList.remove('dark-theme');
      }
    } catch (e) {}

    // Soft mechanical tactile click synthesized with Web Audio API
    function playClickSound() {
      try {
        const AudioContextClass = window.AudioContext || window.webkitAudioContext;
        if (!AudioContextClass) return;
        const audioCtx = new AudioContextClass();
        const osc = audioCtx.createOscillator();
        const gain = audioCtx.createGain();
        osc.type = 'triangle';
        osc.frequency.setValueAtTime(580, audioCtx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(140, audioCtx.currentTime + 0.04);
        gain.gain.setValueAtTime(0.18, audioCtx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 0.04);
        osc.connect(gain);
        gain.connect(audioCtx.destination);
        osc.start();
        osc.stop(audioCtx.currentTime + 0.05);
      } catch (e) {
        // Silently ignore if blocked by audio policy
      }
    }

    if (cord) {
      cord.addEventListener('click', () => {
        // 1. Play tactile mechanical click
        playClickSound();

        // 2. Physical pull animation on cord
        cord.classList.remove('springing');
        cord.classList.add('pulling');

        const isCurrentlyDark = document.body.classList.contains('dark-theme');
        const willBeDark = !isCurrentlyDark;

        setTimeout(() => {
          // 3. Elastic spring release on cord
          cord.classList.remove('pulling');
          cord.classList.add('springing');

          // 4. Smoothly toggle website colour theme with zero image flicker
          if (willBeDark) {
            document.body.classList.add('dark-theme');
            try { localStorage.setItem('portfolio-theme', 'dark'); } catch(e) {}
          } else {
            document.body.classList.remove('dark-theme');
            try { localStorage.setItem('portfolio-theme', 'light'); } catch(e) {}
          }

          setTimeout(() => {
            cord.classList.remove('springing');
          }, 650);
        }, 120);
      });
    }

    // Also allow clicking directly on Ranjith's portrait to trigger the subtle portrait bounce
    if (portraitWrapper) {
      portraitWrapper.style.cursor = 'pointer';
      portraitWrapper.setAttribute('title', 'Click to animate portrait');
      portraitWrapper.addEventListener('click', (e) => {
        if (e.target.closest('.ability-card-pill')) return;
        playClickSound();
        triggerPortraitAnimation();
      });
    }
  }

  /* ----------------------------------------------------
     3. 3D SPIRAL NOTEBOOK FLIPPING ROLES ANIMATION
     (Exact Match to 00:00 - 00:03 in reference video)
     ---------------------------------------------------- */
  function initSpiralNotebookFlipper() {
    const roles = document.querySelectorAll('.spiral-role-text');
    const notebook = document.getElementById('spiral-notebook');
    const counter = document.getElementById('spiral-counter');
    if (!roles.length || !notebook) return;

    let currentIndex = 0;
    const totalRoles = roles.length;

    // Set initial counter (01 / 05)
    if (counter) counter.textContent = `01 / 0${totalRoles}`;

    setInterval(() => {
      const currentRole = roles[currentIndex];
      currentIndex = (currentIndex + 1) % totalRoles;
      const nextRole = roles[currentIndex];

      // Subtle notebook 3D bounce
      notebook.style.transform = 'perspective(900px) rotate(-1deg) translateY(-3px) scale(1.02)';
      setTimeout(() => {
        notebook.style.transform = '';
      }, 300);

      // Slide current out to top
      currentRole.classList.remove('active');
      currentRole.classList.add('prev');

      // Slide next in from bottom
      nextRole.classList.remove('prev');
      nextRole.classList.add('active');

      // Update counter index (01 / 05)
      if (counter) {
        counter.textContent = `0${currentIndex + 1} / 0${totalRoles}`;
      }

      setTimeout(() => {
        currentRole.classList.remove('prev');
      }, 600);
    }, 2800);
  }

  /* ----------------------------------------------------
     3b. INTERACTIVE 3D DEPTH & MOUSE PARALLAX ON PORTRAIT
     ---------------------------------------------------- */
  function initPortraitParallax() {
    const wrap = document.getElementById('hero-portrait-wrap');
    const hero = document.getElementById('hero');
    if (!wrap || !hero) return;

    let targetRotX = 0;
    let targetRotY = 0;
    let currentRotX = 0;
    let currentRotY = 0;

    hero.addEventListener('mousemove', (e) => {
      const rect = hero.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 to 0.5
      const y = (e.clientY - rect.top) / rect.height - 0.5; // -0.5 to 0.5

      targetRotY = x * 10; // -5deg to +5deg
      targetRotX = -y * 8; // -4deg to +4deg
    });

    hero.addEventListener('mouseleave', () => {
      targetRotX = 0;
      targetRotY = 0;
    });

    function updateParallax() {
      // Smooth linear interpolation (lerp)
      currentRotX += (targetRotX - currentRotX) * 0.08;
      currentRotY += (targetRotY - currentRotY) * 0.08;

      wrap.style.transform = `perspective(1000px) rotateX(${currentRotX.toFixed(2)}deg) rotateY(${currentRotY.toFixed(2)}deg) translateZ(8px)`;
      requestAnimationFrame(updateParallax);
    }
    updateParallax();
  }

  /* ----------------------------------------------------
     4. CINEMATIC 3D ARCHED DOORS ENGINE
     Zero-lag GPU enter/exit transitions & unified room
     ---------------------------------------------------- */
  function initArchedDoors() {
    const doors = document.querySelectorAll('.door-btn');
    const stage = document.getElementById('doors-stage');
    const room = document.getElementById('unified-service-room');
    if (!doors.length || !stage || !room) return;

    const SERVICES_DATA = [
      {
        num: '01 // 04',
        themeClass: 'room-theme-0',
        title: 'Manual Testing',
        tagline: 'FROM FIRST SPECIFICATION TO ZERO-DEFECT SIGN-OFF',
        desc: 'Exhaustive functional and exploratory defect hunting. Ensuring pixel-perfect design fidelity, bulletproof user journeys, and zero critical escapes across multi-browser responsive ecosystems.',
        bullets: [
          'Pixel-perfect Figma-to-DOM visual inspection & typography alignment',
          'Complex end-to-end user journeys & state transition validation',
          'Multi-browser compatibility matrix (Chrome, Safari, Edge, WebKit)',
          'Actionable Jira defect reporting with video proof & network payloads'
        ],
        tags: ['Functional QA', 'UI/UX Auditing', 'Cross-Browser', 'Exploratory', 'Regression Matrix'],
        telemetryTitle: 'MANUAL QA & EXPLORATORY AUDIT',
        telemetryBadge: 'VERIFIED',
        telemetryStatus: 'ALL 24 VIEWPORTS VALIDATED — 0 ESCAPES',
        lines: [
          { time: '09:14:02', text: 'Initializing test session across Chrome v122, Safari v17.4, Edge v122...', pass: false },
          { time: '09:14:03', text: 'Inspecting auth session tokens and secure cookie flags...', pass: true },
          { time: '09:14:05', text: 'Verifying 24 responsive breakpoints (320px to 2560px)...', pass: true },
          { time: '09:14:07', text: 'Executing exploratory edge-case checkout & payment flows...', pass: true },
          { time: '09:14:09', text: 'Cumulative Layout Shift CLS < 0.01 & WCAG 2.1 AA audit...', pass: true },
          { time: '09:14:10', text: 'Acceptance criteria 100% met. Sign-off ready for release.', pass: true }
        ]
      },
      {
        num: '02 // 04',
        themeClass: 'room-theme-1',
        title: 'Automation Testing',
        tagline: 'END-TO-END PIPELINES & CONTINUOUS REGRESSION GATES',
        desc: 'Scalable, maintainable test automation frameworks delivering 85% continuous regression coverage. Slashing QA cycles from days to minutes with zero flaky failures.',
        bullets: [
          'Modular Page Object Model (POM) architectures in Playwright & Cypress',
          'Java + TestNG/JUnit parallelized test grids with Maven orchestration',
          'GitHub Actions CI/CD automated gates blocking regressions on every PR',
          'Allure & HTML visual reporting with DOM snapshots & execution traces'
        ],
        tags: ['Playwright', 'Selenium WebDriver', 'Java / TestNG', 'Cypress', 'CI/CD Pipelines'],
        telemetryTitle: 'PARALLEL CI/CD AUTOMATION RUN',
        telemetryBadge: 'STABLE',
        telemetryStatus: '142 OF 142 SCENARIOS PASSED (12.4s)',
        lines: [
          { time: '14:20:00', text: 'Spawned 8 parallel Playwright workers on GitHub Actions runner...', pass: false },
          { time: '14:20:02', text: 'Running 142 automated specs across Chromium, WebKit & Firefox...', pass: false },
          { time: '14:20:05', text: 'REST API contract mocks validated against Swagger schema...', pass: true },
          { time: '14:20:08', text: 'Database transactional rollback & authentication state reuse...', pass: true },
          { time: '14:20:11', text: '142 of 142 end-to-end scenarios completed with 0 flakes...', pass: true },
          { time: '14:20:12', text: 'Allure artifacts generated. Pipeline green across all platforms.', pass: true }
        ]
      },
      {
        num: '03 // 04',
        themeClass: 'room-theme-2',
        title: 'AI Testing & LLM Verification',
        tagline: 'LLM DETERMINISM, ADVERSARIAL ATTACKS & GUARDRAILS',
        desc: 'Next-generation QA auditing for artificial intelligence, LLM pipelines, and automated workflows. Enforcing factual grounding, guardrail safety, and non-deterministic response tolerance.',
        bullets: [
          'Prompt injection, jailbreak resistance & adversarial stress testing',
          'RAG context retrieval relevance, hallucination detection & BLEU scoring',
          'Semantic deterministic assertion harnesses & token latency benchmarking',
          'Self-healing DOM test selectors & automated synthetic test data synthesis'
        ],
        tags: ['LLM Evaluation', 'Guardrail Audits', 'Prompt Injection Defense', 'RAG Verification', 'Self-Healing Tests'],
        telemetryTitle: 'LLM HARNESS & GUARDRAIL BENCHMARK',
        telemetryBadge: 'SECURE',
        telemetryStatus: '0 INJECTIONS ESCAPED — 100% GUARDRAIL COMPLIANT',
        lines: [
          { time: '18:02:11', text: 'Probing LLM endpoint with 85 adversarial jailbreak vectors...', pass: false },
          { time: '18:02:13', text: 'Guardrail validation: 100% of malicious prompt injections intercepted.', pass: true },
          { time: '18:02:15', text: 'RAG semantic grounding score: 0.985 / 1.0 (Zero hallucinations)...', pass: true },
          { time: '18:02:17', text: 'Token latency P99 benchmark: 480ms (Within 600ms SLA)...', pass: true },
          { time: '18:02:19', text: 'Output schema enforcement: JSON payload strictly verified...', pass: true },
          { time: '18:02:20', text: 'Model safety & alignment certified for production deployment.', pass: true }
        ]
      },
      {
        num: '04 // 04',
        themeClass: 'room-theme-3',
        title: 'Security & Vulnerability Auditing',
        tagline: 'ZERO-TRUST ACCESS, OWASP TOP 10 DEFENSE & LOAD RESILIENCE',
        desc: 'Rigorous penetration audits, role-based authorization verification, and data encryption testing protecting production infrastructure against critical security exploits.',
        bullets: [
          'OWASP Top 10 vulnerability sweeps (SQLi, XSS, CSRF, SSRF, IDOR)',
          'Role-Based Access Control (RBAC) & privilege escalation attack checks',
          'Cookie security flags, JWT signature tampering & session fixation tests',
          'REST API rate-limiting, CORS origin policy & data leakage auditing'
        ],
        tags: ['OWASP Top 10', 'Penetration Audits', 'RBAC Security', 'JWT Tampering', 'API Security'],
        telemetryTitle: 'ZERO-TRUST SECURITY PEN-TEST AUDIT',
        telemetryBadge: 'ZERO CVE',
        telemetryStatus: 'ALL GATES CLEARED — PRODUCTION SIGN-OFF APPROVED',
        lines: [
          { time: '22:45:10', text: 'Executing OWASP Top 10 automated vulnerability sweep...', pass: false },
          { time: '22:45:12', text: 'SQL Injection & XSS payload injection: 0 vulnerabilities found.', pass: true },
          { time: '22:45:14', text: 'Testing RBAC / IDOR authorization boundaries across roles...', pass: true },
          { time: '22:45:16', text: 'Token expiration & refresh rotation strictly enforced...', pass: true },
          { time: '22:45:18', text: 'Transport Layer Security: TLS 1.3 enforced, HSTS active...', pass: true },
          { time: '22:45:19', text: 'Security sign-off approved: Zero critical or high CVEs detected.', pass: true }
        ]
      }
    ];

    let isBusy = false;
    let activeDoor = null;
    let activeDoorIndex = null;
    let telemetryTimers = [];

    function clearTelemetryTimers() {
      telemetryTimers.forEach(t => clearTimeout(t));
      telemetryTimers = [];
    }

    function populateRoom(serviceIndex) {
      const data = SERVICES_DATA[serviceIndex];
      if (!data) return;

      room.className = 'unified-service-room ' + data.themeClass;
      const numEl = document.getElementById('room-service-num');
      if (numEl) numEl.textContent = data.num;
      const titleEl = document.getElementById('room-title');
      if (titleEl) titleEl.textContent = data.title;
      const tagEl = document.getElementById('room-tagline');
      if (tagEl) tagEl.textContent = data.tagline;
      const descEl = document.getElementById('room-desc');
      if (descEl) descEl.textContent = data.desc;

      // Check Bullets
      const bulletsList = document.getElementById('room-bullets-list');
      if (bulletsList) {
        bulletsList.innerHTML = data.bullets.map(b => `
          <li class="room-bullet-item">
            <span class="room-check-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
            <span>${b}</span>
          </li>
        `).join('');
      }

      // Tags
      const tagsContainer = document.getElementById('room-tags-container');
      if (tagsContainer) {
        tagsContainer.innerHTML = data.tags.map(t => `<span class="room-tag-pill">${t}</span>`).join('');
      }

      // Telemetry Card
      const termTitle = document.getElementById('terminal-title');
      if (termTitle) termTitle.innerHTML = `${data.telemetryTitle} &bull; CONSOLE`;
      const termBadge = document.getElementById('terminal-badge');
      if (termBadge) termBadge.textContent = data.telemetryBadge;
      const termFoot = document.getElementById('terminal-footer-text');
      if (termFoot) termFoot.textContent = data.telemetryStatus;

      const linesContainer = document.getElementById('terminal-lines-container');
      if (linesContainer) {
        linesContainer.innerHTML = data.lines.map((l, idx) => `
          <div class="terminal-line" id="term-line-${idx}">
            <span class="t-time">[${l.time}]</span>
            <span>${l.text}</span>
            ${l.pass ? '<span class="t-pass">PASS</span>' : ''}
          </div>
        `).join('');
      }
    }

    function revealTelemetryLines() {
      clearTelemetryTimers();
      const lines = room.querySelectorAll('.terminal-line');
      lines.forEach((line, idx) => {
        const timer = setTimeout(() => {
          line.classList.add('revealed');
        }, 160 + idx * 140);
        telemetryTimers.push(timer);
      });
    }

    // Exact Enter Timing
    function enterDoor(doorBtn) {
      if (isBusy) return;
      isBusy = true;
      activeDoor = doorBtn;
      activeDoorIndex = parseInt(doorBtn.getAttribute('data-door-id'), 10) || 0;

      // Add .open immediately to trigger door leaf animation
      doorBtn.classList.add('open');

      // Compute transform-origin centered directly on clicked door
      const doorRect = doorBtn.getBoundingClientRect();
      const stageRect = stage.getBoundingClientRect();
      const originX = ((doorRect.left + doorRect.width * 0.5) - stageRect.left) / stageRect.width * 100;
      const originY = ((doorRect.top + doorRect.height * 0.5) - stageRect.top) / stageRect.height * 100;
      stage.style.transformOrigin = `${originX.toFixed(2)}% ${originY.toFixed(2)}%`;

      // Apply will-change only while transition runs
      stage.style.willChange = 'transform, opacity';

      // at 450ms: zoom whole section toward door center and fade out
      setTimeout(() => {
        stage.classList.add('zoomed-in');
      }, 450);

      // at 1000ms: fade in full-screen room in door's colors
      setTimeout(() => {
        populateRoom(activeDoorIndex);
        room.scrollTop = 0;
        document.body.style.overflow = 'hidden';
        room.classList.add('active');
        stage.style.willChange = '';
        revealTelemetryLines();
        isBusy = false;
      }, 1000);
    }

    // Exact Exit Timing
    function exitDoor() {
      if (isBusy) return;
      isBusy = true;

      clearTelemetryTimers();

      // Fade out room immediately
      room.classList.remove('active');
      stage.style.willChange = 'transform, opacity';

      // at 250ms: zoom section back
      setTimeout(() => {
        document.body.style.overflow = '';
        stage.classList.remove('zoomed-in');
      }, 250);

      // at 650ms: close the door
      setTimeout(() => {
        if (activeDoor) {
          activeDoor.classList.remove('open');
        }
      }, 650);

      // at 1350ms: clean up and return focus to the door
      setTimeout(() => {
        stage.style.willChange = '';
        stage.style.transformOrigin = '';
        if (activeDoor) {
          try { activeDoor.focus(); } catch (e) {}
        }
        activeDoor = null;
        activeDoorIndex = null;
        isBusy = false;
      }, 1350);
    }

    // Event Listeners for Doors
    doors.forEach(doorBtn => {
      doorBtn.addEventListener('click', () => enterDoor(doorBtn));
      doorBtn.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          enterDoor(doorBtn);
        }
      });
    });

    // Event Listeners for Testing Types Tiles (Interactive Door Navigation)
    const testingTiles = document.querySelectorAll('.testing-tile');
    testingTiles.forEach(tile => {
      tile.addEventListener('click', () => {
        const typeId = tile.getAttribute('data-type');
        const doorMapping = {
          'manual': '0',
          'functional': '0',
          'usability': '0',
          'compatibility': '0',
          'uat': '0',
          'automation': '1',
          'regression': '1',
          'api': '1',
          'ai': '2',
          'performance': '3',
          'security': '3'
        };
        const doorId = doorMapping[typeId];
        if (doorId !== undefined) {
          const targetDoor = document.getElementById('door-btn-' + doorId);
          if (targetDoor) {
            targetDoor.scrollIntoView({ behavior: 'smooth', block: 'center' });
            setTimeout(() => {
              enterDoor(targetDoor);
            }, 450);
          }
        }
      });
      tile.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          tile.click();
        }
      });
    });

    const backBtn = document.getElementById('room-back-btn');
    if (backBtn) backBtn.addEventListener('click', exitDoor);

    const returnBtn = document.getElementById('room-return-btn');
    if (returnBtn) returnBtn.addEventListener('click', exitDoor);

    // Esc key also exits
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && room.classList.contains('active')) {
        exitDoor();
      }
    });

    // Global helper & footer link support
    window.enterDoorGlobal = function(id) {
      const targetDoor = document.getElementById(`door-btn-${id}`);
      if (targetDoor) {
        const section = document.getElementById('doors-section');
        if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
          setTimeout(() => enterDoor(targetDoor), 400);
        } else {
          enterDoor(targetDoor);
        }
      }
    };

    document.querySelectorAll('[data-door]').forEach(link => {
      link.addEventListener('click', (e) => {
        const id = link.getAttribute('data-door');
        const targetDoor = document.getElementById(`door-btn-${id}`);
        if (targetDoor) {
          e.preventDefault();
          window.enterDoorGlobal(id);
        }
      });
    });
  }

  /* ----------------------------------------------------
     5. "LET'S GO BACK IN TIME" TIMELINE ENGINE
     (Exact Match to 00:11 - 00:14 in reference video)
     ---------------------------------------------------- */
  function initTimeTravelTimeline() {
    const storyCards = document.querySelectorAll('.story-card');
    const yearDisplay = document.getElementById('story-active-year');
    if (!storyCards.length || !yearDisplay) return;

    const years = ['2026', '2025', '2025'];

    storyCards.forEach((card, idx) => {
      card.addEventListener('mouseenter', () => {
        storyCards.forEach((c) => c.classList.remove('active'));
        card.classList.add('active');
        if (years[idx]) {
          yearDisplay.textContent = years[idx];
        }
      });
    });
  }

  /* ----------------------------------------------------
     6. SMOOTH ANCHOR NAVIGATION
     ---------------------------------------------------- */
  function initSmoothNavigation() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href && href !== '#' && document.querySelector(href)) {
          e.preventDefault();
          const target = document.querySelector(href);
          const headerHeight = 72;
          const targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
          window.scrollTo({
            top: targetTop,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  /* ----------------------------------------------------
     7. GSAP SCROLLTRIGGER PROGRESSIVE REVEAL ENGINE
     (Cinematic Scroll-Triggered Content Revelations)
     ---------------------------------------------------- */
  function initScrollReveals() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion || typeof gsap === 'undefined') return;

    if (typeof ScrollTrigger !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);
    }

    // ==========================================
    // 1. INITIAL VIEWPORT ENTRANCE (HERO ONLY)
    // Only the top visible section animates on initial load
    // ==========================================
    if (document.querySelector('.rishi-hero-section')) {
      const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });

      heroTl
        .from('.rishi-hero-greeting', { opacity: 0, y: 35, duration: 0.8 })
        .from('.rishi-hero-subhead', { opacity: 0, y: 30, duration: 0.8 }, '-=0.55')
        .from('.spiral-notebook-card', { opacity: 0, scale: 0.9, y: 15, duration: 0.65, ease: 'back.out(1.5)' }, '-=0.5')
        .from('.rishi-hero-cta-row', { opacity: 0, y: 20, duration: 0.6 }, '-=0.35')
        .from('.rishi-portrait-wrapper', { opacity: 0, scale: 0.92, y: 35, duration: 1.0, ease: 'power2.out' }, '-=0.85');
    }

    if (typeof ScrollTrigger === 'undefined') return;

    // ==========================================
    // 2. SCROLL SECTION: METRICS & QA STATISTICS
    // "200+ Projects Tested" & "4,000+ Bugs Identified"
    // ==========================================
    const metricsSection = document.querySelector('.rishi-metrics-section');
    if (metricsSection) {
      // Header Text Reveal
      gsap.from('.metrics-header > *', {
        scrollTrigger: {
          trigger: '.rishi-metrics-section',
          start: 'top 85%',
          once: true
        },
        opacity: 0,
        y: 30,
        stagger: 0.12,
        duration: 0.8,
        ease: 'power3.out',
        clearProps: 'transform,opacity'
      });

      // Metric Cards Staggered Rise (Numeric counters handled by initBugCatcher)
      ScrollTrigger.create({
        trigger: '.metrics-grid',
        start: 'top 85%',
        once: true,
        onEnter: () => {
          gsap.from('.metric-card', {
            opacity: 0,
            y: 45,
            scale: 0.96,
            stagger: 0.12,
            duration: 0.85,
            ease: 'power3.out',
            clearProps: 'transform,opacity'
          });
        }
      });
    }

    // ==========================================
    // 3. SCROLL SECTION: ARCHED DOORS CINEMATIC STAGE
    // ==========================================
    if (document.querySelector('.rishi-doors-section')) {
      // Header Text Reveal
      gsap.from('.doors-section-header > *', {
        scrollTrigger: {
          trigger: '.rishi-doors-section',
          start: 'top 85%',
          once: true
        },
        opacity: 0,
        y: 30,
        stagger: 0.14,
        duration: 0.8,
        ease: 'power3.out',
        clearProps: 'transform,opacity'
      });

      // Doors 1-4 Staggered Sequence
      gsap.from('.door-frame', {
        scrollTrigger: {
          trigger: '.doors-cinema-stage',
          start: 'top 85%',
          once: true
        },
        opacity: 0,
        y: 45,
        scale: 0.96,
        stagger: 0.12,
        duration: 0.85,
        ease: 'power3.out',
        clearProps: 'transform,opacity'
      });
    }

    // ==========================================
    // 4. SCROLL SECTION: ASTRAZ TESTED PROJECTS
    // Work Header & Gallery Entrance
    // ==========================================
    if (document.querySelector('.rishi-work-section')) {
      // Work Section Header Typography
      gsap.from('.work-header-container', {
        scrollTrigger: {
          trigger: '.rishi-work-section',
          start: 'top 85%',
          once: true
        },
        opacity: 0,
        y: 30,
        duration: 0.8,
        ease: 'power3.out',
        clearProps: 'transform,opacity'
      });

      // Bottom Return-To-Doors & Prompt
      if (document.querySelector('.back-to-doors-wrap')) {
        gsap.from('.back-to-doors-wrap > *', {
          scrollTrigger: {
            trigger: '.back-to-doors-wrap',
            start: 'top 92%',
            once: true
          },
          opacity: 0,
          y: 25,
          stagger: 0.15,
          duration: 0.75,
          ease: 'power3.out',
          clearProps: 'transform,opacity'
        });
      }
    }

    // ==========================================
    // 5. SCROLL SECTION: CONTACT FINALE & FOOTER
    // ==========================================
    if (document.querySelector('.rishi-contact-section')) {
      gsap.from('.contact-cta-wrapper', {
        scrollTrigger: {
          trigger: '.rishi-contact-section',
          start: 'top 80%',
          once: true
        },
        opacity: 0,
        scale: 0.97,
        y: 35,
        duration: 0.95,
        ease: 'power3.out',
        clearProps: 'transform,opacity'
      });

      gsap.from('.f-col', {
        scrollTrigger: {
          trigger: '.rishi-footer-nav-grid',
          start: 'top 90%',
          once: true
        },
        opacity: 0,
        y: 28,
        stagger: 0.1,
        duration: 0.75,
        ease: 'power3.out',
        clearProps: 'transform,opacity'
      });
    }

    // ==========================================
    // 6. SUBTLE BACKGROUND ELEMENT PARALLAX
    // Studio Lamp Pull-Cord gentle drift
    // ==========================================
    if (document.querySelector('.lamp-pull-cord')) {
      gsap.to('.lamp-pull-cord', {
        scrollTrigger: {
          trigger: document.body,
          start: 'top top',
          end: 'bottom bottom',
          scrub: 1.2
        },
        y: 45,
        ease: 'none'
      });
    }
  }

  /* ----------------------------------------------------
     8. ASTRAZ TESTED PROJECTS HORIZONTAL SCROLL GALLERY
     (Scrub 3-4 Cards on Vertical Scroll, Then Continue to Bottom + Full Manual Controls)
     ---------------------------------------------------- */
  function initHorizontalProjectGallery() {
    const section = document.querySelector('.rishi-work-section');
    const viewport = document.querySelector('.projects-horizontal-viewport');
    const track = document.querySelector('.projects-horizontal-track');
    const projectCards = document.querySelectorAll('.astraz-project-card');
    const filterBtns = document.querySelectorAll('.g-filter-chip');
    const prevBtn = document.getElementById('gallery-prev-btn');
    const nextBtn = document.getElementById('gallery-next-btn');

    if (!section || !track || !projectCards.length) return;

    // Measurement & state
    let currentX = 0;
    let isHovered = false;
    let isDragging = false;
    let autoPlayTimer = null;
    let isMobile = window.innerWidth < 992;

    const getCardStep = () => {
      const visible = Array.from(projectCards).filter(c => c.style.display !== 'none');
      if (visible.length >= 2) {
        const step = Math.round(visible[1].getBoundingClientRect().left - visible[0].getBoundingClientRect().left);
        if (step > 0) return step;
      }
      return 386; // 350px card + 36px gap fallback
    };

    const getMaxScroll = () => {
      const visible = Array.from(projectCards).filter(c => c.style.display !== 'none');
      if (!visible.length) return 0;
      const totalWidth = visible.reduce((acc, c) => acc + c.offsetWidth + 36, 0);
      return Math.max(0, totalWidth - window.innerWidth + 140);
    };

    function updateArrowStates() {
      if (isMobile) {
        if (!viewport) return;
        const sl = viewport.scrollLeft;
        const maxSl = viewport.scrollWidth - viewport.clientWidth;
        if (prevBtn) {
          prevBtn.style.opacity = sl <= 8 ? '0.35' : '1';
          prevBtn.style.pointerEvents = sl <= 8 ? 'none' : 'auto';
        }
        if (nextBtn) {
          nextBtn.style.opacity = sl >= maxSl - 8 ? '0.35' : '1';
          nextBtn.style.pointerEvents = sl >= maxSl - 8 ? 'none' : 'auto';
        }
      } else {
        const maxScroll = getMaxScroll();
        if (prevBtn) {
          prevBtn.style.opacity = currentX >= 0 ? '0.35' : '1';
          prevBtn.style.pointerEvents = currentX >= 0 ? 'none' : 'auto';
        }
        if (nextBtn) {
          nextBtn.style.opacity = Math.abs(currentX) >= maxScroll - 5 ? '0.35' : '1';
          nextBtn.style.pointerEvents = Math.abs(currentX) >= maxScroll - 5 ? 'none' : 'auto';
        }
      }
    }

    function slideTo(newX, duration = 0.65, ease = 'power2.out') {
      if (isMobile) return;
      const maxScroll = getMaxScroll();
      currentX = Math.max(-maxScroll, Math.min(0, newX));
      gsap.to(track, {
        x: currentX,
        duration: duration,
        ease: ease,
        overwrite: 'auto',
        onUpdate: updateArrowStates,
        onComplete: updateArrowStates
      });
    }

    // Automatic Horizontal Project Carousel (Desktop GSAP + Mobile Native Smooth Scroll)
    function startAutoPlay() {
      stopAutoPlay();

      autoPlayTimer = setInterval(() => {
        if (isHovered || isDragging) return;
        // Pause if any card is expanded (user reading tech stack blueprint)
        const expandedCard = document.querySelector('.astraz-project-card.is-expanded');
        if (expandedCard) return;

        if (isMobile) {
          if (!viewport) return;
          const visibleCards = Array.from(projectCards).filter(c => c.style.display !== 'none');
          if (!visibleCards.length) return;
          const card = visibleCards[0];
          const step = (card ? card.offsetWidth : 320) + 16;
          const maxSl = viewport.scrollWidth - viewport.clientWidth;
          if (maxSl <= 5) return;

          const currentSl = viewport.scrollLeft;
          if (currentSl >= maxSl - 20) {
            // Smoothly loop back to first project
            viewport.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            // Calculate exact snap step to avoid getting stuck in CSS scroll-snap
            const nextTarget = Math.min(maxSl, Math.round((currentSl + step) / step) * step);
            viewport.scrollTo({ left: nextTarget, behavior: 'smooth' });
          }
        } else {
          const maxScroll = getMaxScroll();
          if (maxScroll <= 0) return;

          const step = getCardStep();
          if (Math.abs(currentX) >= maxScroll - 12) {
            // Smoothly loop back to first project
            slideTo(0, 1.0, 'power2.inOut');
          } else {
            // Advance right-to-left
            slideTo(currentX - step, 0.75, 'power2.out');
          }
        }
      }, 3500);
    }

    function stopAutoPlay() {
      if (autoPlayTimer) {
        clearInterval(autoPlayTimer);
        autoPlayTimer = null;
      }
    }

    // Pause automatic movement on hover (desktop fine pointer only) or touch (mobile)
    const canHover = window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    if (viewport) {
      if (canHover) {
        viewport.addEventListener('mouseenter', () => {
          isHovered = true;
          stopAutoPlay();
        });

        viewport.addEventListener('mouseleave', () => {
          isHovered = false;
          startAutoPlay();
        });
      }

      // Mobile Touch Interaction: Pause on touch, resume smoothly after touch ends
      let touchResumeTimer = null;
      viewport.addEventListener('touchstart', () => {
        isDragging = true;
        stopAutoPlay();
        if (touchResumeTimer) clearTimeout(touchResumeTimer);
      }, { passive: true });

      viewport.addEventListener('touchend', () => {
        isDragging = false;
        if (touchResumeTimer) clearTimeout(touchResumeTimer);
        touchResumeTimer = setTimeout(() => {
          startAutoPlay();
        }, 3000);
      }, { passive: true });

      viewport.addEventListener('touchcancel', () => {
        isDragging = false;
        if (touchResumeTimer) clearTimeout(touchResumeTimer);
        touchResumeTimer = setTimeout(() => {
          startAutoPlay();
        }, 3000);
      }, { passive: true });
    }

    // Previous / Next Navigation Arrows
    if (nextBtn) {
      nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        if (isMobile) {
          const visibleCards = Array.from(projectCards).filter(c => c.style.display !== 'none');
          const step = (visibleCards[0] ? visibleCards[0].offsetWidth : 320) + 16;
          const maxSl = viewport.scrollWidth - viewport.clientWidth;
          const currentSl = viewport.scrollLeft;
          const nextTarget = Math.min(maxSl, Math.round((currentSl + step) / step) * step);
          viewport.scrollTo({ left: nextTarget, behavior: 'smooth' });
        } else {
          slideTo(currentX - getCardStep());
          startAutoPlay();
        }
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        if (isMobile) {
          const visibleCards = Array.from(projectCards).filter(c => c.style.display !== 'none');
          const step = (visibleCards[0] ? visibleCards[0].offsetWidth : 320) + 16;
          const currentSl = viewport.scrollLeft;
          const nextTarget = Math.max(0, Math.round((currentSl - step) / step) * step);
          viewport.scrollTo({ left: nextTarget, behavior: 'smooth' });
        } else {
          slideTo(currentX + getCardStep());
          startAutoPlay();
        }
      });
    }

    // Mobile scroll listener for arrow states
    if (viewport) {
      viewport.addEventListener('scroll', () => {
        if (isMobile) updateArrowStates();
      }, { passive: true });
    }

    // Desktop Mouse Drag-to-pan
    let startX = 0;
    let startScrollX = 0;
    let hasDragged = false;

    if (viewport) {
      viewport.addEventListener('mousedown', (e) => {
        if (isMobile) return;
        if (e.target.closest('a, button, input, textarea')) return;
        isDragging = true;
        hasDragged = false;
        startX = e.pageX;
        startScrollX = currentX;
        viewport.style.cursor = 'grabbing';
        track.style.userSelect = 'none';
        stopAutoPlay();
      });

      window.addEventListener('mousemove', (e) => {
        if (!isDragging || isMobile) return;
        const diff = e.pageX - startX;
        if (Math.abs(diff) > 5) hasDragged = true;
        const maxScroll = getMaxScroll();
        const proposed = startScrollX + diff;
        currentX = Math.max(-maxScroll - 50, Math.min(50, proposed));
        gsap.set(track, { x: currentX });
      });

      window.addEventListener('mouseup', () => {
        if (isDragging && !isMobile) {
          isDragging = false;
          viewport.style.cursor = '';
          track.style.userSelect = '';
          const maxScroll = getMaxScroll();
          if (currentX > 0) slideTo(0, 0.3);
          else if (Math.abs(currentX) > maxScroll) slideTo(-maxScroll, 0.3);
          else updateArrowStates();
          startAutoPlay();
        }
      });

      // Horizontal trackpad / wheel swipe
      viewport.addEventListener('wheel', (e) => {
        if (isMobile) return;
        if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
          e.preventDefault();
          stopAutoPlay();
          slideTo(currentX - e.deltaX * 1.2, 0.2);
          startAutoPlay();
        }
      }, { passive: false });
    }

    // Card click toggle expansion
    projectCards.forEach((card) => {
      card.addEventListener('click', (e) => {
        if (hasDragged) return;
        if (e.target.closest('a, button')) return;
        const wasExpanded = card.classList.contains('is-expanded');
        projectCards.forEach((c) => c.classList.remove('is-expanded'));
        if (!wasExpanded) {
          card.classList.add('is-expanded');
          stopAutoPlay(); // Pause while user explores
        } else {
          startAutoPlay();
        }
      });
    });

    // Category filter chips
    filterBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const filterCategory = btn.getAttribute('data-category') || 'all';
        filterBtns.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');

        // Reset scroll position to start
        if (isMobile) {
          if (viewport) viewport.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          slideTo(0, 0.35);
        }

        projectCards.forEach((card) => {
          const cardCategory = card.getAttribute('data-category');
          if (filterCategory === 'all' || cardCategory === filterCategory) {
            card.style.display = 'flex';
            gsap.to(card, { opacity: 1, scale: 1, filter: 'none', duration: 0.35 });
          } else {
            card.style.display = 'none';
          }
        });

        setTimeout(updateArrowStates, 360);
      });
    });

    // Handle viewport resize between desktop and mobile modes
    window.addEventListener('resize', () => {
      const newIsMobile = window.innerWidth < 992;
      if (newIsMobile !== isMobile) {
        isMobile = newIsMobile;
        if (isMobile) {
          gsap.set(track, { clearProps: 'transform' });
          if (viewport) viewport.scrollLeft = 0;
        } else {
          currentX = 0;
          slideTo(0, 0.2);
        }
        startAutoPlay();
      }
      updateArrowStates();
    });

    // Start auto carousel on both desktop and mobile
    startAutoPlay();
    updateArrowStates();
  }

  /* ==========================================================================
     9. BUG CATCHER SPECIMEN SECTION & 3D INTERACTIVE BUGS
     Stats count-up, 3D card tilt & glare, 7 crawling bugs with bounce & catch audio
     ========================================================================== */
  function initBugCatcher() {
    const section = document.getElementById('metrics-section') || document.querySelector('.bc-section');
    const bugsLayer = document.getElementById('bc-bugs-layer');
    const caughtCountEl = document.getElementById('bc-caught-count');
    const resetBtn = document.getElementById('bc-reset-bugs');
    const victoryToast = document.getElementById('bc-victory-toast');
    const cards = document.querySelectorAll('[data-tilt-card]');
    const statNumbers = document.querySelectorAll('.bc-card-number[data-target]');

    if (!section || !bugsLayer || !caughtCountEl) return;

    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ----------------------------------------------------
       1. STATS NUMBERS COUNT-UP (IntersectionObserver)
       ---------------------------------------------------- */
    function initNumberCounters() {
      if (!('IntersectionObserver' in window)) {
        statNumbers.forEach(el => renderFinalNumber(el));
        return;
      }

      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          obs.unobserve(entry.target);

          const el = entry.target;
          const target = parseFloat(el.getAttribute('data-target')) || 0;
          const suffix = el.getAttribute('data-suffix') || '';
          const decimals = parseInt(el.getAttribute('data-decimals'), 10) || 0;
          const hasComma = el.getAttribute('data-comma') === 'true' || el.getAttribute('data-format') === 'comma';

          if (isReducedMotion) {
            renderFinalNumber(el);
            return;
          }

          const duration = 1600;
          const startTime = performance.now();

          function countFrame(now) {
            const progress = Math.min((now - startTime) / duration, 1);
            // Ease-out cubic
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = eased * target;

            let displayVal = decimals > 0 ? current.toFixed(decimals) : Math.round(current);
            if (hasComma) {
              displayVal = displayVal.toLocaleString('en-US');
            }
            el.textContent = `${displayVal}${suffix}`;

            if (progress < 1) {
              requestAnimationFrame(countFrame);
            } else {
              renderFinalNumber(el);
            }
          }

          requestAnimationFrame(countFrame);
        });
      }, { threshold: 0.35 });

      statNumbers.forEach(numEl => observer.observe(numEl));
    }

    function renderFinalNumber(el) {
      const target = parseFloat(el.getAttribute('data-target')) || 0;
      const suffix = el.getAttribute('data-suffix') || '';
      const decimals = parseInt(el.getAttribute('data-decimals'), 10) || 0;
      const hasComma = el.getAttribute('data-comma') === 'true' || el.getAttribute('data-format') === 'comma';

      let displayVal = decimals > 0 ? target.toFixed(decimals) : Math.round(target);
      if (hasComma) {
        displayVal = displayVal.toLocaleString('en-US');
      }
      el.textContent = `${displayVal}${suffix}`;
    }

    /* ----------------------------------------------------
       2. 3D CARD PERSPECTIVE TILT & MOUSE GLARE
       ---------------------------------------------------- */
    function init3DCardTilt() {
      if (isReducedMotion) return;

      cards.forEach(card => {
        card.addEventListener('pointermove', (e) => {
          const rect = card.getBoundingClientRect();
          const mouseX = e.clientX - rect.left;
          const mouseY = e.clientY - rect.top;

          // Relative coordinates from -1 to 1
          const xPercent = (mouseX / rect.width) * 2 - 1;
          const yPercent = (mouseY / rect.height) * 2 - 1;

          // Max tilt angles (14deg Y, 10deg X)
          const tiltX = -yPercent * 10;
          const tiltY = xPercent * 14;

          card.style.transform = `rotateX(${tiltX.toFixed(2)}deg) rotateY(${tiltY.toFixed(2)}deg) translateZ(12px)`;
          card.style.setProperty('--mouse-x', `${mouseX}px`);
          card.style.setProperty('--mouse-y', `${mouseY}px`);
        });

        card.addEventListener('pointerleave', () => {
          card.style.transform = 'rotateX(0deg) rotateY(0deg) translateZ(0px)';
        });
      });
    }

    /* ----------------------------------------------------
       3. 7 LOOSE CRAWLING BUGS ENGINE (Turn, Bounce, Catch)
       ---------------------------------------------------- */
    const TOTAL_BUGS = 7;
    let bugs = [];
    let caughtCount = 0;
    let crawlAnimationId = null;

    function spawnLooseBugs() {
      // Clear any existing bugs
      bugsLayer.innerHTML = '';
      bugs = [];
      caughtCount = 0;
      caughtCountEl.textContent = '0';
      if (victoryToast) victoryToast.classList.remove('visible');

      const secRect = section.getBoundingClientRect();
      const boundsWidth = Math.max(secRect.width, 320);
      const boundsHeight = Math.max(secRect.height, 600);

      for (let i = 0; i < TOTAL_BUGS; i++) {
        const bugBtn = document.createElement('button');
        bugBtn.className = 'bc-loose-bug';
        bugBtn.type = 'button';
        bugBtn.setAttribute('aria-label', 'Catch rogue bug');
        bugBtn.innerHTML = `
          <svg viewBox="0 0 44 44" aria-hidden="true">
            <use href="#bc-bug-symbol" />
          </svg>
        `;

        // Random starting coordinates
        const x = Math.random() * (boundsWidth - 80) + 40;
        const y = Math.random() * (boundsHeight - 120) + 60;
        const angle = Math.random() * Math.PI * 2;
        const speed = 0.85 + Math.random() * 0.95; // pixels per frame

        const bugObj = {
          el: bugBtn,
          x: x,
          y: y,
          angle: angle,
          speed: speed,
          turnRate: (Math.random() - 0.5) * 0.08,
          isCaught: false
        };

        // Click / Tap / Enter to catch
        function catchThisBug() {
          if (bugObj.isCaught) return;
          bugObj.isCaught = true;
          bugBtn.classList.add('caught');

          caughtCount++;
          caughtCountEl.textContent = caughtCount.toString();

          // Audio pop synthesis (safe Web Audio API)
          playCatchPop();

          // Check if all 7 caught
          if (caughtCount >= TOTAL_BUGS && victoryToast) {
            victoryToast.classList.add('visible');
          }
        }

        bugBtn.addEventListener('click', catchThisBug);
        bugBtn.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            catchThisBug();
          }
        });

        bugsLayer.appendChild(bugBtn);
        bugs.push(bugObj);
      }

      if (!isReducedMotion) {
        if (crawlAnimationId) cancelAnimationFrame(crawlAnimationId);
        crawlAnimationId = requestAnimationFrame(animateBugs);
      } else {
        bugs.forEach(b => {
          b.el.style.transform = `translate3d(${b.x}px, ${b.y}px, 0)`;
        });
      }
    }

    function animateBugs() {
      const secRect = section.getBoundingClientRect();
      const boundsWidth = secRect.width;
      const boundsHeight = secRect.height;
      const bugSize = 36;
      const padding = 16;

      bugs.forEach(b => {
        if (b.isCaught) return;

        // Random wandering angle adjustment
        b.turnRate += (Math.random() - 0.5) * 0.02;
        // Damping turn rate
        b.turnRate = Math.max(-0.08, Math.min(0.08, b.turnRate));
        b.angle += b.turnRate;

        // Forward step
        b.x += Math.cos(b.angle) * b.speed;
        b.y += Math.sin(b.angle) * b.speed;

        // Soft boundary bouncing (turning away from edges)
        if (b.x < padding) {
          b.x = padding;
          b.angle = Math.PI - b.angle;
        } else if (b.x > boundsWidth - bugSize - padding) {
          b.x = boundsWidth - bugSize - padding;
          b.angle = Math.PI - b.angle;
        }

        if (b.y < padding) {
          b.y = padding;
          b.angle = -b.angle;
        } else if (b.y > boundsHeight - bugSize - padding) {
          b.y = boundsHeight - bugSize - padding;
          b.angle = -b.angle;
        }

        // Render transform facing direction of travel (90 deg offset for head pointing up)
        const deg = (b.angle * 180 / Math.PI) + 90;
        b.el.style.transform = `translate3d(${b.x.toFixed(1)}px, ${b.y.toFixed(1)}px, 0) rotate(${deg.toFixed(1)}deg)`;
      });

      crawlAnimationId = requestAnimationFrame(animateBugs);
    }

    // Soft tactile acoustic pop when catching a bug
    function playCatchPop() {
      try {
        const AudioCtx = window.AudioContext || window.webkitAudioContext;
        if (!AudioCtx) return;
        const ctx = new AudioCtx();
        const osc = ctx.createOscillator();
        const gain = ctx.createGain();

        osc.type = 'sine';
        osc.frequency.setValueAtTime(420, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(160, ctx.currentTime + 0.08);

        gain.gain.setValueAtTime(0.18, ctx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.08);

        osc.connect(gain);
        gain.connect(ctx.destination);

        osc.start();
        osc.stop(ctx.currentTime + 0.09);
      } catch (e) {}
    }

    // Reset button action
    if (resetBtn) {
      resetBtn.addEventListener('click', () => {
        spawnLooseBugs();
      });
    }

    // Initialize all features on load
    initNumberCounters();
    init3DCardTilt();
    spawnLooseBugs();

    // Resize handler to keep bugs inside bounds
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        const secRect = section.getBoundingClientRect();
        bugs.forEach(b => {
          b.x = Math.max(16, Math.min(secRect.width - 50, b.x));
          b.y = Math.max(16, Math.min(secRect.height - 50, b.y));
        });
      }, 150);
    });
  }
})();
