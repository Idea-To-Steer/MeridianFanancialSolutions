<?php /* Template Name: R&D Opportunities */ ?>
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
				<h3><?php the_field('banner_sub_title'); ?></h3>
			</div>
		</div>
	</div>
</div>

<?php $opportunities_page_id = 174; ?>
<!-- OP Corporation -->
<div class="op-corporation">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="img-block">
					<?php  
						$any_corporation_image = get_field('any_corporation_image',$opportunities_page_id);
						if($any_corporation_image){
					?>
						<img src="<?php echo $any_corporation_image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/op-img.jpg" alt="" />
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="text-block">
					<h2><?php the_field('any_corporation_title',$opportunities_page_id); ?></h2>
					<?php the_field('any_corporation_description',$opportunities_page_id); ?>
					<h3><?php the_field('claim_these_tax_credits_title',$opportunities_page_id); ?></h3>
					<?php 
						if( have_rows('claim_these_tax_credits_list',$opportunities_page_id) ):
							while( have_rows('claim_these_tax_credits_list',$opportunities_page_id) ) : the_row();
					?>
					<div class="box">
						<div class="op-img">
							<?php 
								$image = get_sub_field('image');
								if($image){
							?>
								<img src="<?php echo $image; ?>" alt="">
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/op-img2.png" alt="">
							<?php } ?>
						</div>
						<div class="op-text">
							<?php the_sub_field('content'); ?>
						</div>
					</div>
					<?php  
							endwhile;
						endif;
					?>
					<a href="<?php the_field('get_started_url',$opportunities_page_id); ?>">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- OP Tax -->
<div class="op-tax">
	<div class="container">
		<h2><?php the_field('r&d_tax_incentives_title',$opportunities_page_id); ?></h2>
		<div class="top-panel">
			<?php  
				if( have_rows('r&d_tax_incentives_types',$opportunities_page_id) ):
					while( have_rows('r&d_tax_incentives_types',$opportunities_page_id) ) : the_row();
			?>
			<div class="box">
				<div class="img">
					<?php 
						$image = get_sub_field('image');
						if($image){
					?>
						<img src="<?php echo $image; ?>" alt="" />
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tax-icon.png" alt="" />
					<?php } ?>
				</div>
				<div class="text">
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

<!-- OP Examples -->
<div class="op-examples">
	<div class="container">
		<div class="title">
			<!-- <span><img src="<?php //echo get_template_directory_uri(); ?>/assets/images/example-icon.png" alt="" /></span> -->
			<h2><?php the_field('examples_title',$opportunities_page_id); ?></h2>
		</div>
		<div class="top-block">
			<div class="row">
				<?php  
					if( have_rows('some_examples',$opportunities_page_id) ):
						while( have_rows('some_examples',$opportunities_page_id) ) : the_row();
				?>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="img-box">
							<?php 
								$image = get_sub_field('image');
								if($image){
							?>
								<img src="<?php echo $image; ?>" alt="" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/op-examples1.jpg" alt="" />
							<?php } ?>
						</div>
						<div class="text-box">
							<h3><?php the_sub_field('title'); ?></h3>
							<h4><?php the_sub_field('designation'); ?></h4>
							<ul>
								<?php 
									if( have_rows('details') ):
										while( have_rows('details') ) : the_row();
								?>
									<li><?php the_sub_field('title'); ?></li>
								<?php  
										endwhile;
									endif;
								?>
							</ul>
						</div>
					</div>
				</div>
				<?php  
						endwhile;
					endif;
				?>
			</div>
		</div>
		<div class="started">
			<a href="<?php the_field('example_get_started_url'); ?>">Get Started</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>