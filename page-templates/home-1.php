<?php 

/**
*
* Template Name: Home one
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

get_header();
?>

<!-- <div class="background-wrap home-bg-one"> -->
    <!-- =============== hero style one start=============== -->
     <div class="hero-style-one position-relative overflow-hidden">
         <div class="position-absolute top-0 start-0 d-none d-lg-block"><img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/shape-wave.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>"></div>
         <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-dots-one.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="d-none d-lg-block position-absolute bottom-0 left-0">
         <div class="container ">
             <div class="row hero-one-row align-items-center py-lg-0">
                 <div class="col-lg-7">
                    <div class="hero-content py-5 mt-5 mt-lg-3 position-relative">
                        <div class="hero-animated-shape position-absolute bottom-50 anima-trasform-y-1 low-index d-none d-lg-block">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-idea-icon.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                        </div>
                        <h1 class="text-bright-gray wow fadeInUp">Committed to People Committed to <span class="primary-purple">the Future</span></h1>
                        <p class="body-disply-1 pt-20 wow fadeInUp" data-wow-delay="0.2s">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at </p>
                        <div class="hero-btn">
                            <a href="<?php print esc_url( home_url('/contact') ) ?>" class="btn-fill-rounded wow fadeInUp" data-wow-delay="0.3s">Get Started Now</a>
                        </div>
                    </div>
                 </div>
                 <div class="col-xl-6 col-lg-4 hero-florting-col position-absolute end-0 top-50 translate-middle-y pt-0 pt-lg-5 mt-4">
                     <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-line-vactor.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="hero-line-vactor d-xl-block d-none">
                     <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-carve.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="d-xl-block d-none position-absolute top-50 end-0 translate-middle-y">
                     <div class="row justify-content-center">
                         <div class="col-lg-12 col-8 text-center">
                             <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/hero/hero-graph-2.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>"  class="hero-img-filter img-fluid anima-trasform-y-1">
                         </div>

                     </div>
                     <div class="item-row d-flex justify-content-center gap-xl-5 gap-4 mt-xl-5 mt-3">
                         <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-dots.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="position-absolute start-0 bottom-0">
                         <div class="item">
                             <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/hero/hero-graph-1.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="hero-img-filter img-fluid anima-trasform-x-1">
                         </div>
                         <div class="d-inline-flex flex-column">
                             <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/hero/hero-graph-4.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="fit-content img-fluid">
                             <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/hero/hero-graph-3.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="hero-img-filter img-fluid mt-xl-5 mt-3 fit-content">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <!-- =============== hero style one end =============== -->
 
    <!-- =============== fun-fact style one start =============== -->
    <div class="fun-fact-style-one position-relative">
        <div class="container">
            <div class="row gy-4">
               <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp">
                   <div class="single-fact">
                       <div class="fact-icon">
                           <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/Icons/user_three.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                       </div>
                       <div class="fact-disc">
                           <h2>15k+</h2>
                           <p>Active user</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 d-lg-flex justify-content-lg-center wow fadeInUp" data-wow-delay="0.2s">
                   <div class="single-fact ">
                       <div class="fact-icon bg-varient-1">
                           <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/Icons/download.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                       </div>
                       <div class="fact-disc">
                           <h2>10k+</h2>
                           <p>Total Download</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 d-lg-flex justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                   <div class="single-fact ">
                       <div class="fact-icon bg-varient-2">
                           <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/Icons/user_two.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                       </div>
                       <div class="fact-disc">
                           <h2>30k+</h2>
                           <p>Customer</p>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <!-- =============== fun-fact style one end =============== -->

    <!-- =============== work Process area start ============= -->
     <div class="work-feature-style-one position-relative section-gap-xl-top ">
        <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/hero-dots.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="feature-screen-dots">
        <div class="container">
            <div class="row align-items-center gy-4">
                 <div class="col-lg-6">
                     <div class="w-feature-content">

                       <div class="w-feature-content-title">
                           <h3 class="text-bright-gray wow fadeInUp">We are focus on your ultimate goal</h3>
                           <p class="text-purple-haze body-disply-1 pt-3 wow fadeInUp" data-wow-delay="0.1s">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium</p>
                       </div>
                         <div class="work-features">
                             <div class="work-feature-card wow fadeInUp" >
                                 <div class="feature-icon">
                                   <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/Icons/time-circle.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                                 </div>
                                 <div class="feature-info">
                                     <h5 class="text-bright-gray">Automatic time tracking</h5>
                                     <p>Time Tracking is never been easier.</p>
                                 </div>
                             </div>
                             <div class="work-feature-card wow fadeInUp" data-wow-delay="0.3s">
                                 <div class="feature-icon">
                                   <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/Icons/Chart.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                                 </div>
                                 <div class="feature-info">
                                     <h5 class="text-bright-gray">Customizable dashboard</h5>
                                     <p>Time Tracking is never been easier.</p>
                                 </div>
                             </div>
                             <div class="work-feature-card wow fadeInUp" data-wow-delay="0.6s">
                                 <div class="feature-icon">
                                   <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/Icons/Graph.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                                 </div>
                                 <div class="feature-info">
                                     <h5 class="text-bright-gray">Statistics retroactively</h5>
                                     <p>Time Tracking is never been easier.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-6">
                     <div class="feature-screen-one feature-shadow-img position-relative">
                         <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-screen1.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="fadeInRight wow">
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- =============== work Process area end =============== -->

    <!-- =============== Services Tab =============== -->
    <div class="tab-area section-gap-top-y-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills tab-wrap mb-4 mb-md-5 mt-0 mt-lg-5 d-inline-flex" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Time tracking</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Productivity management</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reporting</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row justify-content-between">

                            <div class="col-lg-12">
                                <div class="w-feature-content-title tab-info mt-2 text-center">
                                <h3 class="text-bright-gray wow fadeInUp">Analytics & Reporting Brackdown</h3>
                                <p class="text-purple-haze body-disply-1 pt-3 wow fadeInUp" data-wow-delay="0.2s">Donec augue lorem, mollis quis dui sed, dictum vehicula turpis. Aliquam bibendum vel mi id tempor. Sed efficitur scelerisque mi. Nullam posuere nec ex in malesuada. Praesent ligula ante, accumsan eget ornare vel, fermentum quis erat.</p>

                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <img src="<?php print esc_url(get_template_directory_uri())?>/assets/img/dashboard.png" class='tab-content-img' alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                            </div>
                        </div>
                    </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row justify-content-between">

                            <div class="col-lg-12">
                                <div class="w-feature-content-title tab-info mt-2 text-center">
                                <h3 class="text-bright-gray wow fadeInUp">Analytics & Reporting Brackdown</h3>
                                <p class="text-purple-haze body-disply-1 pt-3 wow fadeInUp" data-wow-delay="0.2s">Donec augue lorem, mollis quis dui sed, dictum vehicula turpis. Aliquam bibendum vel mi id tempor. Sed efficitur scelerisque mi. Nullam posuere nec ex in malesuada. Praesent ligula ante, accumsan eget ornare vel, fermentum quis erat.</p>

                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <img src="<?php print esc_url(get_template_directory_uri())?>/assets/img/dashboard.png" class='tab-content-img'  alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                            </div>
                        </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row justify-content-between">

                            <div class="col-lg-12">
                                <div class="w-feature-content-title tab-info  mt-2 text-center">
                                <h3 class="text-bright-gray">Analytics & Reporting Brackdown</h3>
                                <p class="text-purple-haze body-disply-1 pt-3">Donec augue lorem, mollis quis dui sed, dictum vehicula turpis. Aliquam bibendum vel mi id tempor. Sed efficitur scelerisque mi. Nullam posuere nec ex in malesuada. Praesent ligula ante, accumsan eget ornare vel, fermentum quis erat.</p>

                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <img src="<?php print esc_url(get_template_directory_uri())?>/assets/img/dashboard.png" class='w-100' alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- =============== Services Tab End =============== -->
    


    <!-- =============== single features style start ============= -->
    <div class="single-feature-one-style position-relative section-gap-xl-top">
        <div class="florting-balon-icon d-none d-lg-block translate-middle-y end-0 anima-trasform-y-1 position-absolute" >
            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/balon-icon.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
        </div>


        <div class="container-fluid">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="single-feature-screens position-relative">
                        <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/features-line-vactor.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="img-fluid feat-one-line d-lg-block d-none">
                        <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/features-dots.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="img-fluid feat-one-dots">
                        <div class="row justify-content-center align-items-center gy-4 position-relative z-index-1">
                            <div class=" d-lg-block d-none single-feature-one-bg position-absolute low-index">
                            </div>
                            <div class="col-xl-5 col-6 text-end">
                                <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-one-screen-one.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="feat-one-screen img-fluid wow fadeInLeft">
                            </div>
                            <div class="col-xl-5 col-6">
                                <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-one-screen-three.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="feat-one-screen feat-one-screen-sm img-fluid wow fadeIn d-block">
                                <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-one-screen-two.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="feat-one-screen img-fluid mt-4 wow fadeInUp" data-wow-delay="0.4s">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1 position-relative z-index-5">
                   <div class="single-feature-content-one">
                       <h3 class="text-bright-gray wow fadeInUp">Know more about our key features</h3>
                       <p class="text-purple-haze body-disply-1 pt-3 wow fadeInUp" data-wow-delay="0.2s">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium</p>

                       <div class="trial-btn mt-3 mt-md-5">
                           <a href="<?php print esc_url( home_url('/pricing') ) ?>" class="btn-fill-rounded wow fadeInUp" data-wow-delay="0.3s">Start Trial</a>
                       </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>


    <div class="single-feature-style position-relative section-gap-xl-top ">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                   <div class="single-feature-content position-relative">
                    <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/features-dots.svg" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="feature-single-dot">
                       <h3 class="text-bright-gray">Simple Solution for Complex Connections</h3>
                       <p class="text-purple-haze body-disply-1 pt-3 wow fadeInUp" data-wow-delay="0.2s">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium</p>

                       <div class="trial-btn mt-3 mt-md-5">
                           <a href="<?php print esc_url( home_url('/pricing') ) ?>" class="btn-fill-rounded wow fadeInUp" data-wow-delay="0.3s">Start Trial</a>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-screen-three">
                        <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/screen/feature-screen3.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="wow fadeInRight">
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- =============== single features style end ============= -->  

    <!-- =============== country map style start ============= -->
    <div class="country-map-style-one position-relative section-gap-xl-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <h3 class="text-bright-gray text-center wow fadeInUp">We have support language for more than 30 languages arounf the world</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="mobil-map d-block d-lg-none pt-60">
                        <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/mobil-map.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="img-contain">
                    </div>
                    <div class="country-map-wrap d-lg-block d-none">
                        <div class="map-bg">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/dot-map-body.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>">
                        </div>

                        <div class="single-country country-1 d-inline-flex wow zoomIn" data-wow-delay="0.3s">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-1.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="single-country country-2 d-inline-block wow zoomIn">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-3.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="single-country country-3 d-inline-block wow zoomIn" data-wow-delay="0.6s">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-2.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="single-country country-4 d-inline-block wow zoomIn" data-wow-delay="0.3s">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-4.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle ">
                        </div>
                        <div class="single-country country-5 d-inline-block wow zoomIn" data-wow-delay="0.3s">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-5.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="single-country country-6 d-inline-block wow zoomIn">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-6.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="single-country country-7 d-inline-block wow zoomIn" data-wow-delay="0.6s">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-7.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                        <div class="single-country country-8 d-inline-block wow zoomIn">
                            <img src="<?php print esc_url(get_template_directory_uri()) ?>/assets/img/shapes/flag-8.png" alt="<?php print esc_attr('saasto', 'saasto'); ?>" class="circle-shadow rounded-circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== country map style end ============= -->

   
    <!-- =============== blog style start ============= -->
    <div class="blog-style-one position-relative section-gap-xl-top page-end-gap-bottom">
        <div class="container">
            <div class="row align-content-center pt-60">
                <div class="col-md-7">
                    <h4>Most popular posts</h4>
                </div>
                <div class="col-md-5 ">
                    <div class="blog-slider-nav d-md-flex justify-content-end d-none">
                        <div class="blog-prev"><i class="bi bi-chevron-left"></i></div>
                        <div class="blog-next"><i class="bi bi-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            
            <div class="swiper blog-slider-one pt-5">
                <div class="swiper-wrapper ">
                    <?php 
                    
                    $blog_args = [
                        'post_type' => 'post',
                        'posts_per_page' => 5, // Change this number to the desired number of posts per page
                    ];
                    $blog_query = new WP_Query($blog_args);

						if ( $blog_query->have_posts() ):
							/* Start the Loop */ 
							while ( $blog_query->have_posts() ): $blog_query->the_post(); ?>
                                <div class="swiper-slide">
                                    <div class="blog-card-style-one blog-carousel">
                                        
                                    <?php if ( has_post_thumbnail() ): ?>   
                                        <!-- post loop thumbnail  -->
                                        <div class="blog-thumb">
                                            <a href="<?php the_permalink();?>">
                                                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                                            </a>
                                        </div>
                                        <!-- End post loop thumbnail  -->
                                    <?php endif; ?>

                                        <div class="blog-disc">
                                            <div class="blog-meta d-flex justify-content-between">
                                                <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><?php print get_the_author();?></a>

                                                <a href="<?php print get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>"><?php the_time( get_option('date_format') ); ?></a>

                                            </div>
                                            <h5 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                            
                                            <div class="blog-btn">
                                                <a href="<?php the_permalink();?>">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== blog style end =============== -->


<?php get_footer(); ?>