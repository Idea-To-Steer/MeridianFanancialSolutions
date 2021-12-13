<?php /* Template Name: R&D Benefits */ ?>
<?php get_header(); ?>
<!-- Inner Banner -->
<div class="about-banner">
	<?php  
		$banner_image = get_field('banner_image');
		if($banner_image){
	?>
		<img src="<?php echo $banner_image; ?>" alt="">
	<?php }else{ ?>
		<img src="https://meridianfinancialsolutions.ideatosteer.com/wp-content/uploads/2021/11/about-banner.jpg" alt="">
	<?php } ?>
	<div class="banner-desc">
		<div class="container">
			<div class="text-block">
				<h2><?php the_field('banner_title'); ?></h2>
			</div>
		</div>
	</div>
</div>

<?php $benefits_page_id = 169; ?>

<!-- Be Corporation -->
<div class="be-corporation">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="img-block">
					<?php 
						$tax_credit_image = get_field('r&d_tax_credit_image',$benefits_page_id);
						if($tax_credit_image){
					?>
						<img src="<?php echo $tax_credit_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/be-img2.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="text-block">
					<h3><?php the_field('r&d_tax_credit_title',$benefits_page_id); ?></h3>
					<h4>Benefits Include:</h4>
					<ul>
						<?php  
							if( have_rows('benefits_include',$benefits_page_id) ):
								while( have_rows('benefits_include',$benefits_page_id) ) : the_row();
						?>
						<li>
							<h2><?php the_sub_field('title'); ?></h2>
							<p><?php the_sub_field('sub_title'); ?></p>
						</li>
						<?php  
								endwhile;
							endif;
						?>						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Be Contact -->
<div class="be-contact">
	<div class="container">
		<div class="block">
			<h2><?php the_field('research_&_development_title',$benefits_page_id); ?></h2>
			<div class="form-block">
				<h3>Complete the form below to schedule a call</h3>
				<?php echo do_shortcode('[contact-form-7 id="252" title="schedule a call"]'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>