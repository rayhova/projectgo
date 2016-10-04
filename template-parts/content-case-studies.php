<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Project_Go
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-lg-4">
	    <div class="pet-block">
		    <div class="pet-thumb"><?php the_post_thumbnail( 'pets-thumb' ) ?></div>
		    <div class="pet-name"><?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></div>
	    </div>
    </div><!--.col-lg-4 -->    
    </article><!-- #post-## -->
