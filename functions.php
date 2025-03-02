<?php

// CSSとJavaScriptの読み込み
function my_enqueue_styles()
{
	wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('ress'), false, 'all');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');



// function my_enqueue_scripts() {
//   wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
//   wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', false );
// }
// add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );