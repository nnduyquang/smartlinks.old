<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
	$classes[] = 'lazy-loading-item';
?>
<li <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

		<?php
			do_action( 'codeus_woocommerce_before_shop_loop_item_title' );
			$image = codeus_thumbnail(get_post_thumbnail_id(), 'codeus_product_list');
		?>
		<a href="<?php the_permalink(); ?>">
			<?php if($image[0]) : ?>
				<span class="image"><img src="<?php echo $image[0]?>" width="<?php echo $image[1]?>" height="<?php echo $image[2]?>" alt="<?php the_title(); ?>" /><span class="overlay"><span class="p-icon"></span></span></span>
			<?php else: ?>
				<span class="image dummy">
				<span class="overlay"><span class="p-icon"></span></span></span>
			<?php endif; ?>
		</a>
		<div class="product-info">
			<div class="title"><div class="title-inner"><div class="title-inner-content"></div></div></div>
			<div class="small-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			<div class="info"><?php echo ($product->get_categories(' | ') ? $product->get_categories(' | ') : '&nbsp;'); ?></div>
			<div class="description clearfix">
				<?php do_action( 'codeus_woocommerce_after_shop_loop_item_title_price' ); ?>&nbsp;
				<div class="clear"></div>
				<div class="stars-placeholder"><?php do_action( 'codeus_woocommerce_after_shop_loop_item_title_rating' ); ?></div>
			</div>
		</div>

	<div class="description"><?php do_action( 'woocommerce_after_shop_loop_item' ); ?></div>

</li>