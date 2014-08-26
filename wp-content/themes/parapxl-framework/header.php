<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE7? />
		<title><?php pxl::head_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <meta name="author" content="<?php echo bloginfo('name'); ?>">
		<meta name="description" content="<?php echo bloginfo('name'); ?>">
		
		
		<?php pxl::responsive(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/resources/css/theme.css" />
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<?php get_template_part('templates/default/header'); ?>
		