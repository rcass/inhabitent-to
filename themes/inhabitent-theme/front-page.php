<?php
/**
 * The template for the static front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section class="home-hero">
			<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'?>" class="logo" alt="Inhabitent full logo" />
		</section>

		<section class="product-info">
		  <h2>Shop Stuff</h2>
			<!-- Secondary loop through custom taxonomy terms -->
		
		</section>

		<section class="latest-entries">
		  <h2>Inhabitent Journal</h2>
			<!-- Secondary loop of recent journal posts here -->
			<?php
				$args = array( 'post_type'=> 'post', 'posts_per_page'   => 5 );
				$latest_posts = get_posts( $args ); // returns an array of posts
				if ( ! empty( $latest_posts) ) :  //if there are posts continue
			?>
				<?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>
					<div class="journal-entry">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
						<?php the_date(); ?>
						<?php comments_number(); ?>
						<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>

						<a href="<?php the_permalink(); ?>" > Read Entry </a>
					</div>

			<?php endforeach; wp_reset_postdata(); ?>

			<?php endif; ?>




		</section>

		<section class="adventures">
		  <h2>Latest Adventures</h2>
			  <ul>
					<li>Getting Back to Nature in a Canoe</li>
					<li>A Night With Friends at the Beach</li>
					<li>Taking in the View at Big Mountain</li>
					<li>Star Gazing at the Night Sky</li>
				</ul>
		</section>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
