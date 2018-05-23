<?php
/**
 * The template for displaying the products page (shop page).
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>

				<!-- Another get_terms loop would go (do, eat sleep, wear) -->
				<?php $terms = get_terms(array(
					'taxonomy' => 'product_type',
					'hide_empty' => false
				));
				?>

				<?php foreach( $terms as $term) : ?>
				  <!--some markup here -->
					<h1><?php echo $term->name; ?></h1>
			  <?php endforeach; ?>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'product' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
