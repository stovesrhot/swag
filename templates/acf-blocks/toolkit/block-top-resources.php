<?php

/**
 * Top Resources Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'top-resources-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'top-resources';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
		<h2>Top Facilitator Resources</h2>
   
    <?php if( have_rows('resources') ): ?>
    	<div class="row">
		<?php while( have_rows('resources') ): the_row(); 
			// vars
			$title = get_sub_field('title');
			$cover = get_sub_field('cover');
			$link = get_sub_field('link');
			?>
			<div class="col-md-4">
			<?php if( !empty( $cover ) ): ?>
				<a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo esc_url($cover['url']); ?>" alt="<?php echo esc_attr($cover['alt']); ?>" /></a>
				<p><?php echo $title; ?></p>
			<?php endif; ?>	
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>

</div>
