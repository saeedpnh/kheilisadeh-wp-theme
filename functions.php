<?php
require_once('lib/enqueue.php');
require_once('lib/helper.php');
require_once('lib/theme-support.php');
require_once('lib/sidebars.php');


show_admin_bar( false );


// woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
 
function woocommerce_support() {
 
   add_theme_support( 'woocommerce' );
 
}