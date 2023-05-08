<?php 

/**
*
* Template Name: FAQ
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>



<?php get_header( ); ?>

   <div class="faq-area section-gap-xl-top section-gap-xl-bottom">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h2 class="text-bright-gray text-center">Frequently Asked Questions</h2>
            </div>
         </div>
         <div class="row justify-content-between pt-60">
            <div class="col-lg-4">
               <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/faq.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
            </div>
            <div class="col-lg-6">
               <div class="accordion faq-wrap" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


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

<?php get_footer( ); ?>