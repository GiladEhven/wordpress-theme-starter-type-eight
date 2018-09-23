<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/media.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Attachment' ) ) {

        class Template_Attachment extends TIE_Media {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $attachment = new Template_Attachment();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $attachment->set_data(array(
        'template' => 'attachment.php',
        'class'    => 'Template_Attachment',
        'type'     => 'Media',
        'parent'   => 'TIE_Media',
    ));



    $attachment->get_shell( basename( __FILE__ ), 'Sitewide' );