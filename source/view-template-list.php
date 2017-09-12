<?php

function judge_extension($filename) {
    return substr($filename, strrpos($filename, '.') + 1);
}

function create_template_list()
{
    $dir = get_template_dir();
    
    $files = scandir($dir);
    $templates = [];
    foreach ($files as $file) {
        
        if($file == "function.php"){
            continue;
        }

        if($file == "include.php"){
            continue;
        }

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

function add_page_template ($templates , $this, $post) {
    return array_merge(create_template_list(), $templates);
}

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


?>