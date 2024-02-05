<?php 

/** 
 * 
 *  Plugin Name: Contact Plugin
 *  Description: This is my test plugin
 *  Version: 1.0.0
 * Text Domain: options-plugin
 * 
*/

if(!defined('ABSPATH'))
{
    die('You cannot be here');
}

if(!class_exists('ContactPlugin')){
    class ContactPlugin {
        public function __construct()
        {
            //require_once(plugin_dir_path( __FILE__) . '/vendor/autoload.php');
        }
    }

    new ContactPlugin;
}
