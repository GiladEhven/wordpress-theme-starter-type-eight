<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Hookset' ) ) {

        abstract class TIE_Hookset extends TIE_Public {

            public function __construct() {

                parent::__construct();

            }

        }

    }
