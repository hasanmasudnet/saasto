<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */

$saasto_audio_url = function_exists( 'get_field' ) ? get_field( 'post_format_audio_url' ) : NULL;

if ( is_single() ): ?>
    <!-- Single Post Start -->
    <article id="post-<?php the_ID();?>" <?php post_class( 'single-post blog-list-box' );?>>
        <!-- Single post details meta -->
        <div class="blog-list-box">
            
            <?php if ( !empty( $saasto_audio_url ) ): ?>
            <!-- Audio player -->
            <div class="postbox__audio w-img p-relative">
                <?php echo wp_oembed_get( $saasto_audio_url ); ?>
            </div>
            <?php endif;?>

            <div class="blog-inner-details">
                <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
            </div>
        </div>

        <!-- Blog Details Info -->
        <div class="blog__details_content">
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

            <?php if ( !empty( $saasto_audio_url ) ): ?>
                <div class="postbox__audio w-img p-relative">
                    <?php echo wp_oembed_get( $saasto_audio_url ); ?>
                </div>
            <?php endif;?>

            <div class="blog-inner-details">
                <!-- blog meta -->
                <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

                <h3 class="blog-title">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h3>
                <div class="blog__details_content">
                    <?php the_excerpt();?>
                </div>
                
                <!-- blog btn -->
                <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
            </div>
        </article>

<?php endif;?>

