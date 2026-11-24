/**
 * DEDICATED HERO SECTION ENGINE
 * Handles:
 * 1. 3D Spiral Notebook 5-Role Page Flip Rotation & Counter
 * 2. Hanging Pull-Cord Theme Switcher (Spring Stretch & Snapback)
 * 3. Dark Mode Mouse Cursor Spotlight, Parallax Ability Chip & 3D Tilt
 * 4. Staggered Entrance Load Animation
 * 5. Live Local Time Capsule Formatter
 */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', initHeroSection);

  function initHeroSection() {
    const heroSection = document.getElementById('hero');
    if (!heroSection) return;

    initThemeToggle(heroSection);
    initNotebookPageFlip();
    initPhotoSpotlightAndTilt(heroSection);
    initLocalTime();
    initViewWorkNavigation();
    triggerLoadAnimation(heroSection);
  }

  /* ----------------------------------------------------
     0. VIEW MY WORK SMOOTH NAVIGATION TO FEATURED QA PROJECTS
     ---------------------------------------------------- */
  function initViewWorkNavigation() {
    const viewWorkBtn = document.querySelector('.hero-btn-view-work');
    if (!viewWorkBtn) return;

    viewWorkBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.getElementById('work-section') || document.querySelector('.rishi-work-section');
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (history.pushState) {
          history.pushState(null, null, '#work-section');
        }
      }
    });
  }

  /* ----------------------------------------------------
     1. THEME SWITCHER VIA PULL-CORD (SPRING STRETCH & SNAP)
     ---------------------------------------------------- */
  function initThemeToggle(heroSection) {
    const cord = document.getElementById('hero-lamp-cord');
    if (!cord) return;

    const savedTheme = localStorage.getItem('ranjith_portfolio_theme');
    const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Default to dark or light based on saved preference
    if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
      setTheme('dark', false);
    } else {
      setTheme('light', false);
    }

    function setTheme(theme, animate) {
      if (theme === 'dark') {
        document.body.classList.add('dark-theme');
        heroSection.classList.add('theme-dark');
        localStorage.setItem('ranjith_portfolio_theme', 'dark');
      } else {
        document.body.classList.remove('dark-theme');
        heroSection.classList.remove('theme-dark');
        localStorage.setItem('ranjith_portfolio_theme', 'light');
      }

      // Sync any global lamp icons or themes if present
      const globalCord = document.getElementById('lamp-cord');
      if (globalCord) {
        if (theme === 'dark') globalCord.classList.add('active');
        else globalCord.classList.remove('active');
      }
    }

    function toggleTheme() {
      const isDark = document.body.classList.contains('dark-theme') || heroSection.classList.contains('theme-dark');
      setTheme(isDark ? 'light' : 'dark', true);
    }

    // Spring Stretch & Snapback animation on click / drag
    let isPulling = false;

    function playPullAnimation() {
      if (isPulling) return;
      isPulling = true;
      cord.classList.add('pulling');

      // Physical stretch down
      cord.style.transition = 'transform 0.16s cubic-bezier(0.12, 0.8, 0.32, 1)';
      cord.style.transform = 'translateY(28px) scaleY(1.22)';

      setTimeout(() => {
        toggleTheme();
        // Snap back with spring overshoot
        cord.style.transition = 'transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
        cord.style.transform = 'translateY(-4px) scaleY(0.96)';

        setTimeout(() => {
          cord.style.transform = '';
          cord.classList.remove('pulling');
          isPulling = false;
        }, 520);
      }, 160);
    }

    cord.addEventListener('click', (e) => {
      e.preventDefault();
      playPullAnimation();
    });

    cord.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        playPullAnimation();
      }
    });

    // Also support any global lamp pull cord clicks
    const globalCord = document.getElementById('lamp-cord');
    if (globalCord) {
      globalCord.addEventListener('click', () => {
        const isDark = document.body.classList.contains('dark-theme');
        setTheme(isDark ? 'light' : 'dark', true);
      });
    }
  }

  /* ----------------------------------------------------
     2. 3D SPIRAL NOTEBOOK CARD 5-ROLE PAGE FLIP
     ---------------------------------------------------- */
  function initNotebookPageFlip() {
    const roleTextEl = document.getElementById('hero-role-text');
    const counterEl = document.getElementById('hero-role-counter');
    const notebookCard = document.getElementById('hero-notebook-card');
    if (!roleTextEl || !counterEl) return;

    const ROLES = [
      'Quality Assurance Professional',
      'Senior Software Tester',
      'Manual Testing Specialist',
      'Automation Test Engineer',
      'API & Security QA Auditor'
    ];

    let currentIndex = 0;
    let flipInterval = null;
    let isFlipping = false;

    function flipToNextRole() {
      if (isFlipping) return;
      isFlipping = true;

      const nextIndex = (currentIndex + 1) % ROLES.length;
      const nextRole = ROLES[nextIndex];
      const nextCount = `0${nextIndex + 1} / 0${ROLES.length}`;

      // Step 1: Flip old text up and away
      roleTextEl.classList.add('flip-out');

      setTimeout(() => {
        // Step 2: Swap content and position for entry from below
        roleTextEl.textContent = nextRole;
        counterEl.textContent = nextCount;
        roleTextEl.classList.remove('flip-out');
        roleTextEl.classList.add('flip-in');

        // Step 3: Trigger reflow and flip in to zero
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            roleTextEl.classList.remove('flip-in');
            currentIndex = nextIndex;
            setTimeout(() => {
              isFlipping = false;
            }, 450);
          });
        });
      }, 420);
    }

    function startAutoFlip() {
      if (flipInterval) clearInterval(flipInterval);
      flipInterval = setInterval(flipToNextRole, 2600);
    }

    function stopAutoFlip() {
      if (flipInterval) {
        clearInterval(flipInterval);
        flipInterval = null;
      }
    }

    startAutoFlip();

    // Pause on hover
    if (notebookCard) {
      notebookCard.addEventListener('mouseenter', stopAutoFlip);
      notebookCard.addEventListener('mouseleave', startAutoFlip);
    }

    // Visibility change handling
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) stopAutoFlip();
      else startAutoFlip();
    });
  }

  /* ----------------------------------------------------
     3. INTERACTIVE 3D MOUSE PARALLAX & TILT ON HERO IMAGE
     ---------------------------------------------------- */
  function initPhotoSpotlightAndTilt(heroSection) {
    const photoWrap = document.getElementById('hero-photo-wrap');
    const photoContainer = document.getElementById('hero-photo-container');
    const spotlightImg = document.getElementById('hero-photo-spotlight');
    const deskShadow = document.querySelector('.hero-desk-shadow');

    if (!photoWrap || !photoContainer) return;

    // Check pointer fine / hover support
    const canHover = window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    if (!canHover) return;

    let targetX = 50;
    let targetY = 40;
    let currentX = 50;
    let currentY = 40;

    let tiltTargetX = 0;
    let tiltTargetY = 0;
    let tiltCurrentX = 0;
    let tiltCurrentY = 0;

    let transTargetX = 0;
    let transTargetY = 0;
    let transCurrentX = 0;
    let transCurrentY = 0;

    let isHoveringPhoto = false;
    let isMouseNearHero = false;
    let rafId = null;

    function lerp(start, end, factor) {
      return start + (end - start) * factor;
    }

    function renderLoop() {
      currentX = lerp(currentX, targetX, 0.12);
      currentY = lerp(currentY, targetY, 0.12);

      tiltCurrentX = lerp(tiltCurrentX, tiltTargetX, 0.08);
      tiltCurrentY = lerp(tiltCurrentY, tiltTargetY, 0.08);

      transCurrentX = lerp(transCurrentX, transTargetX, 0.08);
      transCurrentY = lerp(transCurrentY, transTargetY, 0.08);

      if (spotlightImg) {
        spotlightImg.style.setProperty('--spot-x', `${currentX.toFixed(2)}%`);
        spotlightImg.style.setProperty('--spot-y', `${currentY.toFixed(2)}%`);
      }

      const scaleVal = isHoveringPhoto ? 1.025 : 1;
      photoContainer.style.transform = `perspective(1000px) rotateX(${tiltCurrentX.toFixed(2)}deg) rotateY(${tiltCurrentY.toFixed(2)}deg) translate3d(${transCurrentX.toFixed(2)}px, ${transCurrentY.toFixed(2)}px, 12px) scale(${scaleVal})`;

      if (deskShadow) {
        deskShadow.style.transform = `translateX(${(-transCurrentX * 0.45).toFixed(2)}px) scale(${1 - Math.abs(tiltCurrentX) * 0.015})`;
      }

      const isMoving = Math.abs(tiltCurrentX - tiltTargetX) > 0.02 || Math.abs(tiltCurrentY - tiltTargetY) > 0.02 || Math.abs(transCurrentX - transTargetX) > 0.05;

      if (isMouseNearHero || isMoving) {
        rafId = requestAnimationFrame(renderLoop);
      } else {
        rafId = null;
      }
    }

    function startLoop() {
      if (!rafId) {
        rafId = requestAnimationFrame(renderLoop);
      }
    }

    // Dynamic wide-range mouse tracking across Hero Section
    heroSection.addEventListener('mousemove', (e) => {
      isMouseNearHero = true;
      const heroRect = heroSection.getBoundingClientRect();
      const wrapRect = photoWrap.getBoundingClientRect();

      // Relative to photo wrap center
      const photoCenterX = wrapRect.left + wrapRect.width / 2;
      const photoCenterY = wrapRect.top + wrapRect.height / 2;

      const normX = Math.max(-1, Math.min(1, (e.clientX - photoCenterX) / (heroRect.width * 0.45)));
      const normY = Math.max(-1, Math.min(1, (e.clientY - photoCenterY) / (heroRect.height * 0.45)));

      // 3D Tilt: responsive angles
      tiltTargetX = -normY * 6.5;
      tiltTargetY = normX * 7.5;

      // Parallax floating shift: smooth responsive translation
      transTargetX = normX * 12;
      transTargetY = normY * 8;

      // Spotlight coordinates for dark mode
      const xInPhoto = ((e.clientX - wrapRect.left) / wrapRect.width) * 100;
      const yInPhoto = ((e.clientY - wrapRect.top) / wrapRect.height) * 100;
      targetX = Math.max(0, Math.min(100, xInPhoto));
      targetY = Math.max(0, Math.min(100, yInPhoto));

      startLoop();
    });

    heroSection.addEventListener('mouseleave', () => {
      isMouseNearHero = false;
      isHoveringPhoto = false;
      if (spotlightImg) spotlightImg.classList.remove('active');

      tiltTargetX = 0;
      tiltTargetY = 0;
      transTargetX = 0;
      transTargetY = 0;
      targetX = 50;
      targetY = 40;
      startLoop();
    });

    // Direct hover on photo wrapper for micro-interaction
    photoWrap.addEventListener('mouseenter', () => {
      isHoveringPhoto = true;
      if (spotlightImg) spotlightImg.classList.add('active');
      startLoop();
    });

    photoWrap.addEventListener('mouseleave', () => {
      isHoveringPhoto = false;
    });
  }

  /* ----------------------------------------------------
     4. LIVE LOCAL TIME CAPSULE
     ---------------------------------------------------- */
  function initLocalTime() {
    const timeEl = document.getElementById('hero-time-string');
    if (!timeEl) return;

    function updateTime() {
      const now = new Date();
      
      // Format: 10:35pm • 24 Nov, 2026
      let hours = now.getHours();
      const minutes = String(now.getMinutes()).padStart(2, '0');
      const ampm = hours >= 12 ? 'pm' : 'am';
      hours = hours % 12;
      hours = hours ? hours : 12;

      const day = now.getDate();
      const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      const month = months[now.getMonth()];
      const year = now.getFullYear();

      timeEl.innerHTML = `Local time ${hours}:${minutes}${ampm} &bull; ${day} ${month}, ${year}`;
    }

    updateTime();
    setInterval(updateTime, 1000);
  }

  /* ----------------------------------------------------
     5. ENTRANCE STAGGER LOAD ANIMATION
     ---------------------------------------------------- */
  function triggerLoadAnimation(heroSection) {
    // Add loaded class on next frame to trigger staggered CSS transitions
    requestAnimationFrame(() => {
      setTimeout(() => {
        heroSection.classList.add('hero-loaded');
      }, 80);
    });
  }

})();
