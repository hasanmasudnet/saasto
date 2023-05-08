<?php 

/**
*
* Template Name: Services
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>

<?php get_header(); ?>


<!-- ===============  service wrapper start =============== -->
<div class="service-wrapper pt-xxl section-gap-xl-bottom position-relative">
    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/line-svg-blue.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="position-absolute top-0 start-0 corner-line low-index">
    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes//hero-square-dots.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="position-absolute bottom-0 start-0 corner-line low-index">

    <div class="container-fluid">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="row justify-content-xxl-end justify-content-center">
                    <div class="col-xxl-9 col-xl-9 col-lg-12 service-main-content">
                        <h1 class="text-bright-gray">We Serve lot of services For Customers</h1>
                        <p class="text-purple-haze-700 mt-4 body-disply-1">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at </p>
                        <div class="hero-btn mt-5">
                            <a href="#" class="btn-fill-rounded">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-service-slide">
                                <div class="service-slide-img">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/service/service-one.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                                <div class="service-slide-overlay featured d-flex align-items-end justify-content-between">
                                    <h5 class="text-white">Our business <br> goes on fire</h5>

                                    <div class="text-center text-white">
                                        <h4>100</h4>
                                        <span>Topic</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-v2">
                            <div class="single-service-slide">
                                <div class="service-slide-img">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/service/service-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                                <div class="service-slide-overlay d-flex align-items-end">
                                    <h5 class="topic"><a href="#" class="text-white ">Writing</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-service-slide">
                                <div class="service-slide-img">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/service/service-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                                <div class="service-slide-overlay d-flex align-items-end">
                                    <h5 class="topic"><a href="#" class="text-white ">Business</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>

   <div class="service-cards-wrapper position-relative z-index-1">
       <div class="container">
           <div class="row justify-content-center pb-60">
               <div class="col-lg-7">
                   <h3 class="text-bright-gray text-center">Better Agency/SEO Solution At Your Fingertips</h3>
               </div>
           </div>
           <div class="row justify-content-center gy-4">
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-card-style">
                       <div class="service-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/line-chart.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                       </div>
                       <div class="service-card-info">
                           <h5 class="text-purple-haze">Analytics and reporting</h5>
                           <p class="body-disply-1 text-purple-haze-700">Increase your team’s productivity and save time with a bot that answers and fields customer inquiries</p>

                           <div class="service-card-btn">
                               <a href="#">Read details <i class="bi bi-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-card-style">
                       <div class="service-icon bg-2">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/line-chart.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                       </div>
                       <div class="service-card-info">
                           <h5 class="text-purple-haze">Creative development</h5>
                           <p class="body-disply-1 text-purple-haze-700">Increase your team’s productivity and save time with a bot that answers and fields customer inquiries</p>

                           <div class="service-card-btn">
                               <a href="#">Read details <i class="bi bi-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-card-style">
                       <div class="service-icon bg-3">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/line-chart.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                       </div>
                       <div class="service-card-info">
                           <h5 class="text-purple-haze">Email marketing</h5>
                           <p class="body-disply-1 text-purple-haze-700">Increase your team’s productivity and save time with a bot that answers and fields customer inquiries</p>

                           <div class="service-card-btn">
                               <a href="#">Read details <i class="bi bi-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-card-style">
                       <div class="service-icon bg-4">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/line-chart.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                       </div>
                       <div class="service-card-info">
                           <h5 class="text-purple-haze">Business analytics</h5>
                           <p class="body-disply-1 text-purple-haze-700">Increase your team’s productivity and save time with a bot that answers and fields customer inquiries</p>

                           <div class="service-card-btn">
                               <a href="#">Read details <i class="bi bi-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-card-style">
                       <div class="service-icon bg-5">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/line-chart.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                       </div>
                       <div class="service-card-info">
                           <h5 class="text-purple-haze">Video Marketing</h5>
                           <p class="body-disply-1 text-purple-haze-700">Increase your team’s productivity and save time with a bot that answers and fields customer inquiries</p>

                           <div class="service-card-btn">
                               <a href="#">Read details <i class="bi bi-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-card-style ">
                       <div class="service-icon bg-6">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/line-chart.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                       </div>
                       <div class="service-card-info">
                           <h5 class="text-purple-haze">UX process of businessg</h5>
                           <p class="body-disply-1 text-purple-haze-700">Increase your team’s productivity and save time with a bot that answers and fields customer inquiries</p>

                           <div class="service-card-btn">
                               <a href="#">Read details <i class="bi bi-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- ===============  service wrapper end =============== -->

    <!-- about company  -->
    <div class="about-company-wrapper section-gap-xl-top position-relative z-index-1">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-7">
                    <div class="about-company-header">
                        <h3 class="text-bright-gray">We are in 6 years experience in this field</h3>
                        <p class="body-disply-1 text-purple-haze-700 pt-20">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at </p>
                    </div>
                    <div class="company-clients wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="swiper company-clients-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-client-logo">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-logo-one.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                                <div class="swiper-slide single-client-logo">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-client-logo-two.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                                <div class="swiper-slide single-client-logo">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-client-logo-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                                <div class="swiper-slide single-client-logo">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-client-logo-four.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row gy-4">
                        <div class="col-lg-12 col-md-6 wow fadeInRight" >
                            <div class="about-fact-card">
                                <h1>15k</h1>
                                <h5>Happy customer</h5>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInRight" data-wow-delay="0.3s">
                            <div class="about-fact-card">
                                <h1>400+</h1>
                                <h5>Complete Work</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- company experience  -->
    <div class="about-experience-wrap section-gap-xl-top position-relative z-index-1 pb-80">
        <div class="container-fluid">
            <div class="row gy-4 align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 text-lg-end">
                    <div class="position-relative about-experience-screens d-lg-inline-block d-flex flex-wrap flex-sm-nowrap">
                        <div class="about-experience-bg d-lg-block d-none">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/experience-bg.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                        </div>
                        <div class="wow fadeInDown experience-screen screen-1 text-start position-absolute start-0">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/experince-screen-one.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                        </div>
                        <div class="wow fadeInUp experience-screen screen-2 position-absolute  end-0">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/experince-screen-two.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                        </div>
                        <div class="experience-screen screen-3 position-absolute d-none d-lg-block">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/experince-screen-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="experience-content">
                        <h3 class="text-bright-gray">We are in 6 years experience in this field</h3>
                        <p class="body-disply-1 mt-4 text-purple-haze-700">Our co-founders Tuomo Riekki and Kristo Ovaska are serial entrepreneurs who, back in 2013, noticed how advanced marketers were starting to ramp up their Facebook advertising, but the platform was unstable and cumber-some to manage. </p>

                        <ul class="experience-list mt-5">
                            <li class="d-flex align-items-center">
                                <span></span>
                                <h5> Get insights only Google can give</h5>
                            </li>
                            <li class="d-flex align-items-center">
                                <span></span>
                                <h5> Get insights only Google can give</h5>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- =============== team style start =============== -->
   <div class="team-style-one pt-50 position-relative z-index-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center pb-60">
                <h3 class="text-bright-gray">
                   Our valueabe team member
                </h3>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="team-card-style-one">
                    <div class="team-avater">
                       <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/team/team-one.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                    </div>
                    <div class="team-disc">
                        <h5>Andree lena</h5>
                        <p>UI designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card-style-one">
                    <div class="team-avater">
                       <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/team/team-two.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                    </div>
                    <div class="team-disc">
                        <h5>Mark Busnek</h5>
                        <p>Product designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card-style-one">
                    <div class="team-avater">
                       <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/team/team-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                    </div>
                    <div class="team-disc">
                        <h5>Kristofer salcot</h5>
                        <p>Web designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- =============== team style end =============== -->

    <!-- =============== testimonial style start ============= -->
    <div class="testimonial-style-one position-relative section-gap-xl-top">
        <div class="container"> 
            <div class="testimonial-slider-wrap">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <h3 class="text-bright-gray">See our success stories</h3>
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card-style-one">
                                        <p>Frontegg dramatically sped our go-to-market by cutting our up-front development time</p>
    
                                        <div class="testimonial-bottom">
                                            <h5 class="text-bright-gray">Jhon Kelaven</h5>
                                            <span>Creative designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card-style-one">
                                        <p>Frontegg dramatically sped our go-to-market by cutting our up-front development time</p>
    
                                        <div class="testimonial-bottom">
                                            <h5 class="text-bright-gray">Jahid Hassan</h5>
                                            <span>Creative designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-6 col-xl-5 position-relative">
                       <div class="d-none d-lg-block">
                        <div class="floarting-avater-1 position-absolute  end-0">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-avater-3.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="floarting-avater-2 position-absolute top-0 start-100">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-avater-1.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="floarting-avater-2 position-absolute top-0 start-0">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-avater-2.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="swiper testimonial-thumbs px-lg-4 ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-thumb-style">
                                        <div class="thumb-avater">
                                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testimonial-avater-xl.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-thumb-style">
                                        <div class="thumb-avater">
                                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testimonial-avater-xl2.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
    
                </div>
                <div class="d-none d-lg-block testi-pagination text-center pt-60"></div>
            </div>
        </div>
    </div>
    <!-- =============== testimonial style end ============= -->
    <?php get_footer(); ?>