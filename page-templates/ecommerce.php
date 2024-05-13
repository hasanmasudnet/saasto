<?php

/**
 * Template Name: Ecommoerce
 * @package saasto
 */

get_header();

?>

<!-- HTML Goes Here! -->

<!-- Sponsor Brands start -->
<div class="sponsor-brands-area section-gap-top-y-1">
    <div class="container custom-container">
        <div class="d-flex flex-column flex-md-row align-items-center gap-4 gap-md-0">
            <div class="sponsor-brands-title">
                <h5 class="">Trusted By Global Industry Leaders</h5>
            </div>
            <div class="swiper sponsor-brands-slider w-100">
                <div class="swiper-wrapper ease-linear">
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


<?php
get_footer();
