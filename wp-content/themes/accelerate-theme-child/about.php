
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


<div class="about-2">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-page">
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
</div><!-- .about-2 -->


<div class="site-content">	
			<div class="about-content">
				<h4>Our Services</h4>
				<p>We take pride in our clients and the content we create for them.  Here is a brief overview of our services offered.</p>
</div><!-- .site-content -->

<?php while ( have_posts() ) : the_post();
	$image_1 = get_field('image_1');
	$content_strategy = get_field('content_strategy');
	$influencer_mapping = get_field('influencer_mapping');
	$image_2 = get_field('image_2');
	$image_3 = get_field('image_3');
	$social_media_strategy = get_field('social_media_strategy');
	$design_and_development = get_field('design_and_development');  
	$image_4 = get_field('image_4'); 
	$size = "full"; ?>

<section class="about-section">
	<div class="image-1 align-left">
		<?php echo wp_get_attachment_image( $image_1, $size ); ?>
	</div>
	<div class="content-strategy">
		<h2>Content Strategy</h2>
		<p><?php echo $content_strategy; ?></p>
	</div>
</section>

<section class="about-section">
	<div class="image-2 align-right">
		<?php echo wp_get_attachment_image( $image_2, $size ); ?>
	</div>
	<div class="influencer-mapping">
		<h2>Influencer Mapping</h2>
		<p><?php echo $influencer_mapping; ?></p>
	</div>
</section>

<section class="about-section">
	<div class="image-3 align-left">
		<?php echo wp_get_attachment_image( $image_3, $size ); ?>
	</div>
	<div class="social-media-strategy">
		<h2>Social Media Strategy</h2>
		<p><?php echo $social_media_strategy; ?></p>
	</div>
</section>
	
<section class="about-section">
	<div class="image-4 align-right">
		<?php echo wp_get_attachment_image( $image_4, $size ); ?>
	</div>
	<div class="design-and-development">
		<h2>Design & Development</h2>
		<p><?php echo $design_and_development; ?></p>
	</div>
</section>

<?php endwhile; //end of the loop ?>

<?php get_footer(); ?>

