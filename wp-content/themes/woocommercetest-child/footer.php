<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woocommercetest
 */

?>
		    <footer class="d-flex pt-5">
        <div class="col-4">
            <h6 class="pb-4 ml-3">HELP</h6>
            <ul class="p-0">
                <a href="#"><li>About</li></a>
                <a href="#"><li>About</li></a>
                <a href="#"><li>About</li></a>
                <a href="#"><li>About</li></a>
            </ul>
        </div>
        <div class="col-4">
            <h6 class="pb-4">ABOUT</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur perspiciatis nesciunt, quis
                perferendis et aliquid cumque assumenda voluptates! Officiis saepe, dicta unde reprehenderit eaque qui
                assumenda sapiente rem tenetur ratione, nostrum in ipsa molestiae ab repudiandae quas. Eligendi, quis?
            </p>
        </div>
        <div class="col-4">

            <p><?php dynamic_sidebar( 'newsletter-sidebar' ); ?></p>
        </div>
    </footer>
    <p class="text-center pt-2">Copyright blabla n°666</p>
<?php wp_footer(); ?>

</body>
</html>
