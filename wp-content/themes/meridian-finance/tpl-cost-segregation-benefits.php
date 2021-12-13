<?php /* Template Name: Cost Segregation Benefits */ ?>
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

<div class="csb-cost">
	<div class="container">
		<h2><?php the_field('what_are_the_benefits_of_cost_segregation_heading'); ?></h2>
		<div class="row">
			<?php 
				if( have_rows('cost_segregation_benefits_type') ):
					while( have_rows('cost_segregation_benefits_type') ) : the_row();
			?>
			<div class="col-md-3 col-sm-12">
				<div class="box">
					<div class="icon">
						<?php 
							$icon = get_sub_field('icon'); 
							if($icon){
						?>
							<img src="<?php echo $icon; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/csb1.png" alt="" />
						<?php } ?>
					</div>
					<p><?php the_sub_field('title'); ?></p>
				</div>
			</div>
			<?php 
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>

<div class="csb-spotlight">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="text-block">
					<h3><?php the_field('spotlight_text'); ?></h3>
					<h4><?php the_field('current_tax_laws_heading'); ?></h4>
					<?php the_field('current_tax_laws_content'); ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="consider">
					<h2><?php the_field('consider_the_example_heading'); ?></h2>
					<?php the_field('consider_the_example_content'); ?>
				</div>
				<div class="table-responsive">
					<table class="table">
					  	<thead>
						    <tr>
						      <th scope="col"></th>
						      <th scope="col">Without Cost Segregation</th>
						      <th scope="col">Pre-TCJA (no bonus)</th>
						      <th scope="col">Post-TCJA (100% bonus)</th>
						    </tr>
					  	</thead>
					  	<tbody>
						    <tr>
						      <td>1st Year Tax Savings</td>
						      <td>$19,295</td>
						      <td>$49,549</td>
						      <td>$356,569</td>
						    </tr>
						    <tr>
						      <td>5 Year NPV</td>
						      <td>$205,179</td>
						      <td>Thornton</td>
						      <td>$325,894</td>
						    </tr>
					  	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="csb-types">
	<div class="container">
		<div class="top-wrap">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<h3><?php the_field('all_types_of_buildings_heading'); ?></h3>
				</div>
				<div class="col-md-7 col-sm-12">
					<?php the_field('all_types_of_buildings_content'); ?>
				</div>
			</div>
		</div>
		<div class="csb-avargb">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<h3><?php the_field('average_title'); ?></h3>
				</div>
				<div class="col-md-8 col-sm-12">
					<ul>
						<?php 
							if( have_rows('average_reallocated') ):
								while( have_rows('average_reallocated') ) : the_row();
						?>
						<li data-content="<?php the_sub_field('content'); ?>"><?php the_sub_field('name'); ?></li>
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

<?php get_footer(); ?>