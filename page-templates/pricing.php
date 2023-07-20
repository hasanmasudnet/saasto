<?php 

/**
*
* Template Name: Pricing
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>



<?php get_header( ); ?>
   
<div class="price-area section-gap-top-y-1 page-end-gap-bottom">
   <div class="container">
      <div class="row justify-content-center gy-4">
         <div class="col-lg-7">
            <div class="blog-header text-center">
               <h3 class="text-bright-gray">Choose any plans to get started</h3>
               <p class="pt-3 body-disply-1 text-mid-gray">Growth your business by getting started</p>
            </div>
         </div>
      </div>
      <div class="toggle-btn text-center">
         <span style="margin: 0.8em;">Monthly</span>
         <label class="switch">
            <input type="checkbox" id="checbox"/>
            <span class="slider round"></span>
         </label>
         <span style="margin: 0.8em;">Annually</span>
		</div>
      <div class="row gy-4">
         <div class="col-lg-4 col-md-6">
            <div class="pricing-wrap d-flex flex-column overflow-hidden justify-content-between active">
               <div class="pricing-info">
                  <h1 class="text-bright-gray">Free</h1>
                  <span>Perfect to get started</span>
                  <h2 class="text2 text-bright-gray"><sup>$</sup>0 <sub>/ Per Month</sub></h2>
                  <h2 class="text1 text-bright-gray"><sup>$</sup>0 <sub>/ Per Year</sub></h2>
                  <a class="trial-btn w-100 text-center d-inline-block" href="<?php print esc_url( home_url('/contact') ) ?>">Start 15 days trial</a>
                  <ul>
                     <li>CMS integration</li>
                     <li>Email & SMS reminders</li>
                     <li>Customer Support 24/7</li>
                  </ul>
               </div>
               <div class="pricing-btn-wrap">
                  <a class="pricing-btn w-100 text-center d-inline-block" href="<?php print esc_url( home_url('/contact') ) ?>">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="pricing-wrap d-flex flex-column overflow-hidden justify-content-between">
               <div class="pricing-info">
                  <h1 class="text-bright-gray">Basic</h1>
                  <span>Best for professionals</span>
                  <h2 class="text2 text-bright-gray"><sup>$</sup>15 <sub>/ Per Month</sub></h2>
                  <h2 class="text1 text-bright-gray"><sup>$</sup>49 <sub>/ Per Year</sub></h2>
                  <a class="trial-btn w-100 text-center d-inline-block" href="<?php print esc_url( home_url('/contact') ) ?>">Start 15 days trial</a>
                  <ul>
                     <li>Advanced analytics</li>
                     <li>100+ integrations</li>
                     <li>Templates library</li>
                     <li>Chat widget</li>
                  </ul>
               </div>
               <div class="pricing-btn-wrap">
                  <a class="pricing-btn w-100 text-center d-inline-block" href="<?php print esc_url( home_url('/contact') ) ?>">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="pricing-wrap d-flex flex-column overflow-hidden justify-content-between">
               <div class="pricing-info">
                  <h1 class="text-bright-gray">Advanced</h1>
                  <span>Everything in one pro-hand</span>
                  <h2 class="text2 text-bright-gray"><sup>$</sup>30 <sub>/ Per Month</sub></h2>
                  <h2 class="text1 text-bright-gray"><sup>$</sup>79 <sub>/ Per Year</sub></h2>
                  <a class="trial-btn w-100 text-center d-inline-block" href="<?php print esc_url( home_url('/contact') ) ?>">Start 15 days trial</a>
                  <ul>
                     <li>Daily Performance report</li>
                     <li>Dedicated Assistant</li>
                     <li>Artificial Intelligent</li>
                     <li>Latest marketing tools</li>
                  </ul>
               </div>
               <div class="pricing-btn-wrap">
                  <a class="pricing-btn w-100 text-center d-inline-block" href="<?php print esc_url( home_url('/contact') ) ?>">Get Started</a>
               </div>
            </div>
         </div>
      </div>   
   </div>
</div>

<?php get_footer( ); ?>