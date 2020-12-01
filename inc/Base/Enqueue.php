<?php

namespace Jakir\Base;

class Enqueue 
{
    public function register() 
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue']);
    }

    function enqueue() 
    {
        wp_enqueue_style('mypluginstyle', PLUGIN_URL . '/assets/css/style.css');
        wp_enqueue_script('mypluginsscript', PLUGIN_URL . '/assets/js/scripts.js', array('jquery'), true, time());
    }
}