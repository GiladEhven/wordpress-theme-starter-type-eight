<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Partial' ) ) {

        abstract class TIE_Partial extends TIE_Default {

            public function __construct() {

                parent::__construct();

            }

            public function build_header() {

                ?>

                    <!DOCTYPE html>
                    <html <?php language_attributes(); ?>>

                        <head>

                            <?php

                                gilad_gtm_before();

                                if ( GILAD_ID_TGM != 'UNSPECIFIED_GTM_CONTAINER_ID' ) {

                            ?>

                            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                            })(window,document,'script','dataLayer','<?php echo GILAD_ID_TGM; ?>');</script>

                            <?php 

                                }

                                gilad_gtm_after();

                            ?>

                            <meta charset="<?php bloginfo( 'charset' ); ?>" />
                            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                            <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
                            <meta name="viewport" content="width=device-width, initial-scale=1" />
                            <?php gilad_meta_add(); ?>

                            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
                            <link rel="profile" href="http://gmpg.org/xfn/11" />
                            <?php gilad_link_add(); ?>

                            <?php // gravity_form_enqueue_scripts( 1, true );
                            wp_head(); ?>

                        </head>

                        <body <?php body_class(); ?>>

                            <?php if ( GILAD_ID_TGM != 'UNSPECIFIED_GTM_CONTAINER_ID' ) { ?>
                            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GILAD_ID_TGM; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                            <?php } ?>

                            <?php gilad_body_begin(); ?>

                            <div id="body">

                                <?php gilad_wrapper_begin(); ?>

                                <header>

                                    <?php

                                        gilad_header_begin();

                                    //  $template_header = new Template_Header();
                    //                $view_header = new View_Header( $this->packaged_data_for_fragment );

                                        gilad_header_end();

                                    ?>

                                </header>

                                <main class="container">

                                    <?php

                                        gilad_main_begin();

            }

        }

    }