<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
 */


get_header();

$saasto_sidebar = get_theme_mod( 'page_sidebar_setting', true );

// Sidebar column
$blog_column = ($saasto_sidebar==true && is_active_sidebar( 'blog-sidebar' )) ? 8 : 12;

?>

<section class="saasto-page-area">
    <div class="container container-box">
        <div class="row">
			<div class="col-lg-<?php print esc_attr( $blog_column );?> blog-post-items blog-padding">
				<div class="saasto__page_content">
					<?php
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'template-parts/content', 'page' );
							endwhile;
						else:
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
				</div>
			</div>

			<?php if ( $saasto_sidebar==true && is_active_sidebar( 'blog-sidebar' ) ): ?>
				<!-- Sidebar -->
		        <div class="col-lg-4">
		        	<div class="sidebar-wrap">
						<?php get_sidebar();?>
	            	</div>
	            </div>
			<?php endif;?>
		</div>
    </div>
</section>

<?php
get_footer();
