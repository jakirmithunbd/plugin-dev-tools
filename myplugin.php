<?php 

/**
 * Plugin Name:       My First Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jakir
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       jakir
 * Domain Path:       /languages
 */

defined( 'ABSPATH' ) or die( 'Sorry! You\re not all access this' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// use Jakir\inc\Init;

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );

if ( class_exists( 'Jakir\\Init' ) ) {
    Jakir\Init::register_services();
}

// use Jakir\Activate;
// use Jakir\Admin\Adminpage;

// class myplugin_class
// {

//     public $plugin;

//     public function __construct() {
//         // add_action("init", array('myplugin_class', 'custom_post_type')); // static way
//        add_action('init', [$this, 'custom_post_type']);

//        $this->plugin = plugin_basename(__FILE__);
//     }

//     function register() {
//         add_action('admin_enqueue_scripts', [$this, 'enqueue']);

//         add_action( "admin_menu", [$this, 'add_admin_pages'] );

//         add_filter("plugin_action_links_$this->plugin", [$this, "plugin_settings"]);
//     }

//     function plugin_settings ( $links ) {
//         $setting_links = '<a href="options-general.php?page=my_plugins_page">Settings</a>';
//         array_push( $links, $setting_links );

//         return $links;
//     }

//     function display_page_markup() {
//         require_once plugin_dir_path( __FILE__ ) . "/templates/plugin-page.php";
//     }

//     function activate() {
//         Activate::activate();
//     }

//     function uninstall() {

//     }

//     function custom_post_type() {
//         register_post_type('book', ['public' => true, 'label'=> 'Books']);
//     }

//     function enqueue() {
//         wp_enqueue_style('mypluginstyle', plugins_url('/assets/css/style.css', __FILE__));
//         wp_enqueue_script('mypluginsscript', plugins_url('/assets/js/scripts.js', __FILE__), array('jquery'), true, time());
//     }
// }

// if (class_exists('myplugin_class')){
//     $control_functions = new myplugin_class();
//     $control_functions->register();
// };

use Jakir\nc\Base\Activate;
use Jakir\Base\Deactivate;

function prefix_activate() {
    Activate::activate();
}

function prefix_deactivate() {
    Deactivate::deactivate();
}

register_activation_hook('__FILE__', 'prefix_activate');
register_deactivation_hook('__FILE__', 'prefix_deactivate');

