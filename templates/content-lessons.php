				<div class="lessons-container">
						<section id="cat<?php echo $category_id ?>-section1">
						
						<?php if ( $lessons ): ?>
						  <?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
						  	$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						  ?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
						  <?php endforeach; ?>
						  <?php wp_reset_postdata(); ?>
						<?php endif; ?>
						</section>
					</div>
					
				<?php
				set_query_var('post_data', array(
				  'category_id' => $category_id,
				));
				get_template_part( 'templates/content', 'drawer' );
				?>
				</div>