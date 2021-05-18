<?php

/**
 * footer.php
 *
 * Includes footer from child theme.
 *
 * @author     Jared Deschner
 * @since      File available since Release 1.0.0
 */

?>

<?php
    if (file_exists(get_stylesheet_directory() . '/footer/footer.php')):
        require(get_stylesheet_directory() . '/footer/footer.php');
    endif;
?>

</div>

<!-- <div class="mobile-menu-overlay"></div>
<div class="mobile-menu">
    <button class="mobile-menu-close">
        <p class="screenreader-text">Close Button</p>
        <svg id="close_icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40.02">
            <defs>
                <style>
                    .close-icon-x {
                        fill: #fff;
                    }
                </style>
            </defs>
            <path class="close-icon-x" d="M39.55,33.64,25.88,19.92,39.58,6.37a1.45,1.45,0,0,0,0-2L35.68.42a1.43,1.43,0,0,0-1-.42,1.49,1.49,0,0,0-1,.42L20,13.92,6.35.43a1.45,1.45,0,0,0-1-.42,1.47,1.47,0,0,0-1,.42L.42,4.34a1.46,1.46,0,0,0,0,2.05l13.7,13.54L.46,33.64a1.43,1.43,0,0,0-.42,1,1.4,1.4,0,0,0,.42,1l3.9,3.91a1.41,1.41,0,0,0,1,.43,1.38,1.38,0,0,0,1-.43L20,25.93,33.62,39.58a1.45,1.45,0,0,0,1,.43,1.37,1.37,0,0,0,1-.43l3.9-3.91a1.45,1.45,0,0,0,.42-1A1.48,1.48,0,0,0,39.55,33.64Z"/>
        </svg>
    </button>
    <?php
        if ( file_exists( get_stylesheet_directory() . '/mobile-menu.php') ):
            include( get_stylesheet_directory() . '/mobile-menu.php' );
        else:
	        wp_nav_menu(array(
		        'theme_location' => 'mobile-menu',
		        'container' => false,
		        'menu_class' => 'menu',
	        ));
        endif;
    ?>
</div> -->



<?php wp_footer(); ?>
</body>
</html>
