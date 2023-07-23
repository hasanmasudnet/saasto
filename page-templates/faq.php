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

   <div class="faq-area section-gap-xl-top page-end-gap-bottom">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h2 class="text-bright-gray text-center">Frequently Asked Questions</h2>
            </div>
         </div>
         <div class="row justify-content-between align-items-center pt-60">
            <div class="col-lg-4 mb-4 mb-lg-0">
               <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/faq.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
            </div>
            <div class="col-lg-6">
               <div class="accordion faq-wrap" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is SaaS, how does it differ from software app?
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p> SaaS stands for Software as a Service. It is a cloud computing model where software applications are hosted and provided to users over the internet on a subscription basis.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are some potential concerns SaaS app?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Data Security and Privacy: Storing sensitive data on third-party servers raises concerns about data security and privacy. Companies must carefully choose reputable and trustworthy SaaS providers with strong security measures and compliance certifications.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the main advantages of using SaaS for businesses?
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Cost-effectiveness: SaaS eliminates the need for upfront hardware and software investments. Instead, businesses pay a subscription fee, making it more affordable, especially for small and medium-sized enterprises.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<?php get_footer( ); ?>