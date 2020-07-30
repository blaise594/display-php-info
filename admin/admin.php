<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action('admin_menu', 'dpi_plugin_setup_menu');
 
function dpi_plugin_setup_menu(){
    add_menu_page( 'PHP Info Page', 'PHP Info', 'manage_options', 'display-php-info', 'dpi_init' );
}
 
function dpi_init(){
    
    echo '<iframe width="100%" height="100%" class="php-info" src="/wp-content/plugins/display_php_info/admin/php_info_page.php"></iframe>';
    
}
add_shortcode('dpi_init', 'dpi_init');