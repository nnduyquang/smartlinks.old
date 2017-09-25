<?php global $product; ?>
<li class="clearfix">
	<?php
		$image_id = get_post_thumbnail_id($product->id);
		$image_thumb = codeus_thumbnail($image_id, 'codeus_widget_products');
		if(!empty($image_thumb)) {
			echo '<div class="image"><a href="'.get_permalink($product->id).'"><img src="'.$image_thumb[0].'" alt=""/><span class="overlay"></span></a></div>';
		} else {
			echo '<div class="image dummy"><a href="'.get_permalink($product->id).'"><span class="overlay"></span></a></div>';
		}
	?>
	<div class="title"><a href="<?php get_permalink($product->id); ?>"><?php echo $product->get_title(); ?></a></div>
	<div class="price"><?php echo $product->get_price_html(); ?></div>
	<?php if ( $product->is_on_sale() ) : ?>
		<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">%</span>', null, $product ); ?>
	<?php endif; ?>
</li>