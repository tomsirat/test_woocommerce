<section class="shop-part-box w-75 pt-2 m-auto">
        <div class="navigation-products-box d-flex">
            <div class="col-8">
                <nav class="navigation-products">
                    <ul class="d-flex flex-row m-0 pb-4">
                        <?php
                    $args = array(
                        'taxonomy'   => "product_cat",
                        'number'     => $number,
                        'orderby'    => $orderby,
                        'order'      => $order,
                       
                        'include'    => $ids
                    );
                    $product_categories = get_terms($args);
                    foreach( $product_categories as $cat ) {
                         
                        ?>

                        <li><a class="link-nav-products" href="#"><?php echo $cat->name;?> </a></li>

                         <?php 
                         }
                         ?>
        
                    </ul>
                </nav>
            </div>
            <div class="col-4">
                <a class="allproducts" href="#">All products >></a>
            </div>
        </div>
        <div class="products-box d-flex flex-row">


        <?php

// Setup your custom query
$args = array( 'post_type' => 'product', );
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php 
$product = get_product($loop->post);

?>

            <div class="col-4 text-left content-products"> <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="test">
                <h5><?php echo the_title(); ?></h5>
                <p><?php echo $product->get_average_rating();?></p>
                <p class="text-muted"> price <?php echo $product->get_regular_price(); ?></p>
                <p class="text-muted">sale price <?php echo $product->get_sale_price(); ?></p>
                </a> 
            </div>
          
            <?php endwhile; wp_reset_query(); // Remember to reset ?>
            
        </div>
        <a href="#" class="d-flex justify-content-center showallbtn text-secondary">Show All</a>
</section>