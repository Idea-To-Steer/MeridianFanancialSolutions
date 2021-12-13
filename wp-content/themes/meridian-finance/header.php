<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- Haeder Start -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
	  <div class="logo-block">
		 <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );                
                if(!empty($image)){
                    echo '<a href="'.get_site_url().'"><img src="'.$image[0].'" alt="" /></a>';  
                } else {
                    echo '<a href="'.get_site_url().'"><img src="'.get_template_directory_uri().'/assets/images/logo.png" alt="" /></a>';
                }
            ?>
	  </div>
	  <div class="rt-side">
		  <div class="navigation">
				<a class="mob_close_menu" href="javascript:void(0)"><i class="fas fa-times"></i></a>
				<ul>
					<?php  
						wp_nav_menu( array(
							'menu' => 'header-menu'
						) );
					?>
				</ul>
			</div>
			<div class="contact-btn">
				<ul>
					<li><a href="<?php the_field('contact_us_url', 'option'); ?>"><?php the_field('contact_us_text', 'option'); ?></a></li>
					<li><a href="#">Submit RFP</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<?php 
	if( is_front_page() ){
?>
<!-- Banner Start -->
<div class="banner">
<!-- 	<div class="ret_cr_btn">
		<a class="retension_credit" href="javascript:void(0)">Employee Retention Credit</a>
	</div> -->
	<div class="banner-slider">
		<?php  
			if( have_rows('home_page_slider') ):
				while( have_rows('home_page_slider') ) : the_row();
					 $banner_img = get_sub_field('image');
		?>
			<div class="item">
				<?php if( $banner_img ){ ?>
					<img src="<?php echo $banner_img; ?>" alt="" />
				<?php }else{ ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="" />
				<?php } ?>
				<div class="banner-desc">
					<div class="container">
						<div class="text-block">
							<h1><?php the_sub_field('title'); ?></h1>
							<p><?php the_sub_field('sub_title'); ?></p>
							<?php  
								$button_text = get_sub_field('button_text');
								if( $button_text ){
							?>
								<a href="<?php the_sub_field('button_url'); ?>" class="slider_button"><?php the_sub_field('button_text'); ?></a>
							<?php } ?>
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

<?php } ?>