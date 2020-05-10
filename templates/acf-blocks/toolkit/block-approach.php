<?php

/**
 * Overall Approach Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 
 <img src="<?php echo get_template_directory_uri() ?>/img/tour-placeholder.svg" width="280" height="464" />			
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'approach-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'approach';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$overall_approach = get_field('overall_approach');
$approach_to_learning = get_field('approach_to_learning');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="limit960">
		<?php echo $overall_approach;
			  echo $approach_to_learning;
		?>
	</div>	

	<div class="approach-icons row">
	<div class="col-sm-6">
		<img src="<?php echo get_template_directory_uri() ?>/img/icon-overview-black.svg" class="icon-overview-black" />
		<p class="button black"><a href="">Read the Overview</a></p>
	</div>
	<div class="col-sm-6">
		<img src="<?php echo get_template_directory_uri() ?>/img/icon-toolkit-black.svg" class="icon-toolkit-black" />
		<p class="button black"><a href="">Go to the Toolkit</a></p>
	</div>
	</div>

</div>
