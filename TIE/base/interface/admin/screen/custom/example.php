<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../custom.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Example' ) ) {

        abstract class TIE_Example extends TIE_Custom {

            public function __construct() {

                parent::__construct();

            }

        }

    }