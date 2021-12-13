<?php /* Template Name: Cost Segregation Opportunities */ ?>
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

<div class="cso-who">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						$who_qualifies_image = get_field('who_qualifies_image');
						if($who_qualifies_image){
					?>
						<img src="<?php echo $who_qualifies_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cso-when2.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('who_qualifies_text'); ?></h2>
					<h3><?php the_field('whether_you_have_a_large_real_estate_portfolio_heading'); ?></h3>
					<ul>
						<?php 
							if( have_rows('whether_you_have_a_large_real_estate_portfolio_details') ):
								while( have_rows('whether_you_have_a_large_real_estate_portfolio_details') ) : the_row();
						?>
							<li><?php the_sub_field('list'); ?></li>
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

<div class="cso-when">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('when_text'); ?></h2>
				    <h3><?php the_field('when_should_i_have_a_cost_segregation_study_done_on_my_property'); ?></h3>
				    <?php the_field('when_should_i_have_a_cost_segregation_study_done_on_my_property_description'); ?>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php 
						$when_should_i_have_a_cost_segregation_study_done_on_my_property_image = get_field('when_should_i_have_a_cost_segregation_study_done_on_my_property_image');
						if($when_should_i_have_a_cost_segregation_study_done_on_my_property_image){
					?>
						<img src="<?php echo $when_should_i_have_a_cost_segregation_study_done_on_my_property_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cso-when1.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cso-construction">
	<div class="container">
		<div class="row">
			<?php 
				if( have_rows('construction') ):
					while( have_rows('construction') ) : the_row();
			?>
			<div class="col-md-6 col-sm-12">
				<div class="box">
					<div class="icon">
						<?php 
							$icon = get_sub_field('icon');
							if($icon){
						?>
							<img src="<?php echo $icon; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gsw-exp1.png" alt="" />
						<?php } ?>
					</div>
					<h3><?php the_sub_field('title'); ?></h3>
					<?php the_sub_field('content'); ?>
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

<div class="cso-renov">
	<div class="container-fluid">
		<div class="box">
			<div class="row no-gutters">
			    <div class="col-md-6 col-sm-12">
			    	<div class="img-panel">
			    		<?php 
							$renovation_demolition_image = get_field('renovation_&_demolition_image');
							if($renovation_demolition_image){
						?>
			    			<img src="<?php echo $renovation_demolition_image; ?>" alt="" />
			    		<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cso-renov1.jpg" alt="" />
						<?php } ?>
			    	</div>
			    </div>
			    <div class="col-md-6 col-sm-12">
			    	<div class="text-panel">
			    		<h3><?php the_field('disposition_of_assets_text'); ?></h3>
			    		<h2><?php the_field('renovation_&_demolition_heading'); ?></h2>
			    		<?php the_field('content'); ?>
			    	</div>
			    </div>
		    </div>
		</div>
		<div class="box">
			<div class="row no-gutters">
			    <div class="col-md-6 col-sm-12">
			    	<div class="img-panel">
			    		<?php 
							$our_solutions_are_tailored_image = get_field('our_solutions_are_tailored_image');
							if($our_solutions_are_tailored_image){
						?>
			    			<img src="<?php echo $our_solutions_are_tailored_image; ?>" alt="" />
			    		<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cso-renov2.jpg" alt="" />
						<?php } ?>
			    	</div>
			    </div>
			    <div class="col-md-6 col-sm-12">
			    	<div class="text-panel">
			    		<h2><?php the_field('our_solutions_are_tailored_heading'); ?></h2>
			    		<?php the_field('our_solutions_are_tailored_content'); ?>
			    	</div>
			    </div>
		    </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>