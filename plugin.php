<?php

/*
 * Plugin Name:       Plugin
 * Description:       Plugin Tutorial.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Javier Goodall
 */



//  Replace the “Howdy, with Logged in as
 function replace_howdy( $wp_admin_bar ) {
    $my_account = $wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Logged in as', $my_account->title );
    $my_account->title = $newtitle;
    $wp_admin_bar->add_node( $my_account );
}
add_action( 'admin_bar_menu', 'replace_howdy', 999 );

