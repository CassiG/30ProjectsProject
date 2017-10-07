<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage 30 Projects Project
 * @since 30 Projects Project 1.0
 */

get_header(); ?>

<section class="index-page">
	<div class="main-content">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1>Hello World</h1>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
