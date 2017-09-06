<?php

require_once ( 'template/functions-field_lp.php' );
require_once ( 'template/functions-field_lpw.php' );
require_once ( 'template/acf-wp-wysiwyg/acf-wp_wysiwyg.php');  

// モバイルユーザーエージェント判定（iPadを除外）
function is_mobile() {
	$useragents =
	array(     'iPhone',          
	// iPhone     
	'iPod',            
	// iPod touch     
	'Android',         
	// 1.5+ Android     
	'dream',           
	// Pre 1.5 Android     
	'CUPCAKE',         
	// 1.5+ Android     
	'blackberry9500',  
	// Storm     
	'blackberry9530',  
	// Storm     
	'blackberry9520',  
	// Storm v2     
	'blackberry9550',  
	// Storm v2     
	'blackberry9800',  
	// Torch     
	'webOS',           
	// Palm Pre Experimental     
	'incognito',       
	// Other iPhone browser     
	'webmate'          
	// Other iPhone browser   
	);   
	$pattern = '/'.implode('|', $useragents).'/i';   
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}   

?>