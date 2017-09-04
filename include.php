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

function InitTable()
{

}

function add_page_template ($templates) {
	$templates['temptest.php'] = 'My Template';
	$templates['temptest2.php'] = 'My Template2';
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
        $template = dirname(__FILE__)."/template/".$template_name;
    }

    return $template;
}

add_filter ('page_template', 'redirect_page_template');


//プラグイン有効化時にテーブルを作成
register_activation_hook (__FILE__, 'InitTable');

?>