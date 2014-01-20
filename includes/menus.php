<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-main' => __( 'Main Menu' ),
      'menu-footer' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>