<?php
//register any sidebars you need by copying this function structure
// and add it into my_widgets_init() 
/*
register_sidebar(array(
'name' => __( 'Sidebar' ),
'id' => 'siderbar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
*/


function my_widgets_init() {
	register_sidebar(array(
	'name' => __( 'Sidebar' ),
	'id' => 'siderbar',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));

	//this is for the homepage reliability info
	register_sidebar(array(
	'name' => __( 'Portfolio Slider (Home-Page)' ),
	'id' => 'portfolio-home',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h5>',
	'after_title' => '</h5>',
	));

	//this is for the efficient bit on the home page
	register_sidebar(array(
	'name' => __( 'Schedule Slider (Home-Page)' ),
	'id' => 'schedule-home',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h5>',
	'after_title' => '</h5>',
	));

	//this is for the precise bit on the home page
	register_sidebar(array(
	'name' => __( 'Contact Us (Home-Page)' ),
	'id' => 'contact-home',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h5>',
	'after_title' => '</h5>',
	));
}
add_action( 'init', 'my_widgets_init' );
?>