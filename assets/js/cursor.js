/**
 * RANJITH C V — Custom Magnetic Cursor
 * Smooth lerp following, interactive hover expanding, and magnetic snap
 */

(function () {
  'use strict';

  // Do not run on touch devices
  if (window.matchMedia('(hover: none) and (pointer: coarse)').matches) {
    return;
  }

  const dot = document.querySelector('.cursor-dot');
  const ring = document.querySelector('.cursor-ring');

  if (!dot || !ring) return;

  let mouseX = -100;
  let mouseY = -100;
  let ringX = -100;
  let ringY = -100;
  let isMoving = false;

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;

    if (!isMoving) {
      ringX = mouseX;
      ringY = mouseY;
      isMoving = true;
    }

    dot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
  });

  // Smooth RAF Lerp for Ring
  function renderCursor() {
    ringX += (mouseX - ringX) * 0.15;
    ringY += (mouseY - ringY) * 0.15;

    ring.style.transform = `translate3d(${ringX}px, ${ringY}px, 0)`;
    requestAnimationFrame(renderCursor);
  }
  requestAnimationFrame(renderCursor);

  // Hover detection on interactive elements
  const interactiveTargets = 'a, button, input, textarea, select, .expertise-card, .capability-card, .stat-hero-card, .approach-step-card, .telemetry-badge, [data-cursor-hover]';

  function attachCursorEvents() {
    document.querySelectorAll(interactiveTargets).forEach((el) => {
      el.addEventListener('mouseenter', () => {
        document.body.classList.add('cursor-hover');
      });
      el.addEventListener('mouseleave', () => {
        document.body.classList.remove('cursor-hover');
      });
    });

    document.querySelectorAll('input, textarea').forEach((el) => {
      el.addEventListener('mouseenter', () => {
        document.body.classList.add('cursor-text');
      });
      el.addEventListener('mouseleave', () => {
        document.body.classList.remove('cursor-text');
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', attachCursorEvents);
  } else {
    attachCursorEvents();
  }
})();
