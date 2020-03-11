<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woocommercetest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="profile" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
 
        <div class="container" style="position: absolute;z-index: 1;left: 5%;">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="position: relative; z-index: -1;">
                <a class="navbar-brand font-weight-bold" href="#">CODISHOP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    wp_nav_menu(array(
                      "menu" => 'Menu header',
                      'menu_class' => 'navbar',
                      'container_class' => 'm-auto',
                    ))
                  ?>
                  <!-- <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOP</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                      </li>
                  </ul> -->
                </div>
                <div>
                    <a href="#" class="px-2"><i class="far fa-user"></i></a>
                    <a href="#" class="px-2"><i class="fas fa-shopping-bag"></i></a>
                    <a href="#" class="px-2"><i class="fas fa-search"></i></a>
                </div>
              </nav>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
          
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <?php 

              $args = array( 
                'post_type' => 'product',
                'posts_per_page' => 3,
              );
              $loop = new WP_Query( $args );
              $i = 0;
              while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <?php 
              $product = get_product($loop->post);
              $i++;
              ?>
              <div class="carousel-item <?php if($i <2): echo "active"; endif ?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" class="d-block w-100 " style="height: 700px;" alt="...">
                <div class="carousel-caption d-none d-md-block" style="top: 200px; left: 42%;">
                    <div class="text-left text-dark" style="width: 500px;">
                        <h1 class="text-white"><?php echo the_title(); ?></h1>
                        <p class="text-white"><?php echo $product->get_short_description(); ?></p>
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btn btn-dark ">LEARN MORE</a>
                    </div>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); // Remember to reset ?>

             
             
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </header>

