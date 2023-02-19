<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */


//  Get Video URL if exist
$saasto_video_url = function_exists( 'get_field' ) ? get_field( 'post_format_video_url' ) : NULL;

if ( is_single() ) : ?>
    <!-- Single Post Start -->
    <article id="post-<?php the_ID();?>" <?php post_class( 'single-post' );?>>

        <!-- Single post details meta -->
        <?php if ( has_post_thumbnail() ): ?>
            <div class="blog-list-img overflow-hidden position-relative">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>

                <?php if(!empty($saasto_video_url)) : ?>
                <a href="<?php print esc_url( $saasto_video_url );?>" class="play-btn post-popup-video"><i class='bi bi-play'></i></a>
            <?php endif; ?>
            </div>
        <?php endif;?>

        <div class="blog-inner-details">
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
        </div>


        <!-- Blog Details Info -->
        <div class="blog__details_content clearfix">
            <?php the_content();?>
            <?php
                wp_link_pages( [
                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'saasto' ),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ] );
            ?>
        </div>

        <?php if( saasto_get_tag() ): ?>
            <!-- Info Tag -->
            <div class="info-tag-wrap">
                <?php print saasto_get_tag();?>
            </div>
            <!-- Info Tag End -->
        <?php endif; ?>

    </article>
    <!-- Single Post End -->

<?php else: ?>
<article id="post-<?php the_ID();?>" <?php post_class( 'blog-list-box post_format-standard' );?>>

    <div class="blog-list-img overflow-hidden position-relative">
        <?php if ( has_post_thumbnail() ): ?>    
        <div class="postbox__thumb">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
            </a>
            <?php if(!empty($saasto_video_url)) : ?>
                <a href="<?php print esc_url( $saasto_video_url );?>" class="play-btn post-popup-video"><i class='bi bi-play'></i></a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="blog-inner-details">
        <!-- blog meta -->
        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

        <h3 class="blog-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h3>
        <div class="blog__details_content clearfix">
            <?php the_excerpt();?>
        </div>
        
        <!-- blog btn -->
        <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
    </div>
</article>

<?php endif;?>