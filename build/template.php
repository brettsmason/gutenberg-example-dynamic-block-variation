<?php
$is_variation = $attributes['isVariation'] ? 'This is a variation' : 'This is not a variation';
?>

<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php printf( '%1$s. I have %2$s columns', esc_html( $is_variation ), esc_attr( $attributes['columns'] ) ); ?>
</p>
