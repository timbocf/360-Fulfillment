<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package three-sixty
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header"> -->
		<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<!--</header>--><!-- .entry-header -->

	<div class="entry-content col-md-8 col-md-offset-4">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'three-sixty' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'three-sixty' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
