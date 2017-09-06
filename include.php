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

class Define{
const TempDir = "template";
}

function InitTable()
{

}
function judge_extension($filename) {
    return substr($filename, strrpos($filename, '.') + 1);
}
 
function add_page_template ($templates) {
    $dir = dirname(__FILE__)."/".Define::TempDir."/";

    $files = scandir($dir);
    $theme_file_list = [];
    foreach ($files as $file) {
        
        if (judge_extension($file) == "php") {
            $full_path = dirname(__FILE__)."/".Define::TempDir."/".$file;
            
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
    // var_dump($template);
    // var_dump(bloginfo('template_directory'));
    $post_id = get_the_ID();
    //var_dump( get_the_ID());
    $template_name = get_post_meta($post_id ,'_wp_page_template')[0];

    if($template_name != 'default'){
        $template = dirname(__FILE__)."/".Define::TempDir."/".$template_name;
        $template_data = implode( '', file( $template ) );
		if ( preg_match( '|Template Name:(.*)$|mi', $template_data, $name ) ) {
			var_dump(sprintf( __( '%s' ), _cleanup_header_comment( $name[1] ) ));
		}
        
    }

    return $template;
}

add_filter ('page_template', 'redirect_page_template');


//プラグイン有効化時にテーブルを作成
register_activation_hook (__FILE__, 'InitTable');

?>