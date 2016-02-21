<?php
/*
Plugin Name: Color box z99
Plugin URI: http://dev.liudas.eu/wp-colorbox
Description: No frills color box
Version: 1.0
Author: lso
Author URI: http://dev.liudas.eu/
License: MIT
*/

function enqueue_styles_scripts()
{
    wp_enqueue_script('colorbox', plugin_dir_url(__FILE__) . 'js/jquery.colorbox-min.js', array('jquery'), '', true);
    wp_enqueue_script('colorbox-lt', plugin_dir_url(__FILE__) . 'js/i18n/jquery.colorbox-lt.js', array('jquery'), '', true);
    $jsmod = filemtime(plugin_dir_path(__FILE__) . '/js/main.js');
    wp_enqueue_script('wp-colorbox-z99', plugin_dir_url(__FILE__) . 'js/main.js', array('colorbox','colorbox-lt'), $jsmod, true);
    $cssmod = filemtime(plugin_dir_path(__FILE__) . '/style/colorbox.css');
    wp_register_style('wp-colorbox-z99', plugin_dir_url(__FILE__) . 'style/colorbox.css', '', $cssmod);
    wp_enqueue_style('wp-colorbox-z99');
}

add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');


