<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package saasto
	*/


   // contact button
	$saasto_button_text = get_theme_mod( 'saasto_head_r_button_text', __( 'Free Trials', 'saasto' ) );
   $saasto_button_link = get_theme_mod( 'saasto_head_r_button_link', __( '#', 'saasto' ) );


   // header right
   $saasto_header_right = get_theme_mod( 'saasto_header_right', false );
   $saasto_menu_col = ( $saasto_header_right ) ? 'col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6 d-xl-flex justify-content-lg-end' : 'col-xl-9 col-lg-8 col-md-8 col-sm-6 col-xs-6 d-xl-flex justify-content-lg-end';

?>

<!-- ===============  header area start =============== -->
<header>
        <div class="header-area header-style header-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                        <div class="nav-logo d-flex justify-content-between align-items-center">
                        <?php saasto_header_logo();?>

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
                        <nav class="main-nav float-end">
                            <div class="inner-logo d-xl-none text-center">
                              <?php saasto_header_logo();?>
                            </div>

                            <?php saasto_header_menu();?>
                            

                            <?php if ( !empty( $saasto_header_right ) ): ?>
                              <div class="col-xl-2">
                                 <div class="inner-contact-options d-xl-none d-inline-flex flex-column px-3">
                                    <a href="<?php echo esc_html($saasto_button_link); ?>" class="btn-outlined-round"><?php echo esc_html($saasto_button_text); ?></a>
                                 </div>
                              </div>
                           <?php endif; ?>
                        </nav>
                    </div>

                    <?php if ( !empty( $saasto_header_right ) ): ?>
                        <div class="col-xl-2">
                              <div class="nav-right float-end d-xl-flex d-none">
                                 <a href="<?php echo esc_html($saasto_button_link); ?>" class="btn-outlined-round"><?php echo esc_html($saasto_button_text); ?></a>
                              </div>
                        </div>
                     <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <!-- ===============  header area end =============== -->

<?php get_template_part( 'template-parts/header/header-side-info' ); ?>