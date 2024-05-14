<?php

/**
 * Template Name: Ecommoerce
 * @package saasto
 */

get_header();

?>

<!-- HTML Goes Here! -->

<!-- Hero-area start -->
<div class="hero-area-seven overflow-hidden">
    <div class="d-none d-lg-block hero-seven-kits">
        <img class='animated-moveUpAndDown' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-arrow.png' ?> alt="kit">
        <img class='animated-moveUpAndDown' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-kit-1.png' ?> alt="kit">
        <img class='animated-moveLeftAndRight' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-kit-2.png' ?> alt="kit">
        <img class='animated-moveUpAndDown' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-kit-3.png' ?> alt="kit">
        <img class='animated-moveUpAndDown' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-kit-4.png' ?> alt="kit">
</div>
    <div class="container">
        <div class="row text-center text-lg-start">
            <div class="col-xl-9">
                <div class="hero-content">
                    <h1 class="title">Revolutionize Your Online Store with SaaSto</h1>
                    <p class="description">Our all-in-one platform combines cutting-edge technology with intuitive design, giving you everything you need to build, manage, and scale your online store with ease."</p>
                </div>
                <form action="#" class="cta-form">
                    <input type="email" name="email" class="email" placeholder="Enter your email address">
                    <button class='btn-submit'>
                    Get Started
                    <i class="bi bi-arrow-right-short"></i>
                    </button>
                </form>
            </div>
        </div>
        
    </div>
    <div class="hero-seven-charts d-flex flex-row justify-content-xl-center align-items-end flex-nowrap gap-4">
    <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-chart-1.png' ?> alt="chart">
    <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-chart-2.png' ?> alt="chart">
    <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/hero/hero-seven-chart-3.png' ?> alt="chart">
    </div>
</div>
<!-- Hero-area end -->

<!-- Sponsor Brands start -->
<div class="sponsor-brands-area-seven section-gap-top-y-1">
    <div class="container custom-container">
        <div class="d-flex flex-column flex-md-row align-items-center gap-3 gap-md-0">
            <div class="sponsor-brands-title">
                <h5 class="">Trusted By Global Industry Leaders</h5>
            </div>
            <div class="swiper sponsor-brands-slider w-100">
                <div class="swiper-wrapper ease-linear align-items-center ">
                    <div class="swiper-slide">
                        <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/brands/brand-1.png' ?> alt="arrow-shap">
                    </div>
                    <div class="swiper-slide">
                        <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/brands/brand-2.png' ?> alt="arrow-shap">
                    </div>
                    <div class="swiper-slide">
                        <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/brands/brand-3.png' ?> alt="arrow-shap">
                    </div>
                    <div class="swiper-slide">
                        <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/brands/brand-4.png' ?> alt="arrow-shap">
                    </div>
                    <div class="swiper-slide">
                        <img class='' src=<?php echo get_template_directory_uri() . '../assets/img/brands/brand-5.png' ?> alt="arrow-shap">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Sponsor Brands end  -->

<!-- Features start  -->
<div class="features-area-seven">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-header text-center">
                    <span class="sub-title">Features</span>
                    <h2 class="title">Everything You Need To Manage Your E-Commerce Stores</h2>
                    <p>Our platform gives you all the features you need to effectively manage your products customers and many mores.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features end  -->


<?php
get_footer();
