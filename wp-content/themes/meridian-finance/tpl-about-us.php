<?php /* Template Name: About us */ ?>

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
				<h2><?php the_field('about_us_title'); ?></h2>
			</div>
		</div>
	</div>
</div>

<div class="ab-growth">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('our_story_image') ){
					?>
						<img src="<?php the_field('our_story_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.jpg" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h4><?php the_field('our_story_text'); ?></h4>
					<?php the_field('our_story_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="ab-years">
	<div class="container">
		<div class="in-year">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<h2><?php the_field('serving_our_first_client_title'); ?></h2>
				</div>
				<div class="col-md-8 col-sm-12">
					<?php the_field('serving_our_first_client_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="add-how">
	<div class="container">
		<div class="inner-block">
			<div class="top-block">
				<div class="title">
					<h3><?php the_field('how_we_add_value_title'); ?></h3>
				    <?php the_field('how_we_add_value_content'); ?>
				</div>
				<div class="row">
					<?php 
						if( have_rows('how_we_add_value') ):
						    while( have_rows('how_we_add_value') ) : the_row();
					?>
					<div class="col-md-6 col-sm-12">
						<div class="box">
							<h2><?php the_sub_field('title'); ?></h2>
						    <?php the_sub_field('content'); ?>
						</div>
					</div>
					<?php 
							endwhile;
						endif;
					?>
				</div>
			</div>
			<div class="btm-block">
				<h2><?php the_field('experience_the_meridian_advantage_title'); ?></h2>
				<?php the_field('experience_the_meridian_advantage_content'); ?>
			</div>
		</div>
	</div>
</div>

<div class="ab-win">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('our_service_image') ){
					?>
						<img src="<?php the_field('our_service_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-img2.jpg" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('our_service_title'); ?></h2>
					<?php the_field('our_service_content'); ?>
					<div class="eve">
					    <h5><?php the_field('every_client_and_situation_title'); ?></h5>
					    <?php the_field('every_client_and_situation_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="join-us">
	<div class="container">
		<div class="top-block">
			<h3><?php the_field('join_us_title'); ?></h3>
			<?php the_field('join_us_content'); ?>
		</div>
	</div>
</div>

<div class="about-culture">
	<div class="container">
		<h2><?php the_field('culture_of_collaboration_title'); ?></h2>
		<div class="row">
			<?php  
				if( have_rows('culture_of_collaboration_section') ):
					while( have_rows('culture_of_collaboration_section') ): the_row(); 
			?>
			<div class="col-md-4 col-sm-12">
				<p><?php the_sub_field('content'); ?></p>
			</div>
			<?php  
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>

<div class="about-values">
	<div class="container">
		<h2><?php the_field('our_founding_values_title'); ?></h2>
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="val-inn">
					<div class="row">
						<?php 
							if( have_rows('our_founding_values_section') ): 
								while( have_rows('our_founding_values_section') ): the_row();
						?>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="box">
								<div class="icon-img">
									<?php  
										$icon = get_sub_field('icon');
										if( $icon ){
									?>
										<img src="<?php the_sub_field('icon'); ?>" alt="" />
									<?php }else{ ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/val-01.png" alt="" />
									<?php } ?>
								</div>
								<h3><?php the_sub_field('title'); ?></h3>
								<?php the_sub_field('content'); ?>
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
		<div class="btm-block">
			<h5><?php the_field('learn_more_about_joining_team_text'); ?></h5>
			<a href="<?php the_field('grow_with_us_button_url'); ?>"><?php the_field('grow_with_us_button_text'); ?></a>
		</div>
	</div>
</div>



<?php get_footer(); ?>