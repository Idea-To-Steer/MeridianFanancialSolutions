<?php /* Template Name: R&D Get Started */ ?>
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

<!-- GS Started -->
<div class="gs-started">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php 
						$how_do_i_get_started_image = get_field('how_do_i_get_started_image');
						if($how_do_i_get_started_image){
					?>
						<img src="<?php echo $how_do_i_get_started_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gs-img.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('how_do_i_get_started_title'); ?></h2>
					<?php the_field('how_do_i_get_started_content'); ?>
					<h3>Consider the following:</h3>
					<div class="gs-top">
						<?php  
							if( have_rows('consider_the_following') ):
								while( have_rows('consider_the_following') ) : the_row();
						?>
						<div class="box">
							<div class="img-box">
								<?php 
									$image = get_sub_field('images');
									if($image){
								?>
									<img src="<?php echo $image; ?>" alt="" />
								<?php }else{ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gs-icon1.png" alt="" />
								<?php } ?>
							</div>
							<div class="txt-box">
								<h4><?php the_sub_field('content'); ?></h4>
							</div>
						</div>
						<?php  
								endwhile;
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- GS Estimatate -->
<div class="gs-estimate">
	<div class="container">
		<div class="est-inner">
			<h2><?php the_field('how_we_can_assist_you_title'); ?></h2>
			<div class="box">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<h3><?php the_field('fill_out_this_form_content'); ?></h3>
					</div>
					<div class="col-md-6 col-sm-12">
						<a href="<?php the_field('request_an_estimate_url'); ?>"><?php the_field('request_an_estimate_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- GS Contact -->
<div class="gs-contact">
	<div class="container">
		<div class="gs-cont-inn">
			<div class="gs-speak">
				<h3><?php the_field('speck_our_experts_text'); ?></h3>
				<div class="cont_btn">
					<h4>Contact us</h4>
				</div>
				<a href="tel:<?php the_field('speck_our_experts_text_ph_number'); ?>"><?php the_field('speck_our_experts_text_ph_number'); ?></a>
			</div>
			<div class="form-block">
				<h3>Complete the form below to schedule a call</h3>
				<?php echo do_shortcode('[contact-form-7 id="252" title="schedule a call"]'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>