<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/document.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Page' ) ) {

        class Template_Page extends TIE_Document {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $page = new Template_Page();



    $page->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'page.php',
        'class'    => 'Template_Page',
        'type'     => 'Document',
        'parent'   => 'TIE_Document',
    ));
