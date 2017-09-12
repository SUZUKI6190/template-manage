<?php
/*
Plugin Name:TemplateManager
Plugin URI: 
Description: 
Author: Takashi Suzuki
Version: 1.0
Author URI:
*/
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
require_once('function.php');
require_once('source/view-template-list.php');

function get_template_dir()
{
    return dirname(__FILE__);
}

function echo_template_url()
{
    echo plugins_url("", __FILE__);
}

add_filter ('theme_page_templates', 'add_page_template', 10, 3 );

add_filter ('page_template', 'redirect_page_template');

//プラグイン有効化時
function init_plugin()
{

}

register_activation_hook (__FILE__, 'init_plugin');

?>