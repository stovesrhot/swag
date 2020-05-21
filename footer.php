			<!-- footer -->
			<footer class="footer" role="contentinfo">
			
				<?php if(is_single()): ?>
				<div class="related-lessons">
					<div class="limit">	
						<h2>Related Lessons</h2>
						<div class="category-container">
						<?php 
							$post_objects = get_field('related_lessons');
							$category_id = 1;
						?>
							<?php /** if(count($lessons)>5): ?>
							<a class="lesson-arrow-left" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-left.png" /></a>
							<a class="lesson-arrow-right" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-right.png" /></a>
							<?php endif; **/ ?>

							<div class="lessons-container">
							<?php if( $post_objects ): ?>
							<section id="cat<?php echo $category_id;?>-section1">
							<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
								<?php setup_postdata($post);
									$lessonTileTitle = substr(get_the_title($post->ID),0,75);
									$lessonCat = 0;
									$categories = get_the_category($post->ID);
									
									if ( ! empty( $categories ) ) {
										foreach( $categories as $category ) {
											if ($category->cat_ID==8) {
												$lessonCat=$category->cat_ID;
											}
										}
									}									
								?>
									<div class="lesson-tile <?php if($lessonCat==8){echo "cec";} ?>" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $post->ID ?>"><?php echo $lessonTileTitle; ?></div>
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
								</section>
							<?php endif; ?>
							</div>
	
							<?php
							set_query_var('post_data', array(
							  'category_id' => $category_id,
							));
							get_template_part( 'templates/content', 'drawer' );
							?>
						</div>
					</div>
				</div>
				<?php endif; ?>
			
			
			
			
			
				<div class="limit">
				<!-- copyright -->
				<p class="copyright">
					<a href="https://www.widenerisrc.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/isrc-logo.svg" alt="Interdisciplinary Sexuality Research Collaborative" /></a><br>
					ISRC is a research organization within the Center for Human Sexuality Studies at Widener University.<br>
					Learn more at <a href="https://www.widenerisrc.com" target="_blank">widenerisrc.com</a><br>
					<br>
					&copy; <?php echo date('Y'); ?>
				</p>
				<!-- /copyright -->
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
