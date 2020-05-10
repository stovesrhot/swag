<?php
/*
 * Template Name: Toolkit Lesson Plans
 * description: >-
	Toolkit subpages
 */
 ?>

<?php get_header(); ?>

	<main role="main" class="row no-gutters toolkit-body">
		<!-- section -->
		<section class="col">
		<div class="toolkit-title">The Toolkit</div><br>
		<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="limit">
				<div class="row">
					<div class="col-md-6">
						 <div class="toolkit-box">
							<h2>New Around Here?</h2>
						</div>
					</div>
					<div class="col-md-6">
						 <div class="toolkit-box">
							<h2>My Toolkit</h2>
						</div>
					</div>
				</div>
				
				<div class="category-container">
					<h2>Society & Culture</h2>
					<p>Lessons about identifying community and developing support systems</p>
					<div class="lessons-container">
					<?php $args = array('category'   => 7);
					set_query_var( 'args', $args);
					?>
					
					<?php get_template_part( 'templates/content', 'drawer' ); ?>
					
					</div>
				</div>
				
				<div class="category-container">
					<h2>Family & Relationships</h2>
					<p>Lessons about social supports, and developing and maintaining relationships</p>
					<div class="lessons-container">
					<?php $args = array('category'   => 4);
					set_query_var( 'args', $args);
					?>
					
					<?php get_template_part( 'templates/content', 'drawer' ); ?>
					
					</div>
				</div>
				
			</div>

				<?php the_content(); ?>

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
	</main>

<?php get_footer(); ?>
