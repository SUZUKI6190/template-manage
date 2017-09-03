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
	var_dump(basename ($template));

    if ('temptest.php' == basename ($template)){
		$template = dirname(__FILE__)."/template/temptest.php";
	}
    return $template;
}

add_filter ('page_template', 'redirect_page_template');

// function rt_include_gym_dashboard_page_template( $template ) {

// 	if ( is_page( 'gym-dashboard' )  ) {
// 			return dirname(__FILE__)."/temptest.php";
// 	}

// 	return $template;
// }

// add_filter( 'template_include', 'rt_include_gym_dashboard_page_template', 99 );

//プラグイン有効化時にテーブルを作成
register_activation_hook (__FILE__, 'InitTable');

?>