<?php

/**
 * Curriculum Overview Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'curriculum-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'curriculum';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('text') ?: 'Contact info';
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="limit960">
		<h2>Curriculum Overview</h2>
		<p class="center">The SWAG Toolkit is a two-fold curriculum that:</p>
		<div class="curriculum-circle">
			<p class="circle1">addresses the unique and <br>
			complex identities and <br>
			experiences of Black men.</p>
			<p class="circle2">addresses the gap in culturally<br>
			competent training for social <br>
			service/healthcare providers <br>
			that interact with <br>
			Black men.</p>
		</div>
		
		<p class="center">The lesson plans are divided into two sections, each devoted to a distinct, but related, audience:</p>
		
		<div class="row no-gutters">
			<div class="col-md-6">
				<div class="curriculum-box cb1">
					<h3>Adult Black Men</h3>
					<div class="cb-body">
						<p class="center"><em>Black MSM-oriented holistic sexuality education</em></p>
						<p>Most lesson plans in the SWAG Toolkit contain activities meant to be delivered directly to Black men. To be clear, we are aware that Black men do not exist in social vacuums, which is to say that facilitators may be working with groups consisting of other people besides Black men, including both cisgender and transgender women. Some of the activities in the toolkit can be adjusted to facilitate the involvement of all genders. In those cases, however, we encourage facilitators to remain intentional in centering the issues and concerns of Black men, followed by LGBTQ+ Black people more broadly, as is useful to the group.</p>
						
						<p>Lessons are divided into six topics:</p>
						<ul>
							<li>HIV Information</li>
							<li>Sexual Health</li>
							<li>Family & Relationships</li>
							<li>Society & Culture</li>
							<li>Identity & Personal Development</li>
							<li>Discrimination & Bias</li>
						</ul>
						<p class="button black"><a href="/lesson-plans#standard">View Standard Lessons</a></p>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="curriculum-box cb2">
					<h3>Client Experience Contributors</h3>
					<div class="cb-body">
						<p class="center"><em>Provider-oriented competency training</em></p>
						<p>The SWAG Toolkit also contains activities for Client Experience Contributors (CECs) encountering, engaging, and supporting Black men in their work. This includes those supporting Black men in both community resource and healthcare settings who may be in the following roles:</p>
						<ul>
							<li>Medical providers</li>
							<li>Reception staff serving in medical or social service facilities</li>
							<li>Social service providers such as Clinic Resource Counselors and Educators, Patient Peer Counselors and Educators, Community Educators, and Peer Navigators</li>
							<li>Mental health providers and support staff</li>
							<li>Continuing Educators or Trainers for reception staff, Peer Navigators, Medical Providers, and/or other Care Providers</li>
						</ul>
						
						
						<div class="cec-example row no-gutters">
							<div class="col-sm-6">
								<p>Lessons specifically intended for CECs are identified with small, red labels at the top of the lesson cover page.</p>
							</div>
							<div class="col-sm-6">
								<img src="<?php echo get_template_directory_uri() ?>/img/cec-example.svg" />
							</div>
						</div>
						
						<p class="button black"><a href="/lesson-plans#cec">View CEC Lessons</a></p>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="note-language">
			<h3>Note Regarding Language</h3>
			<?php echo get_field('note_regarding_language');?>
		</div>
	
	</div>	
</div>