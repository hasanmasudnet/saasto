<?php 

/**
*
* Template Name: Contact v1
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>



<?php get_header( ); ?>

<div class="contact-one-area pt-xxl section-gap-bottom-y-1">
   <div class="container">
      <div class="row justify-content-between align-items-center">
         <div class="col-lg-5">
            <div class="w-feature-content-title">
               <h3 class="text-bright-gray">Let’s get in touch!</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are serial entrepreneurs who, back in 2013, noticed how advanced marketer</p>
            </div>
            <div class="contact-address-wrap mt-5">
               <div class="single-contact-address d-flex align-items-center">
                  <div class="contact-address-icon">
                     <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-address-info">
                     <h2>Head Office</h2>
                     <p>123 Maint St Anytown, USA</p>
                  </div>
               </div>
               <div class="single-contact-address d-flex align-items-center">
                  <div class="contact-address-icon">
                     <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-address-info">
                     <h2>Call Us</h2>
                     <p><a href="tel:928-456-1234">928-456-1234</a></p>
                  </div>
               </div>
               <div class="single-contact-address d-flex align-items-center">
                  <div class="contact-address-icon">
                     <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-address-info">
                     <h2>E-Mail Us</h2>
                     <p><a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="contact-form-wrap">
               <form action="#">
                  <div class="row">
                     <div class="col-lg-12">
                        <input type="text" placeholder="First name">
                     </div>
                     <div class="col-lg-12">
                        <input type="text" placeholder="Last name">
                     </div>
                     <div class="col-lg-12">
                        <input type="tel" placeholder="Phone">
                     </div>
                     <div class="col-lg-12">
                        <input type="email" placeholder="E-mail">
                     </div>
                     <div class="col-lg-12">
                        <textarea cols="30" rows="4" placeholder="Your Message"></textarea>
                     </div>
                     <div class="col-lg-12">
                        <button class="border-0 w-100 d-inline-block" type="submit">Send Message</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- =============== subscribe style 2 start =============== -->
<div class="subscribe-area position-relative">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="w-feature-content-title text-center">
               <h3 class="text-bright-gray text-white">Subscribe to Our Newsletter & get the Coupon code.</h3>
               <p class="text-purple-haze body-disply-1 pt-3 subscribe-desc">All your information is completely confidential</p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center mt-5">
         <div class="col-lg-6">
            <form action="#" class="subscribe-form">
               <input type="text" placeholder="Type your email">
               <button type="submit" class=" border-0"><i class="bi bi-arrow-right"></i></button>
            </form>
         </div>
      </div>
   </div>
   <img class="subscribe-sp-img position-absolute top-50 start-50 translate-middle d-none d-lg-block" src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/subscribe-bg-sp.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
</div>
<!-- =============== subscribe style 2 end =============== -->

<?php get_footer( ); ?>