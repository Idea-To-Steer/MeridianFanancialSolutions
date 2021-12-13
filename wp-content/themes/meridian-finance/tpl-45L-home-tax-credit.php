<?php /* Template Name: 45L Home Tax Credit */ ?>
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
				<h3><?php the_field('banner_sub_title'); ?></h3>
			</div>
		</div>
	</div>
</div>

<div class="tl-home">
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('tax_rewards_for_multi-family_developers_image') ){
					?>
						<img src="<?php the_field('tax_rewards_for_multi-family_developers_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/house.jpg" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<!-- <h3><?php //the_field('tax_rewards_for_multi-family_developers_heading'); ?></h3> -->
					<?php the_field('tax_rewards_for_multi-family_developers_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tl-hiw">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h3><?php the_field('how_it_works_title'); ?></h3>
					<h4><?php the_field('how_it_works_sub_title'); ?></h4>
					<?php the_field('how_it_works_content'); ?>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('how_it_works_image') ){
					?>
						<img src="<?php the_field('how_it_works_image'); ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hqandsop2.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tl-net">
	<div class="container">
		<div class="tl-net-inner">
			<div class="top-block">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<h3><?php the_field('energy_efficient_home_credit_net_benefits_title'); ?></h3>
					</div>
					<div class="col-md-7 col-sm-12">
						<?php the_field('energy_efficient_home_credit_net_benefits_content'); ?>
					</div>
				</div>
			</div>
			<div class="table-responsive">
			  <table class="table">
			    <?php the_field('energy_efficient_home_credit_net_benefits_data_table'); ?>
			  </table>
			</div>
		</div>
	</div>
</div>


<div class="tl-req">
	<div class="container">
		<div class="top-wrap">
			<h2><?php the_field('tax_credit_requirements_title'); ?></h2>
			<?php the_field('tax_credit_requirements_content'); ?>
		</div>
		<div class="box">
			<h2><?php the_field('get_started_title'); ?></h2>
			<?php the_field('get_started_content'); ?>
		</div>
	</div>
</div>

<div class="cs_contact">
	<div class="container">
		<div class="gs-cont-inn">
			<div class="gs-speak">
				<h3><?php the_field('speak_our_expert_text', 780); ?></span></h3>
				<div class="cont_btn">
					<h4><?php the_field('contact_us_title', 780); ?></h4>
				</div>
				<a href="tel:<?php the_field('contact_number', 780); ?>"><?php the_field('contact_number', 780); ?></a>
			</div>
			<div class="form-block">
				<h3><?php the_field('contact_form_heading', 780); ?></h3>
				
				<?php echo do_shortcode('[contact-form-7 id="1013" title="Contact Form For 45L and 179D"]'); ?>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>