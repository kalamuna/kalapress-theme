<?php function kalapress_login_logo() { ?>

    <style type="text/css">

        #login h1 a {

            background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/kalamuna-logo.png');
            width: 220px;
            height: 269px;
            background-size: contain;

        }

    </style>

<?php }


add_action( 'login_enqueue_scripts', 'kalapress_login_logo' );


function kalapress_login_logo_url() {

    return 'https://www.kalamuna.com';

}


add_filter( 'login_headerurl', 'kalapress_login_logo_url' );


function kalapress_login_text() {

    return 'Kalamuna - KalaPress Wordpress';

}


add_filter( 'login_headertext', 'kalapress_login_text' );

?>