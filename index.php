<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container-fluid">
		<div class="row">
		<div class="col-sm-12">
			<h2 class='text-center'>Featured Product</h2>
		</div>
	<?php
		// The tax query
		$tax_query[] = array(
			'taxonomy' => 'product_visibility',
			'field'    => 'name',
			'terms'    => 'featured',
			'operator' => 'IN', // or 'NOT IN' to exclude feature products
		);

		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 4,
			'tax_query'           => $tax_query
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</div><!--/.products-->
<?php 
include 'category-list.php';
?>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
