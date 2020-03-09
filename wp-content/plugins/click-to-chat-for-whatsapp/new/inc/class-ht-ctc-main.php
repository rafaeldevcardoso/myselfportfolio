<?php
/**
 * main file to get started for front end .. 
 */


if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_Main' ) ) :

class HT_CTC_Main {

    public function __construct() {
        $this->enables();
    }


    /**
     * Which features are enable - based on this call function.. 
     * 
     */
    public function enables() {

        $options = get_option( 'ht_ctc_main_options' );

        
        // if enable call 'chat' features
        if ( isset( $options['enable_chat'] ) ) {
            include_once HT_CTC_PLUGIN_DIR .'new/inc/chat/class-ht-ctc-chat.php';

            include_once HT_CTC_PLUGIN_DIR . 'new/inc/chat/class-ht-ctc-chat-shortcode.php';
        }


        // if enable call 'group' features
        if ( isset( $options['enable_group'] ) ) {
            include_once HT_CTC_PLUGIN_DIR .'new/inc/group/class-ht-ctc-group.php';

            include_once HT_CTC_PLUGIN_DIR . 'new/inc/group/class-ht-ctc-group-shortcode.php';

        }

        // if enabled call 'share' features
        if ( isset( $options['enable_share'] ) ) {
            include_once HT_CTC_PLUGIN_DIR .'new/inc/share/class-ht-ctc-share.php';

            include_once HT_CTC_PLUGIN_DIR . 'new/inc/share/class-ht-ctc-share-shortcode.php';

        }
    }


    public function variables() {

        // include variables.. as of now display on all pages .. 
        include_once HT_CTC_PLUGIN_DIR .'new/inc/commons/ht-ctc-variables.php';
        
    }


}

$ht_ctc_main = new HT_CTC_Main();

// variables
add_action( 'wp_footer', array( $ht_ctc_main, 'variables' ) );


endif; // END class_exists check