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

    // Reset if already animating
    portraitWrapper.classList.remove('animating-pop');
    void portraitWrapper.offsetWidth; // Force reflow
    portraitWrapper.classList.add('animating-pop');

    // Add studio camera flash spotlight over portrait
    const existingFlash = portraitWrapper.querySelector('.portrait-flash-overlay');
    if (existingFlash) existingFlash.remove();
    const flash = document.createElement('div');
    flash.className = 'portrait-flash-overlay';
    portraitWrapper.appendChild(flash);

    // Add glowing halo ring
    const existingHalo = portraitWrapper.querySelector('.portrait-pulse-halo');
    if (existingHalo) existingHalo.remove();
    const halo = document.createElement('div');
    halo.className = 'portrait-pulse-halo';
    portraitWrapper.appendChild(halo);

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
      flash.remove();
      halo.remove();
    }, 700);
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

        // 3. Cinematic studio flash light overlay
        let flash = document.querySelector('.studio-light-flash');
        if (!flash) {
          flash = document.createElement('div');
          flash.className = 'studio-light-flash';
          document.body.appendChild(flash);
        }

        const isCurrentlyDark = document.body.classList.contains('dark-theme');
        const willBeDark = !isCurrentlyDark;

        flash.style.background = willBeDark 
          ? 'radial-gradient(circle at 90% 10%, rgba(201, 154, 65, 0.4), rgba(11, 13, 19, 0.9))' 
          : 'radial-gradient(circle at 90% 10%, rgba(255, 255, 255, 0.85), rgba(247, 248, 249, 0.95))';
        flash.style.opacity = '1';

        setTimeout(() => {
          // 4. Elastic spring release on cord
          cord.classList.remove('pulling');
          cord.classList.add('springing');

          // 5. Toggle website colour theme with style
          if (willBeDark) {
            document.body.classList.add('dark-theme');
            try { localStorage.setItem('portfolio-theme', 'dark'); } catch(e) {}
          } else {
            document.body.classList.remove('dark-theme');
            try { localStorage.setItem('portfolio-theme', 'light'); } catch(e) {}
          }

          // 6. Animate Ranjith's portrait image with studio flash and spring pop
          triggerPortraitAnimation();

          setTimeout(() => {
            flash.style.opacity = '0';
          }, 80);

          setTimeout(() => {
            cord.classList.remove('springing');
          }, 650);
        }, 120);
      });
    }

    // Also allow clicking directly on Ranjith's portrait to trigger the portrait bounce
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
     4. CINEMATIC 3D DOOR ENTRY EXPERIENCE & TESTING ROOMS
     (Unified High-Performance GSAP Timeline Architecture)
     ---------------------------------------------------- */
  function initArchedDoors() {
    const doors = document.querySelectorAll('.door-frame');
    const cameraRig = document.getElementById('doors-camera-rig');
    const roomViewport = document.getElementById('testing-room-viewport');
    const rooms = document.querySelectorAll('.testing-room');
    const backBtns = document.querySelectorAll('[data-back-to-doors]');

    if (!doors.length || !cameraRig || !roomViewport) return;

    let isAnimating = false;
    let activeDoor = null;
    let activeRoomId = null;
    let currentMasterTl = null;
    let cachedAudioCtx = null;

    // Fast, non-blocking audio feedback (Reuses single AudioContext to eliminate UI freeze)
    function playDoorSound() {
      try {
        const AudioContextClass = window.AudioContext || window.webkitAudioContext;
        if (!AudioContextClass) return;
        if (!cachedAudioCtx) {
          cachedAudioCtx = new AudioContextClass();
        }
        if (cachedAudioCtx.state === 'suspended') {
          cachedAudioCtx.resume();
        }
        const osc = cachedAudioCtx.createOscillator();
        const gain = cachedAudioCtx.createGain();
        osc.type = 'sine';
        osc.frequency.setValueAtTime(140, cachedAudioCtx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(55, cachedAudioCtx.currentTime + 0.3);
        gain.gain.setValueAtTime(0.12, cachedAudioCtx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.001, cachedAudioCtx.currentTime + 0.3);
        osc.connect(gain);
        gain.connect(cachedAudioCtx.destination);
        osc.start();
        osc.stop(cachedAudioCtx.currentTime + 0.31);
      } catch (e) {}
    }

    // Function to physically enter selected door in 5 distinct cinematic phases
    function enterDoor(door) {
      if (isAnimating) return;
      isAnimating = true;
      activeDoor = door;
      const doorId = door.getAttribute('data-door-id');
      activeRoomId = doorId;

      const doorLeaf = door.querySelector('.door-leaf');
      const doorGlow = door.querySelector('.door-portal-glow');
      const otherDoors = Array.from(doors).filter(d => d !== door);
      const activeRoom = document.getElementById(`room-${doorId}`);

      // Compute transform-origin centered directly on the clicked door
      const doorRect = door.getBoundingClientRect();
      const rigRect = cameraRig.getBoundingClientRect();
      const originX = ((doorRect.left + doorRect.width * 0.5) - rigRect.left) / rigRect.width * 100;
      const originY = ((doorRect.top + doorRect.height * 0.5) - rigRect.top) / rigRect.height * 100;
      cameraRig.style.transformOrigin = `${originX.toFixed(2)}% ${originY.toFixed(2)}%`;

      playDoorSound();

      if (typeof gsap !== 'undefined') {
        if (currentMasterTl) {
          currentMasterTl.kill();
        }

        // Pre-activate room display so it's ready in the DOM before fade-in
        roomViewport.classList.add('active');
        roomViewport.scrollTop = 0;
        rooms.forEach((r) => {
          if (r.getAttribute('data-room-id') === doorId) {
            r.classList.add('active');
            gsap.set(r, { opacity: 0 });
          } else {
            r.classList.remove('active');
          }
        });
        document.body.style.overflow = 'hidden';

        // Unified Master GSAP Timeline (Zero thread competing, pure GPU transforms)
        const masterTl = gsap.timeline({
          onComplete: () => {
            gsap.set([cameraRig, doorLeaf, roomViewport], { clearProps: 'willChange' });
            isAnimating = false;
          }
        });
        currentMasterTl = masterTl;

        // GPU Layer promotion during transition
        gsap.set([cameraRig, doorLeaf, roomViewport], { willChange: 'transform, opacity' });

        // PHASE 1: Immediate visual feedback (0ms)
        masterTl.to(door, {
          scale: 1.03,
          duration: 0.22,
          ease: 'power2.out',
          onStart: () => {
            door.classList.add('is-selected');
            otherDoors.forEach(d => d.classList.add('is-dimmed'));
          }
        }, 0);

        masterTl.to(otherDoors, {
          opacity: 0.18,
          scale: 0.95,
          duration: 0.3,
          ease: 'power2.out'
        }, 0);

        // PHASE 2: Controlled Camera Zoom (approx 800ms)
        masterTl.to(cameraRig, {
          scale: 2.6,
          z: 320,
          duration: 0.8,
          ease: 'power2.inOut'
        }, 0.05);

        // PHASE 3: Realistic Door Opening around left hinge (approx 600ms)
        if (doorLeaf) {
          masterTl.to(doorLeaf, {
            rotateY: -84,
            duration: 0.62,
            ease: 'power2.out'
          }, 0.32);
        }

        if (doorGlow) {
          masterTl.to(doorGlow, {
            opacity: 1,
            duration: 0.45,
            ease: 'power1.out'
          }, 0.32);
        }

        // PHASE 4: Enter the Room through the doorway (approx 550ms)
        masterTl.to(cameraRig, {
          scale: 4.8,
          z: 700,
          opacity: 0,
          duration: 0.52,
          ease: 'power2.in'
        }, 0.72);

        masterTl.to(roomViewport, {
          opacity: 1,
          duration: 0.45,
          ease: 'power2.out'
        }, 0.82);

        if (activeRoom) {
          masterTl.to(activeRoom, {
            opacity: 1,
            duration: 0.45,
            ease: 'power2.out'
          }, 0.82);

          // PHASE 5: Content Reveal (staggered, approx 450-550ms)
          const roomTop = activeRoom.querySelector('.room-top-bar');
          const roomHeader = activeRoom.querySelector('.room-header');
          const cards = activeRoom.querySelectorAll('.capability-card');
          const roomFooter = activeRoom.querySelector('.room-footer-actions');

          if (roomTop) {
            masterTl.fromTo(roomTop, 
              { opacity: 0, y: -16 },
              { opacity: 1, y: 0, duration: 0.38, ease: 'power3.out' },
              0.95
            );
          }

          if (roomHeader) {
            masterTl.fromTo(roomHeader, 
              { opacity: 0, y: 22 },
              { opacity: 1, y: 0, duration: 0.42, ease: 'power3.out' },
              1.0
            );
          }

          if (cards && cards.length) {
            masterTl.fromTo(cards, 
              { opacity: 0, y: 22, scale: 0.98 },
              { opacity: 1, y: 0, scale: 1, stagger: 0.035, duration: 0.42, ease: 'power2.out' },
              1.05
            );
          }

          if (roomFooter) {
            masterTl.fromTo(roomFooter, 
              { opacity: 0, y: 16 },
              { opacity: 1, y: 0, duration: 0.38, ease: 'power3.out' },
              1.15
            );
          }
        }

      } else {
        // High-performance fallback without GSAP
        door.classList.add('is-opened');
        setTimeout(() => {
          roomViewport.classList.add('active');
          document.body.style.overflow = 'hidden';
          rooms.forEach((r) => {
            if (r.getAttribute('data-room-id') === doorId) {
              r.classList.add('active');
            } else {
              r.classList.remove('active');
            }
          });
          isAnimating = false;
        }, 600);
      }
    }

    // Function to return from room back to the 4 doors (Ultra-fast, zero-lag 60fps return)
    function backToDoors() {
      if (isAnimating) return;
      isAnimating = true;

      const activeRoom = roomViewport.querySelector('.testing-room.active');
      const doorLeaf = activeDoor ? activeDoor.querySelector('.door-leaf') : null;
      const doorGlow = activeDoor ? activeDoor.querySelector('.door-portal-glow') : null;
      const otherDoors = Array.from(doors).filter(d => d !== activeDoor);

      // Instant scroll-reset to prevent reflow stutter
      roomViewport.scrollTop = 0;
      cameraRig.style.willChange = 'transform, opacity';
      if (doorLeaf) doorLeaf.style.willChange = 'transform';
      roomViewport.style.willChange = 'opacity';

      if (typeof gsap !== 'undefined') {
        if (currentMasterTl) {
          currentMasterTl.kill();
        }

        const exitTl = gsap.timeline({
          onComplete: () => {
            roomViewport.classList.remove('active');
            gsap.set(roomViewport, { opacity: 0, clearProps: 'all' });
            rooms.forEach(r => {
              r.classList.remove('active');
              gsap.set(r, { clearProps: 'all' });
            });
            document.body.style.overflow = '';

            doors.forEach((d) => {
              d.classList.remove('is-dimmed', 'is-selected', 'is-opened');
              gsap.set(d, { clearProps: 'all' });
              const leaf = d.querySelector('.door-leaf');
              if (leaf) gsap.set(leaf, { clearProps: 'all' });
              const glow = d.querySelector('.door-portal-glow');
              if (glow) gsap.set(glow, { clearProps: 'all' });
            });

            gsap.set(cameraRig, { clearProps: 'all' });
            cameraRig.style.transformOrigin = '';
            cameraRig.style.willChange = '';
            if (doorLeaf) doorLeaf.style.willChange = '';
            roomViewport.style.willChange = '';

            activeDoor = null;
            activeRoomId = null;
            currentMasterTl = null;
            isAnimating = false;
          }
        });
        currentMasterTl = exitTl;

        // 1. Immediately and swiftly fade out room viewport (240ms, power2.out)
        exitTl.to(roomViewport, {
          opacity: 0,
          duration: 0.24,
          ease: 'power2.out'
        }, 0);

        if (activeRoom) {
          exitTl.to(activeRoom, {
            opacity: 0,
            duration: 0.2,
            ease: 'power2.out'
          }, 0);
        }

        // 2. Camera rig zooms back out smoothly with physical ease-in-out (500ms)
        exitTl.to(cameraRig, {
          scale: 1,
          z: 0,
          opacity: 1,
          duration: 0.5,
          ease: 'power2.inOut'
        }, 0.08);

        // 3. Selected door leaf hinges shut naturally (440ms)
        if (doorLeaf) {
          exitTl.to(doorLeaf, {
            rotateY: 0,
            duration: 0.44,
            ease: 'power2.inOut'
          }, 0.12);
        }

        if (doorGlow) {
          exitTl.to(doorGlow, {
            opacity: 0,
            duration: 0.3,
            ease: 'power1.out'
          }, 0.12);
        }

        // 4. Restore active door and other doors with zero lag (380ms)
        if (activeDoor) {
          exitTl.to(activeDoor, {
            scale: 1,
            duration: 0.38,
            ease: 'power2.out'
          }, 0.16);
        }
        exitTl.to(otherDoors, {
          opacity: 1,
          scale: 1,
          duration: 0.4,
          ease: 'power2.out'
        }, 0.16);

      } else {
        // Fallback without GSAP
        roomViewport.classList.remove('active');
        rooms.forEach((r) => r.classList.remove('active'));
        document.body.style.overflow = '';
        if (activeDoor) {
          activeDoor.classList.remove('is-opened');
        }
        doors.forEach((d) => {
          d.classList.remove('is-dimmed', 'is-selected');
        });
        cameraRig.style.transform = '';
        cameraRig.style.transformOrigin = '';
        isAnimating = false;
      }
    }

    // Click listener on each door
    doors.forEach((door) => {
      door.addEventListener('click', function () {
        enterDoor(this);
      });
      // Keyboard Accessibility (Enter or Space)
      door.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          enterDoor(this);
        }
      });
    });

    // Back to Doors buttons
    backBtns.forEach((btn) => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        backToDoors();
      });
    });

    // Close room on Escape key
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && roomViewport.classList.contains('active')) {
        backToDoors();
      }
    });

    // Global window helper
    window.enterDoorGlobal = function (id) {
      const targetDoor = document.getElementById(`door-${id}`);
      if (targetDoor) enterDoor(targetDoor);
    };

    function playDoorSound() {
      try {
        const AudioContextClass = window.AudioContext || window.webkitAudioContext;
        if (!AudioContextClass) return;
        const ctx = new AudioContextClass();
        const osc = ctx.createOscillator();
        const gain = ctx.createGain();
        osc.type = 'sine';
        osc.frequency.setValueAtTime(160, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(60, ctx.currentTime + 0.35);
        gain.gain.setValueAtTime(0.15, ctx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.35);
        osc.connect(gain);
        gain.connect(ctx.destination);
        osc.start();
        osc.stop(ctx.currentTime + 0.36);
      } catch (e) {}
    }
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
        .from('.rishi-status-pill', { opacity: 0, y: -20, duration: 0.6 })
        .from('.rishi-hero-greeting', { opacity: 0, y: 35, duration: 0.8 }, '-=0.35')
        .from('.rishi-hero-subhead', { opacity: 0, y: 30, duration: 0.8 }, '-=0.55')
        .from('.spiral-notebook-card', { opacity: 0, scale: 0.9, y: 15, duration: 0.65, ease: 'back.out(1.5)' }, '-=0.5')
        .from('.rishi-hero-desc', { opacity: 0, y: 25, duration: 0.7 }, '-=0.45')
        .from('.rishi-hero-cta-row', { opacity: 0, y: 20, duration: 0.6 }, '-=0.35')
        .from('.rishi-portrait-wrapper', { opacity: 0, scale: 0.92, y: 35, duration: 1.0, ease: 'power2.out' }, '-=0.85')
        .from('.ability-card-pill', { opacity: 0, scale: 0.7, duration: 0.6, ease: 'back.out(1.8)' }, '-=0.45')
        .from('.rishi-hero-bottom-bar', { opacity: 0, y: 20, duration: 0.7 }, '-=0.4');
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

      // Hint Reveal
      gsap.from('.doors-hint', {
        scrollTrigger: {
          trigger: '.doors-cinema-stage',
          start: 'top 85%',
          once: true
        },
        opacity: 0,
        y: 20,
        duration: 0.8,
        delay: 0.35,
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
      gsap.from('.work-header-container > *', {
        scrollTrigger: {
          trigger: '.rishi-work-section',
          start: 'top 85%',
          once: true
        },
        opacity: 0,
        y: 35,
        stagger: 0.12,
        duration: 0.85,
        ease: 'power3.out',
        clearProps: 'transform,opacity'
      });

      // Gallery Controls Bar
      if (document.querySelector('.gallery-controls-bar')) {
        gsap.from('.gallery-controls-bar', {
          scrollTrigger: {
            trigger: '.gallery-controls-bar',
            start: 'top 88%',
            once: true
          },
          opacity: 0,
          y: 20,
          duration: 0.65,
          ease: 'power3.out',
          clearProps: 'transform,opacity'
        });
      }

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
    const pinWrapper = document.querySelector('.projects-horizontal-pin-wrapper');
    const viewport = document.querySelector('.projects-horizontal-viewport');
    const track = document.querySelector('.projects-horizontal-track');
    const projectCards = document.querySelectorAll('.astraz-project-card');
    const filterBtns = document.querySelectorAll('.g-filter-chip');
    const prevBtn = document.getElementById('gallery-prev-btn');
    const nextBtn = document.getElementById('gallery-next-btn');

    if (!section || !track || !projectCards.length) return;

    const CARD_STEP = 416; // 380px card + 36px gap
    // Scrub distance: approx 3.2 cards, then release to scroll to bottom
    const scrubDistance = Math.min(track.scrollWidth - window.innerWidth + 80, CARD_STEP * 3.2);

    let manualOffset = 0;
    const getMaxScroll = () => Math.max(0, track.scrollWidth - window.innerWidth + 120);

    // GSAP MatchMedia for responsive behavior
    const mm = gsap.matchMedia();

    // 1. DESKTOP PINNED SCROLL: Pan 3-4 cards on vertical scroll, then continue down
    mm.add('(min-width: 992px)', () => {
      const horizontalTween = gsap.to(track, {
        x: () => -scrubDistance + manualOffset,
        ease: 'none',
        scrollTrigger: {
          trigger: pinWrapper || section,
          pin: true,
          scrub: 0.8,
          start: 'top top',
          end: () => '+=' + scrubDistance,
          invalidateOnRefresh: true,
          anticipatePin: 1
        }
      });

      // Manual navigation arrow buttons
      function shiftManual(direction) {
        const maxScroll = getMaxScroll();
        manualOffset += direction * CARD_STEP;
        // Clamp manual offset
        manualOffset = Math.max(-maxScroll, Math.min(0, manualOffset));
        gsap.to(track, {
          x: manualOffset,
          duration: 0.45,
          ease: 'power2.out'
        });
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', () => shiftManual(-1));
      }
      if (prevBtn) {
        prevBtn.addEventListener('click', () => shiftManual(1));
      }

      // Mouse drag-to-scroll on horizontal track
      let isDragging = false;
      let startX = 0;
      let startOffset = 0;

      if (viewport) {
        viewport.addEventListener('mousedown', (e) => {
          if (e.target.closest('a, button, input')) return;
          isDragging = true;
          startX = e.pageX;
          startOffset = manualOffset;
          viewport.style.cursor = 'grabbing';
          track.style.userSelect = 'none';
        });

        window.addEventListener('mousemove', (e) => {
          if (!isDragging) return;
          const diff = e.pageX - startX;
          const maxScroll = getMaxScroll();
          manualOffset = Math.max(-maxScroll, Math.min(0, startOffset + diff));
          gsap.set(track, { x: manualOffset });
        });

        window.addEventListener('mouseup', () => {
          if (isDragging) {
            isDragging = false;
            if (viewport) viewport.style.cursor = '';
            track.style.userSelect = '';
          }
        });
      }

      return () => {
        horizontalTween.kill();
        gsap.set(track, { clearProps: 'transform,x' });
      };
    });

    // 2. MOBILE & TABLET TOUCH HORIZONTAL SCROLL (<= 991px)
    mm.add('(max-width: 991px)', () => {
      // Tap on card to toggle expansion
      projectCards.forEach((card) => {
        card.addEventListener('click', (e) => {
          if (e.target.closest('a, button')) return;
          const wasExpanded = card.classList.contains('is-expanded');
          projectCards.forEach((c) => c.classList.remove('is-expanded'));
          if (!wasExpanded) {
            card.classList.add('is-expanded');
          }
        });
      });

      // Manual navigation buttons on tablet/mobile
      if (nextBtn && viewport) {
        nextBtn.addEventListener('click', () => {
          viewport.scrollBy({ left: CARD_STEP, behavior: 'smooth' });
        });
      }
      if (prevBtn && viewport) {
        prevBtn.addEventListener('click', () => {
          viewport.scrollBy({ left: -CARD_STEP, behavior: 'smooth' });
        });
      }
    });

    // 3. CATEGORY FILTER CHIPS
    filterBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const filterCategory = btn.getAttribute('data-category') || 'all';
        filterBtns.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');

        // Reset manual offset
        manualOffset = 0;
        gsap.to(track, { x: 0, duration: 0.35, ease: 'power2.out' });

        projectCards.forEach((card) => {
          const cardCategory = card.getAttribute('data-category');
          if (filterCategory === 'all' || cardCategory === filterCategory) {
            card.style.opacity = '1';
            card.style.transform = 'scale(1)';
            card.style.filter = 'none';
            card.style.pointerEvents = 'auto';
            card.style.display = 'flex';
          } else {
            card.style.opacity = '0.15';
            card.style.transform = 'scale(0.96)';
            card.style.filter = 'grayscale(0.85)';
            card.style.pointerEvents = 'none';
          }
        });
      });
    });
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
