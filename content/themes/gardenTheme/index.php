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

<!--
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
-->

<?php
  $args = array(
    'post_type' => 'products',
    'post_status' => 'publish',
    'posts_per_page' => '10'
  );
  $products_loop = new WP_Query( $args );
  if ( $products_loop->have_posts() ) :
    while ( $products_loop->have_posts() ) : $products_loop->the_post();
      // Set variables
      $title = get_the_title();
      $description = get_the_content();
      
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
      
      // Output
      ?>
      <div class=”product”>
        <h2><?php echo $title; ?></h2>
        <?php echo $description; ?>
      </div>
      <?php
      endwhile;
    wp_reset_postdata();
  endif;
?>

<?php get_footer(); ?>