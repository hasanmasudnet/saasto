<?php 

/**
*
* Template Name: Team Member
*
* @package: wordpress
* @subpackage: Saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>

<?php get_header(); ?>


<!-- =============== team style start =============== -->
<div class="team-style-one position-relative z-index-1  team-member-page section-gap-top-y-1 section-gap-bottom-y-1">
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

<!-- ===============  Testimonial style start =============== -->
<div class="testimonial-style-two section-gap-xl-top section-gap-xl-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center pb-60">
                    <h2 class="text-soft-black">What our <span class="d-inline-block position-relative">client<img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/img/shapes/text-cuntom-underline.svg" alt="<?php echo esc_attr('saasto', 'saasto'); ?>" class="highlighter-shape position-absolute start-0 bottom-0 low-index"></span> says </h2>

                    <p class="body-disply-2 pt-3">Growth your business with using us</p>
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

<?php get_footer(); ?>