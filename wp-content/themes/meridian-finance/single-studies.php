<?php get_header(); ?>


	<!-- Inner Banner -->
	<div class="about-banner">
		<img src="https://meridianfinancialsolutions.ideatosteer.com/wp-content/uploads/2021/11/about-banner.jpg" alt="">
		<div class="banner-desc">
			<div class="container">
				<div class="text-block">
					<?php 
					    $a = get_the_terms( get_the_ID(), 'case-study' ); 
				    	foreach ($a as $b) {
				    		echo '<h2>'.$b->name.' Case Studies</h2>';
				    	}
				    ?>	
					<!-- <h2>R&D Case Studies</h2> -->
				</div>
			</div>
		</div>
	</div>


	<?php 
		// get term ID By post id
		$all_terms = get_the_terms( get_the_ID(), 'case-study' );
	?>

	<!-- RD CS Back to -->
	<div class="cs-back-to">
		<div class="container">
			<div class="inner-back">
				<?php  
					foreach($all_terms as $term){
				?>
					<a href="<?php echo esc_url( get_page_link( 1095 ) ); ?>?term_id=<?php echo$term->term_id; ?>"><i class="fas fa-chevron-left"></i> Back to Case studies</a>
				<?php } ?>
			    <?php 
				    $a = get_the_terms( get_the_ID(), 'case-study' ); 
			    	foreach ($a as $b) {
			    		echo '<h3>'.$b->name.'</h3>';
			    	}
			    ?>		    
			</div>
		</div>
	</div>

	<!-- RD CS credits -->
	<div class="cs-credits">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-5 col-sm-12">
					<div class="img-block">
						<?php 
							// echo $a = get_the_ID();
							if ( has_post_thumbnail(get_the_ID()) ) {
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
						?>
							<img src="<?php echo $image[0]; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies.jpg" alt="">
						<?php } ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="text-block">
						<h2><?php the_title(); ?></h2>
<!-- 						<h3><?php the_field('client_name', get_the_ID() ); ?></h3>						 -->
						<?php 
// 						    $a = get_the_terms( get_the_ID(), 'case-study' ); 
// 					    	foreach ($a as $b) {
// 					    		echo '<h4>'.$b->name.'</h4>';
// 					    	}
					    ?>	
						<?php the_content(); ?>
						<!-- <a href="#">Enquire now</a> -->
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

	<!-- RD CS Contact -->
	<div class="gs-contact cs_contact">
		<div class="container">
			<div class="gs-cont-inn">
				<div class="gs-speak">
					<h3>Want to speak to one of <span>our experts?</span></h3>
					<div class="cont_btn">
						<h4>Contact us</h4>
					</div>
					<a href="tel:312-697-7187">312-697-7187</a>
				</div>
				<div class="form-block">
					<h3>Complete the form below to schedule a call</h3>
					<?php echo do_shortcode('[contact-form-7 id="433" title="Case studies"]'); ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>