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
							<p>Learn about the lessons and the curriculum.</p>
							<div class="row">
								<div class="col-6">
									<img src="<?php echo get_template_directory_uri() ?>/img/icon-tk-tour.svg" />
									<p class="button tk1"><a href="#">Tour a Lesson</a></p>
									<p class="smallp">Take a quick look at what’s in a lesson plan.</p>
								</div>
								<div class="col-6">
									<img src="<?php echo get_template_directory_uri() ?>/img/icon-tk-overview.svg" />
									<p class="button tk2"><a href="/wp-content/uploads/2020/05/ISRC_SWAGOverview.pdf" target="_blank">Read the Overview</a></p>
									<p class="smallp">Learn more about who and what inspires this work.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						 <div class="toolkit-box">
							<h2>My Toolkit</h2>
							<p>Manage your saved lessons and stay in touch.</p>
							<div class="row">
								<div class="col-6">
									<img src="<?php echo get_template_directory_uri() ?>/img/icon-red-login.svg" />
									<p class="button tk3"><a href="/log-in">Log In</a></p>
									<p class="smallp">See your saved lessons and leave feedback.</p>
								</div>
								<div class="col-6">
									<img src="<?php echo get_template_directory_uri() ?>/img/icon-red-account.svg" />
									<p class="button tk4"><a href="/create-account">Create an Account</a></p>
									<p class="smallp">View and download lessons.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<a id="standard" class="anchor-link"></a>
				<div class="lessons-anchors">
					<strong>STANDARD LESSONS</strong> &nbsp; // <a href="#cec">jump to CEC LESSONS</a>
				</div>
				
				<?php
					$category_id = 3;
					$lessons = get_posts( array('category' => $category_id, 'numberposts'  => -1));
				?>
				<div class="category-container cat<?php echo $category_id?>">
					<h2>Discrimination & Bias</h2>
					<p>Lessons about issues of prejudice and discrimination and ways to address them</p>
					<?php if(count($lessons)>5): ?>
					<a class="lesson-arrow-left" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-left.svg" /></a>
					<a class="lesson-arrow-right" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-right.svg" /></a>
					<?php endif; ?>
					
					<div class="lessons-container">
					<?php if ( $lessons ): 
						$offset=5;
						$counter=0;
						?>
						<section id="cat<?php echo $category_id;?>-section1">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ >= $offset){ 
								break;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						</section>
					<?php endif; ?>
					<?php if(count($lessons)>5): 
						$offset=5;
						$counter=0;
					?>
						<section id="cat<?php echo $category_id;?>-section2">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ < $offset){ 
								continue;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
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
				
				<?php
					$category_id = 4;
					$lessons = get_posts( array('category' => $category_id, 'numberposts'  => -1));
				?>				
				<div class="category-container cat<?php echo $category_id?>">
					<h2>Family & Relationships</h2>
					<p>Lessons about social supports, and developing and maintaining relationships</p>
					<?php if(count($lessons)>5): ?>
					<div class="lesson-arrow-left" data-category-id="<?= $category_id ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-left.svg" /></div>
					<div class="lesson-arrow-right" data-category-id="<?= $category_id ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-right.svg" /></div>
					<?php endif; ?>
					
					<div class="lessons-container">
					<?php if ( $lessons ): 
						$offset=5;
						$counter=0;
						?>
						<section id="cat<?php echo $category_id;?>-section1">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ >= $offset){ 
								break;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,70);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						</section>
					<?php endif; ?>
					<?php if(count($lessons)>5): 
						$offset=5;
						$counter=0;
					?>
						<section id="cat<?php echo $category_id;?>-section2">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ < $offset){ 
								continue;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,70);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
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
				
				<?php
					$category_id = 5;
					$lessons = get_posts( array('category' => $category_id, 'numberposts'  => -1));
				?>
				<div class="category-container cat<?php echo $category_id?>">
					<h2>Identity & Personal Development</h2>
					<p>Lessons	about developing an understanding of oneself, and learning ways to process ones thoughts and feelings</p>
					<?php if(count($lessons)>5): ?>
					<a class="lesson-arrow-left" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-left.svg" /></a>
					<a class="lesson-arrow-right" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-right.svg" /></a>
					<?php endif; ?>
					
					<div class="lessons-container">
					<?php if ( $lessons ): 
						$offset=5;
						$counter=0;
						?>
						<section id="cat<?php echo $category_id;?>-section1">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ >= $offset){ 
								break;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						</section>
					<?php endif; ?>
					<?php if(count($lessons)>5): 
						$offset=5;
						$counter=0;
					?>
						<section id="cat<?php echo $category_id;?>-section2">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ < $offset){ 
								continue;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
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

				<?php
					$category_id = 6;
					$lessons = get_posts( array('category' => $category_id, 'numberposts'  => -1));
				?>
				<div class="category-container cat<?php echo $category_id?>">
					<h2>Sexual Health & HIV</h2>
					<p>Lessons about living a happy and healthy sex life with and without HIV</p>
					<?php if(count($lessons)>5): ?>
					<a class="lesson-arrow-left" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-left.svg" /></a>
					<a class="lesson-arrow-right" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-right.svg" /></a>
					<?php endif; ?>
					
					<div class="lessons-container">
					<?php if ( $lessons ): 
						$offset=5;
						$counter=0;
						?>
						<section id="cat<?php echo $category_id;?>-section1">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ >= $offset){ 
								break;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						</section>
					<?php endif; ?>
					<?php if(count($lessons)>5): 
						$offset=5;
						$counter=0;
					?>
						<section id="cat<?php echo $category_id;?>-section2">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ < $offset){ 
								continue;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
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
				
				<?php
					$category_id = 7;
					$lessons = get_posts( array('category' => $category_id, 'numberposts'  => -1));
				?>
				<div class="category-container  cat<?php echo $category_id?>">
					<h2>Society & Culture</h2>
					<p>Lessons about identifying community and developing support systems</p>
					<?php if(count($lessons)>5): ?>
					<a class="lesson-arrow-left" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-left.svg" /></a>
					<a class="lesson-arrow-right" data-category-id="<?= $category_id ?>" href="#/"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-right.svg" /></a>
					<?php endif; ?>
					
					<div class="lessons-container">
					<?php if ( $lessons ): 
						$offset=5;
						$counter=0;
						?>
						<section id="cat<?php echo $category_id;?>-section1">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ >= $offset){ 
								break;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						</section>
					<?php endif; ?>
					<?php if(count($lessons)>5): 
						$offset=5;
						$counter=0;
					?>
						<section id="cat<?php echo $category_id;?>-section2">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ < $offset){ 
								continue;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
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
			<div id="cec-row">	
				<div class="limit">
				<a id="cec" class="anchor-link"></a>
				<div class="lessons-anchors">
					<strong>CEC LESSONS</strong> &nbsp; // <a href="#standard">jump to STANDARD LESSONS</a>
				</div>
				
				<?php
					$category_id = 8;
					$lessons = get_posts( array('category' => $category_id, 'numberposts'  => -1));
				?>
				<div class="category-container cat<?php echo $category_id?>">
					<h2>lessons for client experience contributors (CECs)</h2>
					<p>Lessons focusing on knowledge and skills to help CECs better serve black gay and bisexual men</p>
					<?php if(count($lessons)>5): ?>
					<div class="lesson-arrow-left" data-category-id="<?= $category_id ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-left-cec.svg" /></div>
					<div class="lesson-arrow-right" data-category-id="<?= $category_id ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lesson-arrow-right-cec.svg" /></div>
					<?php endif; ?>

					<div class="lessons-container">
					<?php if ( $lessons ): 
						$offset=5;
						$counter=0;
						?>
						<section id="cat<?php echo $category_id;?>-section1">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ >= $offset){ 
								break;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						</section>
					<?php endif; ?>
					<?php if(count($lessons)>5): 
						$offset=5;
						$counter=0;
					?>
						<section id="cat<?php echo $category_id;?>-section2">
						<?php foreach ( $lessons as $lesson ) : setup_postdata( $lesson ); 
							if($counter++ < $offset){ 
								continue;
							}
							$lessonTileTitle = substr(get_the_title($lesson->ID),0,75);
						?>
							<div class="lesson-tile" data-category-id="<?= $category_id ?>" data-lesson-id="<?php echo $lesson->ID ?>"><?php echo $lessonTileTitle; ?></div>
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
