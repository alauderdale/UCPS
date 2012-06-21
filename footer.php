 </div><!--end wrapper-->
  <footer>
    <div class="inner">
      <div class="four-col">
        <h6>Links</h6>
        <ul class="footer-links">
           <?php wp_nav_menu( array('menu' => 'footer_1_nav' )); ?>       
         </ul>
      </div><!--end 4 col-->
      <div class="four-col">
        <h6>Links</h6>
       <ul class="footer-links">
            <?php wp_nav_menu( array('menu' => 'footer_2_nav' )); ?>           
        </ul> 
      </div><!--end 4 col-->
      <div class="four-col">
        <h6>Social</h6>
        <ul class="footer-links">
          <li class="twitter">
            <a href="#">
              Twitter
            </a>
          </li>
        </ul>
      </div><!--end 4 col-->
      <div class="four-col">
        <h6>Local Wheather</h6>
      </div><!--end 4 col-->
    </div><!--end inner-->
  </footer>
</body>
<?php wp_footer(); ?>
</html>