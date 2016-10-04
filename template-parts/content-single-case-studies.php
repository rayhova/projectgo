<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package project_go
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="single-case-study-thumb"><?php the_post_thumbnail() ?></div>

		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'project_go' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<?php 

$images = get_field('image_gallery');

if( $images ): ?>
    <div class="cs-single-gallery">
        <?php foreach( $images as $image ): ?>
            <div class="col-md-2 col-sm-6">
                <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="multiimages">
                     <img src="<?php echo $image['sizes']['pets-thumb']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>
                </a>
                <p><?php echo $image['caption']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<a href="<?php the_field('video_link'); ?>" data-toggle="lightbox" ><button class="btn-xl centered">View Video</button></a>
	<footer class="entry-footer">
		<?php project_go_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

