<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */

if ( is_single() ) : ?>
            
    <div class="blog-list-box">
        <?php if ( has_post_thumbnail() ): ?>
            <div class="blog-list-img overflow-hidden">
                <?php the_post_thumbnail( 'full', ['class' => 'w-100'] );?>
            </div>
        <?php endif;?>

        <div class="blog-info">
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
            <h1><?php the_title();?></h1>
        </div>
    </div>

    <!-- Blog Details Info -->
    <div class="blog__details_content">
        <?php the_content();?>
 
        <div class="details-quote">
            <h2>“Ut in tristique nulla, a iaculis lorem. Ut urna ante, tempor como mauris sit amet, mollis posuere erat. Quisque eu pulvinar lorem, sed hendrerit eros”</h2>
            <p class="mt-3">Arafat  Alim</p>
        </div>
    </div>

    <!-- Info Tag -->

    <div class="info-tag-wrap">
        <?php print saasto_get_tag();?>
    </div>

    <!-- Info Tag End -->


    <!-- Info Comment -->

    <h2 class="comment-title mt-60">Leave a comment</h2>
    <form action="#" class="blog-comment">
        <div class="row">
            <div class="col-lg-12">
                <textarea  cols="30" rows="7" placeholder="Write Your Comment....."></textarea>
            </div>
            <div class="col-lg-6">
                <input type="text" placeholder="Your Name">
            </div>
            <div class="col-lg-6">
                <input type="email" placeholder="Your Email">
            </div>
            <div class="col-lg-12">
                <button type="submit">POST COMMENT</button>
            </div>
        </div>
    </form>

    <!-- Info Comment End -->

    <!-- Blog Details Info End -->

             

    <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item format-image mb-50' );?>>
        <?php if ( has_post_thumbnail() ): ?>
            <div class="postbox__thumb">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
            </div>
        <?php endif;?>

        <div class="postbox__content">
            <!-- blog meta -->
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
            <h3 class="postbox__title">
                <?php the_title();?>
            </h3>
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
            <?php print saasto_get_tag();?>
        </div>
    </article>
<?php else: ?>

    <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item format-image mb-50 d-none' );?>>
        <?php if ( has_post_thumbnail() ): ?>    
        <div class="postbox__thumb">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
            </a>
        </div>
        <?php endif; ?>
        <div class="postbox__content">
            <!-- blog meta -->
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

            <h3 class="postbox__title">
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h3>
            <div class="blog__details_content">
                <?php the_excerpt();?>
            </div>

            <!-- blog btn -->
            <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
        </div>
    </article>

    <article id="post-<?php the_ID();?>" <?php post_class( 'blog-list-box' );?>>
            <div class="blog-list-img overflow-hidden">
            <?php if ( has_post_thumbnail() ): ?>    
            <div class="postbox__thumb">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                </a>
            </div>
            <?php endif; ?>

        </div>
        <div class="blog-info">
            <!-- blog meta -->
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

            <h3 class="postbox__title">
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