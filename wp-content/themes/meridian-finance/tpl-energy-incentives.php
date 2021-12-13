<?php /* Template Name: Energy Incentives */ ?>

<?php get_header(); ?>


<!-- Inner Banner -->
<div class="about-banner">
	<?php  
		if( get_field('banner_image') ){
	?>
		<img src="<?php the_field('banner_image'); ?>" alt="">
	<?php }else{ ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner.jpg" alt="">
	<?php } ?>
	<div class="banner-desc">
		<div class="container">
			<div class="text-block">
				<h2><?php the_field('banner_title'); ?></h2>
			</div>
		</div>
	</div>
</div>

<div class="energy-incentives">
	<div class="container">
		<div class="energy-inn">
			<?php the_field('energy_incentives_details'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>