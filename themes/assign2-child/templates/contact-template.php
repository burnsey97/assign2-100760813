<?php
/**
 * Template Name: Contact Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<div id="primary" class="content-area"> 
<main id="main" class="site-main" role="main"> 
<div id="knifeImg" alt="Long Knife" src="../template-parts/knife.png"> </div>
<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) 
		comments_template();

// This is the first created Template page


endwhile; 

?>

</main>

<div>

<?php get_footer(); ?>