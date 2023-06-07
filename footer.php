
  <footer>
    <!-- div for the main image to stretch s to the edge of the page-->
    <div class="container footer ">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-info') ) : 
endif; ?>

    </div>
    <div class="footer-info ">
      <!-- div to hold the content in the middle of the page-->
      <div class="container">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-bottom') ) : 
endif; ?>

        <!-- container -->
      </div>
    </div>
  </footer>
<!--End Footer Section-->
<?php wp_footer(); ?>
</body>
</html>