<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Category' ) ) {

        class Template_Category extends TIE_List {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $category = new Template_Category();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $category->set_data(array(
        'template' => 'category.php',
        'class'    => 'Template_Category',
        'type'     => 'List',
        'parent'   => 'TIE_List',
    ));



    $category->get_shell( basename( __FILE__ ), 'Sitewide' );
