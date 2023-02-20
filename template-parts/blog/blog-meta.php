<?php 

/**
 * Template part for displaying post meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */

$categories = get_the_terms( $post->ID, 'category' );
$saasto_blog_date = get_theme_mod( 'saasto_blog_date', true );
$saasto_blog_comments = get_theme_mod( 'saasto_blog_comments', true );
$saasto_blog_author = get_theme_mod( 'saasto_blog_author', true );
$saasto_blog_cat = get_theme_mod( 'saasto_blog_cat', false );

?>


<ul class="blog__meta">
    <?php if ( !empty($saasto_blog_author) ): ?>
        <li><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="bi bi-person"></i><span><?php print get_the_author();?></span></a></li>
    <?php endif;?>

    <?php if ( !empty($saasto_blog_cat) && !empty( $categories[0]->name ) ): ?>
        <li><a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>"><i class="bi bi-tags"></i><span><?php echo esc_html($categories[0]->name); ?></span></a></li>
    <?php endif;?>

    <?php if ( !empty($saasto_blog_date) ): ?>
        <li><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>"><i class="bi bi-calendar-event"></i><span><?php the_time( get_option('date_format') ); ?></span></a></li>
    <?php endif;?>

    <?php if ( !empty($saasto_blog_comments) ): ?>
        <li><a href="<?php comments_link();?>"><i class="bi bi-chat-dots"></i><span><?php comments_number();?></span></a></li>
    <?php endif;?>
</ul>
