<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Template' ) ) {

        abstract class TIE_Template extends TIE_Public {

            protected $data = array
            (

                'error' => array
                (
                    'code'        => 'E0101',
                    'message'     => 'NO DATA PUSHED FROM TEMPLATE!',
                    'description' => 'Template [file] class has been instantiated, but no data captured or pushed in array via [set_data] to the [data] property. This means that the object representing this WordPress Template (type/role) contains no content for display on the front end. Note also that this error data is generated within the same [data] property in the form of default field value (overwritten/replaced automatically upon data push from template into [set_data] instance method.',
                    'resolution'  => 'At template file, any time after template class instantiation, call [set_data] and pass array of content data.',
                )
            );

            protected $view;

            public function __construct() {

                parent::__construct();

            }

            public function get_shell( $view, $shell ) {

                $public_shell = get_stylesheet_directory() . '/public/shells/class-shell-' . $shell . '.php';
                $tie_shell    = GILAD_TIE . '/app/shells/class-shell-' . strtolower( $shell ) . '.php';

                if ( file_exists( $public_shell ) ) {
                    require_once( $public_shell );
                } else {
                    require_once( $tie_shell );
                }

                $shell_class = __NAMESPACE__ . '\Shell_' . $shell;

                $shell_object = new $shell_class( $view );

            }

            public function get_data() {

                return $this->data;

            }

            public function set_data( $data ) {

                $this->data = $data;

            }

        }

    }
