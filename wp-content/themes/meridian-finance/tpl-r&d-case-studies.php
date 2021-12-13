<?php /* Template Name: R&D Case Studies */ ?>

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
				<h2>R&D Case Studies</h2>
			</div>
		</div>
	</div>
</div>


<?php $case_study_page_id = 358;?>

<!-- TC Tax Resources Start -->
<div class="cs-case-tab">
	<div class="container">
		<div class="tc-rc-inner">
			<div class="top-block">
				<div class="lt-side">
					<h2>Case Studies</h2>					
					<ul class="nav nav-tabs">
						<?php  							
							$case_study_category = get_terms('case-study', array('hide_empty' => false));
							$i = 1;
							if($case_study_category){
								foreach ($case_study_category as $case_study_term) {								
						?>
		                	<li><a class="<?php if($i==1){ ?>active<?php } ?>" data-toggle="tab" href="#architectural<?php echo $i; ?>"><?php echo $case_study_term->name; ?></a></li>	                
		                <?php 
			            		$i++;
			            		}
			            	}
			            ?>
		            </ul>
				</div>
	            <div class="view_all">
	            	<select class="view_field">
	            		<option>View all</option>
	            		<option>View all</option>
	            		<option>View all</option>
	            	</select>
	            </div>
			</div>
			<div class="tab-content">
				<?php  	
					$j = 1;
					foreach($case_study_category as $case_study_categories){									
										
				?>
				<div id="architectural<?php echo $j; ?>" class="tab-pane fade in <?php if($j==1){ ?>active<?php } ?>">
					<div class="row">
						<?php
							$args = array('post_type' => 'studies',
						        'tax_query' => array(
						            array(
						                'taxonomy' => 'case-study',
						                'field' => 'term_id',
						                'terms' => $case_study_categories->term_id,
						            ),
						        ),
						    );
						    $loop = new WP_Query($args);
						    if($loop->have_posts()) :
						    	while($loop->have_posts()) :
						    		$loop->the_post();

						?>
						<div class="col-md-4 col-sm-12">
							<div class="box">
								<div class="img-box">
									<?php 
										// echo $a = get_the_ID();
										if ( has_post_thumbnail(get_the_ID()) ) {
											$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
									?>
										<img src="<?php echo $image[0]; ?>" alt="">
									<?php }else{ ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/	op-examples1.jpg" alt="">
									<?php } ?>
								</div>
								<div class="text-box">
									<h3><?php the_field('client_name', get_the_ID() ); ?></h3>
									
									<?php 
									    $a = get_the_terms( get_the_ID(), 'case-study' ); 
								    	foreach ($a as $b) {
								    		echo '<h4>'.$b->name.'</h4>';
								    	}
								    ?>
									
									<?php the_excerpt(); ?>
								</div>
								<div class="read-more">
									<a href="<?php the_permalink( $post->ID ); ?>">read more</a>
								</div>
							</div>
						</div>
						<?php 
								endwhile;
							endif;
						?>
					</div>
				</div>
				<?php 
			    	$j++;
			    	}
			    ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>