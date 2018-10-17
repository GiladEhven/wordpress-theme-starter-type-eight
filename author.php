<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/list.php' );

    class Template_Author extends TIE_List {

        public function __construct() {

            parent::__construct();

            // HOUSEKEEPING FIRST...
            $this->cleanup();

            // THEN RESOURCES...
            $this->update_jquery( '3.3.1', 'slim' );
            $this->enable_bootstrap( '4.1.3', 'both' );

        }

    }



    $author = new Template_Author();



    $author->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'author.php',
        'class'    => 'Template_Author',
        'type'     => 'List',
        'parent'   => 'TIE_List',
    ));
