<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>

<div class="contactus-mid">
    <div class="container">
      <div class="title">
          <h2><?php the_field('title'); ?></h2>
          <p><?php the_field('sub_title'); ?></p>
      </div>
      <div class="contact_panel">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="img-panel">
                <?php 
                    $image = get_field('image'); 
                    if($image){
                ?>
                    <img src="<?php echo $image; ?>" alt="" />
                <?php }else{ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-imgz.png" alt="" />
                <?php } ?>
              </div>
              <div class="connect-block">
                  <div class="block">
                      <div class="icon-block">
                        <?php 
                            $phone_number_icon = get_field('phone_number_icon'); 
                            if($phone_number_icon){
                        ?>
                            <img src="<?php echo $phone_number_icon; ?>" alt="">
                        <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-icon2.png" alt="">
                        <?php } ?>
                      </div>
                      <div class="text-block">
                            <h4><?php the_field('phone_number_text'); ?></h4>
                            <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a>
                      </div>
                  </div>

                  <div class="block">
                      <div class="icon-block">
                        <?php 
                            $email_icon = get_field('email_icon'); 
                            if($email_icon){
                        ?>
                            <img src="<?php echo $email_icon; ?>" alt="">
                        <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-icon3.png" alt="">
                        <?php } ?>
                      </div>
                      <div class="text-block">
                          <h4><?php the_field('email_text'); ?></h4>
                          <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="form-block">
                    <h3><?php the_field('form_title'); ?></h3>
                    <p><?php the_field('form_sub_title'); ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="472" title="Contact Us Page"]'); ?>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>


<?php get_footer(); ?>