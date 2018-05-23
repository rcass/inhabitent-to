<?php
/**
 * Template part for displaying single products.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

    <!-- custom field suite -->
    <p><?php echo CFS()->get( 'price' ); ?></p>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

    <!-- Social Media Buttons -->

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
