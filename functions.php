<?php
/**
 * Theme setup functions
 */

function tema_acc_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'tema_acc' ),
    ) );
}
add_action( 'after_setup_theme', 'tema_acc_setup' );

