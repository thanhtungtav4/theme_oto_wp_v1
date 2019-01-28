<?php get_header(); ?>
	<div class="container">
	<main role="main">
		<div class="row">
			<?php get_sidebar(); ?>
			<div class="col-md-9">

		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
	</div>
</div>

<?php get_footer(); ?>
