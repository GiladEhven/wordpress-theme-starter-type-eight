<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../nav.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Paginator_Documents' ) ) {

        abstract class TIE_Paginator_Documents extends TIE_Nav {

            public function __construct() {

                parent::__construct();

            }

        }

    }
