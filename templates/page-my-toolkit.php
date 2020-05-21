<?php
/*
 * Template Name: My Toolkit Page
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
			
			<div class="top-box">
			<?php if (is_user_logged_in()) {
				$user_info = get_userdata(get_current_user_id());
				echo "<p>Hi, " . $user_info->first_name ."!</p>";?>
				<div class="row">
					<div class="col-4">
						<img src="<?php echo get_template_directory_uri() ?>/img/icon-blue-favorite.svg" />
						<p class="button blue"><a href="#favorites">View Favorites</a></p>
					</div>
					<div class="col-4">
						<img src="<?php echo get_template_directory_uri() ?>/img/icon-blue-review.svg" />
						<p class="button blue"><a href="#review">Review a Lesson</a></p>
					</div>
					<div class="col-4">
						<img src="<?php echo get_template_directory_uri() ?>/img/icon-blue-edit.svg" />
						<p class="button blue"><a href="#edit">Edit Profile</a></p>
					</div>
				</div>
				<?php } else { ?>
				<div class="row">
					<div class="col-6">
						<img src="<?php echo get_template_directory_uri() ?>/img/icon-blue-login.svg" />
						<p class="button blue"><a href="/log-in">Log In</a></p>
						<p class="smallp">See your saved lessons and leave feedback.</p>
					</div>
					<div class="col-6">
						<img src="<?php echo get_template_directory_uri() ?>/img/icon-blue-account.svg" />
						<p class="button blue"><a href="/create-account">Create an Account</a></p>
						<p class="smallp">View and download lessons.</p>
					</div>
				</div>
			<?php } ?>
			</div>
			
			<div class="limit">			
				<a id="favorites" class="anchor-link"></a>
				<h2>Favorites</h2>
				<?php 
				$filters = array(
				  'terms' => array(
					'category' => array(
					  'cec' 
					)
				  )
				);
				the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = $filters);
				 ?>
			</div>

			<div class="review">
				<a id="review" class="anchor-link"></a>
				<div class="limit">
					<h2>Review a Lesson</h2>
					<p>Did you facilitate a lesson? Please share your experience! Your feedback helps us build a better toolkit. Contact <a href="mailto:info@swagtoolkit.com">info@swagtoolkit.com</a> for any questions you may have.</p>
					<p class="button black"><a href="https://widener.qualtrics.com/jfe/form/SV_bg9V6CGgbBUOKBD" target="_blank">Write a Review</a></p>
				</div>
			</div>
			
			<div class="edit-profile">
				<a id="edit" class="anchor-link"></a>
				<div class="limit">
					<h2>Edit Profile</h2>
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
