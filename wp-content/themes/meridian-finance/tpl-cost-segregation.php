<?php /* Template Name: Cost Segregation */ ?>
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
				<h3><?php the_field('banner_sub_title'); ?></h3>
			</div>
		</div>
	</div>
</div>

<div class="view-cos-seg">
	<div class="container">
		<!-- <h3><?php //the_field('view_cost_segregation_pages_text'); ?></h3> -->
		<?php the_field('view_cost_segregation_pages'); ?>
	</div>
</div>



<!-- ======== OverView Tab ========  -->
<div class="tab-container" id="scroll_to_overview" >

	<div class="cos-maximize">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="img-panel">
						<?php 
							$maximize_your_investment_image = get_field('maximize_your_investment_image');
							if($maximize_your_investment_image){
						?>
							<img src="<?php echo $maximize_your_investment_image; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cos-seg1.jpg" alt="">
						<?php } ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="text-panel">
						<h2><?php the_field('maximize_your_investment_heading'); ?></h2>
						<?php the_field('maximize_your_investment_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="cos-cpa">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<div class="text-panel">
						<div class="icon">
							<?php 
								$irs_review_icon = get_field('irs_review_icon');
								if($irs_review_icon){
							?>
								<img src="<?php echo $irs_review_icon; ?>" alt="" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cos-accounting.png" alt="" />
							<?php } ?>
						</div>
						<h2><?php the_field('irs_review_heading'); ?></h2>
						<?php the_field('irs_review_content'); ?>
						<a href="<?php the_field('get_started_url'); ?>"><?php the_field('get_started_text'); ?></a>
					</div>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="img-panel">
						<?php 
							$irs_review_image = get_field('irs_review_image');
							if($irs_review_image){
						?>
							<img src="<?php echo $irs_review_image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/city-civil-planing.jpg" alt="" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</view>


<!-- Benefits Tab -->
<div class="tab-container" id="scroll_to_benefits" >

	<?php
		$benefits_page_id =  517;
	?>
	<div class="csb-cost">
		<div class="container">
			<h2><?php the_field('what_are_the_benefits_of_cost_segregation_heading',$benefits_page_id); ?></h2>
			<div class="row">
				<?php 
					if( have_rows('cost_segregation_benefits_type',$benefits_page_id) ):
						while( have_rows('cost_segregation_benefits_type',$benefits_page_id) ) : the_row();
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
						<h3><?php the_field('spotlight_text',$benefits_page_id); ?></h3>
						<h4><?php the_field('current_tax_laws_heading',$benefits_page_id); ?></h4>
						<?php the_field('current_tax_laws_content',$benefits_page_id); ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="consider">
						<h2><?php the_field('consider_the_example_heading',$benefits_page_id); ?></h2>
						<?php the_field('consider_the_example_content',$benefits_page_id); ?>
					</div>
					<div class="table-responsive">
						<?php the_field('example_table',$benefits_page_id); ?>
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
						<h3><?php the_field('all_types_of_buildings_heading',$benefits_page_id); ?></h3>
					</div>
					<div class="col-md-7 col-sm-12">
						<?php the_field('all_types_of_buildings_content',$benefits_page_id); ?>
					</div>
				</div>
			</div>
			<div class="csb-avargb">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<h3><?php //the_field('average_title',$benefits_page_id); ?></h3>
					</div>
					<div class="col-md-8 col-sm-12">
						<ul class="average_reallocated">
							<?php 
								if( have_rows('average_reallocated',$benefits_page_id) ):
									while( have_rows('average_reallocated',$benefits_page_id) ) : the_row();
							?>
							<li data-content="<?php the_sub_field('content'); ?>" class="avargb_tab" ><?php the_sub_field('name'); ?></li>
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

</div>


<!-- Opportunities Tab -->
<div class="tab-container" id="scroll_to_opportunities" >

	<?php
		$opportunities_page_id =  519;
	?>
	<div class="cso-who">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="img-block">
						<?php  
							$who_qualifies_image = get_field('who_qualifies_image',$opportunities_page_id);
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
						<h2><?php the_field('who_qualifies_text',$opportunities_page_id); ?></h2>
						<h3><?php the_field('whether_you_have_a_large_real_estate_portfolio_heading',$opportunities_page_id); ?></h3>
						<ul>
							<?php 
								if( have_rows('whether_you_have_a_large_real_estate_portfolio_details',$opportunities_page_id) ):
									while( have_rows('whether_you_have_a_large_real_estate_portfolio_details',$opportunities_page_id) ) : the_row();
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
						<h2><?php the_field('when_text',$opportunities_page_id); ?></h2>
					    <h3><?php the_field('when_should_i_have_a_cost_segregation_study_done_on_my_property',$opportunities_page_id); ?></h3>
					    <?php the_field('when_should_i_have_a_cost_segregation_study_done_on_my_property_description',$opportunities_page_id); ?>
					</div>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="img-block">
						<?php 
							$when_should_i_have_a_cost_segregation_study_done_on_my_property_image = get_field('when_should_i_have_a_cost_segregation_study_done_on_my_property_image',$opportunities_page_id);
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
					if( have_rows('construction',$opportunities_page_id) ):
						while( have_rows('construction',$opportunities_page_id) ) : the_row();
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
								$renovation_demolition_image = get_field('renovation_&_demolition_image',$opportunities_page_id);
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
				    		<h3><?php the_field('disposition_of_assets_text',$opportunities_page_id); ?></h3>
				    		<h2><?php the_field('renovation_&_demolition_heading',$opportunities_page_id); ?></h2>
				    		<?php the_field('content',$opportunities_page_id); ?>
				    	</div>
				    </div>
			    </div>
			</div>
			<div class="box">
				<div class="row no-gutters">
				    <div class="col-md-6 col-sm-12">
				    	<div class="img-panel">
				    		<?php 
								$our_solutions_are_tailored_image = get_field('our_solutions_are_tailored_image',$opportunities_page_id);
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
				    		<h2><?php the_field('our_solutions_are_tailored_heading',$opportunities_page_id); ?></h2>
				    		<?php the_field('our_solutions_are_tailored_content',$opportunities_page_id); ?>
				    	</div>
				    </div>
			    </div>
			</div>
		</div>
	</div>

</div>


<!-- Why Meridian Tab -->
<div class="tab-container" id="scroll_to_why_meridian" >

	<!-- =========== Clients are saying start ============== -->
	<div class="cos-client">
		<div class="container">
			<h2><?php the_field('clients_are_saying'); ?></h2>
			<div class="cl-testimonial">
				<?php 
					$testimonial = array('post_type' => 'testimonials', 'posts_per_page' => -1);
					$loop = new WP_Query($testimonial);
					if($loop->have_posts()) :
						while($loop->have_posts()) :
							$loop->the_post();
				?>
				<div class="item">
					<div class="user">
						<?php 
							// echo $a = get_the_ID();
							if ( has_post_thumbnail(get_the_ID()) ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
						?>
							<img src="<?php echo $image[0]; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-man.png" alt="">
						<?php } ?>
					</div>
					<?php the_content(); ?>
					<h4><?php the_title(); ?></h4>
					<h5><?php the_field('designation'); ?></h5>
				</div>
				<?php 
						endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<!-- =========== Clients are saying end ============== -->

</div>


<!-- Why Us Tab -->
<div class="tab-container" id="scroll_to_why_us" >

	<?php
		$why_us_page_id =  511;
	?>
	<div class="wus-experts">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<div class="text-panel">
						<h2><?php the_field('industry_experts_rely_heading',$why_us_page_id); ?></h2>
						<?php the_field('industry_experts_rely_content',$why_us_page_id); ?>
						<a href="<?php the_field('industry_experts_rely_button_url',$why_us_page_id); ?>"><?php the_field('industry_experts_rely_button_text',$why_us_page_id); ?></a>
					</div>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="img-panel">
						<?php 
							$industry_experts_rely_image = get_field('industry_experts_rely_image',$why_us_page_id);
							if($industry_experts_rely_image){
						?>
							<img src="<?php echo $industry_experts_rely_image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-img1.jpg" alt="" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wus-tenure">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="img-panel">
						<?php 
							$over_our_long_tenure_in_the_industry_image = get_field('over_our_long_tenure_in_the_industry_image',$why_us_page_id);
							if($over_our_long_tenure_in_the_industry_image){
						?>
							<img src="<?php echo $over_our_long_tenure_in_the_industry_image; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-img2.jpg" alt="">
						<?php } ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="text-panel">
						<h2><?php the_field('over_our_long_tenure_in_the_industry_heading',$why_us_page_id); ?></h2>
						<?php the_field('over_our_long_tenure_in_the_industry_content',$why_us_page_id); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wus-broad">
		<div class="container">
			<div class="wus-broad-inn">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<div class="text-block">
							<h2><?php the_field('our_broad_range_of_industry_heading',$why_us_page_id); ?></h2>
							<?php the_field('our_broad_range_of_industry_list',$why_us_page_id); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="img-block">
							<?php 
								$our_broad_range_of_industry_image = get_field('our_broad_range_of_industry_image',$why_us_page_id);
								if($our_broad_range_of_industry_image){
							?>
								<img src="<?php echo $our_broad_range_of_industry_image; ?>" alt="">
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wus-board.jpg" alt="">
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wus-studies">
		<div class="container">
			<div class="text-block">
				<h2><?php the_field('our_studies_have_withstood_the_scrutiny_of_heading',$why_us_page_id); ?></h2>
				<?php the_field('our_studies_have_withstood_the_scrutiny_of_content',$why_us_page_id); ?>
			</div>
		</div>
	</div>

	<div class="wus-irs">
		<div class="container">
			<div class="authority-slider">
				<?php 
					if( have_rows('authority_slider',$why_us_page_id) ):
						while( have_rows('authority_slider',$why_us_page_id) ) : the_row();
				?>
				<div class="item">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<h2><?php the_sub_field('title'); ?></h2>
						</div>
						<div class="col-md-8 col-sm-12">
							<?php the_sub_field('content'); ?>
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

	<div class="wus-offer">
		<div class="container">
			<div class="text-block">
				<h2><?php the_field('we_offer_a_complete_audit_trail_heading',$why_us_page_id); ?></h2>
				<?php the_field('we_offer_a_complete_audit_trail_content',$why_us_page_id); ?>
			</div>
		</div>
	</div>

	<div class="wus-take">
		<div class="container">
			<div class="row">
				<?php 
					if( have_rows('we_take_the_burden',$why_us_page_id) ):
						while( have_rows('we_take_the_burden',$why_us_page_id) ) : the_row();
				?>
				<div class="col-md-6 col-sm-12">
					<div class="block">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="img">
									<?php 
										$image = get_sub_field('image');
										if($image){
									?>
										<img src="<?php echo $image; ?>" alt="" />
									<?php }else{ ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/us-take1.jpg" alt="" />
									<?php } ?>
								</div>
							</div>
							<div class="col-md-8 col-sm-12">
								<div class="text">
									<h3><?php the_sub_field('title'); ?></h3>
								    <?php the_sub_field('content'); ?>
								</div>
							</div>
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

	<div class="wus-being-text">
		<div class="container">
			<?php the_field('being_the_most_experienced_advantages',$why_us_page_id); ?>
		</div>
	</div>

</div>


<!-- Case Study TAB -->
<div class="tab-container" id="scroll_to_case_studies" >
	<?php
		$case_studies_page_id =  513;
	?>
	<div class="cos-resouces">
		<div class="container">
			<div class="tc-rc-inner">		
				<div class="us-case-st"  style="padding:0;">
					<div class="container">
						<?php 
							$case_study_count = array(
								'post_type' => 'studies',
								'posts_per_page' => -1,
								'tax_query' => array(
				                    array(
				                        'taxonomy' => 'case-study',
				                        'field' => 'term_id',
				                        'terms' => 9
				                    )
				                )
							);
							$all_post = new WP_Query($case_study_count);
							$total_post = $all_post->post_count;
							
						?>
						<div class="all_case_study_wrap" >
							<h2><?php the_field('case_studies_text', $case_studies_page_id); ?></h2>
							<?php  
								if( $total_post > 3 ){ 
							?>
								<h4><a href="<?php echo get_page_link(1095); ?>?term_id=9">View All</a></h4>
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
					                        'terms' => 9
					                    )
					                )
								);
								$loop = new WP_Query($args);
								$loop->post_count;
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
											<img src="<?php echo $image[0]; ?>" alt="" />
										<?php }else{ ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-case-s.jpg" alt="" />
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
										<a href="<?php the_permalink(); ?>">Read more</a>
									</div>
								</div>
							</div>
							<?php 
									endwhile;
								endif;
								wp_reset_postdata();
							?>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

</div>


<!-- Get Started Tab -->
<div class="tab-container" id="scroll_to_get_started" >
	<?php
		$get_started_page_id =  523;
	?>
	<div class="gsw-how">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="img-block">
						<?php 
							$how_did_i_get_started_image = get_field('how_did_i_get_started_image',$get_started_page_id);
							if($how_did_i_get_started_image){
						?>
							<img src="<?php echo $how_did_i_get_started_image; ?>" alt="" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gsw-how1.jpg" alt="" />
						<?php } ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="text-block">
						<h3><?php the_field('how_did_i_get_started_title',$get_started_page_id); ?></h3>
						<?php the_field('how_did_i_get_started_content',$get_started_page_id); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gsw-expert">
		<div class="container">
			<h2><?php the_field('get_an_estimate_or_talk_to_an_expert_text',$get_started_page_id); ?></h2>
			<div class="row">
				<?php 
					if( have_rows('get_an_estimate_or_talk_to_an_experts',$get_started_page_id) ):
						while( have_rows('get_an_estimate_or_talk_to_an_experts',$get_started_page_id) ) : the_row();
				?>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="icon">
							<?php 
								$icon = get_sub_field('icon');
								if($icon){
							?>
								<img src="<?php echo $icon; ?>" alt="">
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gsw-exp1.png" alt="">
							<?php } ?>
						</div>
						<h3><?php the_sub_field('title'); ?></h3>
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

	<div class="cs_contact">
		<div class="container">
			<div class="gs-cont-inn">
				<div class="gs-speak">
					<h3><?php the_field('want_to_speak_to_one_of_our_experts_text',$get_started_page_id); ?></h3>
					<div class="cont_btn">
						<h4><?php the_field('contact_us_text',$get_started_page_id); ?></h4>
					</div>
					<a href="tel:<?php the_field('contact_us_number',$get_started_page_id); ?>"><?php the_field('contact_us_number',$get_started_page_id); ?></a>
				</div>
				<div class="form-block">
					<h3><?php the_field('form_heading',$get_started_page_id); ?></h3>
					<?php echo do_shortcode('[contact-form-7 id="677" title="Get Started With Cost Segregation"]'); ?>
				</div>
			</div>
		</div>
	</div>

</div>



<?php get_footer(); ?>