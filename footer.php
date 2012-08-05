 </div><!--end wrapper-->
  <footer>
    <div class="inner clearfix">
      <div class="four-col">
        <h6>Links</h6>
        <ul class="footer-links">
          <?php wp_nav_menu( array( 'theme_location' => 'footer1' ) );   ?>
         </ul>
      </div><!--end 4 col-->
      <div class="four-col">
        <h6>Links</h6>
        <ul class="footer-links">
          <?php wp_nav_menu( array( 'theme_location' => 'footer2' ) );   ?>
        </ul>
      </div><!--end 4 col-->
      <div class="four-col">
        <h6>Social</h6>
        <ul class="footer-links">
          <li>
            Coming Soon
          </li>
        </ul>
      </div><!--end 4 col-->
      <div class="four-col">
        <h6>Local Wheather</h6>
        <ul class="footer-links">
          <li>
            Coming Soon
          </li>
        </ul>
      </div><!--end 4 col-->
    </div><!--end inner-->
    <div class="copy">
      <p>&copy; 2012 All Rights Reserved Union Colony Schools | Website by <a target="_blank" href="http://eternalcontrast.com/">Eternal Contrast Designs</a></p>
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>