<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/front.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Home' ) ) {

        class Template_Home extends TIE_Front {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $home = new Template_Home();



    $home->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'home.php',
        'class'    => 'Template_Home',
        'type'     => 'Front',
        'parent'   => 'TIE_Front',
    ));
