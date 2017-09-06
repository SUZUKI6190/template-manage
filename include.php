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

function judge_extension($filename) {
    return substr($filename, strrpos($filename, '.') + 1);
}
 
function add_page_template ($templates) {
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

add_filter ('theme_page_templates', 'add_page_template');

function redirect_page_template ($template) {
    $dir = get_template_dir();
    // var_dump($template);
    // var_dump(bloginfo('template_directory'));
    $post_id = get_the_ID();
    //var_dump( get_the_ID());
    $template_name = get_post_meta($post_id ,'_wp_page_template')[0];

    if($template_name != 'default'){
        $template = $dir."/".$template_name;
        /*
        $template_data = implode( '', file( $template ) );
		if ( preg_match( '|Template Name:(.*)$|mi', $template_data, $name ) ) {
			var_dump(sprintf( __( '%s' ), _cleanup_header_comment( $name[1] ) ));
        }
        exit;
        */
        
    }

    return $template;
}

add_filter ('page_template', 'redirect_page_template');


function init_plugin()
{

}

//プラグイン有効化時にテーブルを作成
register_activation_hook (__FILE__, 'init_plugin');

?>