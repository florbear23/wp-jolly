<?php

$curr_user = get_current_user_id();

function my_custom_style() {
	wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/css/wp-override.css');
}
add_action( 'admin_enqueue_scripts', 'my_custom_style' );

function remove_menu() {
	remove_menu_page( 'themes.php' );
	remove_menu_page( 'plugins.php' );
	remove_menu_page( 'users.php' );
	remove_menu_page( 'options-general.php' );
	remove_menu_page( 'tools.php' );
}
// add_action( 'admin_menu', 'remove_menu' );

//Things to remove
if($curr_user != 1):
	add_action( 'admin_menu', 'remove_menu' );
endif;

//Things to add
if($curr_user == 1):
	add_action('admin_menu', 'tie_add_admin');
	add_action( 'wp_before_admin_bar_render', 'tie_admin_bar' );
endif;

$result = add_role(
	'owner',
	( 'Owner' ),
	array(
		'read'				=> true,
		'publish_posts'		=> true,
		'publish_pages'		=> true,
		'edit_posts'		=> true,
		'delete_posts'		=> true,
	) 
);
// if( null !== $result ):
// 	echo 'New role created.';
// else:
// 	echo 'The user already exsits.';
// endif;

?>