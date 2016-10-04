<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Project_Go
 */

?>
<div class="board-left-wrapper">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="col-lg-12">
		    <div class="board-block">
			    <div class="board-name"><h4><?php the_title(); ?></h4></div>
			    <div class="board-title"><?php echo the_field('job_title'); ?></div>
			    <button id="post-<?php the_ID(); ?>" class="btn-sm board-button">View Bio</button>
		    </div>
	    </div><!--.col-lg-12 -->  
	
	
    </article><!-- #post-## -->
    </div>
    <div class="col-lg-9">
		<div id="post-<?php the_ID(); ?>" class="board-info">
		<?php if ( has_post_thumbnail() ) { ?>
		<div class="board-thumb"><?php the_post_thumbnail( 'team-thumb' ) ?></div>
		<?php } 
		else { ?>
			<div class="board-thumb"><img src="/projectgowp/wp-content/themes/project-go/inc/images/default.jpg"></div>
		<?php } ?>
			<div class="board-name"><?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></div>
			<div class="board-name"><?php echo the_field('job_title'); ?></div>
		    <div class="board-bio"><?php the_content(); ?></div>
		</div>

	</div>
