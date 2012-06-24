 </div><!--end wrapper-->
  <footer>
    <div class="inner">
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
          <li class="twitter">
            <a href="#">
            </a>
          </li>
        </ul>
      </div><!--end 4 col-->
      <div class="four-col">
        <h6>Local Wheather</h6>
      </div><!--end 4 col-->
    </div><!--end inner-->
  </footer>
<?php wp_footer(); ?>
</body>
</html>