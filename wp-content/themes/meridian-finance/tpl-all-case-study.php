<?php /* Template Name: All Case Study */ ?>
<?php get_header(); ?>
<div class="about-banner">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner.jpg" alt="">
	<div class="banner-desc">
		<div class="container">
			<div class="text-block">
				<h2>All <?php echo get_term( $_GET['term_id'] )->name ?> Case Study</h2>
				<h3></h3>
			</div>
		</div>
	</div>
</div>

<div class="case-listing">
	<div class="container">
		<div class="row">
			<?php
				// $args = array('post_type' => 'studies', 'posts_per_page' => -1);
				$args = array(
					'post_type' => 'studies',
					'posts_per_page' => -1,
					'tax_query' => array(
	                    array(
	                        'taxonomy' => 'case-study',
	                        'field' => 'term_id',
	                        'terms' => $_GET['term_id']
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
					else:
						echo '<h2>No Post Found..</h2>';
				endif;

				wp_reset_postdata();
			?>
		</div>	
	</div>
</div>

<?php  get_footer(); ?>