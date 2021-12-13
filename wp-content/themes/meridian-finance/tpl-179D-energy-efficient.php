<?php /* Template Name: 179D Energy Efficient Building Deduction */ ?>
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
						if( get_field('federal_tax_deduction_image') ){
					?>
						<img src="<?php the_field('federal_tax_deduction_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/179d-img.png" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<!-- <h3><?php //the_field('federal_tax_deduction_heading'); ?></h3> -->
					<?php the_field('federal_tax_deduction_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tl-of">
	<div class="container">
		<h4><?php the_field('properties_quality_types_title'); ?></h4>
		<?php the_field('properties_quality_types'); ?>
	</div>
</div>

<div class="tl-hiw">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h3><?php the_field('how_it_works_heading'); ?></h3>
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
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/179d-img2.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tl-net">
	<div class="container">
		<h2><?php the_field('examples_text'); ?></h2>
		<div class="tl-net-inner">
			<div class="top-block">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<h3><?php the_field('partial_deductions_title'); ?></h3>
					</div>
					<div class="col-md-7 col-sm-12">
						<?php the_field('partial_deductions_content'); ?>
					</div>
				</div>
			</div>
			<div class="table-responsive">
			  <table class="table one_d">
			    <?php the_field('partial_deductions_data_table'); ?>
			  </table>
			</div>
			<h5><?php the_field('partial_deductions_note'); ?></h5>
		</div>
	</div>
</div>

<div class="tl-deduction">
	<div class="container">
		<div class="ded-inn">
			<h2><?php the_field('earning_the_maximum_deduction_title'); ?></h2>
		    <?php the_field('earning_the_maximum_deduction_content'); ?>
		</div>
	</div>
</div>

<div class="tl-claim">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('timeframe_to_claim_the_deduction_image') ){
					?>
						<img src="<?php the_field('timeframe_to_claim_the_deduction_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-img2.jpg" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('timeframe_to_claim_the_deduction_title'); ?></h2>
					<?php the_field('timeframe_to_claim_the_deduction_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tl-req one_d">
	<div class="container">
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
				<h3><?php the_field('speak_our_expert_text'); ?></h3>
				<div class="cont_btn">
					<h4><?php the_field('contact_us_title'); ?></h4>
				</div>
				<a href="tel:<?php the_field('contact_number'); ?>"><?php the_field('contact_number'); ?></a>
			</div>
			<div class="form-block">
				<h3><?php the_field('contact_form_heading'); ?></h3>
				<?php echo do_shortcode('[contact-form-7 id="1013" title="Contact Form For 45L and 179D"]'); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>