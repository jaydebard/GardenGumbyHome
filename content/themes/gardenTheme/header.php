<?php
/**
 * The Header for the theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rdmgumby
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js sixteen colgrid">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="author" href="<?php get_template_directory_uri(); ?>/inc/humans.txt">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

	<div class="row">
	<div class="sixteen columns">
	<h4 class="bold">FFXIV Gardening</h4>
	</div>
	</div>

<div class="row navbar" id="nav1">
  <!-- Toggle for mobile navigation, targeting the <ul> -->
  <a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>
  <ul class="ten columns">
    <li><a href="#">Seeds</a></li>
    <li>
      <a href="#">Resources</a>
      <div class="dropdown">
        <ul>
          <li><a href="#">The Grid</a></li>
          <li><a href="#">UI Kit</a></li>
          <li><a href="#">Sass</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Demo</a></li>
        </ul>
      </div>
    </li>
    <li><a href="#">Links</a></li>
    <li><a href="#">Garden Planner</a></li>
    <li><a href="#">Submit Cross</a></li>
  </ul>
</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">