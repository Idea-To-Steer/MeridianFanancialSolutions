<?php get_header(); ?>

<div class="home-are">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="text-block">
					<h3><?php the_field('who_we_are_title'); ?></h3>
					<?php the_field('who_we_are_content'); ?>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="img-block">
					<?php  
						if( get_field('who_we_are_image') ){
					?>
						<img src="<?php the_field('who_we_are_image'); ?>" alt="">
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-img2.jpg" alt="">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-serve">
	<div class="container">
		<div class="serve-inn">
			<h2><?php the_field('who_we_serve_title'); ?></h2>
			<?php the_field('who_we_serve_content'); ?>
		</div>
	</div>
</div>

<div class="home-services">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="text-block">
					<div class="top-block">
						<h2><?php the_field('services_title'); ?></h2>
					</div>
					<div class="home-tabs">
						<ul>
							<?php  
								if( have_rows('services_list') ):
									while( have_rows('services_list') ) : the_row();
										$icon = get_sub_field('icon');
							?>
							<li  data-content="<div class='icon'><?php if($icon){ ?><img src='<?php echo $icon ; ?>' alt='' /><?php }else{ ?><img src='<?php echo get_template_directory_uri(); ?>/assets/images/tab-icon1.png' alt='' /><?php } ?></div><h3><?php the_sub_field('title'); ?></h3><?php the_sub_field('content'); ?><a href='<?php the_sub_field('read_more_url'); ?>'>Read more</a>"><a href="javascript:void(0)"><?php the_sub_field('title'); ?></a></li>
							<?php  
									endwhile;
								endif;
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="home-tab-content">
					<div class="tab-section" id="cost-seg">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Copy From About Us Page -->
<div class="home-found">
	<div class="container">
		<!-- Copy From About Us Page -->
		<h2><?php the_field('our_founding_values_title', 56); ?></h2>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="found-inn">
					<div class="row">
						<?php 
							if( have_rows('our_founding_values_section', 56) ): 
								while( have_rows('our_founding_values_section', 56) ): the_row();
						?>
						<div class="col-lg-3 col-md-12 col-sm-12">
							<div class="box">
								<div class="img-icon">
									<?php  
										$icon = get_sub_field('icon');
										if( $icon ){
									?>
										<img src="<?php the_sub_field('icon'); ?>" alt="" />
									<?php }else{ ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/val-01.png" alt="" />
									<?php } ?>
								</div>
								<h3><?php the_sub_field('title'); ?></h3>
								<?php the_sub_field('content'); ?>
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

<div class="home-key">
	<div class="container">
		<h2><?php the_field('3_key_principles_title'); ?></h2>
		<div class="row">
			<?php 
				if( have_rows('3_key_principles_list') ):
					while( have_rows('3_key_principles_list') ): the_row(); 
			?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="box">
					<div class="img-block">
						<?php 
							$icon = get_sub_field('icon');
							if( $icon ){
						?>
							<img src="<?php the_sub_field('icon'); ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_png.png" alt="" />
						<?php } ?>
					</div>
					<p><?php the_sub_field('content'); ?></p>
				</div>
			</div>
			<?php 
					endwhile;
				endif;
			 ?>
		</div>
		<div class="join-team">
			<a href="<?php the_field('join_our_team_url'); ?>"><?php the_field('join_our_team_text'); ?></a>
		</div>
	</div>
</div>

<div class="home-credit" id="home_retention_credit">
	<div class="container">
		<div class="cre-inner">
			<div class="top-block">
				<h2><?php the_field('employee_retention_credit_title'); ?></h2>
				<?php the_field('employee_retention_credit_content'); ?>
			</div>
			<div class="btm-block">
				<h2><?php the_field('tax_planning_opportunities_title'); ?></h2>
				<div class="row">
					<div class="col-lg-7 col-md-12 col-sm-12">
						<div class="box">	
							<?php  
								if( have_rows('tax_planning_opportunities_list') ):
									while( have_rows('tax_planning_opportunities_list') ): the_row();
							?>
							<div class="block">
								<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
								<p><?php the_sub_field('content'); ?></p>
							</div>
							<?php  
									endwhile;
								endif;
							?>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-sm-12">
						<div class="img-block">
							<?php  
								if( get_field('tax_planning_opportunities_image') ){
							?>
								<img src="<?php the_field('tax_planning_opportunities_image'); ?>" alt="" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/employee.jpg" alt="" />
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-client">
	<div class="container">
		<h2><?php the_field('our_clients_are_saying'); ?></h2>
		<div class="home-testimonial">
			<?php 
				$posts = array( 'post_type' => 'testimonials', 'post_status' => 'publish');
				$query = new WP_Query($posts);
				if ($query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();
			?>
			<div class="item">
				<?php the_content(); ?>
				<h4><?php the_title(); ?></h4>
				<h5><?php echo get_field('designation',$query->ID) ?></h5>
			</div>
			<?php  
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>


