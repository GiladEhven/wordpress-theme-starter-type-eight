<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../interface.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Admin' ) ) {

        abstract class TIE_Admin extends TIE_Interface {

            public function __construct() {

                parent::__construct();

            }

        }

    }
