<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '/attachment.php' );

    class Template_Attachment extends CORE_Attachment {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_attachment = new Template_Attachment();
    $data = get_object_vars( $template_attachment );

    $template_attachment->dump( $data );

    ?>

<h1>This is an Attachment post</h1>
<h3>Generated by the <code>attachment.php</code> template</h3>
