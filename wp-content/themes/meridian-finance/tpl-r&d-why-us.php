<?php /* Template Name: R&D Why Us */ ?>
<?php get_header(); ?>

<!-- Inner Banner -->
<div class="about-banner">
	<!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/about-banner.png" alt=""> -->
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

<?php $why_weridian_page_id = 176;?>


<!-- R&D Start -->
<div class="rd-team">
	<div class="container">
		<div class="top-box">
			<h2><?php the_field('our_r&d_team_tite',$why_weridian_page_id); ?></h2>
			<?php the_field('important_to_development_system_content',$why_weridian_page_id); ?>
			<div class="btm-block">
				<?php  
					if( have_rows('develop_systems_process',$why_weridian_page_id) ):
						while( have_rows('develop_systems_process',$why_weridian_page_id) ) : the_row();
				?>
				<div class="box">
					<div class="img-box">
						<?php 
							$image = get_sub_field('image');
							if($image){
						?>
							<img src="<?php echo $image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rdwh1.png" alt="" />
						<?php } ?>
					</div>
					<div class="text-box">
						<h3><?php the_sub_field('title'); ?></h3>
					</div>
				</div>
				<?php  
						endwhile;
					endif;
				?>				
				<?php the_field('r&d_tax_credit_studies_content',$why_weridian_page_id); ?>
				<a href="<?php the_field('get_started_url',$why_weridian_page_id); ?>">Get Started</a>
			</div>
		</div>
	</div>
</div>

<!-- R&D Recive -->
<div class="rd-recive">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('receive_every_benefit_title',$why_weridian_page_id); ?></h2>
					<h3><?php the_field('receive_every_benefit_sub_title',$why_weridian_page_id); ?></h3>
					<?php the_field('receive_every_benefit_description',$why_weridian_page_id); ?>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php 
						$case_studies_image = get_field('case_studies_image',$why_weridian_page_id);
						if($case_studies_image){
					?>
						<img src="<?php echo $case_studies_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rd-img.jpg" alt="" />
					<?php } ?>
					<!-- <div class="over-text">
						<h2><?php the_field('meridian_finance_has_completed_over_title',$why_weridian_page_id); ?></h2>
						<h3><?php the_field('case_studies',$why_weridian_page_id); ?></h3>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<!-- R&D Recive -->
<div class="rd-unclaimed">
	<div class="container">
		<div class="text-block">
			<h2><?php the_field('don’t_let_tax_savings_go_unclaimed',$why_weridian_page_id); ?></h2>
			<?php the_field('don’t_let_tax_savings_go_unclaimed_description',$why_weridian_page_id); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>