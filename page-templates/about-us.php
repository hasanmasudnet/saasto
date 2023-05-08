<?php 

/**
*
* Template Name: About Us
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

get_header();
?>

<!-- ================ about wrapper start ============= -->
<div class="about-wrapper pt-xxl section-gap-xl-bottom position-relative z-index-1">
    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/line-svg-blue.svg" alt="" class="position-absolute top-0 start-0 corner-line low-index">

    <div class="container">
        <div class="row gy-4 justify-content-between align-items-center py-lg-4">
            <div class="col-xl-6 col-lg-7">
                <div class="about-wrap-highlighted">
                    <h1 class=" text-bright-gray">Working Closely With Customers In Our MYMT</h1>
                    <p class="body-disply-1 mt-24">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at </p>

                    <div class="hero-btn mt-5">
                        <a href="#" class="btn-fill-rounded">Get Started Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-highlighted-screens position-relative mb-lg-4">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/line-svg-yellow.svg" alt=""  class="position-absolute bottom-100 start-100 line-shape">
                    <div class="about-screen-one ">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/about-screen-one.png" alt="" class="wow fadeInRight">
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/about-screent-two.png" alt="" class="anima-trasform-y-1 about-screen-two">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about company  -->
<div class="about-company-wrapper position-relative z-index-1">
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
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-logo-one.png" alt="">
                            </div>
                            <div class="swiper-slide single-client-logo">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-client-logo-two.png" alt="">
                            </div>
                            <div class="swiper-slide single-client-logo">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-client-logo-three.png" alt="">
                            </div>
                            <div class="swiper-slide single-client-logo">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/client-logo/cus-client-logo-four.png" alt="">
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
<div class="about-experience-wrap section-gap-xl-top position-relative z-index-1">
    <div class="container-fluid">
        <div class="row gy-4 align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6 text-lg-end">
                <div class="position-relative about-experience-screens d-lg-inline-block d-flex flex-wrap flex-sm-nowrap">
                    <div class="about-experience-bg d-lg-block d-none">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/experience-bg.png" alt="" class="img-fluid">
                    </div>
                    <div class="wow fadeInDown experience-screen screen-1 text-start position-absolute start-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/experince-screen-one.png" alt="" class="img-fluid">
                    </div>
                    <div class="wow fadeInUp experience-screen screen-2 position-absolute  end-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/experince-screen-two.png" alt="" class="img-fluid">
                    </div>
                    <div class="experience-screen screen-3 position-absolute d-none d-lg-block">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/screen/experince-screen-three.png" alt="" class="img-fluid">
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

<!-- about features -->
<div class="section-gap-xl-top about-disply-features position-relative z-index-1">
    <div class="container">
        <div class="row align-items-center gy-4 justify-content-between">
            <div class="col-lg-5">
                <div class="disply-features-content">
                    <h3 class="text-bright-gray">Supply <br>
                        Chain Optimization</h3>
                    <p class="body-disply-1 pt-20 text-purple-haze-700">Our powerful procurement tools and dedicated consultants simplify how your business buys and manages hardware and software. We provide end-to-end support for your entire IT lifecycle.
                    </p>
                    <div class="hero-btn mt-5">
                        <a href="#" class="btn-fill-rounded">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row disply-feature-cards position-relative z-index-1">
                    <div class="disply-feature-card v1 wow fadeInRight">
                        <div class="feature-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/tick-square-icon.svg" alt="">
                        </div>
                        <div class="feature-info">
                            <span>Cloud</span>
                            <h5>Clound solutions & management</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="disply-feature-card mt-20 ">
                            <div class="feature-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/tick-square-icon.svg" alt="">
                            </div>
                            <div class="feature-info">
                                <span>Software</span>
                                <h5>Software solutions & services</h5>
                            </div>
                        </div>
                    </div>
                    <div class="disply-feature-card v2 mt-20 wow fadeInRight" data-wow-delay="0.6s">
                        <div class="feature-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/Icons/tick-square-icon.svg" alt="">
                        </div>
                        <div class="feature-info">
                            <span>Product</span>
                            <h5>Product lifecycle services</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================= about wrapper end ============== -->

<!-- ================= pricing area start ============== -->
<div class="pricing-style-start section-gap-xl-top position-relative z-index-1">
    <div class="container">
        <div class="row justify-content-center pb-60">
            <div class="col-lg-6 text-center">
                <h3 class="text-bright-gray">Pricing Plan</h3>
                <p class="body-disply-1 pt-20 text-purple-haze-700">Two simple options, Free for everyone and the pro  for these who need that extra flavor.</p>
            </div>
        </div>

        <div class="row gy-5">
            <div class="col-lg-4 col-md-6 wow fadeInUp" >
                <div class="pricing-card-style-two">
                    <div class="pricing-card-body">
                        <h4 class="text-bright-gray">Basic,Free</h4>
                    <p class="body-disply-1 text-purple-haze-700">Great for new business</p>
                    <ul class="pricing-features">
                        <li>250 customer profile.</li>
                        <li>No setup, hidden charge.</li>
                        <li>Entire course library.</li>
                        <li>Integrations facebook</li>
                    </ul>
                    </div>

                    <div class="pricing-btn mt-5">
                        <a href="#" class="btn-outlined-round hover-fill">start now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="pricing-card-style-two">
                    <div class="pricing-card-body">
                        <h4 class="text-bright-gray">Enterprise</h4>
                    
                    <h4 class="primary-purple pricing-tag">$16.9</h4>
                    <p class="body-disply-1 text-purple-haze-700">Great for new business</p>
                    <ul class="pricing-features">
                        <li>250 customer profile.</li>
                        <li>No setup, hidden charge.</li>
                        <li>Entire course library.</li>
                        <li>Integrations facebook</li>
                    </ul>
                    </div>

                    <div class="pricing-btn mt-5">
                        <a href="#" class="btn-outlined-round hover-fill">start now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="pricing-card-style-two">
                    <div class="pricing-card-body">
                        <h4 class="text-bright-gray">Premium</h4>
                    
                    <h4 class="primary-purple pricing-tag">$30.1</h4>
                    <p class="body-disply-1 text-purple-haze-700">Great for new business</p>
                    <ul class="pricing-features">
                        <li>250 customer profile.</li>
                        <li>No setup, hidden charge.</li>
                        <li>Entire course library.</li>
                        <li>Integrations facebook</li>
                    </ul>
                    </div>

                    <div class="pricing-btn mt-5">
                        <a href="#" class="btn-outlined-round hover-fill">start now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================= pricing area end ============== -->

    <!-- =============== testimonial style start ============= -->
    <div class="testimonial-style-one position-relative section-gap-xl-top section-gap-bottom-y-1">
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
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-avater-3.png" alt="" class="circle-shadow rounded-circle">
                    </div>
                    <div class="floarting-avater-2 position-absolute top-0 start-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-avater-1.png" alt="" class="circle-shadow rounded-circle">
                    </div>
                    <div class="floarting-avater-2 position-absolute top-0 start-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testi-avater-2.png" alt="" class="circle-shadow rounded-circle">
                    </div>
                    <div class="swiper testimonial-thumbs px-lg-4 ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-thumb-style">
                                    <div class="thumb-avater">
                                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testimonial-avater-xl.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-thumb-style">
                                    <div class="thumb-avater">
                                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/testimonial-avater-xl2.png" alt="">
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

<?php get_footer( ); ?>