<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mamasheaven
 */

get_header(); ?>

<?php
$args = array(
	'post_type' => 'page',
	'p' => 16
);

$your_query = new WP_Query( $args );
while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
	<h1><?php the_title(); ?></h1><?php
	the_content();
endwhile;
?>
<?php

$args = array(
	'post_type' => 'page',
	'p' => 22
);

$your_query = new WP_Query( $args );
while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
	<h1><?php the_title(); ?></h1><?php
	the_content();
endwhile;
?>
<?php


$args = array(
	'post_type' => 'page',
	'p' => 50
);

$your_query = new WP_Query( $args );
while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
	<h1><?php the_title(); ?></h1><?php
	the_content();
endwhile;
?>
<?php


$args = array(
	'post_type' => 'page',
	'p' => 53
);

$your_query = new WP_Query( $args );
while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
	<h1><?php the_title(); ?></h1><?php
	the_content();
endwhile;
?>
<?php


$args = array(
	'post_type' => 'page',
	'p' => 56
);

$your_query = new WP_Query( $args );
while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
	<h1><?php the_title(); ?></h1><?php
	the_content();
endwhile;
?>
<?php


get_sidebar();
get_footer();
