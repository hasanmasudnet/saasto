<?php
/**
 * Template Name: HR Management
 * @package saasto
*/

get_header();

?>


   <!-- Hero Start -->
   <section class="hero-style-four position-relative">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="section-content">
                  <h1 class="hero-title"><span>Maximizing</span> Your Workforce Potential</h1>
                  <p class='pt-24'>Saasto is a people management solution that helps in employee onboarding, performance tracking, payroll and attendance management.</p>
                  <div class="hero-buttons d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                     <a href="#" class="btn-fill-rounded">
                        <span class="">Start for Free</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path d="M21.7061 12.708L14.707 19.7071C14.512 19.9021 14.256 20 14 20C13.744 20 13.488 19.9021 13.293 19.7071C12.902 19.3161 12.902 18.684 13.293 18.293L18.5859 13H3C2.447 13 2 12.552 2 12C2 11.448 2.447 11 3 11H18.5859L13.293 5.70707C12.902 5.31607 12.902 4.68401 13.293 4.29301C13.684 3.90201 14.316 3.90201 14.707 4.29301L21.7061 11.292C21.7991 11.385 21.8721 11.495 21.9231 11.618C22.0241 11.862 22.0241 12.1381 21.9231 12.3821C21.8721 12.5051 21.7991 12.615 21.7061 12.708Z" fill="currentColor"/>
                        </svg>
                     </a>
                     <a href="https://www.youtube.com/watch?v=3nXwUeEJQUY" class="btn-outlined-round popup-youtube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM15.46 13.061L10.9821 15.801C10.0911 16.346 8.94495 15.7071 8.94495 14.6641V9.33594C8.94495 8.29294 10.0911 7.65397 10.9821 8.19897L15.46 10.939C16.254 11.425 16.254 12.575 15.46 13.061Z"/>
                        </svg>
                        <span class="">Watch Tutorial</span>
                     </a>
                  </div>
                  <p class="short-info">Everything Setup in 5 minutes. No credit card required.</p>
                  <div class="reviews d-flex flex-column flex-md-row justify-content-start align-items-md-center">
                     <img src=<?php echo get_template_directory_uri().'../assets/img/hero/reviews.svg'?> alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="hero-style-four-background d-none d-lg-flex justify-content-lg-start align-items-lg-end overflow-hidden">
         <img src=<?php echo get_template_directory_uri().'../assets/img/hero/hero-dashboard.png'?> alt="dashboard">
      </div>
   </section>

   

   <section class="d-none hr-hero-area hero-style-four position-relative mb-5">
      <div class="container">
      <div class="w-100">
				<div class="row justify-content-between align-items-end">
					<div class="col-xl-7 col-lg-6 col-md-10">
                  <div class="section-content">
                     <h1 class="hero-title"><span>Maximizing</span> Your Workforce Potential</h1>
                     <p class='pt-24'>Saasto is a people management solution that helps in employee onboarding, performance tracking, payroll and attendance management.</p>
                     <div class="hero-buttons d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                        <a href="#" class="btn-fill-rounded">
                           <span class="">Start for Free</span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M21.7061 12.708L14.707 19.7071C14.512 19.9021 14.256 20 14 20C13.744 20 13.488 19.9021 13.293 19.7071C12.902 19.3161 12.902 18.684 13.293 18.293L18.5859 13H3C2.447 13 2 12.552 2 12C2 11.448 2.447 11 3 11H18.5859L13.293 5.70707C12.902 5.31607 12.902 4.68401 13.293 4.29301C13.684 3.90201 14.316 3.90201 14.707 4.29301L21.7061 11.292C21.7991 11.385 21.8721 11.495 21.9231 11.618C22.0241 11.862 22.0241 12.1381 21.9231 12.3821C21.8721 12.5051 21.7991 12.615 21.7061 12.708Z" fill="currentColor"/>
                           </svg>
                        </a>
                        <a href="https://www.youtube.com/watch?v=3nXwUeEJQUY" class="btn-outlined-round popup-youtube">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM15.46 13.061L10.9821 15.801C10.0911 16.346 8.94495 15.7071 8.94495 14.6641V9.33594C8.94495 8.29294 10.0911 7.65397 10.9821 8.19897L15.46 10.939C16.254 11.425 16.254 12.575 15.46 13.061Z"/>
                           </svg>
                           <span class="">Watch Tutorial</span>
                        </a>
                     </div>
                     <p class="short-info">Everything Setup in 5 minutes. No credit card required.</p>
                     <div class="reviews d-flex flex-column flex-md-row justify-content-start align-items-md-center">
                        <img src=<?php echo get_template_directory_uri().'../assets/img/hero/reviews.png'?> alt="">
                     </div>
                  </div>
					</div>
					<div class="col-xl-5 col-lg-6 position-absolute top-0 end-0 pe-0 h-100 d-none d-lg-block">
						<div class="hr-hero-img text-end h-100 d-flex align-items-end justify-content-end" style="background-color:#1D6C77; padding-left: 100px">
                     <img src=<?php echo get_template_directory_uri().'../assets/img/hero/hr-img.png'?> alt="">
						</div>
					</div>
				</div>
			</div>
      </div>
   </section>

   <!-- Hero End -->

      <!-- Testimonial Start -->
      <section class="d-none testimonial-style-four section-gap-bottom-y-1 section-gap-top-y-1">
            <div class="container">
               <div class="row pb-100 g-5 align-items-md-center">
                  <div class="col-lg-6">
                     <div class="section-content">
                        <h4 class="">"Streamlining our HR Processes"</h4>
                        <p class="position-relative">Implementing Saasto transformed our HR tasks. From recruitment to evaluations, every process is streamlined. Our team is more productive, allowing us to focus on strategic initiatives confidently.
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="none">
                              <path d="M69.4667 44.4L60.9 61.4999C60.3333 62.6333 59.1667 63.3333 57.9333 63.3333H49.3667C48.1333 63.3333 47.3333 62.0333 47.8667 60.9333L56.6667 43.3333L48.3333 43.3333C45.5667 43.3333 43.3333 41.1 43.3333 38.3333V21.6666C43.3333 18.9 45.5667 16.6666 48.3333 16.6666L65 16.6666C67.7667 16.6666 70 18.9 70 21.6666V42.1666C70 42.9333 69.8333 43.7 69.4667 44.4ZM36.6667 42.1666V21.6666C36.6667 18.9 34.4333 16.6666 31.6667 16.6666L15 16.6666C12.2333 16.6666 10 18.9 10 21.6666L10 38.3333C10 41.1 12.2333 43.3333 15 43.3333H23.3333L14.5333 60.9333C13.9667 62.0333 14.8 63.3333 16.0333 63.3333H24.6C25.8667 63.3333 27.0333 62.6333 27.5667 61.4999L36.1333 44.4C36.4667 43.7 36.6667 42.9333 36.6667 42.1666Z" fill="#25314C" fill-opacity="0.1"/>
                           </svg>
                        </p>
                        <div class="author">
                           <h5 class="author-title">Briann Johnson</h5>
                           <p class="author-designation">HR Manager</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="section-thumb position-relative">
                        <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/thumbnail.png'?> alt="thumbnail" class="img-fluid">
                        <a class="popup-youtube" href="http://www.youtube.com/watch?v=3nXwUeEJQUY">
                           <span class="video-button position-absolute">
                              <i class="bi bi-play-fill"></i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="section-header d-flex flex-column flex-md-row justify-content-between">
                        <h3>Loved by Industry Leaders</h3>
                        <div class="testimonial-review_slider-control d-flex justify-content-center justify-content-md-between align-items-center">
                           <div class="testimonial-review-prev">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                 <path d="M23.3343 27.9167C23.0143 27.9167 22.6942 27.7951 22.4509 27.5501L15.7842 20.8835C15.2959 20.3951 15.2959 19.6034 15.7842 19.1151L22.4509 12.4484C22.9392 11.9601 23.7309 11.9601 24.2193 12.4484C24.7076 12.9367 24.7076 13.7285 24.2193 14.2168L18.436 20.0001L24.2193 25.7834C24.7076 26.2717 24.7076 27.0634 24.2193 27.5518C23.9743 27.7951 23.6543 27.9167 23.3343 27.9167Z" fill="currentColor"/>
                              </svg>
                           </div>
                           <div class="testimonial-review-next">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                 <path d="M16.6676 27.9167C16.3476 27.9167 16.0276 27.795 15.7842 27.55C15.2959 27.0617 15.2959 26.27 15.7842 25.7817L21.5675 19.9984L15.7842 14.2151C15.2959 13.7268 15.2959 12.935 15.7842 12.4467C16.2726 11.9584 17.0643 11.9584 17.5526 12.4467L24.2193 19.1134C24.7076 19.6017 24.7076 20.3934 24.2193 20.8818L17.5526 27.5484C17.3076 27.7951 16.9876 27.9167 16.6676 27.9167Z" fill="currentColor"/>
                              </svg>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="swiper testimonial-review_slider">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="review_card">
                                    <div class="review_card-rating d-flex justify-content-between align-items-center">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                                          <path d="M10.5333 35.6L19.1 18.5001C19.6666 17.3667 20.8333 16.6667 22.0667 16.6667L30.6333 16.6667C31.8667 16.6667 32.6667 17.9667 32.1333 19.0667L23.3333 36.6667L31.6667 36.6667C34.4333 36.6667 36.6667 38.9 36.6667 41.6667L36.6667 58.3334C36.6667 61.1 34.4333 63.3334 31.6667 63.3334L15 63.3334C12.2333 63.3334 9.99999 61.1 9.99999 58.3334L9.99999 37.8334C9.99999 37.0667 10.1667 36.3 10.5333 35.6ZM43.3333 37.8334L43.3333 58.3334C43.3333 61.1 45.5667 63.3334 48.3333 63.3334L65 63.3334C67.7667 63.3334 70 61.1 70 58.3334L70 41.6667C70 38.9 67.7667 36.6667 65 36.6667L56.6667 36.6667L65.4667 19.0667C66.0333 17.9667 65.2 16.6667 63.9667 16.6667L55.4 16.6667C54.1333 16.6667 52.9667 17.3667 52.4333 18.5001L43.8667 35.6C43.5333 36.3 43.3333 37.0667 43.3333 37.8334Z" fill="#7F88FF"/>
                                       </svg>
                                       <div class="star">
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                       </div>
                                    </div>
                                    <div class="review_card-info">
                                       <p>Partnering with Timmo has been a game-changer for our organization. Their expertise in HR management, coupled with their personalized approach, has significantly improved our HR processes.</p>
                                    </div>
                                    <div class="review_card-author d-flex justify-content-start align-items-center">
                                       <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author.png'?> alt="author">
                                       <div class="author-info">
                                           <h5 class="author-title">Briann Johnson</h5>
                                             <p class="author-designation">HR Manager</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                                                  <div class="review_card">
                                    <div class="review_card-rating d-flex justify-content-between align-items-center">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                                          <path d="M10.5333 35.6L19.1 18.5001C19.6666 17.3667 20.8333 16.6667 22.0667 16.6667L30.6333 16.6667C31.8667 16.6667 32.6667 17.9667 32.1333 19.0667L23.3333 36.6667L31.6667 36.6667C34.4333 36.6667 36.6667 38.9 36.6667 41.6667L36.6667 58.3334C36.6667 61.1 34.4333 63.3334 31.6667 63.3334L15 63.3334C12.2333 63.3334 9.99999 61.1 9.99999 58.3334L9.99999 37.8334C9.99999 37.0667 10.1667 36.3 10.5333 35.6ZM43.3333 37.8334L43.3333 58.3334C43.3333 61.1 45.5667 63.3334 48.3333 63.3334L65 63.3334C67.7667 63.3334 70 61.1 70 58.3334L70 41.6667C70 38.9 67.7667 36.6667 65 36.6667L56.6667 36.6667L65.4667 19.0667C66.0333 17.9667 65.2 16.6667 63.9667 16.6667L55.4 16.6667C54.1333 16.6667 52.9667 17.3667 52.4333 18.5001L43.8667 35.6C43.5333 36.3 43.3333 37.0667 43.3333 37.8334Z" fill="#F9C684"/>
                                       </svg>
                                       <div class="star active">
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                          <i class="bi bi-star-fill"></i>
                                       </div>
                                    </div>
                                    <div class="review_card-info">
                                       <p>Partnering with Timmo has been a game-changer for our organization. Their expertise in HR management, coupled with their personalized approach, has significantly improved our HR processes.</p>
                                    </div>
                                    <div class="review_card-author d-flex justify-content-start align-items-center">
                                       <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author-2.png'?> alt="author">
                                       <div class="author-info">
                                           <h5 class="author-title">Briann Johnson</h5>
                                             <p class="author-designation">HR Manager</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </section>
      <!-- Testimonial End -->

      <!-- Pricing End -->
      <div class="d-non pricing-style-six overflow-hidden">
         <div class="container">
            <div class="row g-5">
               <div class="col-xl-5 position-relative">
                  <div class="pricing-content">
                     <h2>Explore Our Best Pricing for You</h2>
                     <p>Finding the right pricing plan shouldn't be a hassle. We've tailored our plans to fit your needs, whether you're a startup or an enterprise.</p>
                     <ul class="price-switch d-flex justify-content-start align-items-center gap-2">
                        <li>Annually</li>
                        <li>
                           <div class="form-check form-switch d-flex justify-content-center align-items-center">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                           </div>
                        </li>
                        <li>Monthly</li>
                     </ul>
                     <img class='shape d-none d-xl-block' src=<?php echo get_template_directory_uri().'../assets/img/shapes/pricing-shape.svg'?> alt="arrow-shap">
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class="row g-4">
                     <div class="col-md-6">
                        <div class="pricing-card-style-six active">
                           <div class="price-content">
                              <h4 class="title">Standard Plan</h4>
                              <p>Best for small team or stratups</p>
                              <p class="package-1"><span class="price">$99</span><span class="subscription-type">/Month</span></p>
                              <div class="price-divider"></div>
                              <ul class="fetcher">
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    Advanced product analytics                                    
                                 </li>
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    Priority email & chat support
                                 </li>
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    Real-time data tracking
                                 </li>
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    Custom made dashboards
                                 </li>
                              </ul>
                           </div>
                           <div class="text-center">
                              <a href="#" class="d-block btn-outlined-round">Try 7 Days Free Trial</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="pricing-card-style-six">
                           <div class="price-content">
                              <h4 class="title">Enterprise Plan</h4>
                              <p>Best for Large team or Companies</p>
                              <p class='package-2'><span class="price">$299</span><span class="subscription-type">/Month</span></p>
                              <div class="price-divider"></div>
                              <ul class="fetcher">
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    Customizable solutions                                
                                 </li>
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    API and Custom integration
                                 </li>
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    24/7 premium support
                                 </li>
                                 <li class="d-flex justify-content-start align-items-start">
                                    <svg class='un-check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1.25C6.072 1.25 1.25 6.073 1.25 12C1.25 17.927 6.072 22.75 12 22.75C17.928 22.75 22.75 17.927 22.75 12C22.75 6.073 17.928 1.25 12 1.25ZM12 21.25C6.899 21.25 2.75 17.101 2.75 12C2.75 6.899 6.899 2.75 12 2.75C17.101 2.75 21.25 6.899 21.25 12C21.25 17.101 17.101 21.25 12 21.25ZM16.03 9.13599C16.323 9.42899 16.323 9.90402 16.03 10.197L11.363 14.864C11.217 15.01 11.025 15.084 10.833 15.084C10.641 15.084 10.449 15.011 10.303 14.864L7.97 12.531C7.677 12.238 7.677 11.763 7.97 11.47C8.263 11.177 8.73801 11.177 9.03101 11.47L10.834 13.273L14.97 9.13702C15.263 8.84402 15.737 8.84399 16.03 9.13599Z" fill="currentColor"/>
                                    </svg>
                                    <svg class='check' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 1C6.48 1 2 5.48 2 11C2 16.52 6.48 21 12 21C17.52 21 22 16.52 22 11C22 5.48 17.52 1 12 1ZM16.03 9.20001L11.36 13.86C11.22 14.01 11.03 14.08 10.83 14.08C10.64 14.08 10.45 14.01 10.3 13.86L7.97 11.53C7.68 11.24 7.68 10.76 7.97 10.47C8.26 10.18 8.74 10.18 9.03 10.47L10.83 12.27L14.97 8.14001C15.26 7.84001 15.74 7.84001 16.03 8.14001C16.32 8.43001 16.32 8.90001 16.03 9.20001Z" fill="white"/>
                                    </svg>
                                    Real-time data tracking
                                 </li>
                              </ul>
                           </div>
                           <div class="text-center">
                              <a href="#" class="d-block btn-outlined-round">Purchase Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Pricing End -->

      <!-- Services End -->
      <div class="d-non  service-style-five section-gap-top-y-1 section-gap-bottom-y-1">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header d-flex flex-column flex-md-row justify-content-between align-items-center">
                     <h2>Our Best Solutions Tailored to Your Needs</h2>
                     <p>Our comprehensive HR solutions are designed to adapt to your unique needs, ensuring efficiency and effectiveness tailored precisely to your needs. Discover our comprehensive services.</p>
                  </div>
               </div>
            </div>
            <div class="row g-0">
               <div class="col-md-6 col-lg-4">
                  <div class="service-card-five">
                     <span class="service-card-border-right_bottom-to-top"></span>
                     <!-- <span class="service-card-border-right_top-to-bottom"></span> -->
                     <span class="service-card-border-bottom_right-to-left"></span>
                     <!-- <span class="service-card-border-bottom_left-to-right"></span> -->
                     <!-- <span class="service-card-border-left_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-left_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-center"></span> -->
                     <div class="service-card-wrapper">
                        <div class="card-thumb d-flex justify-content-center align-items-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_3787_540)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2726 18.0336C11.8925 17.6505 11.4496 17.3351 10.9632 17.1012C11.5145 14.8943 13.1435 13.1587 15.457 13.1587H20.5453C22.8586 13.1587 24.4858 14.8943 25.0391 17.1012C24.5527 17.3351 24.1099 17.6505 23.7297 18.0336C23.6867 18.0008 23.6415 17.968 23.5985 17.9351C23.3675 17.7617 23.0909 17.6594 22.8026 17.6409C22.5144 17.6223 22.227 17.6883 21.9756 17.8307L21.1539 18.2958C21.0433 18.2465 20.9289 18.1995 20.8158 18.1544L20.5637 17.2446C20.4876 16.9657 20.3313 16.7153 20.1143 16.5245C19.8972 16.3336 19.6288 16.2106 19.3425 16.1709C18.453 16.0418 17.5496 16.0418 16.6601 16.1709C16.3738 16.2107 16.1055 16.3336 15.8884 16.5245C15.6713 16.7154 15.515 16.9657 15.4388 17.2446L15.1868 18.1544C15.0721 18.1995 14.9594 18.2466 14.8466 18.2958L14.0249 17.8307C13.7736 17.6883 13.4861 17.6223 13.1979 17.6409C12.9096 17.6594 12.633 17.7617 12.402 17.9351L12.2726 18.0336ZM18 11.548C18.9216 11.548 19.8225 11.2747 20.5888 10.7627C21.3551 10.2507 21.9524 9.52293 22.3051 8.67148C22.6577 7.82002 22.75 6.8831 22.5702 5.9792C22.3904 5.07529 21.9466 4.245 21.295 3.59333C20.6433 2.94165 19.813 2.49785 18.9091 2.31805C18.0052 2.13826 17.0683 2.23053 16.2168 2.58322C15.3653 2.93591 14.6376 3.53316 14.1256 4.29945C13.6136 5.06574 13.3403 5.96666 13.3403 6.88827C13.3423 8.12349 13.8339 9.30754 14.7073 10.181C15.5807 11.0544 16.7648 11.546 18 11.548ZM29.2621 16.2713C30.0601 16.2713 30.8402 16.0347 31.5037 15.5913C32.1673 15.148 32.6844 14.5178 32.9898 13.7806C33.2952 13.0433 33.3751 12.232 33.2194 11.4493C33.0637 10.6667 32.6794 9.94773 32.1151 9.38345C31.5508 8.81917 30.8319 8.4349 30.0492 8.27922C29.2665 8.12355 28.4553 8.20346 27.718 8.50886C26.9807 8.81425 26.3506 9.33142 25.9073 9.99495C25.4639 10.6585 25.2273 11.4386 25.2273 12.2366C25.2294 13.306 25.6551 14.3311 26.4113 15.0873C27.1676 15.8435 28.1926 16.2693 29.2621 16.2713ZM35.9833 25.2179L35.473 21.6729C35.1575 19.4862 33.6718 17.6651 31.4652 17.6651H27.0593C26.1023 17.6593 25.1815 18.0303 24.4958 18.6979C24.8585 19.0486 25.1929 19.4275 25.4957 19.831C25.669 20.0622 25.7709 20.3389 25.7891 20.6272C25.8073 20.9155 25.741 21.2028 25.5982 21.4539L25.1351 22.275C25.1843 22.3875 25.2314 22.5005 25.2745 22.6152L26.1863 22.8672C26.4651 22.9437 26.7153 23.1002 26.9061 23.3174C27.097 23.5345 27.2201 23.8028 27.2602 24.0891C27.3855 24.9677 27.3868 25.8596 27.2642 26.7386H34.7414C35.5776 26.7383 36.1021 26.0478 35.9833 25.2179ZM10.7256 22.6155C10.7706 22.5007 10.8177 22.388 10.867 22.2753L10.4018 21.4536C10.2594 21.2022 10.1934 20.9148 10.212 20.6265C10.2305 20.3383 10.3328 20.0617 10.5062 19.8307C10.8078 19.4267 11.1416 19.0478 11.5042 18.6975C10.8189 18.0293 9.89786 17.6582 8.94074 17.6647H4.53714C2.32813 17.6647 0.842499 19.4864 0.528976 21.6729L0.0166788 25.2179C-0.102149 26.0476 0.424491 26.7383 1.26051 26.7383H8.73789C8.61321 25.8595 8.61458 24.9673 8.74197 24.0888C8.7818 23.8025 8.90476 23.5342 9.09563 23.3171C9.28649 23.1 9.53686 22.9437 9.81571 22.8675L10.7256 22.6155ZM6.73792 16.2713C7.53602 16.2717 8.31631 16.0354 8.98011 15.5923C9.6439 15.1492 10.1614 14.5192 10.4671 13.782C10.7728 13.0447 10.8529 12.2334 10.6975 11.4506C10.542 10.6678 10.1579 9.94865 9.5937 9.38417C9.0295 8.81969 8.31056 8.43522 7.52782 8.27937C6.74508 8.12353 5.93371 8.20333 5.19633 8.50866C4.45894 8.814 3.82868 9.33116 3.38524 9.99473C2.94181 10.6583 2.70513 11.4385 2.70515 12.2366C2.70721 13.3057 3.13269 14.3305 3.88848 15.0866C4.64427 15.8428 5.66882 16.2687 6.73792 16.2713ZM26.258 24.2323C26.3728 25.0259 26.3728 25.832 26.258 26.6256C26.2458 26.7173 26.2068 26.8033 26.146 26.8729C26.0851 26.9426 26.0051 26.9927 25.9159 27.017L24.7396 27.3428C24.665 27.3619 24.5963 27.3995 24.5401 27.4522C24.4839 27.5049 24.4419 27.5709 24.4179 27.6441C24.329 27.9016 24.2243 28.1535 24.1044 28.3981C24.0692 28.4671 24.0521 28.5439 24.0545 28.6212C24.057 28.6986 24.079 28.7741 24.1185 28.8407L24.7189 29.9025C24.7653 29.9826 24.7867 30.0747 24.7804 30.167C24.7742 30.2594 24.7405 30.3478 24.6837 30.4209C24.2045 31.0641 23.6343 31.6342 22.9911 32.1134C22.918 32.1702 22.8297 32.2039 22.7373 32.2102C22.645 32.2164 22.5528 32.195 22.4727 32.1486L21.411 31.5462C21.3445 31.5075 21.2693 31.486 21.1923 31.4839C21.1154 31.4818 21.0391 31.4989 20.9705 31.5339C20.7258 31.6532 20.474 31.7572 20.2164 31.8453C20.1429 31.8695 20.0766 31.9118 20.0236 31.9684C19.9706 32.0249 19.9326 32.0937 19.9131 32.1687L19.5873 33.3429C19.5634 33.4326 19.5135 33.5132 19.4438 33.5745C19.3742 33.6359 19.2879 33.6751 19.1959 33.6875C18.4021 33.8001 17.5963 33.8001 16.8025 33.6875C16.7106 33.6755 16.6245 33.6362 16.5551 33.5748C16.4857 33.5134 16.4363 33.4327 16.4132 33.3429L16.0874 32.1687C16.0679 32.094 16.0299 32.0253 15.9769 31.9691C15.9239 31.9129 15.8576 31.8709 15.7841 31.847C15.5268 31.7573 15.275 31.6527 15.03 31.5335C14.961 31.4986 14.8844 31.4814 14.8071 31.4835C14.7299 31.4857 14.6543 31.5071 14.5874 31.5458L13.5257 32.1482C13.4456 32.1946 13.3534 32.216 13.2611 32.2098C13.1687 32.2035 13.0803 32.1698 13.0072 32.1131C12.3645 31.6333 11.7944 31.0632 11.3146 30.4205C11.2586 30.347 11.2257 30.2585 11.2198 30.1663C11.214 30.074 11.2356 29.9821 11.2819 29.9021L11.8823 28.8404C11.9212 28.774 11.9429 28.6989 11.9454 28.6219C11.9478 28.5449 11.931 28.4686 11.8963 28.3998C11.7767 28.1543 11.672 27.9018 11.5828 27.6437C11.5585 27.5707 11.5164 27.5048 11.4602 27.4522C11.404 27.3996 11.3355 27.3619 11.2611 27.3425L10.0849 27.0167C9.99546 26.9927 9.9152 26.9427 9.85427 26.873C9.79335 26.8033 9.7545 26.7171 9.74266 26.6253C9.6279 25.8316 9.6279 25.0256 9.74266 24.2319C9.75424 24.1402 9.79303 24.0541 9.85403 23.9847C9.91503 23.9153 9.99544 23.8658 10.0849 23.8426L11.2611 23.5168C11.3357 23.4969 11.4041 23.4588 11.4603 23.4059C11.5165 23.3529 11.5586 23.2868 11.5828 23.2135C11.6724 22.9562 11.7771 22.7044 11.8963 22.4594C11.931 22.3902 11.9479 22.3135 11.9455 22.2361C11.943 22.1588 11.9213 22.0833 11.8823 22.0164L11.2819 20.9547C11.2356 20.8747 11.214 20.7828 11.2198 20.6905C11.2257 20.5983 11.2586 20.5098 11.3146 20.4362C11.795 19.794 12.365 19.224 13.0072 18.7437C13.0808 18.6877 13.1692 18.6547 13.2615 18.6489C13.3537 18.6431 13.4456 18.6646 13.5257 18.7109L14.5874 19.3112C14.6542 19.3503 14.7296 19.372 14.8069 19.3745C14.8842 19.377 14.9609 19.3602 15.03 19.3256C15.275 19.2064 15.5268 19.1017 15.7841 19.0121C15.8574 18.9879 15.9235 18.9458 15.9765 18.8896C16.0294 18.8335 16.0675 18.765 16.0874 18.6904L16.4132 17.5142C16.4364 17.4247 16.486 17.3443 16.5554 17.2833C16.6248 17.2223 16.7109 17.1835 16.8025 17.172C17.5962 17.0572 18.4022 17.0572 19.1959 17.172C19.2877 17.1838 19.3739 17.2227 19.4436 17.2836C19.5133 17.3445 19.5633 17.4248 19.5873 17.5142L19.9131 18.6904C19.9326 18.7651 19.9706 18.8338 20.0236 18.89C20.0766 18.9463 20.1429 18.9882 20.2164 19.0121C20.4737 19.1017 20.7255 19.2064 20.9705 19.3256C21.0393 19.3602 21.1156 19.377 21.1926 19.3745C21.2695 19.372 21.3446 19.3502 21.411 19.3112L22.4727 18.7109C22.5527 18.6646 22.6447 18.643 22.7369 18.6489C22.8291 18.6547 22.9176 18.6877 22.9911 18.7437C23.6339 19.2234 24.2039 19.7935 24.6837 20.4362C24.7405 20.5093 24.7741 20.5977 24.7804 20.6901C24.7867 20.7825 24.7652 20.8746 24.7189 20.9547L24.1185 22.0164C24.079 22.0831 24.0569 22.1586 24.0545 22.2361C24.052 22.3136 24.0692 22.3904 24.1044 22.4594C24.2236 22.7044 24.3283 22.9562 24.4179 23.2135C24.4418 23.287 24.4838 23.3533 24.54 23.4062C24.5962 23.4592 24.6649 23.4972 24.7396 23.5168L25.9159 23.8426C26.0052 23.8662 26.0854 23.9159 26.1463 23.9853C26.2073 24.0547 26.2461 24.1407 26.258 24.2323ZM23.0081 25.429C23.0084 24.27 22.6068 23.1467 21.8717 22.2507C21.1367 21.3546 20.1136 20.7411 18.977 20.5148C17.8403 20.2885 16.6603 20.4633 15.6381 21.0095C14.6158 21.5556 13.8146 22.4394 13.371 23.5101C12.9273 24.5808 12.8686 25.7722 13.205 26.8814C13.5413 27.9905 14.2518 28.9487 15.2154 29.5926C16.1791 30.2366 17.3362 30.5265 18.4896 30.4129C19.643 30.2994 20.7213 29.7894 21.5409 28.9698C22.0065 28.5053 22.3757 27.9533 22.6275 27.3457C22.8793 26.7381 23.0086 26.0867 23.0081 25.429ZM18 21.4352C17.0758 21.4353 16.1803 21.7559 15.4659 22.3423C14.7516 22.9287 14.2627 23.7446 14.0825 24.651C13.9022 25.5575 14.0419 26.4984 14.4776 27.3134C14.9133 28.1285 15.6181 28.7672 16.472 29.1209C17.3258 29.4745 18.2759 29.5212 19.1603 29.2529C20.0447 28.9846 20.8087 28.418 21.3222 27.6496C21.8357 26.8812 22.0668 25.9585 21.9763 25.0387C21.8858 24.119 21.4792 23.2591 20.8257 22.6055C20.4553 22.2336 20.0149 21.9387 19.5299 21.7378C19.0449 21.5369 18.525 21.4341 18 21.4352Z" fill="#1D6C77"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_3787_540">
                                    <rect width="36" height="36" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <div class="card-content">
                           <h4>Employee Management</h4>
                           <p>Efficiently streamline all aspects of employee management with our intuitive tools.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="service-card-five">
                     <span class="service-card-border-right_bottom-to-top"></span>
                     <!-- <span class="service-card-border-right_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-bottom_right-to-left"></span> -->
                     <!-- <span class="service-card-border-bottom_left-to-right"></span> -->
                     <!-- <span class="service-card-border-left_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-left_top-to-bottom"></span> -->
                     <span class="service-card-border-center"></span>
                     <!-- <span class="service-card-border_left-center-right"></span> -->
                     <div class="service-card-wrapper">
                        <div class="card-thumb d-flex justify-content-center align-items-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_3787_540)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2726 18.0336C11.8925 17.6505 11.4496 17.3351 10.9632 17.1012C11.5145 14.8943 13.1435 13.1587 15.457 13.1587H20.5453C22.8586 13.1587 24.4858 14.8943 25.0391 17.1012C24.5527 17.3351 24.1099 17.6505 23.7297 18.0336C23.6867 18.0008 23.6415 17.968 23.5985 17.9351C23.3675 17.7617 23.0909 17.6594 22.8026 17.6409C22.5144 17.6223 22.227 17.6883 21.9756 17.8307L21.1539 18.2958C21.0433 18.2465 20.9289 18.1995 20.8158 18.1544L20.5637 17.2446C20.4876 16.9657 20.3313 16.7153 20.1143 16.5245C19.8972 16.3336 19.6288 16.2106 19.3425 16.1709C18.453 16.0418 17.5496 16.0418 16.6601 16.1709C16.3738 16.2107 16.1055 16.3336 15.8884 16.5245C15.6713 16.7154 15.515 16.9657 15.4388 17.2446L15.1868 18.1544C15.0721 18.1995 14.9594 18.2466 14.8466 18.2958L14.0249 17.8307C13.7736 17.6883 13.4861 17.6223 13.1979 17.6409C12.9096 17.6594 12.633 17.7617 12.402 17.9351L12.2726 18.0336ZM18 11.548C18.9216 11.548 19.8225 11.2747 20.5888 10.7627C21.3551 10.2507 21.9524 9.52293 22.3051 8.67148C22.6577 7.82002 22.75 6.8831 22.5702 5.9792C22.3904 5.07529 21.9466 4.245 21.295 3.59333C20.6433 2.94165 19.813 2.49785 18.9091 2.31805C18.0052 2.13826 17.0683 2.23053 16.2168 2.58322C15.3653 2.93591 14.6376 3.53316 14.1256 4.29945C13.6136 5.06574 13.3403 5.96666 13.3403 6.88827C13.3423 8.12349 13.8339 9.30754 14.7073 10.181C15.5807 11.0544 16.7648 11.546 18 11.548ZM29.2621 16.2713C30.0601 16.2713 30.8402 16.0347 31.5037 15.5913C32.1673 15.148 32.6844 14.5178 32.9898 13.7806C33.2952 13.0433 33.3751 12.232 33.2194 11.4493C33.0637 10.6667 32.6794 9.94773 32.1151 9.38345C31.5508 8.81917 30.8319 8.4349 30.0492 8.27922C29.2665 8.12355 28.4553 8.20346 27.718 8.50886C26.9807 8.81425 26.3506 9.33142 25.9073 9.99495C25.4639 10.6585 25.2273 11.4386 25.2273 12.2366C25.2294 13.306 25.6551 14.3311 26.4113 15.0873C27.1676 15.8435 28.1926 16.2693 29.2621 16.2713ZM35.9833 25.2179L35.473 21.6729C35.1575 19.4862 33.6718 17.6651 31.4652 17.6651H27.0593C26.1023 17.6593 25.1815 18.0303 24.4958 18.6979C24.8585 19.0486 25.1929 19.4275 25.4957 19.831C25.669 20.0622 25.7709 20.3389 25.7891 20.6272C25.8073 20.9155 25.741 21.2028 25.5982 21.4539L25.1351 22.275C25.1843 22.3875 25.2314 22.5005 25.2745 22.6152L26.1863 22.8672C26.4651 22.9437 26.7153 23.1002 26.9061 23.3174C27.097 23.5345 27.2201 23.8028 27.2602 24.0891C27.3855 24.9677 27.3868 25.8596 27.2642 26.7386H34.7414C35.5776 26.7383 36.1021 26.0478 35.9833 25.2179ZM10.7256 22.6155C10.7706 22.5007 10.8177 22.388 10.867 22.2753L10.4018 21.4536C10.2594 21.2022 10.1934 20.9148 10.212 20.6265C10.2305 20.3383 10.3328 20.0617 10.5062 19.8307C10.8078 19.4267 11.1416 19.0478 11.5042 18.6975C10.8189 18.0293 9.89786 17.6582 8.94074 17.6647H4.53714C2.32813 17.6647 0.842499 19.4864 0.528976 21.6729L0.0166788 25.2179C-0.102149 26.0476 0.424491 26.7383 1.26051 26.7383H8.73789C8.61321 25.8595 8.61458 24.9673 8.74197 24.0888C8.7818 23.8025 8.90476 23.5342 9.09563 23.3171C9.28649 23.1 9.53686 22.9437 9.81571 22.8675L10.7256 22.6155ZM6.73792 16.2713C7.53602 16.2717 8.31631 16.0354 8.98011 15.5923C9.6439 15.1492 10.1614 14.5192 10.4671 13.782C10.7728 13.0447 10.8529 12.2334 10.6975 11.4506C10.542 10.6678 10.1579 9.94865 9.5937 9.38417C9.0295 8.81969 8.31056 8.43522 7.52782 8.27937C6.74508 8.12353 5.93371 8.20333 5.19633 8.50866C4.45894 8.814 3.82868 9.33116 3.38524 9.99473C2.94181 10.6583 2.70513 11.4385 2.70515 12.2366C2.70721 13.3057 3.13269 14.3305 3.88848 15.0866C4.64427 15.8428 5.66882 16.2687 6.73792 16.2713ZM26.258 24.2323C26.3728 25.0259 26.3728 25.832 26.258 26.6256C26.2458 26.7173 26.2068 26.8033 26.146 26.8729C26.0851 26.9426 26.0051 26.9927 25.9159 27.017L24.7396 27.3428C24.665 27.3619 24.5963 27.3995 24.5401 27.4522C24.4839 27.5049 24.4419 27.5709 24.4179 27.6441C24.329 27.9016 24.2243 28.1535 24.1044 28.3981C24.0692 28.4671 24.0521 28.5439 24.0545 28.6212C24.057 28.6986 24.079 28.7741 24.1185 28.8407L24.7189 29.9025C24.7653 29.9826 24.7867 30.0747 24.7804 30.167C24.7742 30.2594 24.7405 30.3478 24.6837 30.4209C24.2045 31.0641 23.6343 31.6342 22.9911 32.1134C22.918 32.1702 22.8297 32.2039 22.7373 32.2102C22.645 32.2164 22.5528 32.195 22.4727 32.1486L21.411 31.5462C21.3445 31.5075 21.2693 31.486 21.1923 31.4839C21.1154 31.4818 21.0391 31.4989 20.9705 31.5339C20.7258 31.6532 20.474 31.7572 20.2164 31.8453C20.1429 31.8695 20.0766 31.9118 20.0236 31.9684C19.9706 32.0249 19.9326 32.0937 19.9131 32.1687L19.5873 33.3429C19.5634 33.4326 19.5135 33.5132 19.4438 33.5745C19.3742 33.6359 19.2879 33.6751 19.1959 33.6875C18.4021 33.8001 17.5963 33.8001 16.8025 33.6875C16.7106 33.6755 16.6245 33.6362 16.5551 33.5748C16.4857 33.5134 16.4363 33.4327 16.4132 33.3429L16.0874 32.1687C16.0679 32.094 16.0299 32.0253 15.9769 31.9691C15.9239 31.9129 15.8576 31.8709 15.7841 31.847C15.5268 31.7573 15.275 31.6527 15.03 31.5335C14.961 31.4986 14.8844 31.4814 14.8071 31.4835C14.7299 31.4857 14.6543 31.5071 14.5874 31.5458L13.5257 32.1482C13.4456 32.1946 13.3534 32.216 13.2611 32.2098C13.1687 32.2035 13.0803 32.1698 13.0072 32.1131C12.3645 31.6333 11.7944 31.0632 11.3146 30.4205C11.2586 30.347 11.2257 30.2585 11.2198 30.1663C11.214 30.074 11.2356 29.9821 11.2819 29.9021L11.8823 28.8404C11.9212 28.774 11.9429 28.6989 11.9454 28.6219C11.9478 28.5449 11.931 28.4686 11.8963 28.3998C11.7767 28.1543 11.672 27.9018 11.5828 27.6437C11.5585 27.5707 11.5164 27.5048 11.4602 27.4522C11.404 27.3996 11.3355 27.3619 11.2611 27.3425L10.0849 27.0167C9.99546 26.9927 9.9152 26.9427 9.85427 26.873C9.79335 26.8033 9.7545 26.7171 9.74266 26.6253C9.6279 25.8316 9.6279 25.0256 9.74266 24.2319C9.75424 24.1402 9.79303 24.0541 9.85403 23.9847C9.91503 23.9153 9.99544 23.8658 10.0849 23.8426L11.2611 23.5168C11.3357 23.4969 11.4041 23.4588 11.4603 23.4059C11.5165 23.3529 11.5586 23.2868 11.5828 23.2135C11.6724 22.9562 11.7771 22.7044 11.8963 22.4594C11.931 22.3902 11.9479 22.3135 11.9455 22.2361C11.943 22.1588 11.9213 22.0833 11.8823 22.0164L11.2819 20.9547C11.2356 20.8747 11.214 20.7828 11.2198 20.6905C11.2257 20.5983 11.2586 20.5098 11.3146 20.4362C11.795 19.794 12.365 19.224 13.0072 18.7437C13.0808 18.6877 13.1692 18.6547 13.2615 18.6489C13.3537 18.6431 13.4456 18.6646 13.5257 18.7109L14.5874 19.3112C14.6542 19.3503 14.7296 19.372 14.8069 19.3745C14.8842 19.377 14.9609 19.3602 15.03 19.3256C15.275 19.2064 15.5268 19.1017 15.7841 19.0121C15.8574 18.9879 15.9235 18.9458 15.9765 18.8896C16.0294 18.8335 16.0675 18.765 16.0874 18.6904L16.4132 17.5142C16.4364 17.4247 16.486 17.3443 16.5554 17.2833C16.6248 17.2223 16.7109 17.1835 16.8025 17.172C17.5962 17.0572 18.4022 17.0572 19.1959 17.172C19.2877 17.1838 19.3739 17.2227 19.4436 17.2836C19.5133 17.3445 19.5633 17.4248 19.5873 17.5142L19.9131 18.6904C19.9326 18.7651 19.9706 18.8338 20.0236 18.89C20.0766 18.9463 20.1429 18.9882 20.2164 19.0121C20.4737 19.1017 20.7255 19.2064 20.9705 19.3256C21.0393 19.3602 21.1156 19.377 21.1926 19.3745C21.2695 19.372 21.3446 19.3502 21.411 19.3112L22.4727 18.7109C22.5527 18.6646 22.6447 18.643 22.7369 18.6489C22.8291 18.6547 22.9176 18.6877 22.9911 18.7437C23.6339 19.2234 24.2039 19.7935 24.6837 20.4362C24.7405 20.5093 24.7741 20.5977 24.7804 20.6901C24.7867 20.7825 24.7652 20.8746 24.7189 20.9547L24.1185 22.0164C24.079 22.0831 24.0569 22.1586 24.0545 22.2361C24.052 22.3136 24.0692 22.3904 24.1044 22.4594C24.2236 22.7044 24.3283 22.9562 24.4179 23.2135C24.4418 23.287 24.4838 23.3533 24.54 23.4062C24.5962 23.4592 24.6649 23.4972 24.7396 23.5168L25.9159 23.8426C26.0052 23.8662 26.0854 23.9159 26.1463 23.9853C26.2073 24.0547 26.2461 24.1407 26.258 24.2323ZM23.0081 25.429C23.0084 24.27 22.6068 23.1467 21.8717 22.2507C21.1367 21.3546 20.1136 20.7411 18.977 20.5148C17.8403 20.2885 16.6603 20.4633 15.6381 21.0095C14.6158 21.5556 13.8146 22.4394 13.371 23.5101C12.9273 24.5808 12.8686 25.7722 13.205 26.8814C13.5413 27.9905 14.2518 28.9487 15.2154 29.5926C16.1791 30.2366 17.3362 30.5265 18.4896 30.4129C19.643 30.2994 20.7213 29.7894 21.5409 28.9698C22.0065 28.5053 22.3757 27.9533 22.6275 27.3457C22.8793 26.7381 23.0086 26.0867 23.0081 25.429ZM18 21.4352C17.0758 21.4353 16.1803 21.7559 15.4659 22.3423C14.7516 22.9287 14.2627 23.7446 14.0825 24.651C13.9022 25.5575 14.0419 26.4984 14.4776 27.3134C14.9133 28.1285 15.6181 28.7672 16.472 29.1209C17.3258 29.4745 18.2759 29.5212 19.1603 29.2529C20.0447 28.9846 20.8087 28.418 21.3222 27.6496C21.8357 26.8812 22.0668 25.9585 21.9763 25.0387C21.8858 24.119 21.4792 23.2591 20.8257 22.6055C20.4553 22.2336 20.0149 21.9387 19.5299 21.7378C19.0449 21.5369 18.525 21.4341 18 21.4352Z" fill="#1D6C77"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_3787_540">
                                    <rect width="36" height="36" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <div class="card-content">
                           <h4>Employee Management</h4>
                           <p>Efficiently streamline all aspects of employee management with our intuitive tools.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="service-card-five">
                     <!-- <span class="service-card-border-right_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-right_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-bottom_right-to-left"></span> -->
                     <span class="service-card-border-bottom_left-to-right"></span>
                     <!-- <span class="service-card-border-left_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-left_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-center"></span> -->
                     <div class="service-card-wrapper">
                        <div class="card-thumb d-flex justify-content-center align-items-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_3787_540)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2726 18.0336C11.8925 17.6505 11.4496 17.3351 10.9632 17.1012C11.5145 14.8943 13.1435 13.1587 15.457 13.1587H20.5453C22.8586 13.1587 24.4858 14.8943 25.0391 17.1012C24.5527 17.3351 24.1099 17.6505 23.7297 18.0336C23.6867 18.0008 23.6415 17.968 23.5985 17.9351C23.3675 17.7617 23.0909 17.6594 22.8026 17.6409C22.5144 17.6223 22.227 17.6883 21.9756 17.8307L21.1539 18.2958C21.0433 18.2465 20.9289 18.1995 20.8158 18.1544L20.5637 17.2446C20.4876 16.9657 20.3313 16.7153 20.1143 16.5245C19.8972 16.3336 19.6288 16.2106 19.3425 16.1709C18.453 16.0418 17.5496 16.0418 16.6601 16.1709C16.3738 16.2107 16.1055 16.3336 15.8884 16.5245C15.6713 16.7154 15.515 16.9657 15.4388 17.2446L15.1868 18.1544C15.0721 18.1995 14.9594 18.2466 14.8466 18.2958L14.0249 17.8307C13.7736 17.6883 13.4861 17.6223 13.1979 17.6409C12.9096 17.6594 12.633 17.7617 12.402 17.9351L12.2726 18.0336ZM18 11.548C18.9216 11.548 19.8225 11.2747 20.5888 10.7627C21.3551 10.2507 21.9524 9.52293 22.3051 8.67148C22.6577 7.82002 22.75 6.8831 22.5702 5.9792C22.3904 5.07529 21.9466 4.245 21.295 3.59333C20.6433 2.94165 19.813 2.49785 18.9091 2.31805C18.0052 2.13826 17.0683 2.23053 16.2168 2.58322C15.3653 2.93591 14.6376 3.53316 14.1256 4.29945C13.6136 5.06574 13.3403 5.96666 13.3403 6.88827C13.3423 8.12349 13.8339 9.30754 14.7073 10.181C15.5807 11.0544 16.7648 11.546 18 11.548ZM29.2621 16.2713C30.0601 16.2713 30.8402 16.0347 31.5037 15.5913C32.1673 15.148 32.6844 14.5178 32.9898 13.7806C33.2952 13.0433 33.3751 12.232 33.2194 11.4493C33.0637 10.6667 32.6794 9.94773 32.1151 9.38345C31.5508 8.81917 30.8319 8.4349 30.0492 8.27922C29.2665 8.12355 28.4553 8.20346 27.718 8.50886C26.9807 8.81425 26.3506 9.33142 25.9073 9.99495C25.4639 10.6585 25.2273 11.4386 25.2273 12.2366C25.2294 13.306 25.6551 14.3311 26.4113 15.0873C27.1676 15.8435 28.1926 16.2693 29.2621 16.2713ZM35.9833 25.2179L35.473 21.6729C35.1575 19.4862 33.6718 17.6651 31.4652 17.6651H27.0593C26.1023 17.6593 25.1815 18.0303 24.4958 18.6979C24.8585 19.0486 25.1929 19.4275 25.4957 19.831C25.669 20.0622 25.7709 20.3389 25.7891 20.6272C25.8073 20.9155 25.741 21.2028 25.5982 21.4539L25.1351 22.275C25.1843 22.3875 25.2314 22.5005 25.2745 22.6152L26.1863 22.8672C26.4651 22.9437 26.7153 23.1002 26.9061 23.3174C27.097 23.5345 27.2201 23.8028 27.2602 24.0891C27.3855 24.9677 27.3868 25.8596 27.2642 26.7386H34.7414C35.5776 26.7383 36.1021 26.0478 35.9833 25.2179ZM10.7256 22.6155C10.7706 22.5007 10.8177 22.388 10.867 22.2753L10.4018 21.4536C10.2594 21.2022 10.1934 20.9148 10.212 20.6265C10.2305 20.3383 10.3328 20.0617 10.5062 19.8307C10.8078 19.4267 11.1416 19.0478 11.5042 18.6975C10.8189 18.0293 9.89786 17.6582 8.94074 17.6647H4.53714C2.32813 17.6647 0.842499 19.4864 0.528976 21.6729L0.0166788 25.2179C-0.102149 26.0476 0.424491 26.7383 1.26051 26.7383H8.73789C8.61321 25.8595 8.61458 24.9673 8.74197 24.0888C8.7818 23.8025 8.90476 23.5342 9.09563 23.3171C9.28649 23.1 9.53686 22.9437 9.81571 22.8675L10.7256 22.6155ZM6.73792 16.2713C7.53602 16.2717 8.31631 16.0354 8.98011 15.5923C9.6439 15.1492 10.1614 14.5192 10.4671 13.782C10.7728 13.0447 10.8529 12.2334 10.6975 11.4506C10.542 10.6678 10.1579 9.94865 9.5937 9.38417C9.0295 8.81969 8.31056 8.43522 7.52782 8.27937C6.74508 8.12353 5.93371 8.20333 5.19633 8.50866C4.45894 8.814 3.82868 9.33116 3.38524 9.99473C2.94181 10.6583 2.70513 11.4385 2.70515 12.2366C2.70721 13.3057 3.13269 14.3305 3.88848 15.0866C4.64427 15.8428 5.66882 16.2687 6.73792 16.2713ZM26.258 24.2323C26.3728 25.0259 26.3728 25.832 26.258 26.6256C26.2458 26.7173 26.2068 26.8033 26.146 26.8729C26.0851 26.9426 26.0051 26.9927 25.9159 27.017L24.7396 27.3428C24.665 27.3619 24.5963 27.3995 24.5401 27.4522C24.4839 27.5049 24.4419 27.5709 24.4179 27.6441C24.329 27.9016 24.2243 28.1535 24.1044 28.3981C24.0692 28.4671 24.0521 28.5439 24.0545 28.6212C24.057 28.6986 24.079 28.7741 24.1185 28.8407L24.7189 29.9025C24.7653 29.9826 24.7867 30.0747 24.7804 30.167C24.7742 30.2594 24.7405 30.3478 24.6837 30.4209C24.2045 31.0641 23.6343 31.6342 22.9911 32.1134C22.918 32.1702 22.8297 32.2039 22.7373 32.2102C22.645 32.2164 22.5528 32.195 22.4727 32.1486L21.411 31.5462C21.3445 31.5075 21.2693 31.486 21.1923 31.4839C21.1154 31.4818 21.0391 31.4989 20.9705 31.5339C20.7258 31.6532 20.474 31.7572 20.2164 31.8453C20.1429 31.8695 20.0766 31.9118 20.0236 31.9684C19.9706 32.0249 19.9326 32.0937 19.9131 32.1687L19.5873 33.3429C19.5634 33.4326 19.5135 33.5132 19.4438 33.5745C19.3742 33.6359 19.2879 33.6751 19.1959 33.6875C18.4021 33.8001 17.5963 33.8001 16.8025 33.6875C16.7106 33.6755 16.6245 33.6362 16.5551 33.5748C16.4857 33.5134 16.4363 33.4327 16.4132 33.3429L16.0874 32.1687C16.0679 32.094 16.0299 32.0253 15.9769 31.9691C15.9239 31.9129 15.8576 31.8709 15.7841 31.847C15.5268 31.7573 15.275 31.6527 15.03 31.5335C14.961 31.4986 14.8844 31.4814 14.8071 31.4835C14.7299 31.4857 14.6543 31.5071 14.5874 31.5458L13.5257 32.1482C13.4456 32.1946 13.3534 32.216 13.2611 32.2098C13.1687 32.2035 13.0803 32.1698 13.0072 32.1131C12.3645 31.6333 11.7944 31.0632 11.3146 30.4205C11.2586 30.347 11.2257 30.2585 11.2198 30.1663C11.214 30.074 11.2356 29.9821 11.2819 29.9021L11.8823 28.8404C11.9212 28.774 11.9429 28.6989 11.9454 28.6219C11.9478 28.5449 11.931 28.4686 11.8963 28.3998C11.7767 28.1543 11.672 27.9018 11.5828 27.6437C11.5585 27.5707 11.5164 27.5048 11.4602 27.4522C11.404 27.3996 11.3355 27.3619 11.2611 27.3425L10.0849 27.0167C9.99546 26.9927 9.9152 26.9427 9.85427 26.873C9.79335 26.8033 9.7545 26.7171 9.74266 26.6253C9.6279 25.8316 9.6279 25.0256 9.74266 24.2319C9.75424 24.1402 9.79303 24.0541 9.85403 23.9847C9.91503 23.9153 9.99544 23.8658 10.0849 23.8426L11.2611 23.5168C11.3357 23.4969 11.4041 23.4588 11.4603 23.4059C11.5165 23.3529 11.5586 23.2868 11.5828 23.2135C11.6724 22.9562 11.7771 22.7044 11.8963 22.4594C11.931 22.3902 11.9479 22.3135 11.9455 22.2361C11.943 22.1588 11.9213 22.0833 11.8823 22.0164L11.2819 20.9547C11.2356 20.8747 11.214 20.7828 11.2198 20.6905C11.2257 20.5983 11.2586 20.5098 11.3146 20.4362C11.795 19.794 12.365 19.224 13.0072 18.7437C13.0808 18.6877 13.1692 18.6547 13.2615 18.6489C13.3537 18.6431 13.4456 18.6646 13.5257 18.7109L14.5874 19.3112C14.6542 19.3503 14.7296 19.372 14.8069 19.3745C14.8842 19.377 14.9609 19.3602 15.03 19.3256C15.275 19.2064 15.5268 19.1017 15.7841 19.0121C15.8574 18.9879 15.9235 18.9458 15.9765 18.8896C16.0294 18.8335 16.0675 18.765 16.0874 18.6904L16.4132 17.5142C16.4364 17.4247 16.486 17.3443 16.5554 17.2833C16.6248 17.2223 16.7109 17.1835 16.8025 17.172C17.5962 17.0572 18.4022 17.0572 19.1959 17.172C19.2877 17.1838 19.3739 17.2227 19.4436 17.2836C19.5133 17.3445 19.5633 17.4248 19.5873 17.5142L19.9131 18.6904C19.9326 18.7651 19.9706 18.8338 20.0236 18.89C20.0766 18.9463 20.1429 18.9882 20.2164 19.0121C20.4737 19.1017 20.7255 19.2064 20.9705 19.3256C21.0393 19.3602 21.1156 19.377 21.1926 19.3745C21.2695 19.372 21.3446 19.3502 21.411 19.3112L22.4727 18.7109C22.5527 18.6646 22.6447 18.643 22.7369 18.6489C22.8291 18.6547 22.9176 18.6877 22.9911 18.7437C23.6339 19.2234 24.2039 19.7935 24.6837 20.4362C24.7405 20.5093 24.7741 20.5977 24.7804 20.6901C24.7867 20.7825 24.7652 20.8746 24.7189 20.9547L24.1185 22.0164C24.079 22.0831 24.0569 22.1586 24.0545 22.2361C24.052 22.3136 24.0692 22.3904 24.1044 22.4594C24.2236 22.7044 24.3283 22.9562 24.4179 23.2135C24.4418 23.287 24.4838 23.3533 24.54 23.4062C24.5962 23.4592 24.6649 23.4972 24.7396 23.5168L25.9159 23.8426C26.0052 23.8662 26.0854 23.9159 26.1463 23.9853C26.2073 24.0547 26.2461 24.1407 26.258 24.2323ZM23.0081 25.429C23.0084 24.27 22.6068 23.1467 21.8717 22.2507C21.1367 21.3546 20.1136 20.7411 18.977 20.5148C17.8403 20.2885 16.6603 20.4633 15.6381 21.0095C14.6158 21.5556 13.8146 22.4394 13.371 23.5101C12.9273 24.5808 12.8686 25.7722 13.205 26.8814C13.5413 27.9905 14.2518 28.9487 15.2154 29.5926C16.1791 30.2366 17.3362 30.5265 18.4896 30.4129C19.643 30.2994 20.7213 29.7894 21.5409 28.9698C22.0065 28.5053 22.3757 27.9533 22.6275 27.3457C22.8793 26.7381 23.0086 26.0867 23.0081 25.429ZM18 21.4352C17.0758 21.4353 16.1803 21.7559 15.4659 22.3423C14.7516 22.9287 14.2627 23.7446 14.0825 24.651C13.9022 25.5575 14.0419 26.4984 14.4776 27.3134C14.9133 28.1285 15.6181 28.7672 16.472 29.1209C17.3258 29.4745 18.2759 29.5212 19.1603 29.2529C20.0447 28.9846 20.8087 28.418 21.3222 27.6496C21.8357 26.8812 22.0668 25.9585 21.9763 25.0387C21.8858 24.119 21.4792 23.2591 20.8257 22.6055C20.4553 22.2336 20.0149 21.9387 19.5299 21.7378C19.0449 21.5369 18.525 21.4341 18 21.4352Z" fill="#1D6C77"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_3787_540">
                                    <rect width="36" height="36" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <div class="card-content">
                           <h4>Employee Management</h4>
                           <p>Efficiently streamline all aspects of employee management with our intuitive tools.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="service-card-five">
                     <!-- <span class="service-card-border-right_bottom-to-top"></span> -->
                     <span class="service-card-border-right_top-to-bottom"></span>
                     <!-- <span class="service-card-border-bottom_right-to-left"></span> -->
                     <!-- <span class="service-card-border-bottom_left-to-right"></span> -->
                     <!-- <span class="service-card-border-left_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-left_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-center"></span> -->
                     <div class="service-card-wrapper">
                        <div class="card-thumb d-flex justify-content-center align-items-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_3787_540)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2726 18.0336C11.8925 17.6505 11.4496 17.3351 10.9632 17.1012C11.5145 14.8943 13.1435 13.1587 15.457 13.1587H20.5453C22.8586 13.1587 24.4858 14.8943 25.0391 17.1012C24.5527 17.3351 24.1099 17.6505 23.7297 18.0336C23.6867 18.0008 23.6415 17.968 23.5985 17.9351C23.3675 17.7617 23.0909 17.6594 22.8026 17.6409C22.5144 17.6223 22.227 17.6883 21.9756 17.8307L21.1539 18.2958C21.0433 18.2465 20.9289 18.1995 20.8158 18.1544L20.5637 17.2446C20.4876 16.9657 20.3313 16.7153 20.1143 16.5245C19.8972 16.3336 19.6288 16.2106 19.3425 16.1709C18.453 16.0418 17.5496 16.0418 16.6601 16.1709C16.3738 16.2107 16.1055 16.3336 15.8884 16.5245C15.6713 16.7154 15.515 16.9657 15.4388 17.2446L15.1868 18.1544C15.0721 18.1995 14.9594 18.2466 14.8466 18.2958L14.0249 17.8307C13.7736 17.6883 13.4861 17.6223 13.1979 17.6409C12.9096 17.6594 12.633 17.7617 12.402 17.9351L12.2726 18.0336ZM18 11.548C18.9216 11.548 19.8225 11.2747 20.5888 10.7627C21.3551 10.2507 21.9524 9.52293 22.3051 8.67148C22.6577 7.82002 22.75 6.8831 22.5702 5.9792C22.3904 5.07529 21.9466 4.245 21.295 3.59333C20.6433 2.94165 19.813 2.49785 18.9091 2.31805C18.0052 2.13826 17.0683 2.23053 16.2168 2.58322C15.3653 2.93591 14.6376 3.53316 14.1256 4.29945C13.6136 5.06574 13.3403 5.96666 13.3403 6.88827C13.3423 8.12349 13.8339 9.30754 14.7073 10.181C15.5807 11.0544 16.7648 11.546 18 11.548ZM29.2621 16.2713C30.0601 16.2713 30.8402 16.0347 31.5037 15.5913C32.1673 15.148 32.6844 14.5178 32.9898 13.7806C33.2952 13.0433 33.3751 12.232 33.2194 11.4493C33.0637 10.6667 32.6794 9.94773 32.1151 9.38345C31.5508 8.81917 30.8319 8.4349 30.0492 8.27922C29.2665 8.12355 28.4553 8.20346 27.718 8.50886C26.9807 8.81425 26.3506 9.33142 25.9073 9.99495C25.4639 10.6585 25.2273 11.4386 25.2273 12.2366C25.2294 13.306 25.6551 14.3311 26.4113 15.0873C27.1676 15.8435 28.1926 16.2693 29.2621 16.2713ZM35.9833 25.2179L35.473 21.6729C35.1575 19.4862 33.6718 17.6651 31.4652 17.6651H27.0593C26.1023 17.6593 25.1815 18.0303 24.4958 18.6979C24.8585 19.0486 25.1929 19.4275 25.4957 19.831C25.669 20.0622 25.7709 20.3389 25.7891 20.6272C25.8073 20.9155 25.741 21.2028 25.5982 21.4539L25.1351 22.275C25.1843 22.3875 25.2314 22.5005 25.2745 22.6152L26.1863 22.8672C26.4651 22.9437 26.7153 23.1002 26.9061 23.3174C27.097 23.5345 27.2201 23.8028 27.2602 24.0891C27.3855 24.9677 27.3868 25.8596 27.2642 26.7386H34.7414C35.5776 26.7383 36.1021 26.0478 35.9833 25.2179ZM10.7256 22.6155C10.7706 22.5007 10.8177 22.388 10.867 22.2753L10.4018 21.4536C10.2594 21.2022 10.1934 20.9148 10.212 20.6265C10.2305 20.3383 10.3328 20.0617 10.5062 19.8307C10.8078 19.4267 11.1416 19.0478 11.5042 18.6975C10.8189 18.0293 9.89786 17.6582 8.94074 17.6647H4.53714C2.32813 17.6647 0.842499 19.4864 0.528976 21.6729L0.0166788 25.2179C-0.102149 26.0476 0.424491 26.7383 1.26051 26.7383H8.73789C8.61321 25.8595 8.61458 24.9673 8.74197 24.0888C8.7818 23.8025 8.90476 23.5342 9.09563 23.3171C9.28649 23.1 9.53686 22.9437 9.81571 22.8675L10.7256 22.6155ZM6.73792 16.2713C7.53602 16.2717 8.31631 16.0354 8.98011 15.5923C9.6439 15.1492 10.1614 14.5192 10.4671 13.782C10.7728 13.0447 10.8529 12.2334 10.6975 11.4506C10.542 10.6678 10.1579 9.94865 9.5937 9.38417C9.0295 8.81969 8.31056 8.43522 7.52782 8.27937C6.74508 8.12353 5.93371 8.20333 5.19633 8.50866C4.45894 8.814 3.82868 9.33116 3.38524 9.99473C2.94181 10.6583 2.70513 11.4385 2.70515 12.2366C2.70721 13.3057 3.13269 14.3305 3.88848 15.0866C4.64427 15.8428 5.66882 16.2687 6.73792 16.2713ZM26.258 24.2323C26.3728 25.0259 26.3728 25.832 26.258 26.6256C26.2458 26.7173 26.2068 26.8033 26.146 26.8729C26.0851 26.9426 26.0051 26.9927 25.9159 27.017L24.7396 27.3428C24.665 27.3619 24.5963 27.3995 24.5401 27.4522C24.4839 27.5049 24.4419 27.5709 24.4179 27.6441C24.329 27.9016 24.2243 28.1535 24.1044 28.3981C24.0692 28.4671 24.0521 28.5439 24.0545 28.6212C24.057 28.6986 24.079 28.7741 24.1185 28.8407L24.7189 29.9025C24.7653 29.9826 24.7867 30.0747 24.7804 30.167C24.7742 30.2594 24.7405 30.3478 24.6837 30.4209C24.2045 31.0641 23.6343 31.6342 22.9911 32.1134C22.918 32.1702 22.8297 32.2039 22.7373 32.2102C22.645 32.2164 22.5528 32.195 22.4727 32.1486L21.411 31.5462C21.3445 31.5075 21.2693 31.486 21.1923 31.4839C21.1154 31.4818 21.0391 31.4989 20.9705 31.5339C20.7258 31.6532 20.474 31.7572 20.2164 31.8453C20.1429 31.8695 20.0766 31.9118 20.0236 31.9684C19.9706 32.0249 19.9326 32.0937 19.9131 32.1687L19.5873 33.3429C19.5634 33.4326 19.5135 33.5132 19.4438 33.5745C19.3742 33.6359 19.2879 33.6751 19.1959 33.6875C18.4021 33.8001 17.5963 33.8001 16.8025 33.6875C16.7106 33.6755 16.6245 33.6362 16.5551 33.5748C16.4857 33.5134 16.4363 33.4327 16.4132 33.3429L16.0874 32.1687C16.0679 32.094 16.0299 32.0253 15.9769 31.9691C15.9239 31.9129 15.8576 31.8709 15.7841 31.847C15.5268 31.7573 15.275 31.6527 15.03 31.5335C14.961 31.4986 14.8844 31.4814 14.8071 31.4835C14.7299 31.4857 14.6543 31.5071 14.5874 31.5458L13.5257 32.1482C13.4456 32.1946 13.3534 32.216 13.2611 32.2098C13.1687 32.2035 13.0803 32.1698 13.0072 32.1131C12.3645 31.6333 11.7944 31.0632 11.3146 30.4205C11.2586 30.347 11.2257 30.2585 11.2198 30.1663C11.214 30.074 11.2356 29.9821 11.2819 29.9021L11.8823 28.8404C11.9212 28.774 11.9429 28.6989 11.9454 28.6219C11.9478 28.5449 11.931 28.4686 11.8963 28.3998C11.7767 28.1543 11.672 27.9018 11.5828 27.6437C11.5585 27.5707 11.5164 27.5048 11.4602 27.4522C11.404 27.3996 11.3355 27.3619 11.2611 27.3425L10.0849 27.0167C9.99546 26.9927 9.9152 26.9427 9.85427 26.873C9.79335 26.8033 9.7545 26.7171 9.74266 26.6253C9.6279 25.8316 9.6279 25.0256 9.74266 24.2319C9.75424 24.1402 9.79303 24.0541 9.85403 23.9847C9.91503 23.9153 9.99544 23.8658 10.0849 23.8426L11.2611 23.5168C11.3357 23.4969 11.4041 23.4588 11.4603 23.4059C11.5165 23.3529 11.5586 23.2868 11.5828 23.2135C11.6724 22.9562 11.7771 22.7044 11.8963 22.4594C11.931 22.3902 11.9479 22.3135 11.9455 22.2361C11.943 22.1588 11.9213 22.0833 11.8823 22.0164L11.2819 20.9547C11.2356 20.8747 11.214 20.7828 11.2198 20.6905C11.2257 20.5983 11.2586 20.5098 11.3146 20.4362C11.795 19.794 12.365 19.224 13.0072 18.7437C13.0808 18.6877 13.1692 18.6547 13.2615 18.6489C13.3537 18.6431 13.4456 18.6646 13.5257 18.7109L14.5874 19.3112C14.6542 19.3503 14.7296 19.372 14.8069 19.3745C14.8842 19.377 14.9609 19.3602 15.03 19.3256C15.275 19.2064 15.5268 19.1017 15.7841 19.0121C15.8574 18.9879 15.9235 18.9458 15.9765 18.8896C16.0294 18.8335 16.0675 18.765 16.0874 18.6904L16.4132 17.5142C16.4364 17.4247 16.486 17.3443 16.5554 17.2833C16.6248 17.2223 16.7109 17.1835 16.8025 17.172C17.5962 17.0572 18.4022 17.0572 19.1959 17.172C19.2877 17.1838 19.3739 17.2227 19.4436 17.2836C19.5133 17.3445 19.5633 17.4248 19.5873 17.5142L19.9131 18.6904C19.9326 18.7651 19.9706 18.8338 20.0236 18.89C20.0766 18.9463 20.1429 18.9882 20.2164 19.0121C20.4737 19.1017 20.7255 19.2064 20.9705 19.3256C21.0393 19.3602 21.1156 19.377 21.1926 19.3745C21.2695 19.372 21.3446 19.3502 21.411 19.3112L22.4727 18.7109C22.5527 18.6646 22.6447 18.643 22.7369 18.6489C22.8291 18.6547 22.9176 18.6877 22.9911 18.7437C23.6339 19.2234 24.2039 19.7935 24.6837 20.4362C24.7405 20.5093 24.7741 20.5977 24.7804 20.6901C24.7867 20.7825 24.7652 20.8746 24.7189 20.9547L24.1185 22.0164C24.079 22.0831 24.0569 22.1586 24.0545 22.2361C24.052 22.3136 24.0692 22.3904 24.1044 22.4594C24.2236 22.7044 24.3283 22.9562 24.4179 23.2135C24.4418 23.287 24.4838 23.3533 24.54 23.4062C24.5962 23.4592 24.6649 23.4972 24.7396 23.5168L25.9159 23.8426C26.0052 23.8662 26.0854 23.9159 26.1463 23.9853C26.2073 24.0547 26.2461 24.1407 26.258 24.2323ZM23.0081 25.429C23.0084 24.27 22.6068 23.1467 21.8717 22.2507C21.1367 21.3546 20.1136 20.7411 18.977 20.5148C17.8403 20.2885 16.6603 20.4633 15.6381 21.0095C14.6158 21.5556 13.8146 22.4394 13.371 23.5101C12.9273 24.5808 12.8686 25.7722 13.205 26.8814C13.5413 27.9905 14.2518 28.9487 15.2154 29.5926C16.1791 30.2366 17.3362 30.5265 18.4896 30.4129C19.643 30.2994 20.7213 29.7894 21.5409 28.9698C22.0065 28.5053 22.3757 27.9533 22.6275 27.3457C22.8793 26.7381 23.0086 26.0867 23.0081 25.429ZM18 21.4352C17.0758 21.4353 16.1803 21.7559 15.4659 22.3423C14.7516 22.9287 14.2627 23.7446 14.0825 24.651C13.9022 25.5575 14.0419 26.4984 14.4776 27.3134C14.9133 28.1285 15.6181 28.7672 16.472 29.1209C17.3258 29.4745 18.2759 29.5212 19.1603 29.2529C20.0447 28.9846 20.8087 28.418 21.3222 27.6496C21.8357 26.8812 22.0668 25.9585 21.9763 25.0387C21.8858 24.119 21.4792 23.2591 20.8257 22.6055C20.4553 22.2336 20.0149 21.9387 19.5299 21.7378C19.0449 21.5369 18.525 21.4341 18 21.4352Z" fill="#1D6C77"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_3787_540">
                                    <rect width="36" height="36" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <div class="card-content">
                           <h4>Employee Management</h4>
                           <p>Efficiently streamline all aspects of employee management with our intuitive tools.</p>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="col-md-6 col-lg-4">
                  <div class="service-card-five">
                     <!-- <span class="service-card-border-right_bottom-to-top"></span> -->
                     <span class="service-card-border-right_top-to-bottom"></span>
                     <!-- <span class="service-card-border-bottom_right-to-left"></span> -->
                     <!-- <span class="service-card-border-bottom_left-to-right"></span> -->
                     <!-- <span class="service-card-border-left_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-left_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-center"></span> -->
                     <div class="service-card-wrapper">
                        <div class="card-thumb d-flex justify-content-center align-items-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_3787_540)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2726 18.0336C11.8925 17.6505 11.4496 17.3351 10.9632 17.1012C11.5145 14.8943 13.1435 13.1587 15.457 13.1587H20.5453C22.8586 13.1587 24.4858 14.8943 25.0391 17.1012C24.5527 17.3351 24.1099 17.6505 23.7297 18.0336C23.6867 18.0008 23.6415 17.968 23.5985 17.9351C23.3675 17.7617 23.0909 17.6594 22.8026 17.6409C22.5144 17.6223 22.227 17.6883 21.9756 17.8307L21.1539 18.2958C21.0433 18.2465 20.9289 18.1995 20.8158 18.1544L20.5637 17.2446C20.4876 16.9657 20.3313 16.7153 20.1143 16.5245C19.8972 16.3336 19.6288 16.2106 19.3425 16.1709C18.453 16.0418 17.5496 16.0418 16.6601 16.1709C16.3738 16.2107 16.1055 16.3336 15.8884 16.5245C15.6713 16.7154 15.515 16.9657 15.4388 17.2446L15.1868 18.1544C15.0721 18.1995 14.9594 18.2466 14.8466 18.2958L14.0249 17.8307C13.7736 17.6883 13.4861 17.6223 13.1979 17.6409C12.9096 17.6594 12.633 17.7617 12.402 17.9351L12.2726 18.0336ZM18 11.548C18.9216 11.548 19.8225 11.2747 20.5888 10.7627C21.3551 10.2507 21.9524 9.52293 22.3051 8.67148C22.6577 7.82002 22.75 6.8831 22.5702 5.9792C22.3904 5.07529 21.9466 4.245 21.295 3.59333C20.6433 2.94165 19.813 2.49785 18.9091 2.31805C18.0052 2.13826 17.0683 2.23053 16.2168 2.58322C15.3653 2.93591 14.6376 3.53316 14.1256 4.29945C13.6136 5.06574 13.3403 5.96666 13.3403 6.88827C13.3423 8.12349 13.8339 9.30754 14.7073 10.181C15.5807 11.0544 16.7648 11.546 18 11.548ZM29.2621 16.2713C30.0601 16.2713 30.8402 16.0347 31.5037 15.5913C32.1673 15.148 32.6844 14.5178 32.9898 13.7806C33.2952 13.0433 33.3751 12.232 33.2194 11.4493C33.0637 10.6667 32.6794 9.94773 32.1151 9.38345C31.5508 8.81917 30.8319 8.4349 30.0492 8.27922C29.2665 8.12355 28.4553 8.20346 27.718 8.50886C26.9807 8.81425 26.3506 9.33142 25.9073 9.99495C25.4639 10.6585 25.2273 11.4386 25.2273 12.2366C25.2294 13.306 25.6551 14.3311 26.4113 15.0873C27.1676 15.8435 28.1926 16.2693 29.2621 16.2713ZM35.9833 25.2179L35.473 21.6729C35.1575 19.4862 33.6718 17.6651 31.4652 17.6651H27.0593C26.1023 17.6593 25.1815 18.0303 24.4958 18.6979C24.8585 19.0486 25.1929 19.4275 25.4957 19.831C25.669 20.0622 25.7709 20.3389 25.7891 20.6272C25.8073 20.9155 25.741 21.2028 25.5982 21.4539L25.1351 22.275C25.1843 22.3875 25.2314 22.5005 25.2745 22.6152L26.1863 22.8672C26.4651 22.9437 26.7153 23.1002 26.9061 23.3174C27.097 23.5345 27.2201 23.8028 27.2602 24.0891C27.3855 24.9677 27.3868 25.8596 27.2642 26.7386H34.7414C35.5776 26.7383 36.1021 26.0478 35.9833 25.2179ZM10.7256 22.6155C10.7706 22.5007 10.8177 22.388 10.867 22.2753L10.4018 21.4536C10.2594 21.2022 10.1934 20.9148 10.212 20.6265C10.2305 20.3383 10.3328 20.0617 10.5062 19.8307C10.8078 19.4267 11.1416 19.0478 11.5042 18.6975C10.8189 18.0293 9.89786 17.6582 8.94074 17.6647H4.53714C2.32813 17.6647 0.842499 19.4864 0.528976 21.6729L0.0166788 25.2179C-0.102149 26.0476 0.424491 26.7383 1.26051 26.7383H8.73789C8.61321 25.8595 8.61458 24.9673 8.74197 24.0888C8.7818 23.8025 8.90476 23.5342 9.09563 23.3171C9.28649 23.1 9.53686 22.9437 9.81571 22.8675L10.7256 22.6155ZM6.73792 16.2713C7.53602 16.2717 8.31631 16.0354 8.98011 15.5923C9.6439 15.1492 10.1614 14.5192 10.4671 13.782C10.7728 13.0447 10.8529 12.2334 10.6975 11.4506C10.542 10.6678 10.1579 9.94865 9.5937 9.38417C9.0295 8.81969 8.31056 8.43522 7.52782 8.27937C6.74508 8.12353 5.93371 8.20333 5.19633 8.50866C4.45894 8.814 3.82868 9.33116 3.38524 9.99473C2.94181 10.6583 2.70513 11.4385 2.70515 12.2366C2.70721 13.3057 3.13269 14.3305 3.88848 15.0866C4.64427 15.8428 5.66882 16.2687 6.73792 16.2713ZM26.258 24.2323C26.3728 25.0259 26.3728 25.832 26.258 26.6256C26.2458 26.7173 26.2068 26.8033 26.146 26.8729C26.0851 26.9426 26.0051 26.9927 25.9159 27.017L24.7396 27.3428C24.665 27.3619 24.5963 27.3995 24.5401 27.4522C24.4839 27.5049 24.4419 27.5709 24.4179 27.6441C24.329 27.9016 24.2243 28.1535 24.1044 28.3981C24.0692 28.4671 24.0521 28.5439 24.0545 28.6212C24.057 28.6986 24.079 28.7741 24.1185 28.8407L24.7189 29.9025C24.7653 29.9826 24.7867 30.0747 24.7804 30.167C24.7742 30.2594 24.7405 30.3478 24.6837 30.4209C24.2045 31.0641 23.6343 31.6342 22.9911 32.1134C22.918 32.1702 22.8297 32.2039 22.7373 32.2102C22.645 32.2164 22.5528 32.195 22.4727 32.1486L21.411 31.5462C21.3445 31.5075 21.2693 31.486 21.1923 31.4839C21.1154 31.4818 21.0391 31.4989 20.9705 31.5339C20.7258 31.6532 20.474 31.7572 20.2164 31.8453C20.1429 31.8695 20.0766 31.9118 20.0236 31.9684C19.9706 32.0249 19.9326 32.0937 19.9131 32.1687L19.5873 33.3429C19.5634 33.4326 19.5135 33.5132 19.4438 33.5745C19.3742 33.6359 19.2879 33.6751 19.1959 33.6875C18.4021 33.8001 17.5963 33.8001 16.8025 33.6875C16.7106 33.6755 16.6245 33.6362 16.5551 33.5748C16.4857 33.5134 16.4363 33.4327 16.4132 33.3429L16.0874 32.1687C16.0679 32.094 16.0299 32.0253 15.9769 31.9691C15.9239 31.9129 15.8576 31.8709 15.7841 31.847C15.5268 31.7573 15.275 31.6527 15.03 31.5335C14.961 31.4986 14.8844 31.4814 14.8071 31.4835C14.7299 31.4857 14.6543 31.5071 14.5874 31.5458L13.5257 32.1482C13.4456 32.1946 13.3534 32.216 13.2611 32.2098C13.1687 32.2035 13.0803 32.1698 13.0072 32.1131C12.3645 31.6333 11.7944 31.0632 11.3146 30.4205C11.2586 30.347 11.2257 30.2585 11.2198 30.1663C11.214 30.074 11.2356 29.9821 11.2819 29.9021L11.8823 28.8404C11.9212 28.774 11.9429 28.6989 11.9454 28.6219C11.9478 28.5449 11.931 28.4686 11.8963 28.3998C11.7767 28.1543 11.672 27.9018 11.5828 27.6437C11.5585 27.5707 11.5164 27.5048 11.4602 27.4522C11.404 27.3996 11.3355 27.3619 11.2611 27.3425L10.0849 27.0167C9.99546 26.9927 9.9152 26.9427 9.85427 26.873C9.79335 26.8033 9.7545 26.7171 9.74266 26.6253C9.6279 25.8316 9.6279 25.0256 9.74266 24.2319C9.75424 24.1402 9.79303 24.0541 9.85403 23.9847C9.91503 23.9153 9.99544 23.8658 10.0849 23.8426L11.2611 23.5168C11.3357 23.4969 11.4041 23.4588 11.4603 23.4059C11.5165 23.3529 11.5586 23.2868 11.5828 23.2135C11.6724 22.9562 11.7771 22.7044 11.8963 22.4594C11.931 22.3902 11.9479 22.3135 11.9455 22.2361C11.943 22.1588 11.9213 22.0833 11.8823 22.0164L11.2819 20.9547C11.2356 20.8747 11.214 20.7828 11.2198 20.6905C11.2257 20.5983 11.2586 20.5098 11.3146 20.4362C11.795 19.794 12.365 19.224 13.0072 18.7437C13.0808 18.6877 13.1692 18.6547 13.2615 18.6489C13.3537 18.6431 13.4456 18.6646 13.5257 18.7109L14.5874 19.3112C14.6542 19.3503 14.7296 19.372 14.8069 19.3745C14.8842 19.377 14.9609 19.3602 15.03 19.3256C15.275 19.2064 15.5268 19.1017 15.7841 19.0121C15.8574 18.9879 15.9235 18.9458 15.9765 18.8896C16.0294 18.8335 16.0675 18.765 16.0874 18.6904L16.4132 17.5142C16.4364 17.4247 16.486 17.3443 16.5554 17.2833C16.6248 17.2223 16.7109 17.1835 16.8025 17.172C17.5962 17.0572 18.4022 17.0572 19.1959 17.172C19.2877 17.1838 19.3739 17.2227 19.4436 17.2836C19.5133 17.3445 19.5633 17.4248 19.5873 17.5142L19.9131 18.6904C19.9326 18.7651 19.9706 18.8338 20.0236 18.89C20.0766 18.9463 20.1429 18.9882 20.2164 19.0121C20.4737 19.1017 20.7255 19.2064 20.9705 19.3256C21.0393 19.3602 21.1156 19.377 21.1926 19.3745C21.2695 19.372 21.3446 19.3502 21.411 19.3112L22.4727 18.7109C22.5527 18.6646 22.6447 18.643 22.7369 18.6489C22.8291 18.6547 22.9176 18.6877 22.9911 18.7437C23.6339 19.2234 24.2039 19.7935 24.6837 20.4362C24.7405 20.5093 24.7741 20.5977 24.7804 20.6901C24.7867 20.7825 24.7652 20.8746 24.7189 20.9547L24.1185 22.0164C24.079 22.0831 24.0569 22.1586 24.0545 22.2361C24.052 22.3136 24.0692 22.3904 24.1044 22.4594C24.2236 22.7044 24.3283 22.9562 24.4179 23.2135C24.4418 23.287 24.4838 23.3533 24.54 23.4062C24.5962 23.4592 24.6649 23.4972 24.7396 23.5168L25.9159 23.8426C26.0052 23.8662 26.0854 23.9159 26.1463 23.9853C26.2073 24.0547 26.2461 24.1407 26.258 24.2323ZM23.0081 25.429C23.0084 24.27 22.6068 23.1467 21.8717 22.2507C21.1367 21.3546 20.1136 20.7411 18.977 20.5148C17.8403 20.2885 16.6603 20.4633 15.6381 21.0095C14.6158 21.5556 13.8146 22.4394 13.371 23.5101C12.9273 24.5808 12.8686 25.7722 13.205 26.8814C13.5413 27.9905 14.2518 28.9487 15.2154 29.5926C16.1791 30.2366 17.3362 30.5265 18.4896 30.4129C19.643 30.2994 20.7213 29.7894 21.5409 28.9698C22.0065 28.5053 22.3757 27.9533 22.6275 27.3457C22.8793 26.7381 23.0086 26.0867 23.0081 25.429ZM18 21.4352C17.0758 21.4353 16.1803 21.7559 15.4659 22.3423C14.7516 22.9287 14.2627 23.7446 14.0825 24.651C13.9022 25.5575 14.0419 26.4984 14.4776 27.3134C14.9133 28.1285 15.6181 28.7672 16.472 29.1209C17.3258 29.4745 18.2759 29.5212 19.1603 29.2529C20.0447 28.9846 20.8087 28.418 21.3222 27.6496C21.8357 26.8812 22.0668 25.9585 21.9763 25.0387C21.8858 24.119 21.4792 23.2591 20.8257 22.6055C20.4553 22.2336 20.0149 21.9387 19.5299 21.7378C19.0449 21.5369 18.525 21.4341 18 21.4352Z" fill="#1D6C77"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_3787_540">
                                    <rect width="36" height="36" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <div class="card-content">
                           <h4>Employee Management</h4>
                           <p>Efficiently streamline all aspects of employee management with our intuitive tools.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="service-card-five">
                     <!-- <span class="service-card-border-right_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-right_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-bottom_right-to-left"></span> -->
                     <!-- <span class="service-card-border-bottom_left-to-right"></span> -->
                     <!-- <span class="service-card-border-left_bottom-to-top"></span> -->
                     <!-- <span class="service-card-border-left_top-to-bottom"></span> -->
                     <!-- <span class="service-card-border-center"></span> -->
                     <div class="service-card-wrapper">
                        <div class="card-thumb d-flex justify-content-center align-items-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_3787_540)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2726 18.0336C11.8925 17.6505 11.4496 17.3351 10.9632 17.1012C11.5145 14.8943 13.1435 13.1587 15.457 13.1587H20.5453C22.8586 13.1587 24.4858 14.8943 25.0391 17.1012C24.5527 17.3351 24.1099 17.6505 23.7297 18.0336C23.6867 18.0008 23.6415 17.968 23.5985 17.9351C23.3675 17.7617 23.0909 17.6594 22.8026 17.6409C22.5144 17.6223 22.227 17.6883 21.9756 17.8307L21.1539 18.2958C21.0433 18.2465 20.9289 18.1995 20.8158 18.1544L20.5637 17.2446C20.4876 16.9657 20.3313 16.7153 20.1143 16.5245C19.8972 16.3336 19.6288 16.2106 19.3425 16.1709C18.453 16.0418 17.5496 16.0418 16.6601 16.1709C16.3738 16.2107 16.1055 16.3336 15.8884 16.5245C15.6713 16.7154 15.515 16.9657 15.4388 17.2446L15.1868 18.1544C15.0721 18.1995 14.9594 18.2466 14.8466 18.2958L14.0249 17.8307C13.7736 17.6883 13.4861 17.6223 13.1979 17.6409C12.9096 17.6594 12.633 17.7617 12.402 17.9351L12.2726 18.0336ZM18 11.548C18.9216 11.548 19.8225 11.2747 20.5888 10.7627C21.3551 10.2507 21.9524 9.52293 22.3051 8.67148C22.6577 7.82002 22.75 6.8831 22.5702 5.9792C22.3904 5.07529 21.9466 4.245 21.295 3.59333C20.6433 2.94165 19.813 2.49785 18.9091 2.31805C18.0052 2.13826 17.0683 2.23053 16.2168 2.58322C15.3653 2.93591 14.6376 3.53316 14.1256 4.29945C13.6136 5.06574 13.3403 5.96666 13.3403 6.88827C13.3423 8.12349 13.8339 9.30754 14.7073 10.181C15.5807 11.0544 16.7648 11.546 18 11.548ZM29.2621 16.2713C30.0601 16.2713 30.8402 16.0347 31.5037 15.5913C32.1673 15.148 32.6844 14.5178 32.9898 13.7806C33.2952 13.0433 33.3751 12.232 33.2194 11.4493C33.0637 10.6667 32.6794 9.94773 32.1151 9.38345C31.5508 8.81917 30.8319 8.4349 30.0492 8.27922C29.2665 8.12355 28.4553 8.20346 27.718 8.50886C26.9807 8.81425 26.3506 9.33142 25.9073 9.99495C25.4639 10.6585 25.2273 11.4386 25.2273 12.2366C25.2294 13.306 25.6551 14.3311 26.4113 15.0873C27.1676 15.8435 28.1926 16.2693 29.2621 16.2713ZM35.9833 25.2179L35.473 21.6729C35.1575 19.4862 33.6718 17.6651 31.4652 17.6651H27.0593C26.1023 17.6593 25.1815 18.0303 24.4958 18.6979C24.8585 19.0486 25.1929 19.4275 25.4957 19.831C25.669 20.0622 25.7709 20.3389 25.7891 20.6272C25.8073 20.9155 25.741 21.2028 25.5982 21.4539L25.1351 22.275C25.1843 22.3875 25.2314 22.5005 25.2745 22.6152L26.1863 22.8672C26.4651 22.9437 26.7153 23.1002 26.9061 23.3174C27.097 23.5345 27.2201 23.8028 27.2602 24.0891C27.3855 24.9677 27.3868 25.8596 27.2642 26.7386H34.7414C35.5776 26.7383 36.1021 26.0478 35.9833 25.2179ZM10.7256 22.6155C10.7706 22.5007 10.8177 22.388 10.867 22.2753L10.4018 21.4536C10.2594 21.2022 10.1934 20.9148 10.212 20.6265C10.2305 20.3383 10.3328 20.0617 10.5062 19.8307C10.8078 19.4267 11.1416 19.0478 11.5042 18.6975C10.8189 18.0293 9.89786 17.6582 8.94074 17.6647H4.53714C2.32813 17.6647 0.842499 19.4864 0.528976 21.6729L0.0166788 25.2179C-0.102149 26.0476 0.424491 26.7383 1.26051 26.7383H8.73789C8.61321 25.8595 8.61458 24.9673 8.74197 24.0888C8.7818 23.8025 8.90476 23.5342 9.09563 23.3171C9.28649 23.1 9.53686 22.9437 9.81571 22.8675L10.7256 22.6155ZM6.73792 16.2713C7.53602 16.2717 8.31631 16.0354 8.98011 15.5923C9.6439 15.1492 10.1614 14.5192 10.4671 13.782C10.7728 13.0447 10.8529 12.2334 10.6975 11.4506C10.542 10.6678 10.1579 9.94865 9.5937 9.38417C9.0295 8.81969 8.31056 8.43522 7.52782 8.27937C6.74508 8.12353 5.93371 8.20333 5.19633 8.50866C4.45894 8.814 3.82868 9.33116 3.38524 9.99473C2.94181 10.6583 2.70513 11.4385 2.70515 12.2366C2.70721 13.3057 3.13269 14.3305 3.88848 15.0866C4.64427 15.8428 5.66882 16.2687 6.73792 16.2713ZM26.258 24.2323C26.3728 25.0259 26.3728 25.832 26.258 26.6256C26.2458 26.7173 26.2068 26.8033 26.146 26.8729C26.0851 26.9426 26.0051 26.9927 25.9159 27.017L24.7396 27.3428C24.665 27.3619 24.5963 27.3995 24.5401 27.4522C24.4839 27.5049 24.4419 27.5709 24.4179 27.6441C24.329 27.9016 24.2243 28.1535 24.1044 28.3981C24.0692 28.4671 24.0521 28.5439 24.0545 28.6212C24.057 28.6986 24.079 28.7741 24.1185 28.8407L24.7189 29.9025C24.7653 29.9826 24.7867 30.0747 24.7804 30.167C24.7742 30.2594 24.7405 30.3478 24.6837 30.4209C24.2045 31.0641 23.6343 31.6342 22.9911 32.1134C22.918 32.1702 22.8297 32.2039 22.7373 32.2102C22.645 32.2164 22.5528 32.195 22.4727 32.1486L21.411 31.5462C21.3445 31.5075 21.2693 31.486 21.1923 31.4839C21.1154 31.4818 21.0391 31.4989 20.9705 31.5339C20.7258 31.6532 20.474 31.7572 20.2164 31.8453C20.1429 31.8695 20.0766 31.9118 20.0236 31.9684C19.9706 32.0249 19.9326 32.0937 19.9131 32.1687L19.5873 33.3429C19.5634 33.4326 19.5135 33.5132 19.4438 33.5745C19.3742 33.6359 19.2879 33.6751 19.1959 33.6875C18.4021 33.8001 17.5963 33.8001 16.8025 33.6875C16.7106 33.6755 16.6245 33.6362 16.5551 33.5748C16.4857 33.5134 16.4363 33.4327 16.4132 33.3429L16.0874 32.1687C16.0679 32.094 16.0299 32.0253 15.9769 31.9691C15.9239 31.9129 15.8576 31.8709 15.7841 31.847C15.5268 31.7573 15.275 31.6527 15.03 31.5335C14.961 31.4986 14.8844 31.4814 14.8071 31.4835C14.7299 31.4857 14.6543 31.5071 14.5874 31.5458L13.5257 32.1482C13.4456 32.1946 13.3534 32.216 13.2611 32.2098C13.1687 32.2035 13.0803 32.1698 13.0072 32.1131C12.3645 31.6333 11.7944 31.0632 11.3146 30.4205C11.2586 30.347 11.2257 30.2585 11.2198 30.1663C11.214 30.074 11.2356 29.9821 11.2819 29.9021L11.8823 28.8404C11.9212 28.774 11.9429 28.6989 11.9454 28.6219C11.9478 28.5449 11.931 28.4686 11.8963 28.3998C11.7767 28.1543 11.672 27.9018 11.5828 27.6437C11.5585 27.5707 11.5164 27.5048 11.4602 27.4522C11.404 27.3996 11.3355 27.3619 11.2611 27.3425L10.0849 27.0167C9.99546 26.9927 9.9152 26.9427 9.85427 26.873C9.79335 26.8033 9.7545 26.7171 9.74266 26.6253C9.6279 25.8316 9.6279 25.0256 9.74266 24.2319C9.75424 24.1402 9.79303 24.0541 9.85403 23.9847C9.91503 23.9153 9.99544 23.8658 10.0849 23.8426L11.2611 23.5168C11.3357 23.4969 11.4041 23.4588 11.4603 23.4059C11.5165 23.3529 11.5586 23.2868 11.5828 23.2135C11.6724 22.9562 11.7771 22.7044 11.8963 22.4594C11.931 22.3902 11.9479 22.3135 11.9455 22.2361C11.943 22.1588 11.9213 22.0833 11.8823 22.0164L11.2819 20.9547C11.2356 20.8747 11.214 20.7828 11.2198 20.6905C11.2257 20.5983 11.2586 20.5098 11.3146 20.4362C11.795 19.794 12.365 19.224 13.0072 18.7437C13.0808 18.6877 13.1692 18.6547 13.2615 18.6489C13.3537 18.6431 13.4456 18.6646 13.5257 18.7109L14.5874 19.3112C14.6542 19.3503 14.7296 19.372 14.8069 19.3745C14.8842 19.377 14.9609 19.3602 15.03 19.3256C15.275 19.2064 15.5268 19.1017 15.7841 19.0121C15.8574 18.9879 15.9235 18.9458 15.9765 18.8896C16.0294 18.8335 16.0675 18.765 16.0874 18.6904L16.4132 17.5142C16.4364 17.4247 16.486 17.3443 16.5554 17.2833C16.6248 17.2223 16.7109 17.1835 16.8025 17.172C17.5962 17.0572 18.4022 17.0572 19.1959 17.172C19.2877 17.1838 19.3739 17.2227 19.4436 17.2836C19.5133 17.3445 19.5633 17.4248 19.5873 17.5142L19.9131 18.6904C19.9326 18.7651 19.9706 18.8338 20.0236 18.89C20.0766 18.9463 20.1429 18.9882 20.2164 19.0121C20.4737 19.1017 20.7255 19.2064 20.9705 19.3256C21.0393 19.3602 21.1156 19.377 21.1926 19.3745C21.2695 19.372 21.3446 19.3502 21.411 19.3112L22.4727 18.7109C22.5527 18.6646 22.6447 18.643 22.7369 18.6489C22.8291 18.6547 22.9176 18.6877 22.9911 18.7437C23.6339 19.2234 24.2039 19.7935 24.6837 20.4362C24.7405 20.5093 24.7741 20.5977 24.7804 20.6901C24.7867 20.7825 24.7652 20.8746 24.7189 20.9547L24.1185 22.0164C24.079 22.0831 24.0569 22.1586 24.0545 22.2361C24.052 22.3136 24.0692 22.3904 24.1044 22.4594C24.2236 22.7044 24.3283 22.9562 24.4179 23.2135C24.4418 23.287 24.4838 23.3533 24.54 23.4062C24.5962 23.4592 24.6649 23.4972 24.7396 23.5168L25.9159 23.8426C26.0052 23.8662 26.0854 23.9159 26.1463 23.9853C26.2073 24.0547 26.2461 24.1407 26.258 24.2323ZM23.0081 25.429C23.0084 24.27 22.6068 23.1467 21.8717 22.2507C21.1367 21.3546 20.1136 20.7411 18.977 20.5148C17.8403 20.2885 16.6603 20.4633 15.6381 21.0095C14.6158 21.5556 13.8146 22.4394 13.371 23.5101C12.9273 24.5808 12.8686 25.7722 13.205 26.8814C13.5413 27.9905 14.2518 28.9487 15.2154 29.5926C16.1791 30.2366 17.3362 30.5265 18.4896 30.4129C19.643 30.2994 20.7213 29.7894 21.5409 28.9698C22.0065 28.5053 22.3757 27.9533 22.6275 27.3457C22.8793 26.7381 23.0086 26.0867 23.0081 25.429ZM18 21.4352C17.0758 21.4353 16.1803 21.7559 15.4659 22.3423C14.7516 22.9287 14.2627 23.7446 14.0825 24.651C13.9022 25.5575 14.0419 26.4984 14.4776 27.3134C14.9133 28.1285 15.6181 28.7672 16.472 29.1209C17.3258 29.4745 18.2759 29.5212 19.1603 29.2529C20.0447 28.9846 20.8087 28.418 21.3222 27.6496C21.8357 26.8812 22.0668 25.9585 21.9763 25.0387C21.8858 24.119 21.4792 23.2591 20.8257 22.6055C20.4553 22.2336 20.0149 21.9387 19.5299 21.7378C19.0449 21.5369 18.525 21.4341 18 21.4352Z" fill="#1D6C77"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_3787_540">
                                    <rect width="36" height="36" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <div class="card-content">
                           <h4>Employee Management</h4>
                           <p>Efficiently streamline all aspects of employee management with our intuitive tools.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Services End -->



      <!-- Hero Start -->
      <section class="d-non hero-style-six position-relative overflow-hidden">
         <div class="container">
            <div class="row g-5 g-xl-0">
               <div class="col-lg-6 ">
                  <div class="section-content">
                     <span class="camel-title mb-3">
                        <svg class='mr-1' xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                           <path d="M13.6854 5.64667L9.68538 1.64667C9.59138 1.55267 9.4647 1.5 9.33203 1.5H5.33203C3.72003 1.5 2.83203 2.388 2.83203 4V12C2.83203 13.612 3.72003 14.5 5.33203 14.5H11.332C12.944 14.5 13.832 13.612 13.832 12V6C13.832 5.86733 13.7794 5.74 13.6854 5.64667ZM9.83203 3.20734L12.1247 5.5H11.332C10.2807 5.5 9.83203 5.05133 9.83203 4V3.20734ZM11.332 13.5H5.33203C4.2807 13.5 3.83203 13.0513 3.83203 12V4C3.83203 2.94867 4.2807 2.5 5.33203 2.5H8.83203V4C8.83203 5.612 9.72003 6.5 11.332 6.5H12.832V12C12.832 13.0513 12.3834 13.5 11.332 13.5ZM11.1654 8C11.1654 8.276 10.9414 8.5 10.6654 8.5H5.9987C5.7227 8.5 5.4987 8.276 5.4987 8C5.4987 7.724 5.7227 7.5 5.9987 7.5H10.6654C10.9414 7.5 11.1654 7.724 11.1654 8ZM9.16536 10.6667C9.16536 10.9427 8.94136 11.1667 8.66536 11.1667H5.9987C5.7227 11.1667 5.4987 10.9427 5.4987 10.6667C5.4987 10.3907 5.7227 10.1667 5.9987 10.1667H8.66536C8.94136 10.1667 9.16536 10.3907 9.16536 10.6667Z" fill="white"/>
                        </svg>
                        Product Management
                     </span>
                     <h1 class="hero-title">Easily Manage Your Product with SaaSto</h1>
                     <p class='pt-4'>SaaSto streamlines product management, making it effortless and efficient for your business needs.</p>
                     <div class="hero-buttons d-flex flex-column flex-sm-row justify-content-start align-items-start align-items-md-center pt-5">
                        <a href="#" class="btn-fill-rounded">Get Started
                        </a>
                        <a href="#" class="btn-fill-rounded btn-fill-rounded-glossy">Contact Us
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 overflow-lg-hidden">
                  <div class="section-thumb">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 partners">
                  <div class="title">
                     <p>Our Trusted Clients and Partners</p>
                  </div>
                  <div class="swiper partners__slider">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <svg xmlns="http://www.w3.org/2000/svg" width="178" height="64" viewBox="0 0 178 64" fill="none">
                              <g clip-path="url(#clip0_5110_990)">
                                 <path d="M19.5133 8H0V54.6667L19.5133 8Z" fill="#B2BACD"/>
                                 <path d="M33.2422 8H52.7301V54.6667L33.2422 8Z" fill="#B2BACD"/>
                                 <path d="M26.3776 25.2031L38.7975 54.6701H30.6489L26.9369 45.2885H17.8477L26.3776 25.2031Z" fill="#B2BACD"/>
                                 <path d="M84.5635 37.6759L86.8644 44.2736C86.9407 44.4388 87.055 44.5151 87.2585 44.5151H91.6823C91.9239 44.5151 91.962 44.4007 91.9239 44.1592L82.7837 18.7728C82.7456 18.5694 82.7075 18.5312 82.5041 18.5312H77.0124C76.8598 18.5312 76.7708 18.6457 76.7708 18.8109C76.6946 20.1457 76.5802 20.5525 76.4149 20.9466L68.2664 44.121C68.2282 44.4007 68.3172 44.5151 68.546 44.5151H72.4995C72.7411 44.5151 72.8555 44.4388 72.9445 44.1973L75.1183 37.6759H84.5635ZM76.3768 33.3664C77.5717 29.7562 79.148 25.1289 79.7837 22.4848H79.8218C80.61 25.256 82.4659 30.7477 83.305 33.3664H76.3768Z" fill="#B2BACD"/>
                                 <path d="M103.674 44.9111C106.051 44.9111 108.581 44.4789 111.148 43.3729C111.352 43.2966 111.39 43.2076 111.39 43.017C111.314 42.3051 111.225 41.2754 111.225 40.4872V16.5882C111.225 16.4357 111.225 16.3594 111.034 16.3594H106.725C106.559 16.3594 106.483 16.4357 106.483 16.639V24.7367C105.809 24.6605 105.339 24.6223 104.78 24.6223C97.826 24.6223 93.5547 29.2115 93.5547 34.9447C93.5547 41.5932 97.9404 44.9111 103.674 44.9111ZM106.483 40.4872C105.771 40.716 104.983 40.805 104.182 40.805C101.029 40.805 98.4489 39.0253 98.4489 34.7032C98.4489 30.8768 101.106 28.614 104.627 28.614C105.339 28.614 105.962 28.6903 106.483 28.8937V40.4872Z" fill="#B2BACD"/>
                                 <path d="M125.142 24.625C119.205 24.625 115.531 29.176 115.531 34.7948C115.531 39.8161 118.455 44.9138 125.053 44.9138C130.633 44.9138 134.549 40.8077 134.549 34.6677C134.549 29.2523 131.231 24.625 125.142 24.625ZM124.9 28.6166C128.256 28.6166 129.68 31.5023 129.68 34.7948C129.68 38.8627 127.582 40.884 125.142 40.884C122.129 40.884 120.349 38.3542 120.349 34.7058C120.349 30.9557 122.243 28.6166 124.9 28.6166Z" fill="#B2BACD"/>
                                 <path d="M139.002 16.3594C138.837 16.3594 138.723 16.4357 138.723 16.639V43.6907C138.723 43.8051 138.837 44.0085 139.002 44.0467C140.896 44.6314 142.88 44.9111 144.926 44.9111C150.787 44.9111 156.482 41.2754 156.482 33.9531C156.482 28.6521 152.846 24.6223 147.151 24.6223C145.842 24.6223 144.621 24.8257 143.553 25.1817L143.502 16.6772C143.502 16.3975 143.426 16.3594 143.147 16.3594H139.002ZM151.613 34.4362C151.613 38.8219 148.613 40.8813 145.371 40.8813C144.697 40.8813 144.1 40.8432 143.553 40.6779V29.1352C144.176 28.8937 144.926 28.6903 146.312 28.6903C149.439 28.6903 151.613 30.6734 151.613 34.4362Z" fill="#B2BACD"/>
                                 <path d="M172.563 35.8626C174.495 35.8626 176.084 35.8245 176.631 35.6974C176.834 35.6592 176.911 35.583 176.949 35.4177C177.063 34.9855 177.114 34.0829 177.114 32.9769C177.114 29.2141 174.851 24.625 169.004 24.625C163.029 24.625 159.711 29.4938 159.711 34.9855C159.711 39.8543 162.279 44.9138 169.474 44.9138C172.169 44.9138 173.911 44.4815 175.411 43.7696C175.563 43.6934 175.639 43.5663 175.639 43.3374V40.045C175.639 39.8543 175.525 39.8161 175.411 39.8924C173.911 40.528 172.283 40.8458 170.504 40.8458C166.474 40.8458 164.643 38.6212 164.529 35.8626H172.563ZM164.529 32.4557C164.847 30.5235 166.067 28.426 168.8 28.426C171.813 28.426 172.601 30.9557 172.601 32.0998C172.601 32.1379 172.601 32.3032 172.601 32.4176C172.436 32.4557 171.927 32.4557 170.427 32.4557H164.529Z" fill="#B2BACD"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_5110_990">
                                    <rect width="177.333" height="64" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </div> 
                        <div class="swiper-slide">
                           <svg xmlns="http://www.w3.org/2000/svg" width="229" height="64" viewBox="0 0 229 64" fill="none">
                           <g clip-path="url(#clip0_5110_999)">
                              <path d="M48.4812 14.4272C44.8019 12.7057 40.8677 11.4546 36.7546 10.7422C36.2495 11.6554 35.6594 12.8838 35.2525 13.861C30.8802 13.2034 26.5481 13.2034 22.2562 13.861C21.8494 12.8838 21.2459 11.6554 20.7362 10.7422C16.6187 11.4546 12.68 12.7103 9.00065 14.4363C1.5793 25.6509 -0.432498 36.587 0.573406 47.3678C5.49563 51.0436 10.2659 53.2765 14.9556 54.7377C16.1135 53.144 17.1462 51.45 18.0359 49.6646C16.3415 49.0208 14.7186 48.2263 13.1852 47.3039C13.592 47.0025 13.99 46.6874 14.3744 46.3632C23.7271 50.7377 33.8889 50.7377 43.1299 46.3632C43.5188 46.6874 43.9167 47.0025 44.319 47.3039C42.7811 48.2308 41.1538 49.0253 39.4594 49.6692C40.3491 51.45 41.3773 53.1486 42.5397 54.7422C47.234 53.281 52.0086 51.0482 56.9308 47.3678C58.1111 34.8701 54.9146 24.0345 48.4812 14.4272ZM19.31 40.7377C16.5025 40.7377 14.2 38.1166 14.2 34.9249C14.2 31.7331 16.4533 29.1075 19.31 29.1075C22.1668 29.1075 24.4692 31.7285 24.42 34.9249C24.4245 38.1166 22.1668 40.7377 19.31 40.7377ZM38.1942 40.7377C35.3867 40.7377 33.0842 38.1166 33.0842 34.9249C33.0842 31.7331 35.3374 29.1075 38.1942 29.1075C41.051 29.1075 43.3534 31.7285 43.3042 34.9249C43.3042 38.1166 41.051 40.7377 38.1942 40.7377Z" fill="#B2BACD"/>
                              <path d="M76.713 21.9669H88.9176C91.8598 21.9669 94.3453 22.4372 96.3844 23.3733C98.418 24.3093 99.9428 25.6153 100.953 27.2865C101.963 28.9578 102.473 30.871 102.473 33.0263C102.473 35.1359 101.945 37.0491 100.89 38.7614C99.8353 40.4783 98.2302 41.8345 96.0712 42.8345C93.9121 43.8345 91.238 44.3367 88.0419 44.3367H76.713V21.9669ZM87.9164 38.6518C89.897 38.6518 91.4219 38.145 92.4855 37.1358C93.5498 36.1221 94.082 34.7432 94.082 32.9943C94.082 31.3733 93.6074 30.081 92.66 29.113C91.7125 28.1449 90.2773 27.6564 88.359 27.6564H84.5411V38.6518H87.9164Z" fill="#B2BACD"/>
                              <path d="M120.745 44.3095C119.055 43.862 117.53 43.2136 116.176 42.3597V37.0538C117.2 37.8619 118.572 38.5287 120.293 39.0538C122.014 39.5743 123.678 39.8346 125.287 39.8346C126.038 39.8346 126.606 39.7341 126.99 39.5332C127.375 39.3323 127.567 39.0903 127.567 38.8118C127.567 38.4921 127.464 38.2273 127.254 38.0126C127.044 37.7981 126.637 37.6199 126.034 37.4693L122.278 36.6062C120.128 36.0949 118.603 35.3871 117.696 34.4784C116.788 33.5743 116.336 32.3871 116.336 30.9168C116.336 29.6793 116.73 28.6063 117.526 27.6885C118.317 26.7707 119.444 26.0629 120.905 25.5651C122.368 25.0629 124.075 24.8118 126.038 24.8118C127.79 24.8118 129.395 25.0035 130.858 25.3871C132.319 25.7707 133.526 26.2592 134.488 26.8574V31.8757C133.504 31.2775 132.377 30.8072 131.09 30.451C129.807 30.0994 128.488 29.9259 127.129 29.9259C125.166 29.9259 124.187 30.2683 124.187 30.9487C124.187 31.2684 124.339 31.5058 124.643 31.6656C124.947 31.8254 125.506 31.9898 126.315 32.1634L129.444 32.7387C131.488 33.0994 133.012 33.7342 134.013 34.6382C135.015 35.5424 135.515 36.8803 135.515 38.6519C135.515 40.5925 134.689 42.1314 133.03 43.2729C131.371 44.4145 129.02 44.9852 125.971 44.9852C124.178 44.9807 122.435 44.757 120.745 44.3095Z" fill="#B2BACD"/>
                              <path d="M142.902 43.638C141.11 42.743 139.755 41.5284 138.852 39.9942C137.949 38.4599 137.493 36.7339 137.493 34.8161C137.493 32.8983 137.963 31.1814 138.901 29.67C139.84 28.1585 141.217 26.9713 143.033 26.1083C144.847 25.2453 147.016 24.8161 149.542 24.8161C152.671 24.8161 155.269 25.4873 157.334 26.8298V32.6791C156.606 32.1677 155.756 31.7521 154.786 31.4325C153.815 31.1129 152.778 30.953 151.67 30.953C149.73 30.953 148.214 31.3138 147.119 32.0398C146.023 32.7658 145.474 33.711 145.474 34.8845C145.474 36.0352 146.005 36.9759 147.069 37.7157C148.134 38.4508 149.676 38.8207 151.701 38.8207C152.743 38.8207 153.771 38.6654 154.786 38.3595C155.796 38.049 156.668 37.67 157.397 37.2224V42.88C155.103 44.2864 152.443 44.9896 149.416 44.9896C146.868 44.9804 144.695 44.533 142.902 43.638Z" fill="#B2BACD"/>
                              <path d="M165.14 43.6383C163.334 42.7434 161.957 41.5196 161.009 39.9625C160.061 38.4055 159.583 36.6703 159.583 34.7525C159.583 32.8347 160.056 31.1224 161.009 29.6201C161.961 28.1178 163.329 26.9397 165.126 26.0858C166.919 25.2319 169.06 24.8073 171.541 24.8073C174.023 24.8073 176.164 25.2319 177.957 26.0858C179.75 26.9397 181.118 28.1087 182.057 29.6018C182.996 31.095 183.465 32.8073 183.465 34.748C183.465 36.6657 182.996 38.4009 182.057 39.958C181.118 41.515 179.745 42.7388 177.939 43.6338C176.133 44.5288 174 44.9762 171.537 44.9762C169.074 44.9762 166.941 44.5333 165.14 43.6383ZM174.649 37.9671C175.409 37.1909 175.793 36.1635 175.793 34.885C175.793 33.6064 175.413 32.5881 174.649 31.8347C173.889 31.0767 172.851 30.6977 171.537 30.6977C170.2 30.6977 169.154 31.0767 168.39 31.8347C167.63 32.5927 167.25 33.6064 167.25 34.885C167.25 36.1635 167.63 37.1909 168.39 37.9671C169.15 38.7434 170.2 39.1361 171.537 39.1361C172.851 39.1315 173.889 38.7434 174.649 37.9671Z" fill="#B2BACD"/>
                              <path d="M202.268 25.9945V32.8986C201.473 32.3643 200.444 32.0995 199.17 32.0995C197.502 32.0995 196.215 32.6155 195.321 33.6474C194.422 34.6794 193.975 36.2867 193.975 38.4602V44.3415H186.308V25.6429H193.819V31.5881C194.234 29.4145 194.91 27.8119 195.839 26.7753C196.765 25.7433 197.963 25.2274 199.421 25.2274C200.525 25.2274 201.473 25.4831 202.268 25.9945Z" fill="#B2BACD"/>
                              <path d="M227.743 21.3276V44.3413H220.075V40.1541C219.427 41.7295 218.444 42.9304 217.12 43.7523C215.797 44.5697 214.16 44.9806 212.22 44.9806C210.486 44.9806 208.975 44.5514 207.682 43.6884C206.391 42.8254 205.394 41.6427 204.692 40.1404C203.995 38.6381 203.641 36.9395 203.641 35.04C203.619 33.0811 203.99 31.3231 204.754 29.766C205.515 28.2089 206.592 26.9943 207.978 26.1221C209.364 25.25 210.946 24.8117 212.721 24.8117C216.374 24.8117 218.824 26.4326 220.075 29.6701V21.3276H227.743ZM218.931 37.8391C219.714 37.0628 220.102 36.0537 220.102 34.8208C220.102 33.629 219.722 32.6564 218.962 31.9121C218.202 31.1679 217.16 30.7934 215.85 30.7934C214.559 30.7934 213.526 31.1724 212.753 31.9304C211.979 32.6884 211.595 33.6701 211.595 34.8847C211.595 36.0994 211.979 37.0902 212.753 37.8573C213.526 38.6244 214.545 39.008 215.819 39.008C217.111 39.0035 218.148 38.6153 218.931 37.8391Z" fill="#B2BACD"/>
                              <path d="M108.934 27.6333C111.045 27.6333 112.757 26.0632 112.757 24.1264C112.757 22.1896 111.045 20.6196 108.934 20.6196C106.822 20.6196 105.111 22.1896 105.111 24.1264C105.111 26.0632 106.822 27.6333 108.934 27.6333Z" fill="#B2BACD"/>
                              <path d="M105.108 30.0491C107.45 31.081 110.356 31.1267 112.752 30.0491V44.4418H105.108V30.0491Z" fill="#B2BACD"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5110_999">
                                 <rect width="228" height="64" fill="white" transform="translate(0.332031)"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </div> 
                        <div class="swiper-slide">
                           <svg xmlns="http://www.w3.org/2000/svg" width="191" height="64" viewBox="0 0 191 64" fill="none">
                           <g clip-path="url(#clip0_5110_1001)">
                              <path d="M71.2818 17.0312H60.7815C60.063 17.0312 59.4519 17.5533 59.3398 18.2626L55.0931 45.1881C55.0086 45.7193 55.4201 46.1984 55.959 46.1984H60.9719C61.6905 46.1984 62.3015 45.6763 62.4136 44.9655L63.559 37.7033C63.6695 36.9924 64.2821 36.4704 64.9992 36.4704H68.3232C75.24 36.4704 79.2319 33.1233 80.2744 26.4906C80.7442 23.5887 80.2943 21.3087 78.9356 19.712C77.4432 17.9586 74.7962 17.0312 71.2818 17.0312ZM72.4932 26.8652C71.919 30.6329 69.0402 30.6329 66.2566 30.6329H64.6721L65.7837 23.5964C65.8497 23.1711 66.2182 22.8579 66.6481 22.8579H67.3743C69.2705 22.8579 71.0592 22.8579 71.9835 23.9388C72.5347 24.5837 72.7036 25.5417 72.4932 26.8652Z" fill="#B2BACD"/>
                              <path d="M102.669 26.7439H97.641C97.2127 26.7439 96.8426 27.0571 96.7766 27.4824L96.554 28.8888L96.2024 28.379C95.1138 26.7992 92.6864 26.271 90.2636 26.271C84.7072 26.271 79.9614 30.4794 79.0371 36.3828C78.5566 39.3276 79.2398 42.1435 80.9103 44.1072C82.4426 45.9128 84.635 46.6651 87.2436 46.6651C91.7207 46.6651 94.2034 43.7863 94.2034 43.7863L93.9792 45.1835C93.8948 45.7178 94.3062 46.1968 94.8421 46.1968H99.3713C100.091 46.1968 100.699 45.6748 100.813 44.9639L103.531 27.7541C103.617 27.2245 103.207 26.7439 102.669 26.7439ZM95.6604 36.5302C95.1752 39.4029 92.8952 41.3313 89.9873 41.3313C88.5272 41.3313 87.3603 40.863 86.611 39.9756C85.8679 39.0943 85.5854 37.8399 85.8219 36.4427C86.2748 33.5946 88.5932 31.6033 91.4566 31.6033C92.8845 31.6033 94.0452 32.0777 94.8098 32.9728C95.576 33.8771 95.88 35.1392 95.6604 36.5302Z" fill="#B2BACD"/>
                              <path d="M129.449 26.7438H124.396C123.914 26.7438 123.461 26.9833 123.188 27.3841L116.219 37.6494L113.265 27.7848C113.079 27.1676 112.509 26.7438 111.864 26.7438H106.899C106.296 26.7438 105.877 27.3334 106.068 27.9015L111.634 44.2346L106.402 51.6212C105.99 52.203 106.405 53.003 107.116 53.003H112.162C112.641 53.003 113.09 52.7696 113.361 52.3765L130.167 28.118C130.57 27.5376 130.157 26.7438 129.449 26.7438Z" fill="#B2BACD"/>
                              <path d="M146.176 17.0251H135.675C134.958 17.0251 134.346 17.5471 134.234 18.2564L129.988 45.1819C129.903 45.7131 130.315 46.1922 130.85 46.1922H136.24C136.74 46.1922 137.168 45.8268 137.247 45.3293L138.452 37.6971C138.563 36.9862 139.175 36.4642 139.892 36.4642H143.215C150.133 36.4642 154.123 33.1171 155.167 26.4844C155.639 23.5826 155.186 21.3026 153.827 19.7058C152.336 17.9524 149.691 17.0251 146.176 17.0251ZM147.388 26.859C146.815 30.6268 143.936 30.6268 141.151 30.6268H139.568L140.681 23.5902C140.747 23.1649 141.113 22.8517 141.544 22.8517H142.27C144.165 22.8517 145.955 22.8517 146.88 23.9326C147.431 24.5775 147.598 25.5355 147.388 26.859Z" fill="#B2BACD"/>
                              <path d="M177.562 26.7377H172.537C172.105 26.7377 171.739 27.0509 171.674 27.4762L171.451 28.8826L171.098 28.3729C170.01 26.793 167.584 26.2648 165.161 26.2648C159.605 26.2648 154.86 30.4732 153.936 36.3766C153.457 39.3215 154.137 42.1373 155.808 44.101C157.343 45.9066 159.532 46.6589 162.141 46.6589C166.618 46.6589 169.101 43.7801 169.101 43.7801L168.877 45.1773C168.792 45.7116 169.204 46.1906 169.743 46.1906H174.27C174.987 46.1906 175.598 45.6686 175.711 44.9577L178.43 27.748C178.513 27.2183 178.101 26.7377 177.562 26.7377ZM170.553 36.524C170.071 39.3967 167.788 41.3251 164.88 41.3251C163.423 41.3251 162.253 40.8568 161.504 39.9694C160.761 39.0881 160.481 37.8337 160.715 36.4365C161.171 33.5884 163.486 31.5971 166.349 31.5971C167.777 31.5971 168.938 32.0715 169.703 32.9666C170.472 33.871 170.776 35.133 170.553 36.524Z" fill="#B2BACD"/>
                              <path d="M183.49 17.7635L179.18 45.1818C179.096 45.7131 179.507 46.1921 180.043 46.1921H184.376C185.096 46.1921 185.707 45.6701 185.818 44.9592L190.067 18.0352C190.152 17.504 189.74 17.0234 189.205 17.0234H184.353C183.925 17.025 183.556 17.3382 183.49 17.7635Z" fill="#B2BACD"/>
                              <path d="M11.4878 51.4317L12.2908 46.3312L10.5021 46.2898H1.96094L7.89661 8.65366C7.91504 8.54005 7.97492 8.43411 8.06243 8.35887C8.14995 8.28364 8.26203 8.24219 8.37872 8.24219H22.7803C27.5614 8.24219 30.8609 9.2371 32.5836 11.2008C33.3912 12.122 33.9055 13.0847 34.1542 14.1441C34.4152 15.2557 34.4198 16.5838 34.165 18.2036L34.1466 18.3218V19.3597L34.9541 19.8172C35.6343 20.178 36.1748 20.591 36.5893 21.0639C37.2802 21.8516 37.727 22.8526 37.9158 24.0394C38.1108 25.26 38.0464 26.7125 37.727 28.3569C37.3585 30.2484 36.7628 31.8958 35.9583 33.2439C35.2182 34.486 34.2755 35.5162 33.1562 36.3146C32.0876 37.0731 30.8179 37.6488 29.3823 38.0173C27.9913 38.3796 26.4053 38.5623 24.6657 38.5623H23.5449C22.7435 38.5623 21.9651 38.851 21.354 39.3684C20.7414 39.8966 20.336 40.6182 20.2117 41.4074L20.1272 41.8664L18.7086 50.8559L18.6441 51.186C18.6272 51.2904 18.598 51.3426 18.555 51.3779C18.5167 51.4102 18.4614 51.4317 18.4076 51.4317H11.4878Z" fill="#253B80"/>
                              <path d="M35.7176 18.4375C35.6746 18.7123 35.6255 18.9933 35.5702 19.2819C33.671 29.033 27.1733 32.4015 18.8748 32.4015H14.6495C13.6346 32.4015 12.7794 33.1385 12.6213 34.1396L10.4579 47.8595L9.84534 51.7485C9.74247 52.4057 10.2491 52.9983 10.9124 52.9983H18.4065C19.2939 52.9983 20.0478 52.3535 20.1875 51.4783L20.2612 51.0975L21.6722 42.1434L21.7627 41.652C21.9009 40.7738 22.6563 40.129 23.5438 40.129H24.6646C31.9253 40.129 37.6091 37.1811 39.2704 28.6507C39.9644 25.0871 39.6051 22.1116 37.7688 20.0189C37.213 19.3879 36.5236 18.8643 35.7176 18.4375Z" fill="#979FB2"/>
                              <path d="M33.7307 17.6426C33.4405 17.5582 33.1411 17.4814 32.834 17.4123C32.5254 17.3448 32.2091 17.2849 31.8836 17.2327C30.7444 17.0485 29.4962 16.9609 28.1589 16.9609H16.871C16.5931 16.9609 16.329 17.0239 16.0925 17.1375C15.572 17.3878 15.1851 17.8806 15.0915 18.484L12.6902 33.6932L12.6211 34.1369C12.7792 33.1359 13.6344 32.3989 14.6493 32.3989H18.8746C27.1732 32.3989 33.6708 29.0288 35.57 19.2793C35.6268 18.9907 35.6744 18.7097 35.7174 18.4349C35.2368 18.18 34.7164 17.962 34.156 17.7762C34.0178 17.7301 33.875 17.6856 33.7307 17.6426Z" fill="#B1B9CC"/>
                              <path d="M15.0929 18.4847C15.1866 17.8814 15.5735 17.3885 16.094 17.1398C16.3319 17.0262 16.5945 16.9632 16.8724 16.9632H28.1603C29.4976 16.9632 30.7458 17.0507 31.8851 17.235C32.2106 17.2872 32.5268 17.3471 32.8354 17.4146C33.1425 17.4837 33.4419 17.5605 33.7321 17.6449C33.8764 17.6879 34.0192 17.7324 34.1589 17.777C34.7193 17.9627 35.2398 18.1823 35.7204 18.4356C36.2854 14.8321 35.7158 12.3786 33.7674 10.157C31.6194 7.71117 27.7427 6.66406 22.7819 6.66406H8.38034C7.367 6.66406 6.5026 7.40103 6.34599 8.40362L0.347368 46.4266C0.229145 47.179 0.809509 47.8576 1.56797 47.8576H10.4592L12.6916 33.694L15.0929 18.4847Z" fill="#B1B9CC"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5110_1001">
                                 <rect width="190.667" height="64" fill="white" transform="translate(0.332031)"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </div> 
                        <div class="swiper-slide">
                           <svg xmlns="http://www.w3.org/2000/svg" width="170" height="64" viewBox="0 0 170 64" fill="none">
                           <path d="M36.2008 15.8453C36.1671 15.6094 35.9648 15.4746 35.7963 15.4746C35.6278 15.4746 32.2908 15.4071 32.2908 15.4071C32.2908 15.4071 29.4932 12.7106 29.2235 12.4073C28.9539 12.1376 28.4146 12.205 28.2123 12.2724C28.2123 12.2724 27.673 12.441 26.7967 12.7106C26.6618 12.2387 26.4259 11.6657 26.1225 11.059C25.145 9.17144 23.662 8.16025 21.9092 8.16025C21.7744 8.16025 21.6733 8.16025 21.5385 8.19396C21.471 8.12654 21.4373 8.05913 21.3699 8.02542C20.5947 7.21647 19.6172 6.81199 18.4375 6.8457C16.1791 6.91311 13.9208 8.56473 12.0669 11.4635C10.7861 13.5196 9.80859 16.0813 9.50523 18.07C6.90983 18.8789 5.08968 19.4519 5.02227 19.4519C3.70771 19.8564 3.67401 19.8901 3.50548 21.1373C3.43806 22.081 0 48.6755 0 48.6755L28.8528 53.664L41.3579 50.563C41.3242 50.563 36.2345 16.0813 36.2008 15.8453ZM25.3473 13.1825C24.6732 13.3848 23.9316 13.6207 23.1227 13.8904C23.1227 12.7443 22.9541 11.1264 22.4485 9.77816C24.1676 10.0478 25.0102 12.0028 25.3473 13.1825ZM21.6059 14.3285C20.0891 14.8004 18.4375 15.306 16.7858 15.8116C17.2577 14.0252 18.1341 12.2724 19.2127 11.0927C19.6172 10.6545 20.1902 10.1826 20.8306 9.91299C21.5047 11.2275 21.6396 13.0814 21.6059 14.3285ZM18.5049 8.36249C19.0442 8.36249 19.4824 8.46361 19.8531 8.73326C19.2464 9.03662 18.6397 9.50851 18.1004 10.1152C16.651 11.6657 15.5387 14.0589 15.1005 16.3846C13.7185 16.8228 12.3703 17.2273 11.1569 17.5981C11.9658 13.9241 15.0331 8.46361 18.5049 8.36249Z" fill="#B2BACD"/>
                           <path d="M35.7951 15.478C35.6266 15.478 32.2896 15.4106 32.2896 15.4106C32.2896 15.4106 29.492 12.7141 29.2223 12.4107C29.1212 12.3096 28.9864 12.2422 28.8516 12.2422V53.6675L41.3567 50.5665C41.3567 50.5665 36.267 16.0847 36.2333 15.8488C36.1659 15.6128 35.9636 15.478 35.7951 15.478Z" fill="#979FB2"/>
                           <path d="M21.9116 21.9142L20.4623 27.341C20.4623 27.341 18.8444 26.5994 16.9231 26.7342C14.0917 26.9028 14.0917 28.6892 14.0917 29.1274C14.2603 31.5543 20.6308 32.0936 21.0016 37.79C21.2712 42.2729 18.6421 45.3402 14.7996 45.5762C10.2155 45.8121 7.6875 43.1156 7.6875 43.1156L8.66499 38.9697C8.66499 38.9697 11.2267 40.891 13.2491 40.7561C14.5636 40.6887 15.0692 39.5764 15.0018 38.8349C14.7996 35.6665 9.60877 35.8687 9.27171 30.6442C9.00205 26.2623 11.8671 21.8468 18.2039 21.4423C20.6645 21.2738 21.9116 21.9142 21.9116 21.9142Z" fill="white"/>
                           <path d="M58.2776 33.4704C56.8282 32.6951 56.0867 32.021 56.0867 31.1109C56.0867 29.9649 57.1316 29.2233 58.7495 29.2233C60.637 29.2233 62.3224 29.9986 62.3224 29.9986L63.6369 25.9538C63.6369 25.9538 62.4235 25.01 58.8506 25.01C53.862 25.01 50.3903 27.8751 50.3903 31.8862C50.3903 34.1782 52.0082 35.8972 54.1654 37.1444C55.9181 38.1219 56.5248 38.8297 56.5248 39.8746C56.5248 40.9532 55.6485 41.8296 54.0306 41.8296C51.6374 41.8296 49.3454 40.5824 49.3454 40.5824L47.9297 44.6272C47.9297 44.6272 50.0195 46.0429 53.5587 46.0429C58.6821 46.0429 62.3898 43.5149 62.3898 38.9645C62.3561 36.5039 60.5022 34.7512 58.2776 33.4704Z" fill="#B2BACD"/>
                           <path d="M78.7038 24.9429C76.1758 24.9429 74.1872 26.1563 72.6704 27.9765L72.6029 27.9428L74.7939 16.4826H69.0975L63.5359 45.6724H69.2323L71.1199 35.6953C71.8614 31.9202 73.8164 29.5944 75.6365 29.5944C76.9174 29.5944 77.423 30.4708 77.423 31.7179C77.423 32.4932 77.3556 33.4707 77.187 34.2459L75.0298 45.6724H80.7262L82.9508 33.8751C83.1868 32.628 83.3553 31.1449 83.3553 30.1337C83.389 26.8979 81.7037 24.9429 78.7038 24.9429Z" fill="#B2BACD"/>
                           <path d="M96.2981 24.9424C89.422 24.9424 84.8716 31.1444 84.8716 38.0542C84.8716 42.4698 87.6019 46.0427 92.7252 46.0427C99.4665 46.0427 104.017 40.0092 104.017 32.9309C104.051 28.8524 101.657 24.9424 96.2981 24.9424ZM93.5005 41.6945C91.5455 41.6945 90.7366 40.0429 90.7366 37.9531C90.7366 34.6836 92.4219 29.358 95.5229 29.358C97.5453 29.358 98.2194 31.1107 98.2194 32.796C98.2194 36.3015 96.5004 41.6945 93.5005 41.6945Z" fill="#B2BACD"/>
                           <path d="M118.646 24.9424C114.804 24.9424 112.613 28.3468 112.613 28.3468H112.545L112.882 25.2795H107.827C107.591 27.3356 107.119 30.504 106.681 32.8634L102.703 53.7615H108.4L109.984 45.3011H110.119C110.119 45.3011 111.298 46.0427 113.456 46.0427C120.163 46.0427 124.545 39.1666 124.545 32.223C124.545 28.3805 122.826 24.9424 118.646 24.9424ZM113.186 41.762C111.703 41.762 110.826 40.9193 110.826 40.9193L111.77 35.5937C112.444 32.0208 114.298 29.6613 116.287 29.6613C118.04 29.6613 118.579 31.2792 118.579 32.796C118.579 36.5037 116.388 41.762 113.186 41.762Z" fill="#B2BACD"/>
                           <path d="M132.701 16.7521C130.881 16.7521 129.431 18.2015 129.431 20.0553C129.431 21.7407 130.51 22.9204 132.128 22.9204H132.195C133.982 22.9204 135.499 21.707 135.532 19.6172C135.532 17.9655 134.42 16.7521 132.701 16.7521Z" fill="#B2BACD"/>
                           <path d="M124.713 45.6384H130.409L134.285 25.4145H128.555L124.713 45.6384Z" fill="#B2BACD"/>
                           <path d="M148.813 25.3811H144.835L145.038 24.4373C145.375 22.4824 146.521 20.7633 148.442 20.7633C149.453 20.7633 150.262 21.0667 150.262 21.0667L151.374 16.5837C151.374 16.5837 150.397 16.0781 148.273 16.0781C146.251 16.0781 144.229 16.6511 142.678 17.9657C140.723 19.6173 139.813 22.0105 139.375 24.4373L139.206 25.3811H136.543L135.701 29.6955H138.364L135.33 45.6724H141.026L144.06 29.6955H148.004L148.813 25.3811Z" fill="#B2BACD"/>
                           <path d="M162.565 25.4145C162.565 25.4145 158.992 34.4141 157.408 39.3353H157.34C157.239 37.7511 155.924 25.4145 155.924 25.4145H149.925L153.363 43.9868C153.43 44.3912 153.396 44.6609 153.228 44.9305C152.554 46.2114 151.441 47.4585 150.127 48.3686C149.048 49.1439 147.835 49.6495 146.891 49.9865L148.475 54.8403C149.621 54.6043 152.048 53.6268 154.071 51.7393C156.666 49.3124 159.093 45.5373 161.553 40.4139L168.531 25.4145H162.565Z" fill="#B2BACD"/>
                           </svg>
                        </div> 
                        <div class="swiper-slide">
                           <svg xmlns="http://www.w3.org/2000/svg" width="153" height="64" viewBox="0 0 153 64" fill="none">
                           <g clip-path="url(#clip0_5110_1013)">
                              <path d="M16.7434 17.4766V29.5935H5.61525V17.4766H0.332031V46.401H5.61525V34.6774H16.7434V46.401H22.0266V17.4766H16.7434Z" fill="#B2BACD"/>
                              <path d="M38.935 37.0505C38.935 38.2097 38.4745 39.3214 37.6548 40.1411C36.8351 40.9608 35.7234 41.4213 34.5642 41.4213C33.405 41.4213 32.2933 40.9608 31.4736 40.1411C30.6539 39.3214 30.1935 38.2097 30.1935 37.0505V24.6617H25.182V37.0505C25.182 39.5364 26.1696 41.9205 27.9274 43.6783C29.6852 45.4361 32.0693 46.4236 34.5552 46.4236C37.0411 46.4236 39.4252 45.4361 41.183 43.6783C42.9408 41.9205 43.9283 39.5364 43.9283 37.0505V24.6617H38.935V37.0505Z" fill="#B2BACD"/>
                              <path d="M76.0663 25.9385C76.0663 23.3992 77.7462 22.5941 79.5867 22.5941C81.0699 22.5941 83.0294 23.7227 84.3108 25.0921L87.593 21.2248C85.9545 19.009 82.6308 17.4766 79.9102 17.4766C74.4743 17.4766 70.5423 20.6605 70.5423 25.9385C70.5423 35.731 82.5117 32.6247 82.5117 38.1047C82.5117 39.795 80.8706 41.2886 78.9913 41.2886C76.0274 41.2886 75.0671 39.839 73.7055 38.3066L70.0634 42.0936C72.3931 44.954 75.2664 46.4062 78.7092 46.4062C83.8733 46.4062 88.0279 43.1834 88.0279 38.1461C88.0279 27.2742 76.0585 30.6523 76.0585 25.9385" fill="#B2BACD"/>
                              <path d="M150.114 41.7801C147.153 41.7801 146.312 40.4988 146.312 38.5366V29.8521H150.914V25.4515H146.312V19.6454L141.23 21.9259V39.6161C141.23 44.1408 144.352 46.4213 148.634 46.4213C149.305 46.4336 149.976 46.3798 150.637 46.2609L151.877 41.6973C151.318 41.7361 150.676 41.7749 150.114 41.7749" fill="#B2BACD"/>
                              <path d="M58.0112 24.8078C55.5288 24.8078 53.7971 25.5274 52.1223 27.1711V17.6505H47.1031V35.2966C47.1031 41.9026 51.8789 46.4273 57.245 46.4273C63.1987 46.4273 68.4353 41.8223 68.4353 35.6202C68.4353 29.4957 63.6154 24.8104 58.0112 24.8104V24.8078ZM57.9801 41.3771C56.8538 41.3771 55.7528 41.0431 54.8163 40.4173C53.8798 39.7916 53.1499 38.9022 52.7188 37.8616C52.2878 36.821 52.175 35.676 52.3948 34.5713C52.6145 33.4666 53.1569 32.4519 53.9533 31.6555C54.7497 30.859 55.7645 30.3166 56.8691 30.0969C57.9738 29.8772 59.1189 29.9899 60.1594 30.421C61.2 30.852 62.0894 31.5819 62.7152 32.5184C63.3409 33.4549 63.6749 34.556 63.6749 35.6823C63.6749 37.1926 63.075 38.6411 62.007 39.7091C60.939 40.7771 59.4905 41.3771 57.9801 41.3771Z" fill="#B2BACD"/>
                              <path d="M112.51 35.355C112.51 29.1425 107.284 24.5478 101.32 24.5478C95.9539 24.5478 91.178 29.0726 91.178 35.6786V53.335H96.1972V43.8014C97.8694 45.4426 99.6037 46.1648 102.084 46.1648C107.688 46.1648 112.508 41.4821 112.508 35.355H112.51ZM107.758 35.2929C107.758 36.4192 107.424 37.5202 106.798 38.4567C106.172 39.3932 105.283 40.1232 104.242 40.5542C103.202 40.9852 102.056 41.098 100.952 40.8783C99.8471 40.6585 98.8324 40.1161 98.036 39.3197C97.2396 38.5233 96.6972 37.5086 96.4774 36.4039C96.2577 35.2992 96.3705 34.1542 96.8015 33.1136C97.2325 32.073 97.9625 31.1836 98.899 30.5578C99.8355 29.9321 100.936 29.5981 102.063 29.5981C103.573 29.5981 105.022 30.1981 106.09 31.266C107.158 32.334 107.758 33.7825 107.758 35.2929Z" fill="#B2BACD"/>
                              <path d="M128.675 24.4636V19.4729C129.335 19.1648 129.893 18.6757 130.285 18.0626C130.678 17.4494 130.888 16.7373 130.891 16.0094V15.8929C130.888 14.8756 130.483 13.9008 129.764 13.1815C129.044 12.4622 128.069 12.0568 127.052 12.0541H126.936C125.918 12.0568 124.943 12.4622 124.224 13.1815C123.505 13.9008 123.1 14.8756 123.097 15.8929V16.0094C123.1 16.7373 123.31 17.4494 123.702 18.0626C124.095 18.6757 124.653 19.1648 125.313 19.4729V24.4636C123.416 24.7536 121.63 25.5394 120.135 26.7415L106.432 16.0793C106.529 15.7276 106.581 15.3648 106.587 14.9999C106.588 14.1434 106.335 13.3058 105.86 12.593C105.385 11.8803 104.709 11.3244 103.918 10.9957C103.128 10.667 102.257 10.5802 101.417 10.7463C100.576 10.9124 99.8042 11.3239 99.1979 11.9288C98.5915 12.5337 98.1781 13.3049 98.01 14.1448C97.8419 14.9846 97.9266 15.8555 98.2535 16.6472C98.5803 17.4389 99.1345 18.1159 99.8461 18.5926C100.558 19.0693 101.395 19.3243 102.251 19.3253C103.004 19.3225 103.742 19.1217 104.392 18.7429L117.865 29.2317C116.652 31.0626 116.019 33.2169 116.049 35.4132C116.079 37.6096 116.77 39.7458 118.034 41.5428L113.933 45.6431C113.604 45.5383 113.261 45.4825 112.916 45.4774C112.212 45.4774 111.524 45.6861 110.939 46.0772C110.353 46.4683 109.897 47.0242 109.628 47.6746C109.358 48.325 109.288 49.0406 109.425 49.731C109.563 50.4215 109.901 51.0557 110.399 51.5534C110.897 52.0512 111.531 52.3902 112.222 52.5275C112.912 52.6648 113.628 52.5944 114.278 52.325C114.928 52.0556 115.484 51.5994 115.875 51.0141C116.267 50.4287 116.475 49.7406 116.475 49.0367C116.471 48.6912 116.415 48.3484 116.31 48.0194L120.366 43.9631C121.69 44.9745 123.228 45.6699 124.861 45.9964C126.495 46.3229 128.182 46.2718 129.793 45.8469C131.404 45.4221 132.897 44.6347 134.157 43.545C135.418 42.4553 136.413 41.092 137.066 39.5592C137.719 38.0264 138.013 36.3646 137.926 34.7007C137.839 33.0369 137.373 31.4149 136.564 29.9585C135.754 28.5022 134.623 27.2501 133.256 26.2978C131.888 25.3455 130.322 24.7181 128.675 24.4636ZM126.995 40.8801C125.885 40.8801 124.8 40.551 123.877 39.9344C122.954 39.3177 122.235 38.4412 121.81 37.4158C121.386 36.3903 121.274 35.262 121.491 34.1733C121.708 33.0847 122.242 32.0848 123.027 31.2999C123.812 30.5151 124.812 29.9806 125.9 29.764C126.989 29.5475 128.117 29.6586 129.143 30.0834C130.168 30.5082 131.045 31.2275 131.661 32.1503C132.278 33.0732 132.607 34.1582 132.607 35.2682C132.607 36.7566 132.016 38.184 130.963 39.2364C129.911 40.2889 128.484 40.8801 126.995 40.8801Z" fill="#B2BACD"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5110_1013">
                                 <rect width="152" height="64" fill="white" transform="translate(0.332031)"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </div>
                     </div> 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Hero End -->

      <!-- Testimonial - 6 Start -->
      <div class="d-non testimonial-style-six position-relative">
         <div class="d-none d-md-block shape-1 position-absolute">
            <img src=<?php echo get_template_directory_uri().'../assets/img/shapes/testimonial-cloud-1.svg'?> alt="shape">
         </div>
         <div class="d-none d-md-block shape-2 position-absolute">
            <img src=<?php echo get_template_directory_uri().'../assets/img/shapes/testimonial-cloud-2.svg'?> alt="shape">
         </div>
         <div class="d-none d-md-block shape-3 position-absolute">
            <img src=<?php echo get_template_directory_uri().'../assets/img/shapes/testimonial-wave.svg'?> alt="shape">
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 text-center">
                  <div class="section-header">
                     <h2 class="title">What Our Customers Are Saying!</h2>
                     <div class="description">Here’s what some of our customers say about our platform.</div>
                  </div>
               </div>
            </div>
            <div class="row g-4 pt-72 testimonial-row">
               <div class="col-md-6 col-lg-4">
                  <div class="testimonial-card h-100">
                     <div class="testimonial-card-content d-flex flex-column h-100">
                        <ul class='rating d-flex justify-content-start align-items-center'>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li>4.9</li>
                        </ul>
                        <p class="review">
                           The built-in SEO tools have boosted our search rankings, the automated marketing features have increased our sales significantly."
                        </p>
                        <div class="author d-flex">
                           <div class="author-avatar">
                              <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author-3.png'?> alt="author">
                           </div>
                           <div class="author-details">
                              <p class="author-title">Mike Johnson</p>
                              <p class="author-designation">E-commerce Store Owner</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="testimonial-card h-100">
                     <div class="testimonial-card-content d-flex flex-column h-100">
                        <ul class='rating d-flex justify-content-start align-items-center'>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li>5.00</li>
                        </ul>
                        <p class="review">
                           "Since we started using SaaSto our marketing campaigns have become more streamlined and effective. The analytics dashboard is intuitive.
                        </p>
                        <div class="author d-flex">
                           <div class="author-avatar">
                              <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author-4.png'?> alt="author">
                           </div>
                           <div class="author-details">
                              <p class="author-title">Nathan Jane Doe</p>
                              <p class="author-designation">Marketing Manager, Zepio</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="testimonial-card h-100">
                     <div class="testimonial-card-content d-flex flex-column h-100">
                        <ul class='rating d-flex justify-content-start align-items-center'>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li>4.8</li>
                        </ul>
                        <p class="review">
                           "I have tried several CRM systems before, but SaaSto stands out for its simplicity and robust features. It has helped me close deals."
                        </p>
                        <div class="author d-flex">
                           <div class="author-avatar">
                              <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author-5.png'?> alt="author">
                           </div>
                           <div class="author-details">
                              <p class="author-title">Emily Brown</p>
                              <p class="author-designation">Sales Representative, Mastro</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="testimonial-card h-100">
                     <div class="testimonial-card-content d-flex flex-column h-100">
                        <ul class='rating d-flex justify-content-start align-items-center'>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li>5.00</li>
                        </ul>
                        <p class="review">
                           "I rely on SaaSto for content planning and scheduling, and it's been truely nice. The content calendar is visually appealing and easy to use.
                        </p>
                        <div class="author d-flex">
                           <div class="author-avatar">
                              <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author-6.png'?> alt="author">
                           </div>
                           <div class="author-details">
                              <p class="author-title">Sophia Kim</p>
                              <p class="author-designation">Content Creator, Elevatory</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="testimonial-card h-100">
                     <div class="testimonial-card-content d-flex flex-column h-100">
                        <ul class='rating d-flex justify-content-start align-items-center'>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li>5.00</li>
                        </ul>
                        <p class="review">
                           "Implementing the SaaSto was a breeze! The integration with our existing systems was seamless, and the uptime has been impeccable.
                        </p>
                        <div class="author d-flex">
                           <div class="author-avatar">
                              <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author-7.png'?> alt="author">
                           </div>
                           <div class="author-details">
                              <p class="author-title">Tom Anderson</p>
                              <p class="author-designation">Project Manager, Supriyom IT</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="testimonial-card h-100">
                     <div class="testimonial-card-content d-flex flex-column h-100">
                        <ul class='rating d-flex justify-content-start align-items-center'>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li><i class="bi bi-star-fill"></i></li>
                           <li>5.00</li>
                        </ul>
                        <p class="review">
                           "SaaSto has revolutionized the way we manage our operations. It's user-friendly, significantly reduced our overhead costs. Our team loves it!"
                        </p>
                        <div class="author d-flex">
                           <div class="author-avatar">
                              <img src=<?php echo get_template_directory_uri().'../assets/img/testimonial/author-8.png'?> alt="author">
                           </div>
                           <div class="author-details">
                              <p class="author-title">John Smith</p>
                              <p class="author-designation">Co-Founder, Verbionz Tech</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 d-flex justify-content-center align-items-center pt-72 g-0">
                  <a href="#" class="see-all btn-fill-rounded">See All Customer Stories</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Testimonial - 6 End -->

      <!-- FAQ - 6 Start -->
      <div class="d-non faq-style-common">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 text-center">
                  <div class="section-header">
                     <h2 class="title">Get the Answers You Need</h2>
                     <p class="description">Have questions about our product or services? You're in the right place! Our FAQ section covers the most common queries to provide you with quick and helpful answers.</p>
                  </div>
               </div>
            </div>
            <div class="row pt-72">
               <div class="col-12">
                  <div class="grid accordion" id="accordionExample">
                     
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Is this platform suitable for small startups?
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                              </div>
                           </div>
                     
                     </div>
                     
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              How can I get support if I encounter issues?
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                              </div>
                           </div>
                     
                     </div>
                     
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 What is product analysis, and why it’s important?
                              </button>
                           </h2>
                           <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                              </div>
                           </div>
                     
                     </div>
                     
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Can I change my plan later?
                              </button>
                           </h2>
                           <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                              </div>
                           </div>
                     
                     </div>
                  </div>
               </div>
            </div>
               <!-- <div class="col-lg-6">
                  <div class="accordion d-grid gap-3" id="accordionExample2">
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           How does the 7-day free trial work?
                           </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                           <div class="accordion-body">
                           es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                           What types of analytics does SaaSto offer?
                           </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                           <div class="accordion-body">
                           es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            What are the pricing plans available?
                           </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                           <div class="accordion-body">
                           es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                           Do you offer training or tutorials?
                           </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                           <div class="accordion-body">
                           es, our platform is well-suited for small startups. We offer flexible plans tailored to your needs, essential features for growth, and user-friendly tools to help you make data-driven decisions.
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
        </div>
      </div>

      <div class="d-non faq-style-common">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-10">
                  <div class="accordion d-grid gap-4" id="accordion-faq-five">
                     <div class="accordion-item extend">
                        <h2 class="accordion-header">
                           <button class="accordion-button extend" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq_five-one" aria-expanded="true" aria-controls="collapse-faq_five-one">
                           What is Saasto and how does it work?
                           </button>
                        </h2>
                        <div id="collapse-faq_five-one" class="accordion-collapse collapse show" data-bs-parent="#accordion-faq-five">
                           <div class="accordion-body extend">
                           Saasto offers a comprehensive solution for managing your human resources efficiently and effectively. Our platform is user-friendly, customizable, and scalable, making it suitable for businesses of all sizes. With Saasto, you can save time, improve productivity, and focus on growing your business while we take care of your HR needs.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item extend">
                        <h2 class="accordion-header">
                           <button class="accordion-button extend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq_five-two" aria-expanded="false" aria-controls="collapse-faq_five-two">
                           Why choose Saasto for my HR management needs?
                           </button>
                        </h2>
                        <div id="collapse-faq_five-two" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-five">
                           <div class="accordion-body extend">
                           Saasto offers a comprehensive solution for managing your human resources efficiently and effectively. Our platform is user-friendly, customizable, and scalable, making it suitable for businesses of all sizes. With Saasto, you can save time, improve productivity, and focus on growing your business while we take care of your HR needs.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item extend">
                        <h2 class="accordion-header">
                           <button class="accordion-button extend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq_five-three" aria-expanded="false" aria-controls="collapse-faq_five-three">
                            Does Saasto support remote work and mobile access?
                           </button>
                        </h2>
                        <div id="collapse-faq_five-three" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-five">
                           <div class="accordion-body extend">
                           Saasto offers a comprehensive solution for managing your human resources efficiently and effectively. Our platform is user-friendly, customizable, and scalable, making it suitable for businesses of all sizes. With Saasto, you can save time, improve productivity, and focus on growing your business while we take care of your HR needs.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item extend">
                        <h2 class="accordion-header">
                           <button class="accordion-button extend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq_five-four" aria-expanded="false" aria-controls="collapse-faq_five-four">
                           Can I integrate Saasto with other tools and platforms?
                           </button>
                        </h2>
                        <div id="collapse-faq_five-four" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-five">
                           <div class="accordion-body extend">
                           Saasto offers a comprehensive solution for managing your human resources efficiently and effectively. Our platform is user-friendly, customizable, and scalable, making it suitable for businesses of all sizes. With Saasto, you can save time, improve productivity, and focus on growing your business while we take care of your HR needs.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FAQ - 6 End -->


      <!-- footer - 6 start  -->
      <footer class="d-non footer-style-six">
         <div class="container">
            <div class="footer-top">
               <div class="row flex justify-content-center align-items-center text-center">
                  <div class="col-md-10">
                     <h2 class="title">Ready to Unlock Powerful Insights for Your Product?</h2>
                  </div>
                  <div class="col-md-8">
                     <p class="description">Don't miss out on optimizing your product strategy and driving business growth with actionable insights. Take the next step towards success today!</p>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-center pt-40 g-0">
                     <a href="#" class="see-all btn-fill-rounded">See All Customer Stories</a>
                  </div>
               </div>
            </div>
            <div class="footer-middle">
               <div class="row g-4 g-md-5">
                  <div class="col-lg-4">
                     <div class="footer-about">
                        <div class="footer-logo">
                              <a href="index.html">
                                 <img src=<?php echo get_template_directory_uri().'../assets/img/footer/logo.png'?> alt="saasto">
                              </a>
                        </div>
                        
                        <p class="footer-disc">Lorem Ipsum is simply dummy text of
                              the printing and typesetting industry.
                              Lorem Ipsum has been the
                              industry's standard and clean.</p>

                        <ul class="footer-location list-unstyled d-flex">
                           <li><i class="bi bi-geo-alt"></i></li>
                           <li>17 York Street London, UK</li>
                        </ul>
                        <ul class="footer-social-links list-unstyled d-flex gap-4">
                              <li>
                                 <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                       <g clip-path="url(#clip0_5110_337)">
                                          <path d="M19.9991 20.003V12.6781C19.9991 9.07811 19.2241 6.32812 15.0242 6.32812C12.9992 6.32812 11.6492 7.42812 11.0992 8.47811H11.0492V6.65312H7.07422V20.003H11.2242V13.3781C11.2242 11.6281 11.5492 9.9531 13.6992 9.9531C15.8242 9.9531 15.8492 11.9281 15.8492 13.4781V19.978H19.9991V20.003Z" fill="currentColor"/>
                                          <path d="M0.324219 6.64844H4.47419V19.9983H0.324219V6.64844Z" fill="currentColor"/>
                                          <path d="M2.39998 0C1.07499 0 0 1.07499 0 2.39998C0 3.72497 1.07499 4.82497 2.39998 4.82497C3.72497 4.82497 4.79997 3.72497 4.79997 2.39998C4.79997 1.07499 3.72497 0 2.39998 0Z" fill="currentColor"/>
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_5110_337">
                                             <rect width="20" height="20" fill="currentColor"/>
                                          </clipPath>
                                       </defs>
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                       <path d="M16.9309 3.63869C15.6562 3.05381 14.2892 2.62287 12.86 2.37604C12.8339 2.37127 12.8079 2.38318 12.7945 2.40697C12.6187 2.71967 12.424 3.12756 12.2876 3.44818C10.7504 3.21803 9.22101 3.21803 7.7153 3.44818C7.5789 3.12045 7.3771 2.71967 7.2005 2.40697C7.1871 2.38397 7.16108 2.37205 7.13507 2.37604C5.70663 2.62205 4.33968 3.05299 3.06413 3.63869C3.05308 3.64346 3.04362 3.65139 3.03733 3.6617C0.444522 7.53533 -0.265791 11.3138 0.0826466 15.0453C0.0842091 15.0636 0.0944826 15.081 0.108662 15.0921C1.81933 16.3484 3.47644 17.1111 5.10273 17.6166C5.12874 17.6246 5.15632 17.6151 5.17288 17.5936C5.55757 17.0683 5.9005 16.5143 6.19452 15.9318C6.21187 15.8977 6.1953 15.8572 6.15983 15.8437C5.61589 15.6374 5.09796 15.3858 4.59972 15.1001C4.5603 15.0771 4.55714 15.0207 4.59343 14.9937C4.69827 14.9152 4.80315 14.8334 4.90327 14.7509C4.9214 14.7358 4.94663 14.7326 4.96792 14.7421C8.24105 16.2365 11.7846 16.2365 15.0191 14.7421C15.0404 14.7318 15.0656 14.735 15.0845 14.7501C15.1847 14.8326 15.2895 14.9151 15.3951 14.9937C15.4314 15.0207 15.429 15.0771 15.3896 15.1001C14.8914 15.3913 14.3735 15.6373 13.8287 15.8429C13.7933 15.8563 13.7775 15.8976 13.7949 15.9317C14.0952 16.5135 14.4382 17.0674 14.8157 17.5928C14.8315 17.615 14.8599 17.6246 14.8859 17.6166C16.5201 17.1111 18.1772 16.3484 19.8878 15.0921C19.9028 15.081 19.9123 15.0643 19.9139 15.0461C20.3309 10.732 19.2154 6.98451 16.9568 3.66244C16.9514 3.65139 16.9419 3.64346 16.9309 3.63869ZM6.68339 12.7732C5.69796 12.7732 4.88597 11.8685 4.88597 10.7574C4.88597 9.64631 5.68218 8.74162 6.68339 8.74162C7.69241 8.74162 8.49655 9.65428 8.48077 10.7574C8.48077 11.8685 7.68452 12.7732 6.68339 12.7732ZM13.329 12.7732C12.3436 12.7732 11.5316 11.8685 11.5316 10.7574C11.5316 9.64631 12.3278 8.74162 13.329 8.74162C14.338 8.74162 15.1421 9.65428 15.1264 10.7574C15.1264 11.8685 14.3381 12.7732 13.329 12.7732Z" fill="currentColor"/>
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                       <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                       <path d="M7.84765 12.6486L7.51682 17.3019C7.99015 17.3019 8.19515 17.0986 8.44098 16.8544L10.6601 14.7336L15.2585 18.1011C16.1018 18.5711 16.696 18.3236 16.9235 17.3252L19.9418 3.1819L19.9426 3.18107C20.2101 1.9344 19.4918 1.4469 18.6701 1.75273L0.928482 8.54523C-0.282352 9.01523 -0.264018 9.69023 0.722648 9.99607L5.25848 11.4069L15.7943 4.8144C16.2901 4.48607 16.741 4.66773 16.3701 4.99607L7.84765 12.6486Z" fill="currentColor"/>
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                       <path d="M11.5502 20V10.8777H14.6109L15.0701 7.32156H11.5502V5.05147C11.5502 4.0222 11.8348 3.32076 13.3125 3.32076L15.194 3.31999V0.13923C14.8686 0.0969453 13.7517 0 12.4517 0C9.73708 0 7.87861 1.65697 7.87861 4.69927V7.32156H4.80859V10.8777H7.87861V20H11.5502Z" fill="currentColor"/>
                                    </svg>
                                 </a>
                              </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="row g-4 g-md-5">
                        <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 d-lg-flex justify-content-center">
                           <div class="footer-widget">
                              <h5 class="footer-widget-title">Company</h5>
                              <ul class="footer-links list-unstyled">
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">Customers</a></li>
                                 <li><a href="#">Solutions</a></li>
                                 <li><a href="#">Contact Us</a></li> 
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                           <div class="footer-widget">
                              <h5 class="footer-widget-title">Support</h5>
                              <ul class="footer-links list-unstyled">
                                 <li><a href="# ">Help Center</a></li>
                                 <li><a href="# ">Community</a></li>
                                 <li><a href="# ">Developer Portal</a></li>
                                 <li><a href="# ">Legal</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-5 col-sm-7">
                           <div class="footer-widget">
                              <h5 class="footer-widget-title text-bright-gray">Subscribe to Our Newsletter</h5>
                              <ul class="footer-links extend list-unstyled">
                                 <li>
                                    <form action="#" class='newsletter position-relative'>
                                       <input type="email" name="email" id="email" placeholder='Enter your email address'>
                                       <button class="form-submit">
                                          <i class="bi bi-arrow-right-short"></i>
                                       </button>
                                    </form>
                                 </li>
                                 <li class='accept'>
                                    <input class='position-relative' type="checkbox" name="accept" id="accept">
                                    <label for='accept'>by signing up, you agree to receive mail</label>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
               <p class="copyright">© Copyright 2024 SaaSto. Inc.</p>
               <ul class='footer-menu list-unstyled d-flex flex-column flex-sm-row justify-content-center align-items-center gap-1'>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li class='d-none d-sm-block'><i class="bi bi-dot"></i></li>
                  <li><a href="#" class="Privacy Policy">Privacy Policy</a></li>
                  <li class='d-none d-sm-block'><i class="bi bi-dot"></i></li>
                  <li><a href="#" class="">Cookie</a></li>
               </ul>
            </div>
         </div>
      </footer>
      <!-- footer - 6 End  -->

      <!-- capabilities - 6 Start -->
      <div class="d-non capabilities-style-six">
         <div class="container">
           <div class="row justify-content-center">
               <div class="col-md-9 text-center">
                  <div class="section-header">
                     <h2 class="title">Discover SaaSto's Key Capabilities</h2>
                     <p class="description my-0 mx-auto">Explore our robust features designed to streamline your product management and unlock your team's full potential.</p>
                  </div>
               </div>
            </div>
            <div class="row pt-72 g-4">
               <div class="col-md-6 col-lg-4">
                  <div class="capabilities-card h-100">
                     <div class="capabilities-card-inner h-100">
                        <figure>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                           <g clip-path="url(#clip0_5114_2430)">
                              <path d="M12.3333 0H2.33325C1.04663 0 0 1.04663 0 2.33325V8.33325C0 9.62012 1.04663 10.6667 2.33325 10.6667H12.3333C13.6201 10.6667 14.6667 9.62012 14.6667 8.33325V2.33325C14.6667 1.04663 13.6201 0 12.3333 0Z" fill="#D061F8"/>
                              <path d="M12.3333 13.3359H2.33325C1.04663 13.3359 0 14.3826 0 15.6694V29.6694C0 30.9561 1.04663 32.0027 2.33325 32.0027H12.3333C13.6201 32.0027 14.6667 30.9561 14.6667 29.6694V15.6694C14.6667 14.3826 13.6201 13.3359 12.3333 13.3359Z" fill="#D061F8"/>
                              <path d="M29.6655 21.3359H19.6655C18.3787 21.3359 17.332 22.3826 17.332 23.6694V29.6694C17.332 30.9561 18.3787 32.0027 19.6655 32.0027H29.6655C30.9521 32.0027 31.9988 30.9561 31.9988 29.6694V23.6694C31.9988 22.3826 30.9521 21.3359 29.6655 21.3359Z" fill="#D061F8"/>
                              <path d="M29.6655 0H19.6655C18.3787 0 17.332 1.04663 17.332 2.33325V16.3333C17.332 17.6201 18.3787 18.6667 19.6655 18.6667H29.6655C30.9521 18.6667 31.9988 17.6201 31.9988 16.3333V2.33325C31.9988 1.04663 30.9521 0 29.6655 0Z" fill="#D061F8"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5114_2430">
                                 <rect width="32" height="32" fill="white"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </figure>
                        <div class="card-content">
                           <h5 class="title">Reporting and Analytics</h5>
                           <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="capabilities-card h-100">
                     <div class="capabilities-card-inner h-100">
                        <figure>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                           <g clip-path="url(#clip0_5114_2440)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.45138 18.2023C9.42684 18.1999 11.3207 17.414 12.7175 16.0171C14.1143 14.6202 14.9 12.7263 14.9023 10.7508C14.9024 10.6407 14.8807 10.5316 14.8386 10.4298C14.7964 10.328 14.7347 10.2355 14.6568 10.1576C14.5789 10.0797 14.4864 10.0179 14.3846 9.97579C14.2829 9.93364 14.1738 9.91197 14.0636 9.912H8.29019V4.13831C8.29015 3.91586 8.20177 3.70253 8.04447 3.54524C7.88716 3.38795 7.67383 3.29958 7.45138 3.29956C6.47285 3.29956 5.5039 3.4923 4.59986 3.86676C3.69581 4.24123 2.87438 4.7901 2.18246 5.48202C1.49053 6.17394 0.941669 6.99538 0.567202 7.89942C0.192735 8.80346 0 9.77241 0 10.7509C0 11.7295 0.192735 12.6984 0.567202 13.6025C0.941669 14.5065 1.49053 15.3279 2.18246 16.0199C2.87438 16.7118 3.69581 17.2606 4.59986 17.6351C5.5039 18.0096 6.47285 18.2023 7.45138 18.2023ZM20.0413 5.24725C20.0412 5.35741 20.0629 5.4665 20.105 5.56828C20.1471 5.67006 20.2089 5.76255 20.2868 5.84045C20.3647 5.91834 20.4571 5.98013 20.5589 6.02228C20.6607 6.06442 20.7698 6.0861 20.8799 6.08606H29.1252C29.3464 6.08415 29.5579 5.99494 29.7136 5.83785C29.8694 5.68075 29.9568 5.46849 29.9568 5.24728C29.9568 5.02607 29.8694 4.81381 29.7136 4.65672C29.5579 4.49962 29.3464 4.41041 29.1252 4.4085H20.8799C20.7698 4.40847 20.6607 4.43014 20.5589 4.47228C20.4572 4.51442 20.3647 4.5762 20.2868 4.65409C20.2089 4.73199 20.1471 4.82446 20.105 4.92624C20.0629 5.02802 20.0412 5.1371 20.0413 5.24725ZM20.0413 0.83875C20.0412 0.948903 20.0629 1.05798 20.105 1.15976C20.1471 1.26154 20.2089 1.35401 20.2868 1.43191C20.3647 1.5098 20.4572 1.57158 20.5589 1.61372C20.6607 1.65586 20.7698 1.67753 20.8799 1.6775H29.1252C29.3476 1.6775 29.561 1.58913 29.7183 1.43184C29.8756 1.27454 29.9639 1.0612 29.9639 0.83875C29.9639 0.6163 29.8756 0.40296 29.7183 0.245664C29.561 0.0883681 29.3476 8.38795e-08 29.1252 8.38795e-08H20.8799C20.7698 -3.27684e-05 20.6607 0.0216402 20.5589 0.0637804C20.4572 0.105921 20.3647 0.167702 20.2868 0.245595C20.2089 0.323487 20.1471 0.415964 20.105 0.51774C20.0629 0.619516 20.0412 0.728598 20.0413 0.83875ZM31.1611 30.3225C31.3836 30.3225 31.5969 30.4109 31.7542 30.5682C31.9115 30.7255 31.9999 30.9388 31.9999 31.1612C31.9999 31.3837 31.9115 31.597 31.7542 31.7543C31.5969 31.9116 31.3836 32 31.1611 32H2.64056C2.41811 32 2.20477 31.9116 2.04748 31.7543C1.89018 31.597 1.80181 31.3837 1.80181 31.1612C1.80181 30.9388 1.89018 30.7255 2.04748 30.5682C2.20477 30.4109 2.41811 30.3225 2.64056 30.3225H4.39775V22.9328C4.39768 22.8226 4.41932 22.7135 4.46144 22.6117C4.50356 22.5099 4.56533 22.4174 4.64323 22.3395C4.72113 22.2615 4.81362 22.1997 4.91541 22.1576C5.01721 22.1154 5.12632 22.0937 5.2365 22.0938H10.0428C10.1529 22.0937 10.262 22.1154 10.3638 22.1575C10.4656 22.1997 10.558 22.2615 10.6359 22.3394C10.7138 22.4173 10.7756 22.5097 10.8177 22.6115C10.8599 22.7133 10.8815 22.8224 10.8815 22.9326V30.3225H13.4277V18.475C13.4278 18.2526 13.5162 18.0393 13.6735 17.882C13.8308 17.7247 14.0441 17.6363 14.2665 17.6362H19.0731C19.1833 17.6362 19.2924 17.6579 19.3941 17.7001C19.4959 17.7422 19.5884 17.804 19.6662 17.8819C19.7441 17.9598 19.8059 18.0522 19.8481 18.154C19.8902 18.2558 19.9119 18.3648 19.9119 18.475V30.3225H22.4581V11.5569C22.4581 11.4468 22.4798 11.3377 22.5219 11.2359C22.5641 11.1342 22.6259 11.0417 22.7038 10.9638C22.7816 10.8859 22.8741 10.8241 22.9759 10.782C23.0777 10.7399 23.1867 10.7182 23.2969 10.7182H28.1031C28.3256 10.7183 28.5388 10.8067 28.6961 10.9639C28.8534 11.1212 28.9418 11.3345 28.9419 11.5569V30.3225H31.1611ZM10.7507 8.38795e-08C12.7261 0.00241488 14.62 0.788232 16.0168 2.18509C17.4137 3.58195 18.1995 5.4758 18.2019 7.45125C18.2019 7.56141 18.1802 7.67049 18.1381 7.77226C18.096 7.87404 18.0342 7.96652 17.9563 8.04441C17.8784 8.1223 17.7859 8.18408 17.6841 8.22622C17.5824 8.26836 17.4733 8.29003 17.3631 8.29H10.7506C10.6405 8.29004 10.5314 8.26838 10.4296 8.22624C10.3278 8.1841 10.2353 8.12232 10.1574 8.04443C10.0795 7.96654 10.0177 7.87406 9.9756 7.77228C9.93345 7.6705 9.91178 7.56141 9.91181 7.45125V0.83875C9.91178 0.728584 9.93346 0.619491 9.9756 0.517707C10.0178 0.415922 10.0795 0.32344 10.1574 0.245547C10.2354 0.167653 10.3278 0.105875 10.4296 0.0637433C10.5314 0.0216112 10.6405 -4.91902e-05 10.7507 8.38795e-08Z" fill="#573BFF"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5114_2440">
                                 <rect width="32" height="32" fill="white"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </figure>
                        <div class="card-content">
                           <h5 class="title">Reporting and Analytics</h5>
                           <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="capabilities-card h-100">
                     <div class="capabilities-card-inner h-100">
                        <figure>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                           <g clip-path="url(#clip0_5114_2447)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M23.1795 10.3027C23.233 10.2646 23.2934 10.2375 23.3574 10.2228C23.4214 10.2082 23.4876 10.2062 23.5523 10.2172C23.617 10.2282 23.679 10.2518 23.7345 10.2867C23.7901 10.3216 23.8383 10.3671 23.8762 10.4206C26.3619 13.9206 26.2024 18.6464 23.5825 21.9706H25.155C25.2876 21.9706 25.4148 22.0233 25.5086 22.1171C25.6023 22.2108 25.655 22.338 25.655 22.4706C25.655 22.6032 25.6023 22.7304 25.5086 22.8242C25.4148 22.9179 25.2876 22.9706 25.155 22.9706H22.4706C22.338 22.9706 22.2108 22.9179 22.1171 22.8242C22.0233 22.7304 21.9706 22.6032 21.9706 22.4706V19.7863C21.9706 19.6537 22.0233 19.5265 22.1171 19.4328C22.2108 19.339 22.338 19.2863 22.4706 19.2863C22.6032 19.2863 22.7304 19.339 22.8242 19.4328C22.9179 19.5265 22.9706 19.6537 22.9706 19.7863V21.1238C25.1511 18.1581 25.2325 14.0574 23.0612 10.9994C23.0231 10.9459 22.996 10.8855 22.9813 10.8215C22.9667 10.7575 22.9648 10.6913 22.9758 10.6265C22.9868 10.5618 23.0104 10.4999 23.0454 10.4443C23.0803 10.3888 23.1259 10.3406 23.1794 10.3027H23.1795ZM10.9993 8.93894C12.4826 7.88852 14.259 7.33194 16.0764 7.34818C17.8939 7.36443 19.6601 7.95267 21.1243 9.02944H19.7862C19.6536 9.02944 19.5264 9.08212 19.4326 9.17588C19.3389 9.26965 19.2862 9.39683 19.2862 9.52944C19.2862 9.66205 19.3389 9.78922 19.4326 9.88299C19.5264 9.97676 19.6536 10.0294 19.7862 10.0294H22.4706C22.6032 10.0294 22.7304 9.97676 22.8242 9.88299C22.9179 9.78922 22.9706 9.66205 22.9706 9.52944V6.84444C22.9706 6.71183 22.9179 6.58465 22.8242 6.49088C22.7304 6.39712 22.6032 6.34444 22.4706 6.34444C22.338 6.34444 22.2108 6.39712 22.1171 6.49088C22.0233 6.58465 21.9706 6.71183 21.9706 6.84444V8.4175C20.3348 7.12904 18.3262 6.40416 16.2446 6.35107C14.1629 6.29798 12.12 6.91953 10.4206 8.12294C10.367 8.16095 10.3215 8.20914 10.2865 8.26476C10.2516 8.32037 10.2279 8.38233 10.2169 8.44709C10.2059 8.51185 10.2078 8.57815 10.2224 8.64219C10.237 8.70623 10.2641 8.76677 10.3021 8.82034C10.3401 8.87392 10.3883 8.91948 10.4439 8.95443C10.4995 8.98939 10.5615 9.01304 10.6262 9.02405C10.691 9.03505 10.7573 9.0332 10.8213 9.01858C10.8854 9.00397 10.9459 8.97688 10.9995 8.93888L10.9993 8.93894ZM9.02869 22.4708V25.1558C9.02869 25.2884 9.08137 25.4155 9.17513 25.5093C9.2689 25.6031 9.39608 25.6558 9.52869 25.6558C9.6613 25.6558 9.78847 25.6031 9.88224 25.5093C9.97601 25.4155 10.0287 25.2884 10.0287 25.1558V23.5833C11.6648 24.8714 13.6736 25.596 15.7552 25.6489C17.8369 25.7019 19.8799 25.0803 21.5794 23.877C21.6337 23.8393 21.6801 23.7913 21.7157 23.7356C21.7514 23.6799 21.7756 23.6177 21.7871 23.5525C21.7985 23.4874 21.7969 23.4207 21.7824 23.3561C21.7679 23.2916 21.7407 23.2306 21.7024 23.1767C21.6642 23.1228 21.6156 23.077 21.5595 23.0419C21.5034 23.0069 21.4409 22.9833 21.3757 22.9726C21.3104 22.9619 21.2437 22.9642 21.1793 22.9795C21.115 22.9947 21.0543 23.0226 21.0008 23.0614C19.5174 24.1116 17.741 24.668 15.9236 24.6517C14.1062 24.6354 12.3401 24.0472 10.8758 22.9706H12.2142C12.3468 22.9706 12.474 22.9179 12.5677 22.8242C12.6615 22.7304 12.7142 22.6032 12.7142 22.4706C12.7142 22.338 12.6615 22.2108 12.5677 22.1171C12.474 22.0233 12.3468 21.9706 12.2142 21.9706H9.52875C9.39617 21.9707 9.26904 22.0234 9.17529 22.1172C9.08154 22.2109 9.02883 22.338 9.02875 22.4706L9.02869 22.4708ZM6.84438 10.0293H8.41687C7.12678 11.6644 6.40093 13.6733 6.34798 15.7554C6.29503 17.8375 6.91782 19.8808 8.12313 21.5793C8.20064 21.6854 8.3168 21.7567 8.44649 21.7779C8.57618 21.799 8.70897 21.7682 8.81614 21.6922C8.92331 21.6162 8.99625 21.501 9.01919 21.3716C9.04212 21.2422 9.0132 21.109 8.93869 21.0008C7.88644 19.5182 7.32871 17.7414 7.34486 15.9233C7.36102 14.1053 7.95026 12.3387 9.02869 10.875V12.2139C9.02869 12.3465 9.08137 12.4737 9.17513 12.5675C9.2689 12.6613 9.39608 12.7139 9.52869 12.7139C9.6613 12.7139 9.78847 12.6613 9.88224 12.5675C9.97601 12.4737 10.0287 12.3465 10.0287 12.2139V9.5295C10.0287 9.39689 9.97601 9.26971 9.88224 9.17595C9.78847 9.08218 9.6613 9.0295 9.52869 9.0295H6.84438C6.71177 9.0295 6.58459 9.08218 6.49082 9.17595C6.39705 9.26971 6.34438 9.39689 6.34438 9.5295C6.34438 9.66211 6.39705 9.78929 6.49082 9.88305C6.58459 9.97682 6.71177 10.0295 6.84438 10.0295V10.0293ZM7.48537e-08 19.1187C-6.35062e-05 19.235 0.0403793 19.3476 0.114374 19.4373C0.188368 19.5269 0.291289 19.588 0.405438 19.61L3.28562 20.162C3.4979 20.809 3.75907 21.439 4.06687 22.0464L2.42056 24.4744C2.35535 24.5706 2.32569 24.6865 2.33666 24.8022C2.34763 24.9178 2.39856 25.0261 2.48069 25.1083L6.89125 29.5187C6.97345 29.601 7.08174 29.652 7.1975 29.6631C7.31326 29.6741 7.42925 29.6444 7.5255 29.5792L9.95369 27.9324C10.5608 28.2403 11.1905 28.5014 11.8372 28.7136L12.3898 31.5941C12.4117 31.7084 12.4728 31.8114 12.5625 31.8855C12.6522 31.9596 12.7649 32.0001 12.8813 32H19.1187C19.235 32 19.3477 31.9595 19.4373 31.8854C19.527 31.8114 19.588 31.7084 19.61 31.5942L20.1619 28.7144C20.809 28.5018 21.439 28.2404 22.0464 27.9324L24.4737 29.5792C24.5701 29.6444 24.6861 29.6741 24.8019 29.6631C24.9177 29.652 25.0261 29.601 25.1083 29.5187L29.5187 25.1083C29.601 25.0262 29.652 24.918 29.6631 24.8023C29.6742 24.6866 29.6446 24.5706 29.5795 24.4744L27.9327 22.0464C28.2401 21.4388 28.5013 20.8089 28.7139 20.162L31.5938 19.61C31.708 19.588 31.811 19.527 31.8851 19.4373C31.9592 19.3477 31.9999 19.2351 32 19.1187V12.8813C31.9999 12.7649 31.9592 12.6523 31.8851 12.5627C31.811 12.4731 31.708 12.412 31.5938 12.3901L28.7139 11.8381C28.5019 11.191 28.2407 10.5611 27.9326 9.95387L29.5794 7.52569C29.6446 7.4295 29.6742 7.31358 29.6631 7.19791C29.6521 7.08224 29.601 6.97405 29.5187 6.892L25.1082 2.48125C25.026 2.39887 24.9177 2.34773 24.8018 2.33664C24.686 2.32555 24.5699 2.35521 24.4736 2.4205L22.0457 4.0675C21.4387 3.75925 20.8088 3.49806 20.1618 3.28625L19.6099 0.405563C19.5879 0.291445 19.5268 0.188552 19.4372 0.114547C19.3476 0.040543 19.235 4.30735e-05 19.1187 5.08474e-08H12.8813C12.765 -5.23681e-05 12.6523 0.040426 12.5626 0.11447C12.473 0.188514 12.4119 0.291493 12.39 0.405688L11.8375 3.28638C11.1907 3.49841 10.561 3.75959 9.95394 4.06763L7.5255 2.42069C7.42921 2.35548 7.31321 2.32587 7.19745 2.33695C7.08168 2.34804 6.97341 2.39913 6.89125 2.48144L2.48069 6.89194C2.39852 6.97408 2.34757 7.0823 2.33659 7.19796C2.32562 7.31362 2.35531 7.4295 2.42056 7.52563L4.06731 9.95381C3.75903 10.561 3.4977 11.1909 3.28562 11.838L0.405438 12.39C0.291289 12.412 0.188368 12.4731 0.114374 12.5627C0.0403793 12.6524 -6.35062e-05 12.765 7.48537e-08 12.8813V19.1187ZM20.175 11.3244C20.3076 11.3244 20.4348 11.3771 20.5286 11.4708C20.6223 11.5646 20.675 11.6918 20.675 11.8244V20.1756C20.675 20.3082 20.6223 20.4353 20.5286 20.5291C20.4348 20.6229 20.3076 20.6756 20.175 20.6756H11.8243C11.6917 20.6756 11.5645 20.6229 11.4708 20.5291C11.377 20.4353 11.3243 20.3082 11.3243 20.1756V11.8244C11.3243 11.6918 11.377 11.5647 11.4708 11.4709C11.5645 11.3771 11.6917 11.3244 11.8243 11.3244L20.175 11.3244ZM14.9631 13.5049V12.3245H17.0363V13.5049L16.3531 12.8219C16.3068 12.7754 16.2517 12.7385 16.1911 12.7133C16.1304 12.6881 16.0654 12.6751 15.9997 12.6751C15.934 12.6751 15.869 12.6881 15.8084 12.7133C15.7477 12.7385 15.6927 12.7754 15.6463 12.8219L14.9631 13.5049ZM19.675 12.3245V19.6758H12.3244V12.3245H13.9629V14.712C13.963 14.8109 13.9924 14.9076 14.0473 14.9898C14.1023 15.0721 14.1804 15.1361 14.2718 15.174C14.3632 15.2119 14.4637 15.2218 14.5607 15.2025C14.6577 15.1833 14.7469 15.1357 14.8169 15.0658L16 13.8826L17.1833 15.0656C17.2532 15.1355 17.3422 15.1831 17.4392 15.2024C17.5362 15.2216 17.6367 15.2117 17.7281 15.1738C17.8194 15.136 17.8974 15.0718 17.9523 14.9896C18.0072 14.9073 18.0364 14.8106 18.0363 14.7118V12.3243L19.675 12.3245ZM15.5181 18.1274C15.6507 18.1274 15.7778 18.1801 15.8716 18.2739C15.9654 18.3677 16.0181 18.4948 16.0181 18.6274C16.0181 18.76 15.9654 18.8872 15.8716 18.981C15.7778 19.0748 15.6507 19.1274 15.5181 19.1274H13.3443C13.2117 19.1274 13.0845 19.0748 12.9908 18.981C12.897 18.8872 12.8443 18.76 12.8443 18.6274C12.8443 18.4948 12.897 18.3677 12.9908 18.2739C13.0845 18.1801 13.2117 18.1274 13.3443 18.1274H15.5181Z" fill="#FFAD32"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5114_2447">
                                 <rect width="32" height="32" fill="white"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </figure>
                        <div class="card-content">
                           <h5 class="title">Order Processing</h5>
                           <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="capabilities-card h-100">
                     <div class="capabilities-card-inner h-100">
                        <figure>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                           <g clip-path="url(#clip0_5114_2454)">
                              <path d="M14.1621 9.24219C11.3448 10.0085 9.22862 12.4941 9.01562 15.4975H12.6916C12.7531 13.0886 13.2568 10.6584 14.1621 9.24219Z" fill="#4CA5F8"/>
                              <path d="M9.01562 16.5C9.22862 19.5034 11.3448 21.989 14.1621 22.7553C13.2567 21.339 12.7531 18.9089 12.6916 16.5H9.01562Z" fill="#4CA5F8"/>
                              <path d="M18.3038 15.5C18.2052 11.4594 16.9255 9 15.9976 9C15.0697 9 13.7899 11.4594 13.6914 15.5H18.3038Z" fill="#4CA5F8"/>
                              <path d="M13.6914 16.5C13.79 20.5406 15.0697 23 15.9976 23C16.9255 23 18.2053 20.5406 18.3038 16.5H13.6914Z" fill="#4CA5F8"/>
                              <path d="M27.8358 27.1287L25.9867 25.2796L26.7933 24.4731C26.9272 24.3391 26.974 24.1411 26.9141 23.9615L26.3014 22.1232C26.8924 21.1315 27.3338 20.067 27.6162 18.9523L29.3475 18.0867C29.5169 18.002 29.6239 17.8289 29.6239 17.6395V14.3583C29.6239 14.1689 29.5169 13.9958 29.3475 13.9111L27.6162 13.0455C27.3337 11.9308 26.8924 10.8663 26.3014 9.87458L26.9141 8.03633C26.974 7.85664 26.9272 7.65858 26.7933 7.52464L25.9867 6.71808L27.8358 4.86902C28.2263 5.1212 28.675 5.2477 29.1239 5.2477C29.7321 5.2477 30.3403 5.0162 30.8032 4.5532C31.2518 4.10464 31.4989 3.5082 31.4989 2.87383C31.4989 2.23945 31.2518 1.64302 30.8032 1.19445C29.8772 0.268516 28.3705 0.268516 27.4445 1.19445C26.9959 1.64302 26.7489 2.23945 26.7489 2.87383C26.7489 3.33808 26.8817 3.78164 27.1284 4.16214L25.2797 6.01089L24.4732 5.20433C24.3392 5.07039 24.1413 5.0237 23.9614 5.08352L22.1233 5.69627C21.1316 5.10533 20.0671 4.66389 18.9524 4.38133L18.0868 2.65014C18.0021 2.48077 17.8289 2.37377 17.6396 2.37377H14.3583C14.1689 2.37377 13.9958 2.48077 13.9111 2.65014L13.0455 4.38133C11.9308 4.66389 10.8663 5.10527 9.87463 5.69627L8.03638 5.08352C7.85663 5.02364 7.65862 5.07039 7.52469 5.20433L6.71812 6.01089L4.869 4.16195C5.46294 3.24233 5.35794 1.99927 4.55325 1.19452C3.62725 0.268516 2.1205 0.268578 1.1945 1.19452C0.2685 2.12052 0.2685 3.62727 1.1945 4.55327C1.6575 5.01627 2.26569 5.24777 2.87388 5.24777C3.32275 5.24777 3.77144 5.12127 4.16194 4.86908L6.011 6.71814L5.20444 7.5247C5.0705 7.65864 5.02375 7.8567 5.08362 8.03639L5.69637 9.87464C5.10544 10.8664 4.66394 11.9309 4.38144 13.0455L2.65025 13.9111C2.48081 13.9958 2.37388 14.169 2.37388 14.3583V17.6396C2.37388 17.829 2.48088 18.0021 2.65025 18.0868L4.38144 18.9524C4.66394 20.067 5.10544 21.1315 5.69637 22.1233L5.08362 23.9615C5.02375 24.1411 5.0705 24.3393 5.20444 24.4731L6.011 25.2797L4.16194 27.1287C3.24231 26.5348 1.99925 26.6398 1.1945 27.4445C0.2685 28.3705 0.2685 29.8773 1.1945 30.8033C1.6575 31.2663 2.26569 31.4978 2.87388 31.4978C3.48206 31.4978 4.09025 31.2663 4.55325 30.8033C5.35794 29.9985 5.46294 28.7555 4.869 27.8358L6.71806 25.9868L7.52462 26.7933C7.65856 26.9273 7.85669 26.974 8.03631 26.9141L9.87456 26.3014C10.8663 26.8923 11.9307 27.3338 13.0454 27.6163L13.9111 29.3475C13.9957 29.517 14.1689 29.6239 14.3582 29.6239H17.6395C17.8289 29.6239 18.002 29.5169 18.0867 29.3475L18.9523 27.6163C20.0671 27.3338 21.1316 26.8924 22.1232 26.3014L23.9614 26.9141C24.1409 26.974 24.3391 26.9273 24.4731 26.7933L25.2796 25.9868L27.1284 27.8355C26.8816 28.216 26.7488 28.6596 26.7488 29.1238C26.7488 29.7582 26.9959 30.3546 27.4444 30.8032C27.9074 31.2662 28.5157 31.4977 29.1238 31.4977C29.732 31.4977 30.3402 31.2662 30.8032 30.8032C31.2517 30.3546 31.4988 29.7582 31.4988 29.1238C31.4988 28.4895 31.2517 27.893 30.8032 27.4445C29.9985 26.6398 28.7554 26.5348 27.8358 27.1287ZM15.9989 23.9989C11.5876 23.9989 7.99887 20.4101 7.99887 15.9989C7.99887 11.5876 11.5876 7.99889 15.9989 7.99889C20.4101 7.99889 23.9989 11.5876 23.9989 15.9989C23.9989 20.4101 20.4101 23.9989 15.9989 23.9989Z" fill="#4CA5F8"/>
                              <path d="M17.8359 22.7553C20.6532 21.989 22.7694 19.5034 22.9824 16.5H19.3064C19.2449 18.9089 18.7413 21.3391 17.8359 22.7553Z" fill="#4CA5F8"/>
                              <path d="M17.8359 9.24219C18.7413 10.6585 19.2449 13.0886 19.3064 15.4975H22.9824C22.7694 12.4941 20.6532 10.0085 17.8359 9.24219Z" fill="#4CA5F8"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5114_2454">
                                 <rect width="32" height="32" fill="white"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </figure>
                        <div class="card-content">
                           <h5 class="title">Multi-channel Integration</h5>
                           <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="capabilities-card h-100">
                     <div class="capabilities-card-inner h-100">
                        <figure>
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                           <g clip-path="url(#clip0_5114_2469)">
                              <path d="M7.5625 15.0625H0V32H16.9375V24.4375H7.5625C7.5625 20.2659 7.5625 19.2324 7.5625 15.0625Z" fill="#3CD3B8"/>
                              <path d="M9.4375 15.0625H16.9375V22.5625H9.4375V15.0625Z" fill="#3CD3B8"/>
                              <path d="M9.4375 0V13.1875H18.8125V22.5625H32V0H9.4375ZM28.1875 11.3125H26.3125V7.01318L20.4128 12.9128L19.0872 11.5872L24.9868 5.6875H20.6875V3.8125H28.1875V11.3125Z" fill="#3CD3B8"/>
                           </g>
                           <defs>
                              <clipPath id="clip0_5114_2469">
                                 <rect width="32" height="32" fill="white"/>
                              </clipPath>
                           </defs>
                           </svg>
                        </figure>
                        <div class="card-content">
                           <h5 class="title">Scalability</h5>
                           <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="capabilities-card h-100">
                     <div class="capabilities-card-inner h-100">
                        <figure>
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <g clip-path="url(#clip0_5114_2478)">
                                 <path d="M2.80363 2.71513H2.13337C1.56865 2.71457 1.02679 2.93859 0.62679 3.33799C0.22679 3.7374 0.00135771 4.27953 0 4.84534V13.7561H4.93694V4.84534C4.93558 4.27954 4.71016 3.73742 4.31017 3.33801C3.91018 2.93861 3.36834 2.71459 2.80363 2.71513ZM10.825 7.45928V9.69061H17.1169V7.45928H10.825ZM10.825 7.45928V9.69061H17.1169V7.45928H10.825ZM10.825 7.45928V9.69061H17.1169V7.45928H10.825ZM10.825 7.45928V9.69061H17.1169V7.45928H10.825ZM10.825 7.45928V9.69061H17.1169V7.45928H10.825ZM10.825 7.45928V9.69061H17.1169V7.45928H10.825ZM20.4397 2.71513H5.30456C5.80145 3.31453 6.07866 4.06624 6.09013 4.84534V32L9.13875 29.4474C9.23411 29.3815 9.34722 29.3462 9.46306 29.3462C9.57891 29.3462 9.69202 29.3815 9.78738 29.4474L13.4125 32L17.0305 29.4546C17.1268 29.3876 17.2412 29.3517 17.3584 29.3517C17.4757 29.3517 17.5901 29.3876 17.6864 29.4546L21.3045 32L24.9225 29.4474C25.0202 29.3831 25.1347 29.3495 25.2515 29.3508C25.3684 29.3521 25.4821 29.3882 25.5784 29.4546L28.6198 32V11.8497C23.116 13.7578 18 8.06112 20.4397 2.71513ZM9.67212 6.88167C9.67257 6.7286 9.73346 6.58193 9.84149 6.47369C9.94952 6.36545 10.0959 6.30445 10.2487 6.304H17.6938C17.8465 6.30445 17.9929 6.36545 18.101 6.47369C18.209 6.58193 18.2699 6.7286 18.2703 6.88167V10.2683C18.2699 10.4214 18.209 10.5681 18.101 10.6763C17.9929 10.7846 17.8465 10.8456 17.6938 10.846H10.2487C10.0959 10.8456 9.94952 10.7846 9.84149 10.6763C9.73346 10.5681 9.67257 10.4214 9.67212 10.2683V6.88167ZM24.6486 25.9957H10.2343C10.1585 25.9957 10.0836 25.9808 10.0136 25.9517C9.94366 25.9227 9.8801 25.8801 9.82656 25.8265C9.77302 25.7729 9.73055 25.7092 9.70158 25.6391C9.6726 25.569 9.65769 25.4939 9.65769 25.418C9.65769 25.3422 9.6726 25.267 9.70158 25.197C9.73055 25.1269 9.77302 25.0632 9.82656 25.0096C9.8801 24.9559 9.94366 24.9134 10.0136 24.8843C10.0836 24.8553 10.1585 24.8404 10.2343 24.8404H24.6486C24.7243 24.8404 24.7993 24.8553 24.8693 24.8843C24.9392 24.9134 25.0028 24.9559 25.0563 25.0096C25.1099 25.0632 25.1523 25.1269 25.1813 25.197C25.2103 25.267 25.2252 25.3422 25.2252 25.418C25.2252 25.4939 25.2103 25.569 25.1813 25.6391C25.1523 25.7092 25.1099 25.7729 25.0563 25.8265C25.0028 25.8801 24.9392 25.9227 24.8693 25.9517C24.7993 25.9808 24.7243 25.9957 24.6486 25.9957ZM24.6486 22.3852H10.2343C10.1585 22.3852 10.0836 22.3702 10.0136 22.3412C9.94366 22.3122 9.8801 22.2696 9.82656 22.216C9.77302 22.1623 9.73055 22.0986 9.70158 22.0286C9.6726 21.9585 9.65769 21.8834 9.65769 21.8075C9.65769 21.7316 9.6726 21.6565 9.70158 21.5864C9.73055 21.5163 9.77302 21.4527 9.82656 21.399C9.8801 21.3454 9.94366 21.3028 10.0136 21.2738C10.0836 21.2448 10.1585 21.2298 10.2343 21.2298H24.6486C24.8015 21.2298 24.9482 21.2907 25.0563 21.399C25.1644 21.5074 25.2252 21.6543 25.2252 21.8075C25.2252 21.9607 25.1644 22.1076 25.0563 22.216C24.9482 22.3243 24.8015 22.3852 24.6486 22.3852ZM24.6486 18.7747H10.2343C10.0813 18.7747 9.93469 18.7138 9.82656 18.6055C9.71843 18.4972 9.65769 18.3502 9.65769 18.197C9.65769 18.0438 9.71843 17.8969 9.82656 17.7885C9.93469 17.6802 10.0813 17.6193 10.2343 17.6193H24.6486C24.8015 17.6193 24.9482 17.6802 25.0563 17.7885C25.1644 17.8969 25.2252 18.0438 25.2252 18.197C25.2252 18.3502 25.1644 18.4972 25.0563 18.6055C24.9482 18.7138 24.8015 18.7747 24.6486 18.7747ZM24.6486 15.1642H10.2343C10.1585 15.1642 10.0836 15.1492 10.0136 15.1202C9.94366 15.0911 9.8801 15.0486 9.82656 14.995C9.77302 14.9413 9.73055 14.8776 9.70158 14.8075C9.6726 14.7375 9.65769 14.6623 9.65769 14.5865C9.65769 14.5106 9.6726 14.4355 9.70158 14.3654C9.73055 14.2953 9.77302 14.2317 9.82656 14.178C9.8801 14.1244 9.94366 14.0818 10.0136 14.0528C10.0836 14.0238 10.1585 14.0088 10.2343 14.0088H24.6486C24.7243 14.0088 24.7993 14.0238 24.8693 14.0528C24.9392 14.0818 25.0028 14.1244 25.0563 14.178C25.1099 14.2317 25.1523 14.2953 25.1813 14.3654C25.2103 14.4355 25.2252 14.5106 25.2252 14.5865C25.2252 14.6623 25.2103 14.7375 25.1813 14.8075C25.1523 14.8776 25.1099 14.9413 25.0563 14.995C25.0028 15.0486 24.9392 15.0911 24.8693 15.1202C24.7993 15.1492 24.7243 15.1642 24.6486 15.1642ZM17.1171 7.45928H10.825V9.69061H17.1169L17.1171 7.45928ZM10.8252 7.45928V9.69061H17.1171V7.45928H10.8252ZM10.8252 7.45928V9.69061H17.1171V7.45928H10.8252ZM10.8252 7.45928V9.69061H17.1171V7.45928H10.8252ZM10.8252 7.45928V9.69061H17.1171V7.45928H10.8252ZM26.4865 0C25.0274 0.00492189 23.6298 0.589095 22.5998 1.62453C21.5698 2.65997 20.9915 4.06223 20.9915 5.5241C20.9915 6.98597 21.5698 8.38824 22.5998 9.42368C23.6298 10.4591 25.0274 11.0433 26.4865 11.0482C29.432 11.0482 32 8.67623 32 5.52432C31.9988 4.05958 31.4176 2.65516 30.3839 1.61941C29.3501 0.583655 27.9484 0.00122721 26.4865 0ZM25.9678 4.9464H27.0056C27.4347 4.94547 27.8466 5.11535 28.1507 5.41867C28.4547 5.72199 28.6261 6.13391 28.6271 6.56381V7.08356C28.6257 7.50347 28.462 7.90653 28.1704 8.20813C27.8788 8.50974 27.4819 8.68644 27.0631 8.70115V9.1708C27.0615 9.32298 27 9.46838 26.8921 9.57543C26.7841 9.68247 26.6384 9.74252 26.4865 9.74252C26.3346 9.74252 26.1888 9.68247 26.0809 9.57543C25.9729 9.46838 25.9115 9.32298 25.9099 9.1708V8.70115C25.4918 8.68613 25.0958 8.5091 24.8055 8.20735C24.5151 7.90561 24.3529 7.50272 24.3532 7.08356C24.3532 6.93035 24.4139 6.78342 24.5221 6.67509C24.6302 6.56675 24.7768 6.50589 24.9298 6.50589C25.0827 6.50589 25.2293 6.56675 25.3374 6.67509C25.4456 6.78342 25.5063 6.93035 25.5063 7.08356C25.5053 7.14487 25.5166 7.20576 25.5393 7.26269C25.562 7.31962 25.5959 7.37144 25.6388 7.41515C25.6817 7.45886 25.7329 7.49357 25.7893 7.51727C25.8458 7.54097 25.9064 7.55319 25.9676 7.55321H27.0054C27.067 7.55337 27.1281 7.54134 27.185 7.51779C27.242 7.49425 27.2937 7.45966 27.3373 7.41602C27.3808 7.37237 27.4153 7.32054 27.4388 7.26348C27.4623 7.20643 27.4744 7.14528 27.4742 7.08356V6.56381C27.4729 6.44033 27.4229 6.32238 27.3351 6.23577C27.2472 6.14916 27.1287 6.10094 27.0054 6.10168H25.9676C25.5396 6.10115 25.1292 5.93056 24.8266 5.62732C24.5239 5.32409 24.3537 4.91297 24.3532 4.48415V3.95714C24.3532 3.53876 24.5157 3.13679 24.8062 2.83627C25.0967 2.53574 25.4925 2.36023 25.9099 2.34687V1.87722C25.9115 1.72504 25.9729 1.57964 26.0809 1.47259C26.1888 1.36555 26.3346 1.3055 26.4865 1.3055C26.6384 1.3055 26.7841 1.36555 26.8921 1.47259C27 1.57964 27.0615 1.72504 27.0631 1.87722V2.34687C27.4812 2.35993 27.8779 2.53511 28.1697 2.83549C28.4614 3.13587 28.6254 3.538 28.6271 3.95714C28.6255 4.10931 28.564 4.25471 28.4561 4.36176C28.3481 4.46881 28.2024 4.52885 28.0505 4.52885C27.8986 4.52885 27.7528 4.46881 27.6449 4.36176C27.5369 4.25471 27.4755 4.10931 27.4739 3.95714C27.4726 3.83366 27.4226 3.7157 27.3347 3.62909C27.2469 3.54248 27.1284 3.49427 27.0051 3.495H25.9676C25.9069 3.49481 25.8469 3.50664 25.7908 3.52979C25.7348 3.55295 25.6839 3.58698 25.641 3.62993C25.5981 3.67289 25.5641 3.72391 25.541 3.78006C25.5179 3.83622 25.5061 3.89639 25.5063 3.95714V4.48427C25.5061 4.54501 25.5179 4.60519 25.541 4.66135C25.5641 4.7175 25.5981 4.76852 25.641 4.81147C25.6839 4.85442 25.7348 4.88846 25.7908 4.91161C25.8469 4.93477 25.9069 4.9466 25.9676 4.9464H25.9678Z" fill="#7B51D6"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_5114_2478">
                                    <rect width="32" height="32" fill="white"/>
                                 </clipPath>
                              </defs>
                              </svg>
                        </figure>
                        <div class="card-content">
                           <h5 class="title">Invoice and Billing</h5>
                           <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- capabilities - 6 End -->

      <!-- choose-us - 6 Start -->
      <div class="d-non choose_us-style-five">
         <div class="outer-layer">
            <div class="container">
               <div class="row justify-content-center">
               <div class="col-md-7 text-center">
                  <div class="section-header">
                     <h2 class="title">Why Choose Saasto?</h2>
                     <p class="description my-0 mx-auto">Your HR Management Solution, Simplified – Choose Us for Efficiency and Excellence.</p>
                  </div>
               </div>
            </div>
               <div class="row pt-80 g-4 g-xl-40">
                  <div class="col-md-6 col-lg-4">
                     <div class="choose_us-card position-relative h-100">
                        <div class="choose_us-card-inner h-100 position-relative overflow-hidden">
                           <figure>
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                 <g clip-path="url(#clip0_3787_674)">
                                    <path d="M16.2552 26.7594C15.5688 26.7594 15.1503 26.9854 14.5476 27.2448V21.8293H9.00659C9.66783 22.6413 9.74317 23.8633 9.29955 24.7924C8.51275 26.4413 6.35325 26.4413 5.56645 24.7924C5.12284 23.8633 5.19817 22.6413 5.85941 21.8293H0.376953V34.4515C0.376953 35.3053 1.07168 36 1.92543 36H14.5476V30.5845C15.1419 30.8524 15.5688 31.07 16.2552 31.07C17.4772 31.07 18.7495 30.2246 18.7495 28.9105C18.7495 27.6048 17.4772 26.7594 16.2552 26.7594Z" fill="currentColor"/>
                                    <path d="M35.6243 1.54848C35.6243 0.694723 34.9296 0 34.0758 0H21.4536V5.43223C20.4157 4.98025 19.6122 4.69566 18.4906 5.23135C16.8417 6.01815 16.8417 8.17765 18.4906 8.96444C19.6122 9.50014 20.4157 9.22392 21.4536 8.76356V14.1623H26.9612C26.3 13.3504 26.2246 12.1284 26.6682 11.1993C27.0282 10.446 27.681 9.96049 28.5348 9.96049C29.3885 9.96049 30.0414 10.446 30.4013 11.1993C30.845 12.1284 30.7696 13.3504 30.1084 14.1623H35.6159C35.6243 14.1707 35.6243 2.59475 35.6243 1.54848Z" fill="currentColor"/>
                                    <path d="M5.56701 17.1337C6.35381 18.7826 8.51331 18.7826 9.3001 17.1337C9.83579 16.0121 9.55958 15.2085 9.09922 14.1706H14.5398V8.67979C13.7279 9.34103 12.5059 9.41636 11.5768 8.97274C9.92787 8.18595 9.92787 6.02645 11.5768 5.23965C12.5059 4.79603 13.7279 4.87137 14.5398 5.53261V0.00830078H1.91762C1.06386 0.00830078 0.369141 0.703024 0.369141 1.55678V14.179H5.75116C5.30754 15.2085 5.03132 16.0121 5.56701 17.1337Z" fill="currentColor"/>
                                    <path d="M30.4092 18.8662C30.0493 18.1129 29.3964 17.6274 28.5427 17.6274C27.6889 17.6274 27.036 18.1129 26.6761 18.8662C26.1404 19.9878 26.4166 20.7914 26.877 21.8293H21.4531V27.3368C21.9302 26.9518 22.5412 26.7509 23.1606 26.7509C24.1567 26.7509 25.1946 27.2866 25.5461 28.2659C25.6968 28.6844 25.6968 29.1364 25.5461 29.5549C25.1946 30.5342 24.1567 31.0699 23.1606 31.0699C22.5496 31.0699 21.9302 30.8774 21.4531 30.484V35.9916H34.0753C34.9291 35.9916 35.6238 35.2969 35.6238 34.4431V21.8293H30.2083C30.6687 20.7914 30.9449 19.9878 30.4092 18.8662Z" fill="currentColor"/>
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_3787_674">
                                       <rect width="36" height="36" fill="white"/>
                                    </clipPath>
                                 </defs>
                                 </svg>
                           </figure>
                           <div class="card-content">
                              <h5 class="sub-title">Seamless Solutions</h5>
                              <h4 class="title">Seamless Solutions for the Modern Era</h4>
                           </div>
                           <div class="card-details position-absolute position-relative">
                              <div class="card-content">
                                 <h5 class="sub-title">Seamless Solutions</h5>
                                 <h4 class="title">Seamless Solutions for the Modern Era</h4>
                                 <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="choose_us-card position-relative h-100">
                        <div class="choose_us-card-inner h-100 position-relative overflow-hidden">
                           <figure>
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <path d="M15.7687 22.497C15.5287 22.1724 15.2709 21.8694 14.9983 21.5816L23.068 17.6631C23.2983 17.5513 23.5769 17.5975 23.7561 17.7771L25.4213 19.4391L32.0286 15.7242L31.3905 15.5575C31.0743 15.4749 30.8869 15.1585 30.9716 14.8507C31.0564 14.5428 31.3815 14.3603 31.6975 14.4427L33.7174 14.9703C34.0335 15.0529 34.2209 15.3692 34.1363 15.677L33.5946 17.6461C33.5236 17.9039 33.2842 18.074 33.0225 18.074C32.9717 18.074 32.9202 18.0676 32.8688 18.0543C32.5526 17.9717 32.365 17.6553 32.4498 17.3475L32.6213 16.724L25.6146 20.6633C25.3798 20.7953 25.0835 20.7549 24.8939 20.5659L23.2094 18.8844L15.7687 22.497ZM28.2497 10.5363C29.2523 10.5363 30.068 9.74301 30.068 8.76793C30.068 7.79286 29.2523 6.99711 28.2497 6.99711C27.247 6.99711 26.4313 7.79149 26.4313 8.76793C26.4313 9.74438 27.247 10.5363 28.2497 10.5363ZM23.037 10.4771L21.7108 9.88144V7.65421L23.0371 7.05843L23.3219 6.38777L22.8174 5.05266L24.4347 3.47763L25.8057 3.96895L26.4943 3.69159L27.1061 2.39997H29.3932L30.0049 3.69151L30.6936 3.96888L32.0646 3.47756L33.6818 5.05259L33.1774 6.3877L33.4622 7.05836L34.7885 7.65414V9.88136L33.4623 10.4771L33.1775 11.1478L33.682 12.4829L32.0647 14.0579L30.6938 13.5665L30.005 13.8439L29.3933 15.1355H27.1063L26.4945 13.8438L25.8058 13.5665L24.4349 14.0577L22.8175 12.4828L23.322 11.1477L23.0372 10.4769L23.037 10.4771ZM25.2461 8.76793C25.2461 10.3794 26.5935 11.6905 28.2497 11.6905C29.9059 11.6905 31.2532 10.3794 31.2532 8.76793C31.2532 7.15647 29.9059 5.84292 28.2497 5.84292C26.5935 5.84292 25.2461 7.15502 25.2461 8.76793ZM1.88074 18.2241V10.7557C1.88074 7.01977 5.00179 3.98042 8.83801 3.98042C10.8572 3.98042 12.8308 4.65894 14.2386 5.81681L15.378 4.70857C13.6711 3.25458 11.2714 2.3999 8.83794 2.3999C4.10675 2.3999 0.257704 6.14835 0.257704 10.7557V16.8026C0.892668 17.2185 1.43371 17.6931 1.88074 18.2241ZM1.03104 26.9067V29.0031H11.5431V26.9067C11.5431 26.8079 11.5535 26.7114 11.573 26.6181H1.32734C1.16371 26.6181 1.03104 26.7473 1.03104 26.9067ZM11.5431 31.3864V30.1234H0.296297C0.132667 30.1234 0 30.2526 0 30.412V33.5999H10.4341C10.3545 33.3806 10.3196 33.1458 10.3353 32.91C10.3826 32.1989 10.8765 31.6086 11.5431 31.3864H11.5431ZM35.9988 32.9844C35.9784 32.6777 35.7029 32.4457 35.3872 32.4457H34.7885V19.3921C34.7885 19.2328 34.6558 19.1036 34.4922 19.1036H30.4561C30.2925 19.1036 30.1598 19.2328 30.1598 19.3921V32.4457H28.9766V24.2321C28.9766 24.0728 28.8439 23.9436 28.6803 23.9436H24.6463C24.4827 23.9436 24.35 24.0728 24.35 24.2321V32.4457H23.1668V22.627C23.1668 22.4677 23.0341 22.3385 22.8705 22.3385H18.8344C18.6708 22.3385 18.5381 22.4677 18.5381 22.627V32.4457H17.3548V26.9067C17.3548 26.7473 17.2222 26.6181 17.0585 26.6181H13.0245C12.8609 26.6181 12.7282 26.7473 12.7282 26.9067V32.4457H12.1296C11.8139 32.4457 11.5383 32.6777 11.5179 32.9844C11.4956 33.3205 11.7689 33.5999 12.1093 33.5999H35.4074C35.7478 33.5999 36.021 33.3205 35.9987 32.9844H35.9988ZM5.89164 9.76053C6.21905 9.76053 6.48423 10.0188 6.48423 10.3376C6.48423 11.8136 7.71757 13.0146 9.23387 13.0146H13.7198C14.0472 13.0146 14.3124 13.2729 14.3124 13.5917C14.3124 15.0676 15.5442 16.2687 17.0591 16.2687C18.5043 16.2687 19.6924 15.1773 19.8006 13.7966L13.822 7.00995C12.6391 5.85288 10.7316 5.1344 8.83831 5.1344C5.65534 5.1344 3.06571 7.6563 3.06571 10.756V20.3336C3.25238 20.8876 3.37238 21.4799 3.42497 22.1096C3.50941 23.1304 3.41756 24.2406 3.14719 25.464H17.1502C16.8665 24.2781 16.3761 23.3194 15.7687 22.497L14.2176 23.2501C14.1324 23.2913 14.042 23.3107 13.9531 23.3107C13.7361 23.3107 13.5265 23.1939 13.4228 22.9912C13.2768 22.7055 13.3954 22.3592 13.6887 22.2171L14.9983 21.5816C14.2872 20.8256 13.485 20.1778 12.6924 19.5387C10.8554 18.0556 9.11313 16.6496 8.88572 14.1537C6.87831 13.982 5.29905 12.3358 5.29905 10.3376C5.29905 10.0188 5.56497 9.76053 5.89164 9.76053Z" fill="currentColor"/>
                              </svg>
                           </figure>
                           <div class="card-content">
                              <h5 class="sub-title">Smart HR Strategy</h5>
                              <h4 class="title">The Smart Choice for Your HR Strategy</h4>
                           </div>
                           <div class="card-details position-absolute position-relative">
                              <div class="card-content">
                                 <h5 class="sub-title">Smart HR Strategy</h5>
                                 <h4 class="title">The Smart Choice for Your HR Strategy</h4>
                                 <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="choose_us-card position-relative h-100">
                        <div class="choose_us-card-inner h-100 position-relative overflow-hidden">
                           <figure>
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                              <g clip-path="url(#clip0_3787_617)">
                                 <path d="M10.6426 19.0547C10.7161 21.3135 11.0161 23.4617 11.5033 25.3828H16.9448V19.0547H10.6426Z" fill="currentColor"/>
                                 <path d="M12.1504 8.50778H16.9453V2.29834C15.0156 2.92131 13.3058 5.27706 12.1504 8.50778Z" fill="currentColor"/>
                                 <path d="M19.0547 15.0303V20.9699C20.2797 20.533 21.1641 19.3733 21.1641 18.0001C21.1641 16.6269 20.2797 15.4671 19.0547 15.0303Z" fill="currentColor"/>
                                 <path d="M19.0547 10.7239V12.8334C21.4587 13.3234 23.2734 15.4537 23.2734 18.0001C23.2734 20.5465 21.4587 22.6768 19.0547 23.1668V25.2763C22.623 24.759 25.3828 21.7094 25.3828 18.0001C25.3828 14.2908 22.623 11.2412 19.0547 10.7239Z" fill="currentColor"/>
                                 <path d="M11.5033 10.6172C11.016 12.5383 10.7161 14.6865 10.6426 16.9453H16.9448V10.6172H11.5033Z" fill="currentColor"/>
                                 <path d="M12.1504 27.4922C13.3058 30.7229 15.0156 33.0787 16.9453 33.7016V27.4922H12.1504Z" fill="currentColor"/>
                                 <path d="M9.91649 27.4922H2.74609C5.74302 32.2684 10.9882 35.5974 16.9449 35.9466V35.8891C13.9388 35.2872 11.4018 32.0611 9.91649 27.4922Z" fill="currentColor"/>
                                 <path d="M34.9452 12.7266H32.9098C32.7254 12.2044 32.5122 11.6894 32.2712 11.1868L33.6616 9.79636C34.0717 9.3863 34.0751 8.7184 33.6616 8.30496L27.695 2.26807C27.2833 1.85632 26.6154 1.85632 26.2036 2.26807L24.8132 3.6585C24.3116 3.41852 23.7966 3.20534 23.2734 3.02098V1.05469C23.2734 0.471727 22.8017 0 22.2188 0H19.0547V8.61441C23.7878 9.14688 27.4922 13.1269 27.4922 18C27.4922 22.8731 23.7878 26.8531 19.0547 27.3856V36H22.2188C22.8017 36 23.2734 35.5283 23.2734 34.9453V32.9791C23.7966 32.7947 24.3117 32.5815 24.8132 32.3416L26.2036 33.732C26.6002 34.1286 27.3006 34.1265 27.695 33.732L33.6616 27.6951C34.0751 27.2817 34.0717 26.6138 33.6616 26.2037L32.2712 24.8133C32.5112 24.3117 32.7244 23.7967 32.9087 23.2735H34.9452C35.5282 23.2735 35.9999 22.8018 35.9999 22.2188V13.7812C35.9999 13.1983 35.5282 12.7266 34.9452 12.7266Z" fill="currentColor"/>
                                 <path d="M1.60917 10.6172C0.723445 12.567 0.131555 14.7004 0 16.9453H8.53509C8.60182 14.6894 8.87449 12.5579 9.3278 10.6172H1.60917Z" fill="currentColor"/>
                                 <path d="M8.53509 19.0547H0C0.131555 21.2996 0.723445 23.433 1.60917 25.3828H9.3278C8.87449 23.4421 8.60182 21.3106 8.53509 19.0547Z" fill="currentColor"/>
                                 <path d="M2.74609 8.50784H9.91649C11.4018 3.93894 13.9388 0.712787 16.9449 0.110912V0.0534668C10.9882 0.402639 5.74302 3.73165 2.74609 8.50784Z" fill="currentColor"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_3787_617">
                                    <rect width="36" height="36" fill="white"/>
                                 </clipPath>
                              </defs>
                              </svg>
                           </figure>
                           <div class="card-content">
                              <h5 class="sub-title">Future Technology</h5>
                              <h4 class="title">Experience the Future of HR Technology</h4>
                           </div>
                           <div class="card-details position-absolute position-relative">
                              <div class="card-content">
                                 <h5 class="sub-title">Future Technology</h5>
                                 <h4 class="title">Experience the Future of HR Technology</h4>
                                 <p class="description">Access a user-friendly dashboard providing an overview of sales metrics, performance, and key insights at a glance.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose-us - 6 End -->

<?php
get_footer();