<?php
/*
 * Template Name: Login Page
 * description: >-
	Custom login form 
 */
 ?>

<?php get_header(); ?>

	<main role="main" class="row no-gutters account">
		<!-- section -->
		<section class="col">
			<div class="h1-wrap">
				<h1><?php the_title(); ?></h1>
			</div>
			
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="limit">
			
			<?php if (is_user_logged_in()) {
				$user_info = get_userdata(get_current_user_id());?>
				<p class="login-message">You are currently logged in as <?php echo $user_info->first_name ?> <?php echo  $user_info->last_name ?>.<br><br><a href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a></p>
			<?php } else { 
				 the_content(); 
			}?>

				<?php edit_post_link(); ?>
			</div>
			<div class="message-window">
				<div class="limit">
					 <?php 
					 	
					 	if (is_user_logged_in()) {
					 		echo "<p>Go to <a href='/my-toolkit'>My Toolkit</a></p>";
					 	} else {
							global $post;
							$post_slug = $post->post_name; 
							switch ($post_slug){
								case "log-in":
									echo "<p>Don't have an account yet? <a href='/create-account'>Create</a> one now.</p>";
									break;
								case "create-account":
									echo "<p>Already have an account? <a href='/log-in'>Log in</a></p>";
									break;
								default:
									echo "<p>Go to <a href='/my-toolkit'>My Toolkit</a></p>";
							}
    					} ?>
				</div>
			</div>
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
