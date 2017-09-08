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

function get_template_dir()
{
    return dirname(__FILE__)."/template";
}

function echo_template_url()
{
    echo plugins_url("/template", __FILE__);
}

function judge_extension($filename) {
    return substr($filename, strrpos($filename, '.') + 1);
}

function create_template_list()
{
    $dir = get_template_dir();
    
    $files = scandir($dir);
    $theme_file_list = [];
    foreach ($files as $file) {
        
        if (judge_extension($file) == "php") {
            $full_path =$dir."/".$file;
            
            $template_data = implode( '', file( $full_path ) );
            if ( preg_match( '|Template Name:(.*)$|mi', $template_data, $name ) ) {
                $templates[$file] = $name[1];
            }
        }
    }

    return $templates;
}

function add_page_template ($templates) {
    return create_template_list();
}

add_filter ('theme_page_templates', 'add_page_template');

function redirect_page_template ($template) {
    $dir = get_template_dir();

    $post_id = get_the_ID();

    $template_list = create_template_list();

    $template_name = get_post_meta($post_id ,'_wp_page_template')[0];

    if(array_key_exists($template_name, $template_list)){
        $template = $dir."/".$template_name;       
    }

    return $template;
}

add_filter ('page_template', 'redirect_page_template');

//プラグイン有効化時
function init_plugin()
{

}

register_activation_hook (__FILE__, 'init_plugin');

?>