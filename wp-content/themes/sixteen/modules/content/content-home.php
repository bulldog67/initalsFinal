<?php
/**
 * @package Sixteen
 */
?>

<div class="article-wrapper">
<article id="post-<?php the_ID(); ?>" <?php post_class('homepage-article'); ?>>

	
	<div class="featured-image">
	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
	<?php else: ?>	
		<a href="<?php the_permalink(); ?>"><img alt="<?php the_title() ?>" src="<?php echo get_stylesheet_directory_uri()."/assets/images/dthumb.jpg"; ?>"></a>
	<?php endif; ?>	
	</div>
	
	<header class="entry-header">
		
		<?php 
			if (strlen(get_the_title()) >= 85) { ?>
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" rel="bookmark">
		<?php echo substr(get_the_title(), 0, 84)."...";
		}
				
			else { ?>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">
		<?php	the_title();	
			}	
				 ?>
	</a></h3>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
</div>