<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sixteen
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image-single">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sixteen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'sixteen' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
