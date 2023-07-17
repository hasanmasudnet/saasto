<?php 

/**
*
* Template Name: Home Two
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>



<?php get_header( ); ?>

<div class="hero-style-two-wrapper">
        <!-- ===============  hero style start =============== -->
        <div class="hero-style-two position-relative z-index-1">
            <div class="hero-mobil-screen position-absolute low-index anima-trasform-x-1 d-none d-lg-block">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/hero/hero-mobil-screen.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="wow fadeInRight" data-wow-offset="300" data-wow-duration="2s">
            </div>
            <div class="container">
                <div class="row justify-content-center min-vh-100 align-items-center section-gap-xl-bottom section-gap-xl-top">
                    <div class="col-lg-8 ">
                        <div class="hero-contents text-center position-relative mt-100">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-two-ball.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="position-absolute end-100 hero-floting-img-one anima-trasform-y-1 d-none d-lg-block" >
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-two-sheet.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="hero-floting-img-two position-absolute end-0 top-50 d-none d-xl-block low-index fadeInUp wow">

                            <h1 class="text-soft-black wow fadeInUp">A collaborative  Time <span class="d-inline-block position-relative z-index-1">Tracking <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute bottom-0 start-0 low-index" ></span> that you Need</h1>
                            <p class="wow fadeInUp">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                            <div class="hero-btn">
                                <a href="#" class="btn-fill-pill wow fadeInUp">Start 14 Days Trial <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================  hero style end =============== -->

        <!-- ===============  fun-fact style start ============ -->
        <div class="fun-fact-style-two">
            <div class="fun-fact-overlay"></div>
            <div class="fun-fact-bg-wrap">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-4 wow fadeInLeft">
                            <div class="single-fact-style-two">
                                <h2 class="text-soft-black">15k+</h2>
                                <span>Active user</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="single-fact-style-two">
                                <h2 class="text-soft-black">30k</h2>
                                <span>Total Download</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-4 wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="single-fact-style-two">
                                <h2 class="text-soft-black">10k</h2>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- ===============  fun-fact style end =============== -->

    </div>

    <!-- ===============  features style start =============== -->
    <div class="feature-style-two">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-8">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/3d_rocket.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="position-absolute end-0 d-none d-lg-block anima-trasform-z-1 " data-aos="fade-left" data-aos-delay="300">
                    <div class="section-title-2 text-center pb-60">
                        <h2 class="text-soft-black wow fadeInUp">Some excellent <span class="d-inline-block position-relative">features <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute start-0 bottom-0 low-index"></span> for you</h2>
                        <p class="body-disply-2 px-lg-5 pt-3 wow fadeInUp">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" >
                    <div class="feature-card-style-one ">
                        <div class="feature-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/task-list-icon.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                        </div>
                        <div class="feature-disc">
                            <h5>Preset List of Task</h5>
                            <p>Make bill payments easily using <br> the wallet app</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-card-style-one bg-varient-1">
                        <div class="feature-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/bell-icon.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                        </div>
                        <div class="feature-disc">
                            <h5>Reminder of Task</h5>
                            <p>Make bill payments easily using <br> the wallet app</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-card-style-one bg-varient-2">
                        <div class="feature-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/agenda-icon.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                        </div>
                        <div class="feature-disc">
                            <h5>Complecation Report</h5>
                            <p>Make bill payments easily using <br> the wallet app</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- single feature two -->
    <div class="single-feature-style-two section-gap-xl-top section-gap-xl-bottom">
        <div class="container-fluid">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 text-center">
                    <div class="single-feature-two-screen text-center position-relative d-inline-block ">
                        <div class="main-screen"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-two-main-screen.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid"></div>

                        <div class="float-screen-one position-absolute d-none d-lg-block wow fadeInDown anima-trasform-y-1">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/feature-sheet.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                        </div>
                        <div class="float-screen-two position-absolute wow fadeInLeft" data-wow-delay="0.3s">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-two-screen-one.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="circle-shadow-two">
                        </div>
                        <div class="float-screen-three position-absolute wow fadeInRight" data-wow-delay="0.6s">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-two-screen-two.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="circle-shadow-two">
                        </div>
                        <div class="float-screen-four position-absolute wow fadeInLeft" data-wow-delay="0.9s">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-two-screen-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="circle-shadow-two">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start">
                    <div class="feature-analytics-contents">
                        <div class="text-start wow fadeInUp">
                            <h2>
                            Analytics & 
                            <span class="d-inline-block position-relative ">Reporting <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute start-0 bottom-0 low-index"></span>
                             Brackdown
                            </h2>
                            <p class="body-disply-2 pt-3 wow fadeInUp">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                        </div>

                        <div class="feature-card-style-two wow fadeInUp">
                            <div class="feature-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/tracker-icon.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                            </div>
                            <div class="feature-disc">
                                <h5>Automatic event tracking</h5>
                                <p>Time Tracking is never been easier.
                                    Just let the stopwatch run</p>
                            </div>
                        </div>
                        <div class="feature-card-style-two varient-1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/dashbord-icon.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                            </div>
                            <div class="feature-disc">
                                <h5>Customizable dashboard</h5>
                                <p>Time Tracking is never been easier.
                                    Just let the stopwatch run</p>
                            </div>
                        </div>
                        <div class="feature-card-style-two varient-2 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="feature-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/calendar-icon-2.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                            </div>
                            <div class="feature-disc">
                                <h5>Statistics retroactively </h5>
                                <p>Time Tracking is never been easier.
                                    Just let the stopwatch run</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- single feature three -->
    <div class="single-feature-style-three section-gap-xl-top pb-80 position-relative z-index-1">
        <img  class="d-none d-lg-block position-absolute top-0 end-0  low-index" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/3D-focus.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" data-aos="fade-left">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-7">
                    <div class="text-start pb-2">
                        <h2 class="wow fadeInUp">
                        How our  <span class="d-inline-block position-relative">Tracker <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute start-0 bottom-0 low-index"></span> work for you </h2>
                        <p class="body-disply-2 pt-3 wow fadeInUp">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula  </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative z-index-1">
            <img  class="anima-trasform-x-1 d-none d-lg-block position-absolute top-25 start-0 translate-middle-y low-index" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/3d-bord.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" data-aos="fade-right">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-7">
                        <div class="feature-card-style-three wow fadeInUp">
                            <div class="feature-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/min-icon-xl.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                            </div>
                            <div class="feature-disc">
                                <h5>Time Tracking</h5>
                                <p class="body-disply-2">Time Tracking is never been easier.
                                    Just let the stopwatch run</p>
                            </div>
                        </div>
                        <div class="feature-card-style-three varient-1 feature-futured-card wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/hourglass-icon-xl.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                            </div>
                            <div class="feature-disc">
                                <h5>Expenses</h5>
                                <p class="body-disply-2">Time Tracking is never been easier.
                                    Just let the stopwatch run</p>
                            </div>
                        </div>
                        <div class="feature-card-style-three varient-2 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="feature-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/wallet-icon-xl.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                            </div>
                            <div class="feature-disc">
                                <h5>Budget controlling</h5>
                                <p class="body-disply-2">Time Tracking is never been easier.
                                    Just let the stopwatch run</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row align-items-center feature-three-screen">
                            <div class="col-lg-8 col-6 text-end">
                               <div class="feature-single-three-screens text-end">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-three-screen-one.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid wow fadeInDown">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-three-screen-two.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="d-none d-lg-inline-block mt-4 img-fluid wow fadeInUp" data-aos-delay="0.3s">
                               </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="feature-single-three-screens">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-three-screen-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class=" wow fadeInRight" data-aos-delay="0.6s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  features style end =============== -->

    <!-- ===============  partner style start =============== -->
    <div class="partner-style-one pt-80 section-gap-bottom-y-1">
        <div class="container-fluid">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="row gx-lg-5 gx-4 align-items-center">
                        <div class="col-6 text-end">
                           <div class="single-partner-logo">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/client-one.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid ">
                           </div>
                            <div class="single-partner-logo wow zoomIn" data-wow-delay="0.25s">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/client-three.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid mt-lg-5 mt-4">
                            </div>
                            <div class="single-partner-logo wow zoomIn" data-wow-delay="0.5s">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/client-five.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid mt-lg-5 mt-4">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single-partner-logo wow zoomIn" data-wow-delay="0.75s">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/client-two.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                            </div>
                            <div class="single-partner-logo wow zoomIn" data-wow-delay="0.10s">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/client-four.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid mt-lg-5 mt-4">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-0 order-lg-1">
                    <div class="partner-one-content">
                        <div class="text-start">
                            <h2 class="wow fadeInUp">See Our <span class="d-inline-block position-relative">trusted<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute start-0 bottom-0 low-index"></span> partners
                            </h2>
                            <p class="body-disply-2 pt-3 wow fadeInUp">Vero homero perfecto mei ut, sonet aperiam an nec. Ni nec dict altera legimu. Me vita de lege ndos expet end is ad. Ex mei omita aliu mi ando</p>
                            <div class="partner-btn mt-5">
                                <a href="#" class="btn-fill-outlined wow fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  partner style end =============== -->

    <!-- ===============  Testimonial style start =============== -->
    <div class="testimonial-style-two section-gap-xl-top section-gap-xl-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center pb-60">
                        <h2 class="text-soft-black wow fadeInUp">What our <span class="d-inline-block position-relative">client<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute start-0 bottom-0 low-index"></span> says </h2>

                        <p class="body-disply-2 pt-3 wow fadeInUp">Growth your business with using us</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-3">
                    <div class="swiper testimonial-thumbs-two">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-thumb-style-two">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-thumb-man-1.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-thumb-style-two">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-thumb-man-1.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="swiper testimonial-slider-two">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card-style-two px-4">
                                    <p class="body-disply-2">Leading an organization is incredibly rewarding and equally humbling. Confidence and humility. Every success is built on lessons from mistakes made is incredibly rewarding</p>
                                    <div class="testimonial-card-bottom">
                                        <h5 class="reviewer-name">Mila McSabbu</h5>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card-style-two px-4">
                                    <p class="body-disply-2">Leading an organization is incredibly rewarding and equally humbling. Confidence and humility. Every success is built on lessons from mistakes made is incredibly rewarding</p>
                                    <div class="testimonial-card-bottom">
                                        <h5 class="reviewer-name">Mila McSabbu</h5>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-pagination-two px-4 d-inline-flex pt-4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Testimonial style end =============== -->

    <!-- ===============  app download style start =============== -->
    <div class="app-download-style section-gap-top-y-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="app-download-content-wrap">
                        <div class="text-start pb-5">
                            <h2> Get it now <span class="z-index-1 d-inline-block position-relative">for free <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute start-0 bottom-0 low-index"></span> </h2>
                            <p class="body-disply-2 pt-3">We are offering free debit cards once you sing up and order a card. we wont chargeyou for our debit card.</p>
                        </div>

                        <div class="download-options">
                            <a href="#" class="download-btn-fill">
                                <i class="bi bi-apple"></i>
                                <div>
                                    <span>Download on the</span>
                                    <h5>App Store</h5>
                                </div>
                            </a>
                            <a href="#" class="download-btn-outlined">
                                <i class="bi bi-microsoft"></i>
                                <div>
                                    <span>GET IT NOW</span>
                                    <h5>Microsoft Store</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="download-app-screen text-center d-none d-lg-block wow fadeInRight" data-wow-offset="300" data-wow-duration="2s">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/download-app-screen.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  app download style end =============== -->

<?php get_footer( ); ?>