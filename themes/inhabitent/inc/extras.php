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

function inhabient_logo_login() {
	echo '
<style type = “text/css”>
h1 a { background: url(project-04/images/logos/inhabitent-logo-text-dark.svg
	) !important; }
</style>';
}

add_action( 'login_head', 'inhabitent_login_logo' );



function my_login_logo_url() {
	return get_bloginfo( 'http://localhost:8888/inhabitent/' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );



function inhabitent_logo_title(){
	return 'inhabitent';
}
add_filter ( 'login_headertitle', 'inhabitent_logo_url_title');

