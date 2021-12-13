<?php /* Template Name: Cost Segregation Proposal Request Form */ ?>
<?php get_header(); ?>

<!-- Inner Banner -->
<div class="about-banner">
	<?php  
		$banner_image = get_field('banner_image');
		if($banner_image){
	?>
		<img src="<?php echo $banner_image; ?>" alt="">
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

<!-- CQ Proposal Start -->
<div class="cst-proposal">
	<div class="container">
		<div class="title-block">
			<h2><?php the_field('form_title'); ?></h2>
			<?php the_field('form_sub_content'); ?>
		</div>
		<div class="form-block">
			<?php echo do_shortcode('[contact-form-7 id="720" title="Cost Segregation Proposal Request Form"]'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>