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


function add_taxonomy_for_pages()
{
	load_template(dirname(__FILE__)."/temptest.php", true);
	
}

// アクションフック
add_action('registered_post_type','add_taxonomy_for_pages');

//プラグイン有効化時にテーブルを作成
register_activation_hook (__FILE__, 'InitTable');

?>