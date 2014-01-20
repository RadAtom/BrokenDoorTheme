<?php
//just a little dev trick that I use to make things simpler when using Foundation CSS
function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'my_filter_head');

//so we can have some featured images
add_theme_support( 'post-thumbnails' );

//keeping the generator tag hidden like a silly man
remove_action('wp_head', 'wp_generator');

?>