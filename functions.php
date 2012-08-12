<?php


// Add the Meta Box

$types = array( 'hs_sports', 'ss_sports' );

function add_custom_meta_box() {
    add_meta_box(
    'custom_meta_box', // $id
    'Event Tag', // $title 
    'show_custom_meta_box', // $callback
    $types, // $page
    'normal', // $context
    'high'); // $priority
}

add_action('add_meta_boxes', 'add_custom_meta_box');


// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(
  array(
    'label'=> 'Activity Event Tag',
    'desc'  => 'Enter the slug of the event tag you would like to pull events from here ex. boys-high-school-basketball',
    'id'  => $prefix.'text',
    'type'  => 'text'
  )

);

// The Callback
function show_custom_meta_box() {
global $custom_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
  
  // Begin the field table and loop
  echo '<table class="form-table">';
  foreach ($custom_meta_fields as $field) {
    // get value of this field if it exists for this post
    $meta = get_post_meta($post->ID, $field['id'], true);
    // begin a table row with
    echo '<tr>
        <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
        <td>';
        switch($field['type']) { 
          // text
          case 'text':
            echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
              <br /><span class="description">'.$field['desc'].'</span>';
          break;
        } //end switch
    echo '</td></tr>';
  } // end foreach
  echo '</table>'; // end table
}

// Save the Data
function save_custom_meta($post_id) {
    global $custom_meta_fields;
  
  // verify nonce
  if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
    return $post_id;
  // check autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return $post_id;
  // check permissions
  if ('page' == $_POST['post_type']) {
    if (!current_user_can('edit_page', $post_id))
      return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
      return $post_id;
  }
  
  // loop through fields and save the data
  foreach ($custom_meta_fields as $field) {
    $old = get_post_meta($post_id, $field['id'], true);
    $new = $_POST[$field['id']];
    if ($new && $new != $old) {
      update_post_meta($post_id, $field['id'], $new);
    } elseif ('' == $new && $old) {
      delete_post_meta($post_id, $field['id'], $old);
    }
  } // end foreach
}
add_action('save_post', 'save_custom_meta');  


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

  register_post_type( 'ssstaff',
    array(
      'labels' => array(
        'name' => __( 'Secondary School Staff' ),
        'singular_name' => __( 'SS Staff Member' )
      ),
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
      'public' => true,

    )
  );

  register_post_type( 'ss_sports',
    array(
      'labels' => array(
        'name' => __( 'Secondary School Activities' ),
        'singular_name' => __( 'Secondary School Activity' )
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