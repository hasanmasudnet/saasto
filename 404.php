<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package saasto
 */

get_header();
?>

<section class="error__area pt-200 pb-200">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
            <?php 
               $saasto_404_bg = get_theme_mod('saasto_404_bg',get_template_directory_uri() . '/assets/img/404.png');
               $saasto_error_title = get_theme_mod('saasto_error_title', __('Page not found', 'saasto'));
               $saasto_error_link_text = get_theme_mod('saasto_error_link_text', __('Back To Home', 'saasto'));
               $saasto_error_desc = get_theme_mod('saasto_error_desc', __('Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'saasto'));
            ?>

            <div class="content-400-error text-center">
               <div class="error__thumb mb-45">
                  <img src="<?php echo esc_url($saasto_404_bg); ?>" alt="<?php print esc_attr__('Error 404','saasto'); ?>">
               </div>
               <div class="error__content">
                  <h3 class="error__title"><?php print esc_html($saasto_error_title);?></h3>
                  <p><?php print esc_html($saasto_error_desc);?></p>
                  <a href="<?php print esc_url(home_url('/'));?>" class="btn-fill-rounded"><?php print esc_html($saasto_error_link_text);?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();