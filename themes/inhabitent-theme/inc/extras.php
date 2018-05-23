<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

/**
 * Customize the logo WP login page.
 */
// function inhabitent_login_logo(){
//   //stuff in here
// }
// add_action();

/**
 * Customize the URL the logo points to on the WP login page.
 */
// function inhabitent_login_logo_url(){
// 	// stuff goes here
// }
// add_filter();

/**
 * Customize the title attribute on the WP login page.
 */

function inhabitent_login_logo_title(){
	return 'Inhabitent';
}
add_filter('login_headertitle', 'inhabitent_login_logo_title');


/**
 * Make hero image customizable through CFS field
 */
//Make a function that does the things below:
function some_name_here_please(){
			// 1. check if we are using the about template ( is_page_template )


			// 2. get image url from custom field suite (see CFS docs)


			// 3. Add custom css, that uses that image url for a background image (wp_add_inline_style)
}

 // Call this above function (wp_enqueue_scripts)