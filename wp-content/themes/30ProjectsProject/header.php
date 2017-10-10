<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage 30 Projects Project
 * @since 30 Projects Project 1.0
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>30 Projects Project</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">


    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  	<div id="page" class="hfeed site">
  		<header class="page-header container">
  			<a href="<?php echo site_url(); ?>" class="top-logo">
  				<span class="title"><?php bloginfo('name'); ?></span>
  				<span class="sub-title"><?php bloginfo('description'); ?></span>
  			</a>

  			<nav class="top-nav">
  				<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
  			</nav>
  		</header>

  		<div id="main" class="site-main">
