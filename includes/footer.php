<?php
/**
 * Global Footer Component
 * Dynamic Footer Scripts & CDNs
 */
?>
  </div> <!-- End .site-content -->

  <!-- GSAP & ScrollTrigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <!-- Core Script Files with Cache Busting -->
  <script src="assets/js/cursor.js?v=<?= file_exists(__DIR__ . '/../assets/js/cursor.js') ? filemtime(__DIR__ . '/../assets/js/cursor.js') : time() ?>"></script>
  <script src="assets/js/animations.js?v=<?= file_exists(__DIR__ . '/../assets/js/animations.js') ? filemtime(__DIR__ . '/../assets/js/animations.js') : time() ?>"></script>
  <script src="assets/js/main.js?v=<?= file_exists(__DIR__ . '/../assets/js/main.js') ? filemtime(__DIR__ . '/../assets/js/main.js') : time() ?>"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (typeof lucide !== 'undefined' && typeof lucide.createIcons === 'function') {
        lucide.createIcons();
      }
    });
  </script>
</body>
</html>
