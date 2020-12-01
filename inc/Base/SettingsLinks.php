<?php

namespace Jakir\Base;

class SettingsLinks 
{

    protected $plugin;

    public function __construct() {
        $this->plugin = PLUGIN;
    }

    public function register() 
    {
        add_filter("plugin_action_links_$this->plugin", [$this, "plugin_settings"]);
    }

    function plugin_settings( $links ) 
    {
        $setting_links = '<a href="options-general.php?page=my_plugins_page">Settings</a>';
        array_push( $links, $setting_links );
        return $links;
    }
}