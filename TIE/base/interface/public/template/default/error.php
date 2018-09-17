<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Error' ) ) {

        abstract class TIE_Error extends TIE_Default {

            public function __construct() {

                parent::__construct();

            }

        }

    }
