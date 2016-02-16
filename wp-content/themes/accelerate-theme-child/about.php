
<?php
/*
Template Name: About
*/
?>
<?php
/**
 * The template for displaying the About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="about-2">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.  Here is a brief overview of our services offered.</p>
	</div>	
</section>		 			

<?php get_footer(); ?>