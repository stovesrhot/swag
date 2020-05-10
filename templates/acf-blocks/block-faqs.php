<?php

/**
 * FAQs (Resources) Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faqs-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'faqs';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$h2title = get_field('h2title');
$region = get_field('region');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="limit960">
		<h2><?php echo $h2title; ?></h2>
    </div>
    <div class="limit1024">
    <?php if( have_rows('region') ): ?>
    	<div id="accordion">
		<?php while( have_rows('region') ): the_row(); 
			// vars
			$title = get_sub_field('title');
			$content = get_sub_field('content');
			?>
			<h3><?php echo $title; ?></h3>
			<div><?php echo $content ?></div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
    </div>
</div>
