<?php
/** Theme Options Here */
add_theme_support( 'post-thumbnails' );

function popup_scripts() {
	wp_register_script( 'vendor-js', get_template_directory_uri() . "/javascripts/vendor.js");
	wp_register_script( 'app-js', get_template_directory_uri() . "/javascripts/app.js");
	wp_enqueue_script( 'vendor-js' );
	wp_enqueue_script( 'app-js' );


}
add_action( 'wp_enqueue_scripts', 'popup_scripts');

function popup_styles() {
	wp_register_style( 'app-css', get_template_directory_uri() . "/stylesheets/app.css");
	wp_enqueue_style( 'app-css' );
}
add_action( 'wp_enqueue_scripts', 'popup_styles');

function popup_color_shortcode( $atts, $content = null ){
	return '<span class="' . $atts[color] .'">' . $content . '</span>';
}
add_shortcode( 'popup_color', 'popup_color_shortcode' );

function popup_menus() {
	register_nav_menus(
		array(
			'header_nav' => 'Header Nav',

		)
	);
}
add_action( 'init', 'popup_menus' );

require( "artist_type.php" );
