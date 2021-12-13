<?php /* Template Name: Get Started with Cost Segregation */ ?>
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

	<div class="gsw-how">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="img-block">
						<?php 
							$how_did_i_get_started_image = get_field('how_did_i_get_started_image');
							if($how_did_i_get_started_image){
						?>
							<img src="<?php echo $how_did_i_get_started_image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gsw-how1.jpg" alt="" />
						<?php } ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="text-block">
						<h3><?php the_field('how_did_i_get_started_title'); ?></h3>
						<?php the_field('how_did_i_get_started_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gsw-expert">
		<div class="container">
			<h2><?php the_field('get_an_estimate_or_talk_to_an_expert_text'); ?></h2>
			<div class="row">
				<?php 
					if( have_rows('get_an_estimate_or_talk_to_an_experts') ):
						while( have_rows('get_an_estimate_or_talk_to_an_experts') ) : the_row();
				?>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="icon">
							<?php 
								$icon = get_sub_field('icon');
								if($icon){
							?>
								<img src="<?php echo $icon; ?>" alt="">
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gsw-exp1.png" alt="">
							<?php } ?>
						</div>
						<h3><?php the_sub_field('title'); ?></h3>
						<a href="<?php the_sub_field('button_url'); ?>"><?php the_sub_field('button_text'); ?></a>
					</div>
				</div>
				<?php 
						endwhile;
					endif;
				?>
			</div>
		</div>
	</div>

	<div class="cs_contact">
		<div class="container">
			<div class="gs-cont-inn">
				<div class="gs-speak">
					<h3><?php the_field('want_to_speak_to_one_of_our_experts_text'); ?></h3>
					<div class="cont_btn">
						<h4><?php the_field('contact_us_text'); ?></h4>
					</div>
					<a href="tel:<?php the_field('contact_us_number'); ?>"><?php the_field('contact_us_number'); ?></a>
				</div>
				<div class="form-block">
					<h3><?php the_field('form_heading'); ?></h3>
					<?php echo do_shortcode('[contact-form-7 id="677" title="Get Started With Cost Segregation"]'); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>