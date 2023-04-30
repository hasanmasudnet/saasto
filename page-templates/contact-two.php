<?php 

/**
*
* Template Name: Contact-Two
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>



<?php get_header( ); ?>

<div class="background-wrap home-bg-one">


<div class="contact-one-area section-gap-xl-top section-gap-xl-bottom">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="w-feature-content-title text-center">
               <h3 class="text-bright-gray">Contact Us</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are serial entrepreneurs who</p>
            </div>
         </div>
      </div>
      <div class="row mt-4 align-items-center gy-4">
         <div class="col-lg-4 col-md-6">
            <div class="contact-vector-box text-center">
               <img src=<?php echo get_template_directory_uri(  )?>.'../assets/img/contact-vector.png' alt="">
               <h2>E-mail Address</h2>
               <a href="mailto:yourname@gmail.com">yourname@gmail.com</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="contact-vector-box text-center">
               <img src=<?php echo get_template_directory_uri(  )?>.'../assets/img/contact-vector.png' alt="">
               <h2>Support Number</h2>
               <a href="tel:021000000">+021-000-000</a>
               <div class="contact-vector-btn-wrap">
                  <a class="contact-vector-btn" href="tel:021000000">Call Now <i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="contact-vector-box text-center">
               <img src=<?php echo get_template_directory_uri(  )?>.'../assets/img/contact-vector.png' alt="">
               <h2>Head Office</h2>
               <a href="#">123 St Anytown, USA</a>
            </div>
         </div>
      </div>
      <div class="row section-gap-xl-top">
         <div class="col-lg-12">
            <div class="w-feature-content-title">
               <h3 class="text-bright-gray">Let’s get in touch!</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are advanced marketer</p>
            </div>
            <div class="contact-form-wrap-two  mt-4">
               <form action="#">
                  <div class="row">
                     <div class="col-lg-6">
                        <input type="text" placeholder="First name">
                     </div>
                     <div class="col-lg-6">
                        <input type="text" placeholder="Last name">
                     </div>
                     <div class="col-lg-6">
                        <input type="tel" placeholder="Phone">
                     </div>
                     <div class="col-lg-6">
                        <input type="email" placeholder="E-mail">
                     </div>
                     <div class="col-lg-12">
                        <textarea cols="30" rows="4" placeholder="Your Message"></textarea>
                     </div>
                     <div class="col-lg-12">
                        <button class="border-0 d-inline-block btn-fill-rounded" type="submit">Send Message</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>


</div>

<?php get_footer( ); ?>