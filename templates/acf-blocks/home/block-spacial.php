<?php

/**
 * Homepage Spacial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'homespacial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'homespacial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title') ?: 'Your Headline here...';
$paragraph = get_field('paragraph') ?: 'Descriptive text';
$graph1 = get_field('graph1');
$graph2 = get_field('graph2');
$graph_title1 = get_field('graph_title1');
$graph_title2 = get_field('graph_title2');
$graph_caption = get_field('graph_caption');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="limit row no-gutters">
		<div class="col-md-9 text">
			<h3><?php echo $title; ?></h3>
			<?php echo $paragraph; ?>
		</div>
		<div class="col-md-3 graphs">
			<?php 
			if( !empty( $graph1 ) ): ?>
				<img src="<?php echo esc_url($graph1['url']); ?>" alt="<?php echo esc_attr($graph1['alt']); ?>" class="graph" />
			<?php endif; ?>
			<h4 class="graph-title"><?php echo $graph_title1; ?></h4>
			 <?php 
			if( !empty( $graph2 ) ): ?>
				<img src="<?php echo esc_url($graph2['url']); ?>" alt="<?php echo esc_attr($graph2['alt']); ?>" class="graph" />
			<?php endif; ?>
			<h4 class="graph-title"><?php echo $graph_title2; ?></h4>
			<p class="graph-caption"><?php echo $graph_caption; ?></p> 
		</div>
    </div>
</div>