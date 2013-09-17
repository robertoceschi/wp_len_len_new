<?php


    /**
     * Proper way to enqueue scripts and styles
     */

add_action('wp_enqueue_scripts', 'len_len_theme_css_js');

function len_len_theme_css_js()
{
    //Load the Theme CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/library/css/styles.css');

    //Loads the Typekit JS
    wp_enqueue_script('theme_typekit', '//use.typekit.net/dtv6mdo.js');


    // Adds Costum JS
    wp_enqueue_script(
        'len-len-main-js', get_template_directory_uri() . '/library/js/main.js', array('jquery'), '1.0.0', true
    );

    // Adds JavaScript for Modernizr
    wp_enqueue_script(
        'modernizr', get_template_directory_uri() . '/library/js/modernizr.2.6.2.min.js', array('jquery'), '2.6.2', true
    );

    // Adds JavaScript for Masonry
    wp_enqueue_script(
        'masonry', get_template_directory_uri() . '/library/js/jquery.masonry.min.js', array('jquery'), '2.1.08', true
    );

    // Adds JavaScript for Fittext
    wp_enqueue_script('fittext', get_template_directory_uri() . '/library/js/fittext.js', array('jquery'), '1.1');
}


/**
     * TypeKit Fonts
     *
     * @since Theme 1.0
     */
    function theme_typekit_inline () {
        if (wp_script_is('theme_typekit', 'done')) {
            ?>
            <!--Typekit inline JavaScript that kicks off font loading -->
            <script type="text/javascript">try {
                    Typekit.load();
                } catch (e) {
                }</script>
        <?php
        }
    }

    add_action('wp_head', 'theme_typekit_inline');




/**
 * Wordpress Custom Stuff
 *
 *
 */


add_action('after_setup_theme', 'len_len_theme_setup');

function len_len_theme_setup() {
    //enable custom menus
    add_theme_support('menus');
    //enable Featured Images in Posts and Pages
    add_theme_support('post-thumbnails');
    //changing standart Thumb-Size for Masonry
    add_image_size('homepage-thumb', 360, auto); // Soft Crop Mode
    add_image_size('homepage-thumb_big', 1000, auto); // Soft Crop Mode
}


/**
 * Custom Post Type About Me
 *
 *
 */

add_action( 'init', 'create_my_post_type' );

function create_my_post_type() {
    register_post_type( 'about',
        array(
             'labels' => array(
                 'name' => __( 'About Me' ),
                 'add_new' => (''),

             ),
             'public' => true,
        )
    );
}

/**
 * Removing Permalinks in Custom Post Type About Me
 *
 *
 */

    add_filter('get_sample_permalink_html', 'perm', '',4);

    function perm($return, $id, $new_title, $new_slug){
        global $post;
        if($post->post_type == 'about')
        {
            $ret2 = preg_replace('/<div id="edit-slug-box</div><span id="edit-slug-buttons">.*<\/span>|<span id=\'view-post-btn\'>.*<\/span>/i', '', $return);
        }

        return $ret2;
    }