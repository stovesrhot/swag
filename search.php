<?php get_header(); ?>

	<main role="main" class="row no-gutters">
		<!-- section -->
		<section class="col">
			<div class="limit">
				<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
