<?php  

//set exerpt length

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

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
  
//Secondary School sidebar nav

  register_nav_menu( 'ss_sidebar_nav', __( 'Secondary School Sidebar Navigation', 'mytheme' ) );
  
//Footer 1 sidebar nav

  register_nav_menu( 'footet_1__nav', __( 'Footer Nav Col 1', 'mytheme' ) );

//Footer 2 sidebar nav

  register_nav_menu( 'footet_2__nav', __( 'Footer Nav Col 2', 'mytheme' ) );
  


  
  
  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }

//create post types

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
	
	
	register_post_type( 'ssannouncement',
		array(
			'labels' => array(
				'name' => __( 'Sec. School Announcements' ),
				'singular_name' => __( 'Sec. School Announcement' )
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
 	
 	register_taxonomy(
 		'ssday',		// internal name = machine-readable taxonomy name
 		'ssannouncement',		// object type = post, page, link, or custom post-type
 		array(
 			'hierarchical' => true,
 			'label' => 'categories',	// the human-readable taxonomy name
 			'query_var' => true,	// enable taxonomy-specific querying
 			'rewrite' => array( 'slug' => '?ssday=' ),	// pretty permalinks for your taxonomy?
 		)
 	);
 }
 add_action('init', 'my_custom_taxonomies', 0);


?>