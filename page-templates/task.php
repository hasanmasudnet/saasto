<?php

/**
 * Template Name: TAsk
 * @package saasto
 */

get_header();

?>

<form action="" class="cta-form">
   <input type="email" name="email" class="email" placeholder="Enter your email address">
   <button class='btn-submit btn-submit-task'>
      Get Started <i class="bi bi-arrow-right-short"></i>
   </button>
</form>


<!-- Task Countdown -->

<div class="countdown-area">
   <div class="container">
      <div class="row align-items-center gy-4">
         <div class="col-lg-4">
            <div class="task-section-title">
               <h2 class="task-title">Countdowns</h2>
               <p class="mt-2">I help SaaS business businesses convert visitors into customers.</p>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="task-countdown-wrap">
               <div class="task-countdown-box">
                  <h2 class="countdown-info">25K+</h2>
                  <p>Our Customers</p>
               </div>
               <div class="task-countdown-box">
                  <h2 class="countdown-info">25K+</h2>
                  <p>Our Customers</p>
               </div>
               <div class="task-countdown-box">
                  <h2 class="countdown-info">25K+</h2>
                  <p>Our Customers</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Task Countdown End -->


<!-- Feature -->

<div class="task-feature-area mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <div class="task-section-title">
               <span class="task-sub text-uppercase d-inline-block position-relative">Exciting Features</span>
               <h2 class="task-title">Elevate Your Workflow with Top Features</h2>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Feature End -->

<!-- Productivity -->
<div class="productivity-area">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="task-section-title text-center">
               <span class="task-sub right-line text-uppercase d-inline-block position-relative">Benefits of saasto</span>
               <h2 class="task-title task-title-big">Maximize Your Productivity</h2>
            </div>

         </div>
      </div>
   </div>
</div>
<!-- Productivity End -->



<?php
get_footer();