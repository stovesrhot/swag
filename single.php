<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="limit">

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- Load ACF Variables -->
			<?php
			$author = get_field('author');
			$synopsis = get_field('synopsis');
			$objectives = get_field('objectives');
			$download = get_field('download');
			$group_size = get_field('group_size');
			$time = get_field('time');
			$materials = get_field('materials');
			$feedback = get_field('feedback');
			?>
			
			<!-- begin lesson -->
			<div class="row no-gutters lesson-tools">
				<div class="col-sm-6">
					<p class="theme">Theme: <strong>
					<?php foreach((get_the_category()) as $category){
						switch ($category->name) {
							case 'Standard':
								break;
							default:
								echo $category->name;
						}
					} 
					?></strong></p>
				</div>
				<div class="col-sm-6">
				<?php if (is_user_logged_in()) { ?>
				<ul>
					<li><i class="icon-share"></i><a href="#">Share</a></li>
					<li><i class="icon-review"></i><a href="https://widener.qualtrics.com/jfe/form/SV_bg9V6CGgbBUOKBD" target="_blank">Review</a></li>
					<li><?php the_favorites_button($post_id, $site_id); ?></li>
				</ul>
				<?php } ?>
				</div>
			</div>
			
			<h1><?php the_title(); ?></h1>
			<p class="author">by <?php echo $author; ?></p>
			<?php echo $synopsis; ?>
			
			<div class="row no-gutters lesson-details">
				<div class="col-md-6 leftcol">
					<h3>Objectives</h3>
					<p>By the end of this lesson, participants will be able to:</p>
					<?php echo $objectives; ?>
			
					<h3>Included in this Lesson</h3>
					<?php if( have_rows('Included') ): ?>
						<ul class="included">
						<?php while( have_rows('Included') ): the_row(); 
							// vars
							$icon = get_sub_field('icon');
							$file = get_sub_field('file');
							?>

							<li class="<?php switch ($icon){
									case "PDF":
									echo "icon-pdf";
									break;
									case "Slides":
									echo "icon-slides";
									break;
								}; ?>">
								
								<?php if( $file ): ?>
									<a href="<?php echo $file['url']; ?>" target="_blank">
									<?php switch ($icon){
										case "PDF":
										echo "<strong>Lesson Plan</strong> (PDF)";
										break;
										case "Slides":
										echo "<strong>Slides</strong> (PDF)";
										break;
									}; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
			
					<h3>DOWNLOAD complete lesson resources</h3>
					<p>Get all the documents you need for this lesson as a compressed (.zip) file.</p>
					<?php if (is_user_logged_in()) { ?>
					<p class="button"><a href="<?php echo $download['url']; ?>">Download</a></p>
					<?php } else { ?>
					<p>To download, <a href="/create-account">create an account</a>.</p>
					<?php } ?>
				</div>
			
				<div class="col-md-6 rightcol">
					<h3>Group Size</h3>
					<?php echo $group_size; ?>
				
					<h3>Time</h3>
					<p><?php echo $time; ?></p>
				
					<h3>Materials</h3>
					<?php echo $materials; ?>
				</div>
			</div>
			
			
		</div>
		<div class="feedback">
			<div class="limit">
				<h2>Reviews</h2>
				
				<div class="row">
					<?php if ( have_rows('feedback')):
						while( have_rows('feedback')): the_row();
						//vars
						$quote = get_sub_field('quote');
						$credit = get_sub_field('credit');
						if($quote){
					?>
					<div class="col-sm-6">
						<h3>facilitator feedback</h3>
						<p class="quote">&ldquo;<?php echo $quote; ?>&rdquo;</p>
						<p class="credit">-<?php echo $credit; ?></p>
					</div>
					<?php 
						}
						endwhile;
					endif;
					 ?>
					<div class="col-sm-6">
						<h3>Write a Review</h3>
						<p>Did you facilitate this lesson? Share your thoughts with other facilitators.</p>
						<p class="button black"><a href="https://widener.qualtrics.com/jfe/form/SV_bg9V6CGgbBUOKBD" target="_blank">Review a Lesson</a></p>
					</div>
				</div>
				
			</div>
		</div>
					
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
	
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
