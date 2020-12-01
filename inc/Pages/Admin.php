<?php 

namespace Jakir\Pages;

class Admin 
{

    public $plugin;

    public function __construct() {
        $this->plugin = plugin_basename(__FILE__);
    }

    function register () {
        add_action( "admin_menu", [$this, 'add_admin_pages'] );
        add_filter("plugin_action_links_$this->plugin", [$this, "plugin_settings"]);
    }
    
    function add_admin_pages() {
        add_menu_page( "Display Name", 'My plugin', "manage_options", "my_plugins_page", [$this, "display_page_markup"], "dashicons-dashboard", 110 );
    }
    
    function display_page_markup() {
        require_once PLUGIN_PATH . "/templates/plugin-page.php";
    }

    function plugin_settings ( $links ) {
        $setting_links = '<a href="options-general.php?page=my_plugins_page">Settings</a>';
        array_push( $links, $setting_links );

        return $links;
    }

}

