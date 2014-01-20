<?php
include_once('includes/admin-helpers.php');
include_once('includes/admin-pages.php');
include_once('includes/admin-settings.php');
include_once('includes/menus.php');
//include_once('includes/sidebars.php');
include_once('includes/widgets.php');

function my_deregister_javascript() {
        if (!is_admin()) {
                wp_deregister_script('jquery');
        }
}
add_action( 'wp_enqueue_scripts', 'my_deregister_javascript', 100 );
?>
