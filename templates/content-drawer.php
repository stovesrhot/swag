				<?php $lessons = get_posts( $args ); 
					if ( $lessons ) {
						foreach ( $lessons as $post ) : setup_postdata( $post ); ?>
						<div class="lesson-tile" data-id="<?php echo $post->ID ?>"><?php the_title(); ?></div>
							<?php
							$synopsis = get_field('synopsis');
							$first = strtok($synopsis, '.');
							$objectives = get_field('objectives');
							$download = get_field('download');
							$group_size = get_field('group_size');
							$time = get_field('time');
							$materials = get_field('materials');
							$feedback = get_field('feedback');
							$keywords = get_field('keywords');
							?>
							
 							<div class="drawer row" id="drawer-<?php echo $post->ID ?>">
								<div class="col-6">								
									<h3><?php the_title(); ?></h3>
									<?php echo $first; ?>
									<p class="button"><a href="<?php the_permalink(); ?>">Learn More</a></p>
								</div>
								<div class="col-6 details">
									<h4>Keywords</h4>
									<?php echo $keywords ?>
									<h4>Includes</h4>
									<ul class="included">
									<?php while( have_rows('Included') ): the_row(); 
										// vars
										$icon = get_sub_field('icon');
										?>

										<li class="<?php switch ($icon){
												case "PDF":
												echo "icon-pdf";
												break;
												case "Slides":
												echo "icon-slides";
												break;
											}; ?>">
												<?php switch ($icon){
													case "PDF":
													echo "Lesson Plan";
													break;
													case "Slides":
													echo "Slides";
													break;
												}; ?>
										</li>
									<?php endwhile; ?>
									</ul>
									<h4>Group Size</h4>
									<?php echo $group_size; ?>
									<h4>Time</h4>
									<p><?php echo $time; ?></p>
								</div>
							</div>
							
						<?php
						endforeach;
						wp_reset_postdata();
					};?>