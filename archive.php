<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

?>

<div class="saasto-blog-loops archive-contents">
    <div class="container container-box">
        <div class="row">
			<div class="col-lg-<?php print esc_attr( $blog_column );?> blog-post-items blog-padding">
				<div class="postbox__wrapper pr-20">
				<?php if ( have_posts() ): ?>
					<?php
						/* Start the Loop */
						while ( have_posts() ):
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
					?>

						<div class="pagination-wrap">
							<?php saasto_pagination( '<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>', '', ['class' => ''] );?>
						</div>
					<?php
						else:
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
				</div>
			</div>
			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
		        <div class="col-lg-4">
		        	<div class="sidebar-wrap">
						<?php get_sidebar();?>
	            	</div>
	            </div>
			<?php endif;?>
        </div>
    </div>
</div>
<?php
get_footer();
