<?php

/**
 * Tour a Lesson Plan Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'tour-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'tour';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('text') ?: 'Contact info';
?>

			<div class="tour limit">

			<div class='walkthrough'>
			  <div class='walkthrough-pagination'>
				<a class='dot active'></a>
				<a class='dot'></a>
				<a class='dot'></a>
				<a class='dot'></a>
				<a class='dot'></a>
				<a class='dot'></a>
				<a class='dot'></a>
				<a class='dot'></a>
				<a class='dot'></a>
				<a class='dot'></a>
			  </div>
			  <div class='walkthrough-body'>
				<ul class='screens animate'>
				  <li class='screen active'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-0.png" />
					</div>
					<h3>
						TOUR A LESSON PLAN
					</h3>
					<p>Take a quick look at what's in the SWAG Toolkit.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-1.png" />
					</div>
					<h3>
						BASIC ORGANIZATION
					</h3>
					<p>Lessons are divided into six topical themes and are designed for two audiences: adult black men, and Client Experience Contributors (CECs) - traditionally referred to as providers.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-2.png" />
					</div>
					<h3>
						LESSON COVER PAGE
					</h3>
					<p>The cover identifies the theme and lists keywords to lead you to lessons of interest. If you are looking for lessons specifically intended for CECs, look for small, red labels at the top of this page.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-3.png" />
					</div>
					<h3>
						PREPARATION SECTION
					</h3>
					<p>This section provides practical information such as timetables, key terms, required background knowledge for facilitators, and material checklists.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-4.png" />
					</div>
					<h3>
					  PROCEDURE SECTION
					</h3>
					<p>This section is a step-by-step guide for your session. Icons provide prompts for time limits, relevant handouts, slides, and facilitator resources. Wide margins allow you to make your own notes.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-5.png" />
					</div>
					<h3>
						FACILITATOR RESOURCES
					</h3>
					<p>Some lessons include a Facilitator Resource section to guide activities or provide more reference.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-6.png" />
					</div>
					<h3>
						HANDOUTS
					</h3>
					<p>Some lessons include handouts designed to be printed and distributed to your participants for use during the session.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo slides' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-7.png" />
					</div>
					<h3>
						SLIDE PRESENTATIONS
					</h3>
					<p>Some sessions utilize a PDF slide presentation, which can be projected or printed.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-8.png" />
					</div>
					<h3>
						FEEDBACK
					</h3>
					<p>Share your experience and see what others are saying about the lessons. Your feedback helps us build a better toolkit.</p>
				  </li>
				  <li class='screen'>
					<div class='media logo'>
					  <img class='logo' src="<?php echo get_template_directory_uri() ?>/img/tour/slide-9.png" />
					</div>
					<h3>
						PROFILE
					</h3>
					<p>Update your profile, manage your favorite lessons, and review a lesson all under your profile settings.</p>
				  </li>
				</ul>
				<button class='prev-screen'>
				  <i class='fas fa-angle-left'></i>
				</button>
				<button class='next-screen'>
				  <i class='fas fa-angle-right'></i>
				</button>
			  </div>
			  <div class='walkthrough-footer'>
				<button class='button next-screen'>Next</button>
				<button class='button finish toolkit' disabled='true' onclick="location.href='/lesson-plans';" >Go To Toolkit</button>
				<button class='button finish account' disabled='true' onclick="location.href='/create-account';" >Create an Account</button>
			  </div>
			</div>










			</div>