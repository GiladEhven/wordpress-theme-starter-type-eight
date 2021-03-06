<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_ERROR . '/404.php' );

    class Template_404 extends CORE_404 {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_404 = new Template_404();
    $data = get_object_vars( $template_404 );

    $template_404->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-404.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<div class="col-12">';
        echo '<h1>This is a 404 page</h1>';
        echo '<h3>Generated by the <code>404.php</code> template</h3>';
        echo '</div>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();
