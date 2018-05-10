<?php
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function twentysixhundred_setup()
{
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'twentysixhundred_setup' );

function twentysixhundred_scripts()
{
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array( 'jquery' ), 1.1, false );
}
add_action( 'wp_enqueue_scripts', 'twentysixhundred_scripts');