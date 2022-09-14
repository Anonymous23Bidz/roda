<footer>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3">
        <a class="navbar-brand" href="#">
          <img src="<?php echo get_template_directory_uri();?>/image/logo-footer.png"
            alt="RODA Renewing our Democratic Alliance">
        </a>

        <div class="footer-socials mt-5 mt-md-4">
        <p>Connect With Us!</p>
        <?php if( ICL_LANGUAGE_CODE =='en' ): ?>
          <?php
            if( have_rows('social_media_cic','option') ):
                while( have_rows('social_media_cic','option') ) : the_row();
                    $social_media_icon = get_sub_field('social_media_icon');
                    $social_media_link = get_sub_field('social_media_link');
                    if($social_media_link):?>
                    <a href="<?php echo $social_media_link;?>"><?php echo $social_media_icon;?></a>
                <?php endif; 
                // End loop.
                endwhile;
            // No value.
            else :
                // Do something...
            endif;
            ?>


          <?php else : 

            if( have_rows('social_media_kas','option') ):
                while( have_rows('social_media_kas','option') ) : the_row();
                    $social_media_icon = get_sub_field('social_media_icon');
                    $social_media_link = get_sub_field('social_media_link');
                    if($social_media_link):?>
                    <a href="<?php echo $social_media_link;?>"><?php echo $social_media_icon;?></a>
                <?php endif; 
                // End loop.
                endwhile;
            // No value.
            else :
                // Do something...
            endif;
            
            endif; ?>

          
        </div>
      </div>
      <div class="col-12 col-md-3 mt-4 mt-md-0 px-0">
        <ul class="d-flex d-md-block flex-wrap flex-md-nowrap mb-0">
          <?php
            wp_nav_menu(array(
              'theme_location'  => 'primary',
              'container'       => '',
              'items_wrap'      => '%3$s',
              'fallback_cb'     => '__return_false',
              'depth'           => 2,
              'walker'          => new WP_bootstrap_4_walker_nav_menu()
            ) );
          ?>
        </ul>


      </div>
      <div class="col-12 col-md-3 my-4 my-md-0">

      <?php
        if( have_rows('cic_contact_info', 'option') ):
          while( have_rows('cic_contact_info', 'option') ): the_row(); 
          $heading = get_sub_field('heading'); 
          $street_address = get_sub_field('street_address'); 
          $address_locality = get_sub_field('address_locality'); 
          $postal_code = get_sub_field('postal_code'); 
          $phone_number = get_sub_field('phone_number'); 
          $email_address = get_sub_field('email_address'); 
          ?>
           <!-- CIC -->
          <div class="footer-details" itemscope itemtype="https://schema.org/Organization">
            <p class="name" itemprop="name"><?php echo $heading;?></p>
            <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress" class="mt-2 d-flex">
              <i class="fas fa-map-marker-alt mt-2"></i>
              <div class="contact-details">
                <span itemprop="streetAddress"><?php echo $street_address;?></span>
                <span itemprop="addressLocality"><?php echo $address_locality;?></span>
                <span itemprop="postalCode"><?php echo $postal_code;?></span>
              </div>
            </div>
            <div class="my-3">
              <i class="fas fa-phone-alt"></i>
              <a href="<?php echo $phone_number['url'];?>">
                <span itemprop="telephone" class="contact-details"><?php echo $phone_number['title'];?></span>
              </a>
            </div>
            <div class="mt-2 d-flex align-item-center">
              <i class="icon-message"></i></i>&nbsp;
              <a href="mailto:<?php echo $email_address;?>">
                <span itemprop="email" class="contact-details"><?php echo $email_address;?></span>
              </a>
            </div>
          </div>
          <!-- END CIC -->
      

      <?php endwhile; ?>
<?php endif; ?>

       


      </div>
      <div class="col-12 col-md-3">
        
      <?php
 if( have_rows('kas_contact_info', 'option') ):
   while( have_rows('kas_contact_info', 'option') ): the_row(); 
   $heading = get_sub_field('heading'); 
   $street_address = get_sub_field('street_address'); 
   $address_locality = get_sub_field('address_locality'); 
   $postal_code = get_sub_field('postal_code'); 
   $phone_number = get_sub_field('phone_number'); 
   $email_address = get_sub_field('email_address'); 
   ?>
           <!-- KAS -->
          <div class="footer-details" itemscope itemtype="https://schema.org/Organization">
            <p class="name" itemprop="name"><?php echo $heading;?></p>
            <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress" class="mt-2 d-flex">
              <i class="fas fa-map-marker-alt mt-2"></i>
              <div class="contact-details">
                <span itemprop="streetAddress"><?php echo $street_address;?></span>
                <span itemprop="addressLocality"><?php echo $address_locality;?></span>
                <span itemprop="postalCode"><?php echo $postal_code;?></span>
              </div>
            </div>
            <div class="my-3">
              <i class="fas fa-phone-alt"></i>
                <a href="<?php echo $phone_number['url'];?>">
                  <span itemprop="telephone" class="contact-details"><?php echo $phone_number['title'];?></span>
                </a>
            </div>
            <div class="mt-2 d-flex align-item-center">
              <i class="icon-message"></i></i>
                <a href="mailto:<?php echo $email_address;?>">
                  <span itemprop="email" class="contact-details"><?php echo $email_address;?></span>
                </a>
            </div>
          </div>
          <!-- END KAS -->
      

      <?php endwhile; ?>
<?php endif; ?>


      </div>
      <div class="footer-credits text-center text-md-end">
        <p>Renewing our Democratic Alliance - Website by <a href="https://pinkrobot.ca">Pink Robot</a></p>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>