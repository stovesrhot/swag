<?php

/**
 * Homepage Map Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'homemap-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'homemap';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title') ?: 'Your Headline here...';
$paragraph = get_field('paragraph') ?: 'Descriptive text';
$map = get_field('map');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="limit">
		<h2 class="overline"><?php echo $title; ?></h2>
		<?php echo $paragraph; ?>
		<div class="map-image">
			<?php 
			if( !empty( $map ) ): ?>
				<img src="<?php echo esc_url($map['url']); ?>" alt="<?php echo esc_attr($map['alt']); ?>" />
			<?php endif; ?>
		</div>
    </div>
</div>