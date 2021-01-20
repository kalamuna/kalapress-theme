<?php

/**
 * header.php
 *
 * Includes header from child theme.
 *
 * @author     Jared Deschner
 * @since      File available since Release 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php if (defined('KALAPRESS_GTM_ID')): ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?php echo KALAPRESS_GTM_ID; ?>');</script>
        <!-- End Google Tag Manager -->
    <?php endif; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (defined('KALAPRESS_GTM_ID')): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo KALAPRESS_GTM_ID; ?>"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<div id="page">
<?php

if (file_exists(get_stylesheet_directory() . '/header/header.php')):
    require(get_stylesheet_directory() . '/header/header.php');
endif;

?>