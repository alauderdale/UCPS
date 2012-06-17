<?php  

//sidebar

  if (function_exists('register_sidebar')) {
  	register_sidebar(array(
  		'name'=> 'hssidebar',
  		'id' => 'hs_sidebar',
  		'before_widget' => '<li id="%1$s" class="widget %2$s">',
  		'after_widget' => '</li>',
  		'before_title' => '<h2 class="offscreen">',
  		'after_title' => '</h2>',
  	));
  	
  }


//main nav

  register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );
  
//sidebar nav

  register_nav_menu( 'sidebar_nav', __( 'Sidebar Navigation', 'mytheme' ) );

//High School sidebar nav

  register_nav_menu( 'hs_sidebar_nav', __( 'High School Sidebar Navigation', 'mytheme' ) );

  
  
  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }


?>