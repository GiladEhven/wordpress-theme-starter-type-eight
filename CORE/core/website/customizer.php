<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    class CORE_Customizer extends CORE_Website {

        public function __construct() {

            parent::__construct();

            $this->register_customizer_components();

            $this->set_customizer_properties();

        }

        public function register_customizer_components() {

            add_action( 'customize_register', function( $wp_customize ) {

                $wp_customize->add_setting( 'background_color' , array(
                    'default'   => '#ffffff',
                    'transport' => 'refresh',
                ) );

                $wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'background_color', array(
                    'label'     => 'Body Background Color',
                    'section'   => 'type_eight_colors',
                    'settings'  => 'background_color',
                ) ) );

                $wp_customize->add_section( 'type_eight_colors' , array(
                    'title'     => 'Type 8 (Parent Theme) Colors',
                    'priority'  => 120,
                ) );

            });

            add_action( 'wp_head', function() {

                ?>

                <style type="text/css">
                    body { background: #<?php echo get_theme_mod( 'background_color', '#ffffff' ); ?>; }
                </style>

                <?php

            });

        }

        public function set_customizer_properties() {

            $this->customizer_x          = '-----------------------------------------------------------------------------------------------';
            $this->customizer_y          = '-----------------------------  C O R E   :   C U S T O M I Z E R  -----------------------------';
            $this->customizer_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_customizer = new CORE_Customizer();
    $data = get_object_vars( $core_customizer );

    $core_customizer->dump( $data );
