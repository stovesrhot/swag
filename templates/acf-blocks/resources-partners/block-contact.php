<?php

/**
 * Photo Left with Text Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$paragraph = get_field('paragraph');
$email = get_field('email');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="limit">
		<img src="<?php echo get_template_directory_uri() ?>/img/contact-map.svg" alt="Contact Us" />
		<?php echo $paragraph; ?>
		<p class="button"><a href="mailto:<?php echo $email; ?>">Contact Us</a></p>
    </div>
</div>