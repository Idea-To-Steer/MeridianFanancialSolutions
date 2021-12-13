<?php /* Template Name: CPA partners */ ?>

<?php get_header(); ?>


<div class="cpa-goals">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('care_about_your_clients_image') ){
					?>
						<img src="<?php the_field('care_about_your_clients_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cpa.jpg" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('care_about_your_clients_title'); ?></h2>
					<?php the_field('care_about_your_clients_details'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cpa-firm">
	<div class="container">
		<div class="cpa-f-inn">
			<div class="box">
				<h2><?php the_field('serving_cpa_firms_title'); ?></h2>
				<?php the_field('serving_cpa_firms_content'); ?>
				<h2><?php the_field('we_uncover_opportunities_title'); ?></h2>
				<?php the_field('we_uncover_opportunities_content'); ?>
			</div>
		</div>
	</div>
</div>

<div class="cpa-work">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<?php the_field('how_it_works_section');  ?>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('how_it_works_image') ){
					?>
						<img src="<?php the_field('how_it_works_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/179d-img2.jpg" alt="">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cpa-benefits">
	<div class="container">
		<h2><?php the_field('benefits_title'); ?></h2>
		<h3><?php the_field('benefits_sub_title'); ?></h3>
		<div class="box">
			<div class="row">
				<?php 
					if( have_rows('type_of_benefits') ):
						while( have_rows('type_of_benefits') ) : the_row();
				?>
				<div class="col-md-6 col-sm-12">
					<?php the_sub_field('content'); ?>
				</div>
				<?php  
						endwhile;
					endif;
				?>
			</div>
		</div>
		<!-- <p>Process Is Important to Client Retention.  We handle the nitty gritty while you grow your <span>client’s business and in turn your firm’s profits.</span></p> -->
	</div>
</div>

<div class="cpa-del">
	<div class="container">
		<p><?php the_field('we_serve_title'); ?></p>
		<a href="<?php the_field('connect_with_us_link'); ?>"><?php the_field('connect_with_us_text'); ?></a>
	</div>
</div>

<div class="cpa-started">
	<div class="container">
		<h2><?php the_field('get_started_title'); ?></h2>
		<?php the_field('get_started_content'); ?>
	</div>
</div>


<?php get_footer(); ?>