<?php  

//sidebar

  if (function_exists('register_sidebar')) {
  	register_sidebar(array(
  		'name'=> 'Home Widget',
  		'id' => 'home_widget',
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

  
  
  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }
  
//create high school daily announcments

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'hsannouncement',
		array(
			'labels' => array(
				'name' => __( 'High School Announcements' ),
				'singular_name' => __( 'High School Announcement' )
			),
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
			'public' => true,
			
		)
	);
}

//create high school daily announcment categories

 // === CUSTOM TAXONOMIES === //
 function my_custom_taxonomies() {
 	register_taxonomy(
 		'hsday',		// internal name = machine-readable taxonomy name
 		'hsannouncement',		// object type = post, page, link, or custom post-type
 		array(
 			'hierarchical' => true,
 			'label' => 'categories',	// the human-readable taxonomy name
 			'query_var' => true,	// enable taxonomy-specific querying
 			'rewrite' => array( 'slug' => '?hsday=' ),	// pretty permalinks for your taxonomy?
 		)
 	);


 }
 add_action('init', 'my_custom_taxonomies', 0);

?>