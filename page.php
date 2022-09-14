<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<?php
	while (have_posts()) : the_post();

		the_content();
	endwhile; // End of the loop.

	if (is_page(451) || (451 == $post->post_parent) || is_page(762)) :

		comments_template();

		comment_form();
	endif;
	?>

<?php
get_footer();
