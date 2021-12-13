<!-- Footer Start -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="box">
					<div class="logo-block">
						<?php 
							$footer_logo = get_field('footer_logo', 'option');
							if($footer_logo){
						 ?>
							<img src="<?php echo $footer_logo; ?>" alt="">
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/f-logo.png" alt="">
						<?php } ?>
					</div>
					<?php the_field('footer_below_content', 'option'); ?>
<!-- 					<div class="social-block">
						<ul>
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div> -->
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12">
				<div class="box">
					<ul>
						<!-- <li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Service</a></li>
						<li><a href="#">Contact Us</a></li> -->
						<?php  
							wp_nav_menu( array(
								'menu' => 'footer-menu'
							) );
						?>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-12">
				<div class="touch">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></li>
<!-- 						<li><a href="mailto:debra.holt@example.com">debra.holt@example.com</a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 loca_wr">
				<div class="location">
					<?php the_field('address', 'option'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Copy-right Start -->
<div class="copy-right">
	<div class="container">
		<p><?php the_field('copy_right_section', 'option'); ?></p>
	</div>
</div>



<!--  -->

<div class="link-container">
    <div class="erc">
        <a href="javascript:void(0)">
            <div class="text-container">
                <h4>Tax Updates</h4>
                <h4>It’s Not Too Late To Claim The Employee Retention Credits</h4>
                <h5 class="bullets">
                    • • • • • •<br>
                    • • • •<br>
                </h5>
            </div>
            <div class="erc-object">
                <img src="https://meridianfinancialsolutions.ideatosteer.com/wp-content/uploads/2021/11/desk.png"
                    alt="" />
            </div>
        </a>
    </div>
    <div class="button-container">
        <a href="https://meridianfinancialsolutions.ideatosteer.com/employee-retention-credit/">LEARN MORE ABOUT ERC</a>
    </div>
	<div id="close_erc"><i class="fas fa-times"></i></div>
</div>

<div class="ret_cr_btn">
    <a class="retension_credit" href="javascript:void(0)">Employee Retention Credit</a>
</div>

<?php wp_footer(); ?>
</body>
</html>