<div class="row my-4">
	<h2 class="text-center">Featured Category</h2>
</div>
<div class="category-list row">
    <?php
$get_featured_cats = array(
	'taxonomy'     => 'product_cat',
	'orderby'      => 'name',
	'hide_empty'   => '0',
    'include'      => $cat_array,
    
);
$all_categories = get_categories( $get_featured_cats );
$j = 1;
foreach ($all_categories as $cat) {
	$cat_id   = $cat->term_id;
	$cat_link = get_category_link( $cat_id );
	echo '<div class="col-sm-12 col-md-3 col-lg-4">';
	$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
	$image = wp_get_attachment_url( $thumbnail_id ); 
	if ( $image ) {
		echo '<img class="img-fluid" src="' . $image . '" alt="" />';
    }
    echo '<a href="' . get_term_link($cat->name, 'product_cat') . '">' . $cat->name . '</a>';
            
	//echo '<h2 class="text-center">'.$cat->name.'</h2>'; // Get Category Name
    
    //echo $cat->description; // Get Category Description
    echo '</div>';
}
// Reset Post Data
wp_reset_query();
?>
</div>