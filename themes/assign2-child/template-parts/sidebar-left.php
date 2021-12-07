<?php
/**
 * Template Name: Sidebar Left
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<div id="primary" class="content-area"> 
<main id="main" class="site-main rightSideBar" role="main"> 

<h6> This is a template sidebar</h6>
<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) 
		comments_template();



endwhile; 
?>
<div>
</main>
<?php get_footer(); ?>
