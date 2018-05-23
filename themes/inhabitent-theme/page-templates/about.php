<?php
/**
 * Template Name: About
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
				  <h2>
						<?php $props = CFS()->get_field_info( 'our_story' );
								echo $props['label'];
						?>
					</h2>
					<?php echo CFS()->get( 'our_story' ); ?>

					<h2>
						<?php $props = CFS()->get_field_info( 'our_team' );
							echo $props['label'];
						?>
					</h2>
					<?php echo CFS()->get( 'our_team' ); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>