<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package rdmgumby
 */
get_header(); ?>

<div class="jumbotron">
	<div class="row">
		<div class="centered fourteen columns">
			<h4 align="center" class="xbold">Welcome to FFXIV Gardening</h4>
			<p align="center" class="xbold">The FFXIV Gardening Database is a collection of everything related to gardening in Final Fantasy XIV: A Realm Reborn. It was created to organize and visualize the results obtained from crossbreeding.</p>
		</div>
		<div class="centered twelve columns" align="center">
			<div class="medium danger btn">
				<a href="#">View Update Archive</a>
			</div>
		</div>
	</div>
</div>
<div class="row">
<div class="twelve columns">
<p>Left</p>
</div>
<div class="four columns">
<p align="right">Right</p>
</div>
</div>

<?php get_footer(); ?>