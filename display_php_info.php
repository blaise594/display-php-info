<?php
/*
Plugin Name: Display PHP Info
Plugin URI: https://danielrogers.info
Author: Daniel Rogers
Version: 1.0
Author URI: https://danielrogers.info
*/

define( 'DPI_VERSION', '1.0' );
define( 'DPI_PATH', plugin_dir_path( __FILE__ ) ); // All have trailing slash
define( 'DPI_URL', plugin_dir_url( __FILE__ ) );
define( 'DPI_BASE_NAME', plugin_basename( __FILE__ ) );


class DisplayPHPInfo{
	public static function init(){
        
        // Include the required
        self::includes();
       
	}

	public static function includes(){
				
	    //admin
		include_once( DPI_PATH . 'admin/admin.php' );
		

		
	}
}
DisplayPHPInfo::init();
?>