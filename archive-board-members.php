<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Project_Go
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
$board_all_query = new WP_Query(array('post_type'=>'board-members', 'post_status'=>'publish','posts_per_page'=>-1));

		if ( $board_all_query -> have_posts() ) : ?>

			<header class="page-header">
				<h1> Board Members</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( $board_all_query -> have_posts() ) : $board_all_query -> the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'board-members' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
