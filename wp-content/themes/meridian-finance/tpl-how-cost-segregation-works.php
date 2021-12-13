<?php /* Template Name: How Cost Segregation works */ ?>
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

	<div class="cos-maximize">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="img-panel">
						<?php 
							$how_cost_segregation_works_image = get_field('how_cost_segregation_works_image');
							if($how_cost_segregation_works_image){
						?>
							<img src="<?php echo $how_cost_segregation_works_image; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hw-cost1.jpg" alt="">
					<?php } ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="text-panel">
						<h2><?php the_field('how_cost_segregation_works_title'); ?></h2>
						<?php the_field('how_cost_segregation_works_contents'); ?>
						<a href="<?php the_field('get_started_button_url'); ?>"><?php the_field('get_started_button_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hw-assets">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<div class="text-block">
						<h2><?php the_field('real_estate_assets_are_segregated_heading'); ?></h2>
						<?php 
							if( have_rows('real_estate_assets_are_segregated') ):
								while( have_rows('real_estate_assets_are_segregated') ) : the_row();
						?>
						<div class="box">
							<div class="img">
								<?php 
									$icon = get_sub_field('icon');
									if($icon){
								?>
									<img src="<?php echo $icon; ?>" alt="" />
								<?php }else{ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hw-icon1.png" alt="" />
								<?php } ?>
							</div>
							<div class="text">
								<h3><?php the_sub_field('title'); ?></h3>
								<p><?php the_sub_field('sub_title'); ?></p>
								<h4><?php the_sub_field('example'); ?></h4>
							</div>
						</div>
						<?php 
								endwhile;
							endif;
						?>
					</div>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="img-block">
						<?php 
							$real_estate_assets_are_segregated_image = get_field('real_estate_assets_are_segregated_image');
							if($real_estate_assets_are_segregated_image){
						?>
							<img src="<?php echo $real_estate_assets_are_segregated_image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hw-img1.jpg" alt="" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hw-approach">
		<div class="container">
			<div class="approach-inn">
				<h2><?php the_field('our_approach_text'); ?></h2>
				<div class="row">
					<?php 
						if( have_rows('our_approaches') ):
							while( have_rows('our_approaches') ) : the_row();
					?>
					<div class="col-md-4 col-sm-12">
						<div class="box">
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
							<div class="text">
								<h3><?php the_sub_field('title'); ?></h3>
								<?php the_sub_field('content'); ?>
							</div>
						</div>
					</div>
					<?php 
							endwhile;
						endif;
					?>
				</div>
				<div class="get-started">
					<a href="<?php the_field('our_approach_get_started_button_url'); ?>"><?php the_field('our_approach_get_started_button_text'); ?></a>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>