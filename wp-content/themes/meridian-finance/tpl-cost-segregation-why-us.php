<?php /* Template Name: Cost Segregation Why Us */ ?>
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

<div class="wus-experts">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="text-panel">
					<h2><?php the_field('industry_experts_rely_heading'); ?></h2>
					<?php the_field('industry_experts_rely_content'); ?>
					<a href="<?php the_field('industry_experts_rely_button_url'); ?>"><?php the_field('industry_experts_rely_button_text'); ?></a>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="img-panel">
					<?php 
						$industry_experts_rely_image = get_field('industry_experts_rely_image');
						if($industry_experts_rely_image){
					?>
						<img src="<?php echo $industry_experts_rely_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-img1.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wus-tenure">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-panel">
					<?php 
						$over_our_long_tenure_in_the_industry_image = get_field('over_our_long_tenure_in_the_industry_image');
						if($over_our_long_tenure_in_the_industry_image){
					?>
						<img src="<?php echo $over_our_long_tenure_in_the_industry_image; ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-img2.jpg" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-panel">
					<h2><?php the_field('over_our_long_tenure_in_the_industry_heading'); ?></h2>
					<?php the_field('over_our_long_tenure_in_the_industry_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wus-broad">
	<div class="container">
		<div class="wus-broad-inn">
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="text-block">
						<h2><?php the_field('our_broad_range_of_industry_heading'); ?></h2>
						<?php the_field('our_broad_range_of_industry_list'); ?>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="img-block">
						<?php 
							$our_broad_range_of_industry_image = get_field('our_broad_range_of_industry_image');
							if($our_broad_range_of_industry_image){
						?>
							<img src="<?php echo $our_broad_range_of_industry_image; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-board.jpg" alt="">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wus-studies">
	<div class="container">
		<div class="text-block">
			<h2><?php the_field('our_studies_have_withstood_the_scrutiny_of_heading'); ?></h2>
			<?php the_field('our_studies_have_withstood_the_scrutiny_of_content'); ?>
		</div>
	</div>
</div>

<div class="wus-irs">
	<div class="container">
		<div class="authority-slider">
			<?php 
				if( have_rows('authority_slider') ):
					while( have_rows('authority_slider') ) : the_row();
			?>
			<div class="item">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<h2><?php the_sub_field('title'); ?></h2>
					</div>
					<div class="col-md-8 col-sm-12">
						<?php the_sub_field('content'); ?>
					</div>
				</div>
			</div>
			<?php 
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>

<div class="wus-offer">
	<div class="container">
		<div class="text-block">
			<h2><?php the_field('we_offer_a_complete_audit_trail_heading'); ?></h2>
			<?php the_field('we_offer_a_complete_audit_trail_content'); ?>
		</div>
	</div>
</div>

<div class="wus-take">
	<div class="container">
		<div class="row">
			<?php 
				if( have_rows('we_take_the_burden') ):
					while( have_rows('we_take_the_burden') ) : the_row();
			?>
			<div class="col-md-6 col-sm-12">
				<div class="block">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="img">
								<?php 
									$image = get_sub_field('image');
									if($image){
								?>
									<img src="<?php echo $image; ?>" alt="" />
								<?php }else{ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/us-take1.jpg" alt="" />
								<?php } ?>
							</div>
						</div>
						<div class="col-md-8 col-sm-12">
							<div class="text">
								<h3><?php the_sub_field('title'); ?></h3>
							    <?php the_sub_field('content'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>

<div class="wus-being-text">
	<div class="container">
		<?php the_field('being_the_most_experienced_advantages'); ?>
	</div>
</div>

<?php get_footer(); ?>