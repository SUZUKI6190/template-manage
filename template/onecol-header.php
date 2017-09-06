<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<?php if ( is_front_page()): ?>
<title><?php bloginfo('name'); ?></title>
<?php else: ?>
<title><?php wp_title(''); ?></title>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo get_template_url(); ?>/onecol.css" type="text/css" media="screen,print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
<?php include( 'lp_css.php' ); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_url(); ?>/lp_img/scrolltop.js"></script>
<script src="<?php echo get_template_url(); ?>/lp_img/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_url(); ?>/lp_img/button01.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>