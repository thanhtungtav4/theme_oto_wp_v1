<?php get_header(); ?>

	<div class="container">
	<?php woocommerce_breadcrumb(); ?>

	<main role="main">
		<div class="row">
			<?php get_sidebar(); ?>
			<div class="col-md-9">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				<!-- comment fb-->
				<?php
					$classes = get_body_class();
					if (in_array('woocommerce-page',$classes)) {
					   
					} else {
					    comments_template( '', true ); // Remove if you don't want comments
					}

				?>
				<?php
					$classes = get_body_class();
					if (in_array('single-product',$classes)) {
					    comments_template( '', true ); // Remove if you don't want comments
					}
				?>

				<?php// comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		</div>
	</div>
	</main>
	</div>
<?php get_footer(); ?>
