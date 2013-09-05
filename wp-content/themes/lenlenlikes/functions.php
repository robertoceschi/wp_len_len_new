<?php
    /**
     * Proper way to enqueue scripts and styles
     */

    //Load the Theme CSS
    function theme_styles () {
        wp_enqueue_style('main', get_template_directory_uri() . '/library/css/styles.css');


        //use.typekit.net/wqg5dbg.js
        //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    }

    add_action('wp_enqueue_scripts', 'theme_styles');

    //Load the Theme JS
    function theme_js () {

        // Adds Costum JS
        wp_enqueue_script('len-len-main-js', get_template_directory_uri() . '/library/js/main.js', array('jquery'), '1.0.0', true);

        // Adds JavaScript for Modernizr
        wp_enqueue_script('modernizr', get_template_directory_uri() . '/library/js/modernizr.2.6.2.min.js', array('jquery'), '2.6.2', true);

        // Adds JavaScript for Masonry
        wp_enqueue_script('masonry', get_template_directory_uri() . '/library/js/jquery.masonry.min.js', array('jquery'), '2.1.08', true);
    }
    add_action('wp_enqueue_scripts', 'theme_js');


    /**
     * TypeKit Fonts
     *
     * @since Theme 1.0
     */
    function theme_typekit () {
        wp_enqueue_script('theme_typekit', '//use.typekit.net/dtv6mdo.js');
    }

    add_action('wp_enqueue_scripts', 'theme_typekit');

    function theme_typekit_inline () {
        if (wp_script_is('theme_typekit', 'done')) {
            ?>
            <script type="text/javascript">try {
                    Typekit.load();
                } catch (e) {
                }</script>
        <?php
        }
    }

    add_action('wp_head', 'theme_typekit_inline');


//enable custom menus
    add_theme_support('menus');



// custom menu example @ http://digwp.com/2011/11/html-formatting-custom-menus/
    function clean_custom_menus() {
        $menu_name = 'main_menu'; // specify custom menu slug
        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            $menu_list = '<aside id="main_nav">' ."\n";
            $menu_list .= "\t\t\t\t". '<ul class="chapter-list">' ."\n";
            foreach ((array) $menu_items as $key => $menu_item) {
                $title = $menu_item->title;
                $url = $menu_item->url;
                $menu_list .= "\t\t\t\t\t". '<li class="chapter-summary"><a href="'. $url .'">'. $title .'</a></li>' ."\n";
            }
            $menu_list .= "\t\t\t\t". '</ul>' ."\n";
            $menu_list .= "\t\t\t". '</aside>' ."\n";
        } else {
            // $menu_list = '<!-- no list defined -->';
        }
        echo $menu_list;
    }