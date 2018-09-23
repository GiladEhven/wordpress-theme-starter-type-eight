<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_CLASS' ) )    define( 'GILAD_ENABLE_SCRIBE_FOR_CLASS',    true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_QUERY' ) )    define( 'GILAD_ENABLE_SCRIBE_FOR_QUERY',    true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_REST' ) )     define( 'GILAD_ENABLE_SCRIBE_FOR_REST',     true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_VIEW' ) )     define( 'GILAD_ENABLE_SCRIBE_FOR_VIEW',     true );

    if ( ! defined( 'GILAD_ENVIRONMENT' ) )                define( 'GILAD_ENVIRONMENT',                'PRODUCTION' );

    if ( ! defined( 'GILAD_ID_TGM' ) )                     define( 'GILAD_ID_TGM',                     'UNSPECIFIED_GTM_CONTAINER_ID' );

    if ( ! defined( 'GILAD_PATH_CHILD' ) )                 define( 'GILAD_PATH_CHILD',                 get_stylesheet_directory() );
    if ( ! defined( 'GILAD_PATH_PARENT' ) )                define( 'GILAD_PATH_PARENT',                get_template_directory() );
    if ( ! defined( 'GILAD_PATH_PLUGINS' ) )               define( 'GILAD_PATH_PLUGINS',               '' );
    if ( ! defined( 'GILAD_PATH_MUP' ) )                   define( 'GILAD_PATH_MUP',                   '' );
    if ( ! defined( 'GILAD_PATH_CONTENT' ) )               define( 'GILAD_PATH_CONTENT',               '' );

    if ( ! defined( 'GILAD_TIE' ) )                        define( 'GILAD_TIE',                        get_stylesheet_directory() . '/TIE' );
    if ( ! defined( 'GILAD_TIE_CLASS_BASE' ) )             define( 'GILAD_TIE_CLASS_BASE',             get_stylesheet_directory() . '/TIE/base.php' );
    if ( ! defined( 'GILAD_TIE_CLASS_CPT' ) )              define( 'GILAD_TIE_CLASS_CPT',              get_stylesheet_directory() . '/TIE/base/cms/cpt.php' );
    if ( ! defined( 'GILAD_TIE_CLASS_USER' ) )             define( 'GILAD_TIE_CLASS_USER',             get_stylesheet_directory() . '/TIE/base/cms/user.php' );

    if ( ! defined( 'GILAD_URL_CHILD' ) )                  define( 'GILAD_URL_CHILD',                  get_stylesheet_directory_uri() );
    if ( ! defined( 'GILAD_URL_PARENT' ) )                 define( 'GILAD_URL_PARENT',                 get_template_directory_uri() );

    if ( ! defined( 'GILAD_WEBSITE_PHASE' ) )              define( 'GILAD_WEBSITE_PHASE',              '' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Core' ) ) {

        class Theme_Core {

            public function __construct() {

                if ( is_admin() ) {

                    require_once( get_stylesheet_directory() . '/admin/php/loaders/class-admin-resources.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-admin.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-media.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-navigation.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-support.php' );

                    $admin_resources  = new Admin_Resources;
                    $theme_admin      = new Theme_Admin;
                    $theme_media      = new Theme_Media;
                    $theme_navigation = new Theme_Navigation;
                    $theme_support    = new Theme_Support;

                } else {

                    require_once( get_stylesheet_directory() . '/public/loaders/class-public-scripts.php' );
                    require_once( get_stylesheet_directory() . '/public/loaders/class-public-styles.php' );

                    $public_scripts   = new Public_Scripts;
                    $public_styles    = new Public_Styles;

                }

            }

            public function requirements() {

                // TYPE     PRIMARY (MUST EXIST)         SECONDARIES (IF EXISTS)    RECOMMENDATIONS: Performance, Security, SEO

                // One      None: Mono Object            ACF

                // Two      None: No Shells, No Views    ACF

                // Three    None: Native API's           ACF

                // Four     None: Tavnit                 ACF

                // Five     Timber                       ACF

                // Six      ACF

                // Seven    Beaver Builder               ACF

                // Eight    None: Strings                ACF

                // Nine     Gutenberg                    ACF

                // Ten      ?

            }

        }

    }

    $theme_core = new Theme_Core();
