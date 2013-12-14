<?php
/**
 * The Header for the home page. Doesn't display nav.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WowYear
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type="text/javascript" src="//use.typekit.net/ogd2qhe.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <?php do_action( 'before' ); ?>
  <header id="masthead" class="site-header" role="banner">
    <img src="<?php bloginfo('template_directory'); ?>/images/wowyear-banner.jpg" alt="Wow Year 2014" class="site-banner">

  </header><!-- #masthead -->

  <div id="content" class="site-content">
