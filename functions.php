<?php
/**
 * Created by PhpStorm.
 * User: cabaudenzo
 * Date: 04/07/2020
 * Time: 13:03
 */

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function fonctionAppelCss(){
    wp_enqueue_style('style_de_mon_parent', get_template_directory_uri() . '/style.css');

    if(isMobile()){
        wp_enqueue_style('style_mobile', get_template_directory_uri() . '/style-mobile.css');
    }
}add_action('wp_enqueue_scripts', 'fonctionAppelCss');

function fonctionAppelJs(){
    //map
    wp_register_script('aa_js_googlemaps_script',  'https://maps.googleapis.com/maps/api/js?key=AIzaSyBHcacMQoF4uAkt6wc7nrNzcy58fCen6rU&map_ids=6cb91b76d03269da'); // with Google Maps API fix
    wp_enqueue_script('aa_js_googlemaps_script');

    wp_enqueue_script('google-map', get_template_directory_uri() . '/assets/js/google-map.js');

    // JQUERY
    wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.10.1');
    wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('jquery'), "1.10.3");

    wp_enqueue_script('js_de_mon_parent', get_template_directory_uri() . '/main.js');
}add_action('wp_enqueue_scripts', 'fonctionAppelJs');


add_filter('use_block_editor_for_post', '__return_false', 10);

function wpc_customize_register($wp_customize) {
    $wp_customize->add_section('wpc_logo_section', array(
            'title'          => __('Logo', 'textdomain'),
            'priority'       => 30,
            'description'    => __('Upload a logo to replace the default site name and description in the header', 'textdomain')
        )
    );
    $wp_customize->add_setting('wpc_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wpc_logo', array(
                'label'      => __('Logo', 'textdomain'),
                'section'    => 'wpc_logo_section',
                'settings'   => 'wpc_logo')
        )
    );
}
add_action('customize_register', 'wpc_customize_register');

// Hooks
add_filter( 'upload_mimes', 'capitaine_mime_types' );
add_filter( 'wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4 );

// Autoriser l'import des fichiers SVG et WEBP
function capitaine_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.webp' ) ) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }
    return $types;
}
//acf map
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBHcacMQoF4uAkt6wc7nrNzcy58fCen6rU';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');