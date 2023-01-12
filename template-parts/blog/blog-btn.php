<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */

$saasto_blog_btn = get_theme_mod( 'saasto_blog_btn', 'Read More' );
$saasto_blog_btn_switch = get_theme_mod( 'saasto_blog_btn_switch', true );

?>

<?php if ( !empty( $saasto_blog_btn_switch ) ): ?>
<div class="blog-list-btn d-flex">
    <a href="<?php the_permalink();?>"><?php print esc_html( $saasto_blog_btn );?><i class="bi bi-chevron-right"></i></a>
</div>
<?php endif;?>