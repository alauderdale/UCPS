<?php




//set exerpt length

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


//main nav

  register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );

//sidebar nav

  register_nav_menu( 'sidebar_nav', __( 'Sidebar Navigation', 'mytheme' ) );

//Elementary School sidebar nav

  register_nav_menu( 'hs_sidebar_nav', __( 'Elementary School Sidebar Navigation', 'mytheme' ) );

//Secondary School sidebar nav

  register_nav_menu( 'ss_sidebar_nav', __( 'Secondary School Sidebar Navigation', 'mytheme' ) );

  //Secondary School sidebar nav

  register_nav_menu( 'board_sidebar_nav', __( 'UCPS Board Sidebar Navigation', 'mytheme' ) );

//Footer 1 sidebar nav

  register_nav_menu( 'footer2', __( 'Footer Nav Col 1', 'mytheme' ) );

//Footer 2 sidebar nav

  register_nav_menu( 'footer1', __( 'Footer Nav Col 2', 'mytheme' ) );





if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

//create post types

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {

	register_post_type( 'hsannouncement',
		array(
			'labels' => array(
				'name' => __( 'Elementary School Announcements' ),
				'singular_name' => __( 'Elementary School Announcement' )
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

  register_post_type( 'hsstaff',
    array(
      'labels' => array(
        'name' => __( 'Elementary School Staff' ),
        'singular_name' => __( 'HS Staff Member' )
      ),
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
      'public' => true,

    )
  );

  register_post_type( 'hs_sports',
    array(
      'labels' => array(
        'name' => __( 'Elementary School Activities' ),
        'singular_name' => __( 'High School Activity' )
      ),
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
      'public' => true,

    )
  );


}

//create daily announcment categories

//high school

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

//secondary school

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