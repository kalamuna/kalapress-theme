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


<?php wp_footer(); ?>
</body>
</html>
