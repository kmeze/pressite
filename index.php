<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pressite
 * @since 0.1
 */

get_header();
?>
    <main id="site-content" class="site-main" role="main">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				// TODO: Add content
			}
		}
		?>
    </main><!-- #site-content -->
<?php
get_footer();
