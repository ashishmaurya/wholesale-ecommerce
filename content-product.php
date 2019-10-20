<div class="product-item col-sm-12 col-md-4 col-lg-3   ">
     <!-- <h3>
          <a href="<?php the_permalink(); ?>">
               <?php the_title(); ?>
          </a>
     </h3> -->
     <?php the_post_thumbnail(); ?>
     <h2>
          <?php the_title(); ?>
     </h2>
     <?php the_excerpt(); ?>

     <div><?php 
     $currency = get_woocommerce_currency_symbol();
     echo  $currency.' '.get_post_meta( get_the_ID(), '_regular_price', true); ?></div>
     <div>
          <button class='btn btn-primary w-100'>Enquiry</button>
     </div>
</div>