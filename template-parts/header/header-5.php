<?php

/**
 * Template part for displaying header layout two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */


/** Header buttons */
//Button one
$saasto_head_btn_one = get_theme_mod('saasto_head_r_button_text_one', __('Login', 'saasto'));
$saasto_head_btn_one_link = get_theme_mod('saasto_head_r_button_link_one', __('#', 'saasto'));

//Button two
$saasto_head_btn_two = get_theme_mod('saasto_head_r_button_text_two', __('Sign Up', 'saasto'));
$saasto_head_btn_two_link = get_theme_mod('saasto_head_r_button_link_two', __('#', 'saasto'));

// Header Options
$is_transparent = function_exists('get_field') ? (get_field('transparent_header') == true) ? 'header-transparent' : NULL : NULL;

// header right
$saasto_header_right = get_theme_mod('saasto_header_right', false);
$saasto_menu_col = ($saasto_header_right) ? 'col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6 d-xl-flex justify-content-lg-center' : 'col-xl-9 d-xl-flex justify-content-lg-end';

?>
<!-- ===============  header area start =============== -->

<header>
   <div class="header-area header-five overflow-hidden <?php echo esc_attr($is_transparent); ?>">
      <div class="container-xxl container-xl-fluid container-lg-fluid px-lg-4">
         <div class="col-lg-12">
            <div class="header-wd">
               <div class="row">
                  <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                     <div class="nav-logo nav-logo-border d-flex justify-content-between align-items-center">
                        <?php
                        //Site Logo
                        saasto_header_logo(); ?>

                        <div class="d-flex align-items-center gap-4">
                           <div class="mobile-menu d-flex ">
                              <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                 <span class="h-top"></span>
                                 <span class="h-middle"></span>
                                 <span class="h-bottom"></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="<?php echo esc_attr($saasto_menu_col); ?>">
                     <nav class="main-nav">
                        <div class="inner-logo d-xl-none">
                           <?php
                           //Site Logo
                           saasto_header_logo(); ?>
                        </div>

                        <?php
                        // Site menu
                        saasto_header_menu(); ?>

                        <?php if (!empty($saasto_header_right)) : ?>
                           <div class="inner-contact-options d-xl-none d-inline-flex flex-column  px-3">
                              <a href="<?php echo esc_html($saasto_head_btn_one_link); ?>" class="btn-transparent-xl btn-transparent-v3 mb-3"><?php echo esc_html($saasto_head_btn_one); ?></a>
                              <a href="<?php echo esc_html($saasto_head_btn_two_link); ?>" class="btn-fill-pill-v2 md-btn"><?php echo esc_html($saasto_head_btn_two); ?></a>
                           </div>
                        <?php endif; ?>

                     </nav>
                  </div>
                  <?php if (!empty($saasto_header_right)) : ?>
                     <div class="col-xl-3">
                        <div class="nav-right float-end d-xl-flex d-none">
                           <a href="<?php echo esc_html($saasto_head_btn_one_link); ?>" class="btn-outlined-round rounded_v5"><?php echo esc_html($saasto_head_btn_one); ?></a>
                           <a href="<?php echo esc_html($saasto_head_btn_two_link); ?>" class="btn-outlined-round btn_fill_v5 flex-shrink-0"><?php echo esc_html($saasto_head_btn_two); ?></a>
                        </div>
                     </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- ===============  header area end =============== -->