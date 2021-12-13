<?php /* Template Name: R&D Get Started Request Form */ ?>
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

<?php $qualifies_page_id = 453; ?>
<!-- CQ Proposal Start -->
<div class="cq-proposal">
	<div class="container">
		<div class="title-block">
			<h2><?php the_field('proposal_request_form_title',$qualifies_page_id); ?></h2>
			<p><?php the_field('proposal_request_form_sub_title',$qualifies_page_id); ?></p>
		</div>
		<div class="form-block">
			<?php echo do_shortcode('[contact-form-7 id="457" title="Proposal Request Form"]'); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>