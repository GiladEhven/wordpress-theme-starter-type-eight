<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/partial.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Sidebar' ) ) {

        class Template_Sidebar extends TIE_Partial {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $sidebar = new Template_Sidebar();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $sidebar->set_data(array(
        'template' => 'sidebar.php',
        'class'    => 'Template_Sidebar',
        'type'     => 'Partial',
        'parent'   => 'TIE_Partial',
    ));



    $sidebar->get_shell( basename( __FILE__ ), 'Sidebar' );