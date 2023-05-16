<?php 

/**
*
* Template Name: Blog Full Width
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>
<?php get_header( ); 

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type' => 'post',
    'posts_per_page' => get_option('posts_per_page'), // Change this number to the desired number of posts per page
    'paged' => $paged,
];

$query = new WP_Query($args);

?>

<section class="saasto-blog-loops pt-120 pb-120">
    <div class="container container-box">
        <div class="row">
			<div class="col-lg-12 blog-post-items blog-padding">
				<div class="postbox__wrapper pr-20">

					<?php
						if ( $query->have_posts() ):
							/* Start the Loop */
							while ( $query->have_posts() ): $query->the_post(); ?>
							<?php
								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_format() );?>
								
							<?php
								endwhile;
							?>
								<div class="pagination-wrap">
									<?php saasto_pagination( '<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>', '', ['class' => ''] );?>
								</div>
							<?php
							else:
								get_template_part( 'template-parts/content', 'none' );
						endif;
                        wp_reset_postdata();
					?>

				</div>
			</div>
        </div>
    </div>
</section>

<?php get_footer( ); ?>