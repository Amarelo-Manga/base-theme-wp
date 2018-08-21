<?php
/**
 *
 * Scripts and Styles
 *
 * @since  1.0.0
 *
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }


/**
 *
 * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head
 *
 * @since  1.0.0
 *
 */
add_action('wp_enqueue_scripts', 'aa_scripts');
function aa_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	//wp_enqueue_script('jquery'); // Enqueue it!
        //wp_deregister_script('jquery'); // Deregister WordPress jQuery
        //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');



        /**
         *
         * Minified and concatenated scripts
         *
         *     @scripts     mainjs
         * 	   @jqueryBower jqueryjs
         *     Order is important
         *
         */
        wp_register_script('jqueryjs', get_template_directory_uri() . '/dist/scripts/jquery.js'); // Custom scripts
        wp_enqueue_script('jqueryjs'); // Enqueue it!

        wp_register_script('mainjs', get_template_directory_uri() . '/dist/scripts/main.js'); // Custom scripts
        wp_enqueue_script('mainjs'); // Enqueue it!

      


    }
}


/**
 *
 * Styles: Frontend with no conditions, Add Custom styles to wp_head
 *
 * @since  1.0
 *
 */
add_action('wp_enqueue_scripts', 'styles'); // Add Theme Stylesheet
function styles()
{

    /**
     *
     * Minified and Concatenated styles
     *
     */
    wp_register_style('style', get_template_directory_uri() . '/dist/styles/main.css');
    wp_enqueue_style('style'); // Enqueue it!


    /**
     *
     * Google fonts
     *     Must be included this way to avoid Firefox issues
     *
     */
    // wp_register_style('aa_gfonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300,800,400', array(), '1.0', 'all');
    // wp_enqueue_style('aa_gfonts'); // Enqueue it!


}

/**
 *
 * Comment Reply js to load only when thread_comments is active
 *
 * @since  1.0.0
 *
 */
add_action( 'wp_enqueue_scripts', 'aa_enqueue_comments_reply' );
function aa_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
