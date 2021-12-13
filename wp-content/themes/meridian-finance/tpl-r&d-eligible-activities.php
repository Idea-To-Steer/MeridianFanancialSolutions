<?php /* Template Name: R&D Eligible Activities */ ?>
<?php get_header(); ?>

<!-- Inner Banner -->
<div class="about-banner">
	<?php  
		$banner_image = get_field('banner_image');
		if($banner_image){
	?>
		<img src="<?php echo $banner_image; ?>" alt="">
	<?php }else{ ?>
		<img src="https://meridianfinancialsolutions.ideatosteer.com/wp-content/uploads/2021/11/about-banner.jpg" alt="">
	<?php } ?>
	<div class="banner-desc">
		<div class="container">
			<div class="text-block">
				<h2><?php the_field('banner_title'); ?></h2>
			</div>
		</div>
	</div>
</div>


<?php
$eligible_page_id =  263;
?>

<!-- EA Started -->
<div class="ea-eligable">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php 
						$research_and_development_activities_image = get_field('research_and_development_activities_image',$eligible_page_id);
						if($research_and_development_activities_image){
					?>
						<img src="<?php echo $research_and_development_activities_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ea-img.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('research_and_development_activities_title',$eligible_page_id); ?></h2>
					<?php the_field('research_and_development_activities_content',$eligible_page_id); ?>
					<h3><?php the_field('r&d_credit_qualified_activities_title',$eligible_page_id); ?></h3>
					<h4><?php the_field('technical_activities_title',$eligible_page_id); ?></h4>
					<div class="btm-panel">
						<?php  
							if( have_rows('technical_activities',$eligible_page_id) ):
								while( have_rows('technical_activities',$eligible_page_id) ) : the_row();
						?>
						<div class="box">
							<div class="img-panel">
								<?php 
									$image = get_sub_field('image');
									if($image){
								?>
									<img src="<?php echo $image; ?>" alt="" />
								<?php }else{ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/el-icon1.png" alt="" />
								<?php } ?>
							</div>
							<div class="txt-panel">
								<h5><?php the_sub_field('title'); ?></h5>
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
	</div>
</div>

<!-- EA Activities -->
<div class="ea-activities">
	<div class="container">
		<div class="rt-box">
			<h2>Or, activities focussed on improving:</h2>
			<div class="inn_box">
				<?php  
					if( have_rows('activities_focused_on_improving',$eligible_page_id) ):
						while( have_rows('activities_focused_on_improving',$eligible_page_id) ) : the_row();
				?>
				<div class="box">
					<div class="img-box">
						<?php 
							$image = get_sub_field('image');
							if($image){
						?>
							<img src="<?php echo $image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/acti1.png" alt="" />
						<?php } ?>
					</div>
					<div class="txt-box">
						<h3><?php the_sub_field('title'); ?></h3>
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

<!-- EA Qualify -->
<div class="ea-qualify">
	<div class="container">
		<div class="qualify-inner">
			<h2><?php the_field('qualifying_expenditures_title',$eligible_page_id); ?></h2>
			<div class="top-box">
				<?php  
					if( have_rows('qualifying_expenditures',$eligible_page_id) ):
						while( have_rows('qualifying_expenditures',$eligible_page_id) ) : the_row();
				?>
				<div class="box">
					<div class="img-panel">
						<?php 
							$image = get_sub_field('image');
							if($image){
						?>
							<img src="<?php echo $image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ea-qu1.png" alt="" />
						<?php } ?>
					</div>
					<div class="txt-panel">
						<h3><?php the_sub_field('title'); ?></h3>
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

<!-- EA The Four -->
<div class="ea-the-four">
	<div class="container">
		<div class="top-block">
			<h2>The Four-Part Test</h2>
			<p><?php the_field('the_four_part_content',$eligible_page_id); ?></p>
		</div>
		<div class="btm-block">
			<ul>
				<?php  
					if( have_rows('the_four_parts',$eligible_page_id) ):
						while( have_rows('the_four_parts',$eligible_page_id) ) : the_row();
				?>
				<li>
					<h2><?php the_sub_field('title'); ?></h2>
					<p><?php the_sub_field('sub_title'); ?></p>
				</li>
				<?php  
						endwhile;
					endif;
				?>
			</ul>
		</div>
	</div>
</div>

<?php get_footer(); ?>