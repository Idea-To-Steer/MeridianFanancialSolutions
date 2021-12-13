<?php /* Template Name: R&D tax Credits Overview */ ?>
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



<!-- TC Tax Button Start -->
<div class="tax-button">
	<div class="container-fluid">
	    <?php the_field('eligible_activities'); ?>
	</div>
</div>

<!-- Overview TAB -->
<div class="tab-container" id="scroll_to_overview">

	<!-- TC Credit Start -->
	<div class="tc-credits">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="text-panel">
						<h2><?php the_field('tax_credits_overview_title'); ?></h2>
						<?php the_field('tax_credits_overview_description'); ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="get-started">
						<div class="top-block">
							<h3>Contact Us to Get Started</h3>
							<p>Call us at <a href="tel:<?php the_field('contact_us_number'); ?>"><?php the_field('contact_us_number'); ?></a> <span>or fill out the form below.</span></p>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="307" title="Tax Credits Contact Form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- TC Tax Competition Start -->
	<div class="tc-competition">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="img-panel">
						<?php 
							$step_ahead_the_competition_image = get_field('step_ahead_the_competition_image');
							if($step_ahead_the_competition_image){
						?>
							<img src="<?php echo $step_ahead_the_competition_image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rd-tax-img.jpg" alt="" />
						<?php } ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="text-panel">
						<h2><?php the_field('step_ahead_the_competition__title'); ?></h2>
						<?php the_field('step_ahead_the_competition_description'); ?>
						<a href="<?php the_field('enquire_now_url'); ?>"><?php the_field('enquire_now_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ========= Our licensed engineers ========== -->
	<!-- <div class="rd-tc-wide">
		<div class="container">
			<h2><?php the_field('our_licensed_engineers_text'); ?></h2>
			<div class="btm-block">
				<?php  
					
					if( have_rows('our_licensed_engineers') ):
						while( have_rows('our_licensed_engineers') ) : the_row();
				?>
				<div class="box">
					<div class="img-box">
						<?php 
							$icons = get_sub_field('icons');
							if($icons){
						?>
							<img src="<?php echo $icons; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wide1.png" alt="">
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
			</div>
		</div>
	</div> -->


	<!-- TC Tax Resources Start -->
	<!-- <div class="tc-resouces">
		<div class="container">
			<div class="tc-rc-inner">

					<div class="us-case-st" style="padding:0;">
						<div class="container">
							<div class="case_study_wrap">
								<h2>Case Studies</h2>
								<a id="#scroll_to_case_studies" >View all</a>
							</div>
							<div class="row">

								<?php
								// $args = array('post_type' => 'studies', 'posts_per_page' => 3);
								$args = array(
									'post_type' => 'studies',
									'posts_per_page' => 3,
									'tax_query' => array(
					                    array(
					                        'taxonomy' => 'case-study',
					                        'field' => 'term_id',
					                        'terms' => 10
					                    )
					                )
								);
								$loop = new WP_Query($args);
								if($loop->have_posts()) :
									while($loop->have_posts()) :
										$loop->the_post();

								?>
								<div class="col-md-4 col-sm-12">
									<div class="box">
										<div class="img-block">
										   <a href="<?php the_permalink( $post->ID ); ?>">
											<?php 
												// echo $a = get_the_ID();
												if ( has_post_thumbnail(get_the_ID()) ) {
													$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
											?>
												<img src="<?php echo $image[0]; ?>" alt="">
											<?php }else{ ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies.jpg" alt="">
											<?php } ?>
											</a>
										</div>
										<div class="text-block">
											<?php  
												$title = get_the_title($post->ID);
												if( strlen($title) > 55 ){
													$title = substr($title, 0, 55).'....';
												}
											?>
											<h3><a href="<?php the_permalink( $post->ID ); ?>"><?php echo $title; ?></a></h3>
											<?php 
												$excerpt = get_the_excerpt();
												if( strlen($excerpt) > 80 ){
													$excerpt = substr($excerpt, 0, 80).'....';
												}
											?>
											<p><?php echo $excerpt; ?></p>
										</div>
										<div class="read-more">
											<a href="<?php the_permalink( $post->ID ); ?>">Read more </a>
										</div>
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
	</div> -->

</div>


<!-- Benefits TAB -->
<div class="tab-container" id="scroll_to_benefits">
   
		<?php $benefits_page_id = 169; ?>

		<!-- Be Corporation -->
		<div class="be-corporation">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-12">
						<div class="text-block">
							<h3><?php the_field('r&d_tax_credit_title',$benefits_page_id); ?></h3>
							<h4>Benefits Include:</h4>
							<ul>
								<?php  
									if( have_rows('benefits_include',$benefits_page_id) ):
										while( have_rows('benefits_include',$benefits_page_id) ) : the_row();
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

					<div class="col-md-6 col-sm-12">
						<div class="img-block">
							<?php 
								$tax_credit_image = get_field('r&d_tax_credit_image',$benefits_page_id);
								if($tax_credit_image){
							?>
								<img src="<?php echo $tax_credit_image; ?>" alt="" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/be-img2.jpg" alt="" />
							<?php } ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Be Contact -->
		<!-- <div class="be-contact">
			<div class="container">
				<div class="block">
					<h2><?php the_field('research_&_development_title',$benefits_page_id); ?></h2>
					<div class="form-block">
						<h3>Complete the form below to schedule a call</h3>
						<?php echo do_shortcode('[contact-form-7 id="252" title="schedule a call"]'); ?>
					</div>
				</div>
			</div>
		</div> -->

</div>


<!-- Opportunities TAB -->
<div class="tab-container" id="scroll_to_opportunities">

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
					<div class="us-case-st" style="padding:0;">
						<div class="container">
							<div class="row">

								<?php
								// $args = array('post_type' => 'studies', 'posts_per_page' => 2);
								$args = array(
									'post_type' => 'studies',
									'posts_per_page' => 2,
									'tax_query' => array(
					                    array(
					                        'taxonomy' => 'case-study',
					                        'field' => 'term_id',
					                        'terms' => 10
					                    )
					                )
								);
								$loop = new WP_Query($args);
								if($loop->have_posts()) :
									while($loop->have_posts()) :
										$loop->the_post();

								?>
								<div class="col-md-6 col-sm-12">
									<div class="box">
										<div class="img-block">
										   <a href="<?php the_permalink( $post->ID ); ?>">
											<?php 
												// echo $a = get_the_ID();
												if ( has_post_thumbnail(get_the_ID()) ) {
													$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
											?>
												<img src="<?php echo $image[0]; ?>" alt="">
											<?php }else{ ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies.jpg" alt="">
											<?php } ?>
											</a>
										</div>
										<div class="text-block">
											<?php  
												$title = get_the_title($post->ID);
												if( strlen($title) > 55 ){
													$title = substr($title, 0, 55).'....';
												}
											?>
											<h3>
												<a href="<?php the_permalink( $post->ID ); ?>"><?php echo $title; ?></a>
											</h3>
											<?php 
												$excerpt = get_the_excerpt();
												if( strlen($excerpt) > 80 ){
													$excerpt = substr($excerpt, 0, 80).'....';
												}
											?>
											<?php echo $excerpt; ?>
										</div>
										<div class="read-more">
											<a href="<?php the_permalink( $post->ID ); ?>">Read more </a>
										</div>
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
				<div class="started">
					<a href="<?php the_field('example_get_started_url'); ?>">Get Started</a>
				</div>
			</div>
		</div>

</div>


<!-- R&D Eligible activities TAB -->
<div class="tab-container" id="scroll_to_eligible">

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
			    <div class="row">
				    <div class="col-md-5 col-sm-12">
						<div class="img-block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/R&D_bg_img.png">
						</div>
					</div>

					<div class="col-md-7 col-sm-12">
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

</div>


<!-- Why Meridian? TAB -->
<div class="tab-container" id="scroll_to_meridian">
   
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

</div>


<!-- Case Studies TAB -->
<div class="tab-container" id="scroll_to_case_studies">
   
		<?php $case_study_page_id = 358;?>

		<div class="us-case-st">
			<div class="container">
				<?php 
					$case_study_count = array(
						'post_type' => 'studies',
						'posts_per_page' => -1,
						'tax_query' => array(
		                    array(
		                        'taxonomy' => 'case-study',
		                        'field' => 'term_id',
		                        'terms' => 10
		                    )
		                )
					);
					$all_post = new WP_Query($case_study_count);
					$total_post = $all_post->post_count;					
				?>
				<div class="all_case_study_wrap">
					<h2>Case Studies</h2>
					<?php  
						if( $total_post > 3 ){ 
					?>
						<h4><a href="<?php echo get_page_link(1095); ?>?term_id=10">View All</a></h4>
					<?php } ?>
				</div>
				<div class="row">

					<?php
					// $args = array('post_type' => 'studies', 'posts_per_page' => -1);
					$args = array(
						'post_type' => 'studies',
						'posts_per_page' => 3,
						'tax_query' => array(
		                    array(
		                        'taxonomy' => 'case-study',
		                        'field' => 'term_id',
		                        'terms' => 10
		                    )
		                )
					);
					$loop = new WP_Query($args);
					if($loop->have_posts()) :
						while($loop->have_posts()) :
							$loop->the_post();

					?>
					<div class="col-md-4 col-sm-12">
						<div class="box">
							<div class="img-block">
						    	<a href="<?php the_permalink( $post->ID ); ?>">
								<?php 
									// echo $a = get_the_ID();
									if ( has_post_thumbnail(get_the_ID()) ) {
										$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
								?>
									<img src="<?php echo $image[0]; ?>" alt="">
								<?php }else{ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies.jpg" alt="">
								<?php } ?>
								</a>
							</div>
							<div class="text-block">
								<?php  
									$title = get_the_title($post->ID);
									if( strlen($title) > 55 ){
										$title = substr($title, 0, 55).'....';
									}
								?>
								<h3><a href="<?php the_permalink( $post->ID ); ?>"><?php echo $title; ?></a></h3>
								<?php 
									$excerpt = get_the_excerpt();
									if( strlen($excerpt) > 80 ){
										$excerpt = substr($excerpt, 0, 80).'....';
									}
								?>
								<p><?php echo $excerpt; ?></p>
							</div>
							<div class="read-more">
								<a href="<?php the_permalink( $post->ID ); ?>">Read more </a>
							</div>
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


<!--Get Started TAB -->
<div class="tab-container" id="scroll_to_get_started">

		<?php $get_started_page_id = 172; ?>
		<!-- GS Started -->
		<div class="gs-started">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<div class="img-block">
							<?php 
								$how_do_i_get_started_image = get_field('how_do_i_get_started_image',$get_started_page_id);
								if($how_do_i_get_started_image){
							?>
								<img src="<?php echo $how_do_i_get_started_image; ?>" alt="" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gs-img.jpg" alt="" />
							<?php } ?>
						</div>
					</div>
					<div class="col-md-7 col-sm-12">
						<div class="text-block">
							<h2><?php the_field('how_do_i_get_started_title',$get_started_page_id); ?></h2>
							<?php the_field('how_do_i_get_started_content',$get_started_page_id); ?>
							<h3>Consider the following:</h3>
							<div class="gs-top">
								<?php  
									if( have_rows('consider_the_following',$get_started_page_id) ):
										while( have_rows('consider_the_following',$get_started_page_id) ) : the_row();
								?>
								<div class="box">
									<div class="img-box">
										<?php 
											$image = get_sub_field('images');
											if($image){
										?>
											<img src="<?php echo $image; ?>" alt="" />
										<?php }else{ ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gs-icon1.png" alt="" />
										<?php } ?>
									</div>
									<div class="txt-box">
										<h4><?php the_sub_field('content'); ?></h4>
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

		<!-- GS Estimatate -->
		<div class="gs-estimate">
			<div class="container">
				<div class="est-inner">
					<h2><?php the_field('how_we_can_assist_you_title',$get_started_page_id); ?></h2>
					<div class="box">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<h3><?php the_field('fill_out_this_form_content',$get_started_page_id); ?></h3>
							</div>
							<div class="col-md-6 col-sm-12">
								<a href="<?php the_field('request_an_estimate_url',$get_started_page_id); ?>"><?php the_field('request_an_estimate_text',$get_started_page_id); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- GS Contact -->
		<div class="gs-contact">
			<div class="container">
				<div class="gs-cont-inn">
					<div class="gs-speak">
						<h3><?php the_field('speck_our_experts_text',$get_started_page_id); ?></h3>
						<div class="cont_btn">
							<h4>Contact us</h4>
						</div>
						<a href="tel:<?php the_field('speck_our_experts_text_ph_number',$get_started_page_id); ?>"><?php the_field('speck_our_experts_text_ph_number',$get_started_page_id); ?></a>
					</div>
					<div class="form-block">
						<h3>Complete the form below to schedule a call</h3>
						<?php echo do_shortcode('[contact-form-7 id="252" title="schedule a call"]'); ?>
					</div>
				</div>
			</div>
		</div>

</div>

<?php get_footer(); ?>