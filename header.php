<!DOCTYPE html>
<html>
<head>
  <title>
    <?php wp_title(''); ?> <?php bloginfo('name'); ?>
  </title>
  <!--  stylesheets-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
  <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
  <link href="<?php bloginfo('template_url'); ?>/css/fancybox.css" rel="stylesheet">
  <!--  jquery-->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.6.2.min.js"></script>
  <!--custom scripts-->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
  <!--slider-->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.settings.js"></script>
  <!--isotope-->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/isotope.config.js"></script>
   <!--hidden menu-->
   <script src="<?php bloginfo('template_url'); ?>/js/appearing.menu.js"></script>
    <!--smooth scroll-->
   <script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
    <!--fancybox-->
   <script src="<?php bloginfo('template_url'); ?>/js/fancybox.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/fancybox.settings.js"></script>
   <script>
    // If the length of the element's string is 0 then display helper message
        function notEmpty(elem, helperMsg){
          if(elem.value.length == 0){
            alert(helperMsg);
            elem.focus(); // set the focus to this input
            return false;
          }
          return true;
        }
   </script>
  <?php wp_head(); ?>
</head>
<body>
  <div id="hidden-menu">
    <div class="inner">
      <ul>
        <li class="home"><a href="<?php echo get_option('home'); ?>"></a></li>
        <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
        <li class="back-to-top"><a href="#adminbar"></a></li>
      </ul>
    </div>
  </div>
  <header>
    <div id="adminbar">
      <div id="adminbar-inner">
        <h1>Call Us: <span class="phone">970.673.4546</span></h1>
        <a href="https://si.greeleyschools.org/campus/greeley.jsp" class="checkgrades" target="_blank">check your grades</a>
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
          <div class="search-bar">
            <input class="search-form" id='req1' type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
            <input 
            onMouseDown="notEmpty(document.getElementById('req1'), 'Please Enter a Value')"
            type="submit" 
            id="searchsubmit" 
            value="Search" 
            class="btn"
             />
          </div>
        </form>
      </div><!--end adminbar inner-->
    </div><!--end adminbar -->
    <div class="clearfix"></div>
    <div id="top-nav">
      <a href="<?php echo get_option('home'); ?>"><div class="logo"></div></a>
      <ul>
        <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
      </ul>
    </div>
  </header>