<?php /* Template Name: Employee retention credit */ ?>

<?php get_header(); ?>

<!-- Inner Banner -->
<div class="about-banner">
    <?php if( get_field('banner') ){ ?>
	<img src="<?php the_field('banner'); ?>" alt="">
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

<div class="erc-law">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php if( get_field('employee_retention_credit_qualifications_image') ){ ?>
					<img src="<?php the_field('employee_retention_credit_qualifications_image'); ?>" alt="">
					<?php }else{ ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/erc-img1.jpg" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('employee_retention_credit_qualifications_title'); ?></h2>
					<?php the_field('employee_retention_credit_qualifications_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="no-problem">
	<div class="container">
	  <?php if( get_field('received_a_loan_no_problem_image') ){ ?>
		<img src="<?php the_field('received_a_loan_no_problem_image'); ?>" alt="">
		<?php }else{ ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ppc-img.jpg" alt="">
		<?php } ?>
	</div>
</div>

<div class="erc-breakdown">
	<div class="container">
		<h2><?php the_field('breakdown_title'); ?></h2>
		<div class="row">
		<?php if( have_rows('breakdown_wages') ): ?>
			<?php while( have_rows('breakdown_wages') ): the_row();  ?>
			<div class="col-md-6 col-sm-12">
				<div class="box">
					<h3><?php the_sub_field('content'); ?></h3>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="can-be">
			<h3><?php the_field('challenging_title'); ?></h3>
			<?php the_field('challenging_content'); ?>
		</div>
	</div>
</div>

<div class="erc-eligible">
	<div class="container">
		<div class="row">
		    <div class="col-md-7 col-sm-12">
		    	<div class="top-block">
		    		<h2><?php the_field('eligible_employer_title'); ?></h2>
		    		<h3><?php the_field('eligible_employer_sub_title'); ?></h3>
		    		<?php the_field('eligible_employer_criteria'); ?>
		    	</div>
		    	<div class="btm-text">
		    		<h2><?php the_field('how_it_works_title'); ?></h2>
		    		<?php the_field('how_it_works_content'); ?>
		    	</div>
		    </div>
		    <div class="col-md-5 col-sm-12">
		    	<div class="img-panel">
				<?php if( get_field('eligible_employer_image') ){ ?>
					<img src="<?php the_field('eligible_employer_image'); ?>" alt="">
					<?php }else{ ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/erc-img2.jpg" alt="" />
					<?php } ?>
		    	</div>
		    </div>
		</div>
	</div>
</div>

<div class="erc-realize">
	<div class="container">
		<div class="rel-inn">
			<h2><?php the_field('our_clients_realize_title'); ?></h2>
			<p><?php the_field('our_clients_realize__content'); ?></p>
		</div>
	</div>
</div>

<div class="erc-call">
	<div class="container">
		<p><?php the_field('our_clients_realize_bellow_content'); ?></p>
	</div>
</div>

<div class="cs_contact">
	<div class="container">
		<div class="gs-cont-inn">
			<div class="gs-speak">
				<h3><?php the_field('contact_us_title'); ?></h3>
				<div class="cont_btn">
					<h4><?php the_field('contact_us_sub_title'); ?></h4>
				</div>
				<a href="tel:<?php the_field('contact_us_phone'); ?>"><?php the_field('contact_us_phone'); ?></a>
			</div>
			<div class="form-block">
				<h3><?php the_field('contact_us_form_title'); ?></h3>
				<?php echo do_shortcode('[contact-form-7 id="1013" title="Contact Form For 45L and 179D"]'); ?>
				
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>