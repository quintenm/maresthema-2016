<?php
//init settings woocommerce
//@ini_set( 'upload_max_size' , '64M' );
//@ini_set( 'post_max_size', '64M');
//@ini_set( 'max_execution_time', '300' );

// Register Script
function add_theme_scripts() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',  get_template_directory_uri() . '/js/jquery.min.js', false, '2.2.0', true );
    wp_enqueue_script( 'jquery' );

    wp_deregister_script( 'jquery-cookie' );
    wp_register_script( 'jquery-cookie',  get_template_directory_uri() . '/js/jquery.cookie.min.js', array( 'jquery' ), '1.4.1', true );
    wp_enqueue_script( 'jquery-cookie' );

    wp_deregister_script( 'bootstrap' );
    wp_register_script( 'bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js', false, '3.3.6', true );
    wp_enqueue_script( 'bootstrap' );

    wp_deregister_script( 'bootstrap-dropdown' );
    wp_register_script( 'bootstrap-dropdown', get_template_directory_uri() .  '/js/jquery.bootstrap-dropdown-hover.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-dropdown' );

    wp_deregister_script( 'parallax' );
    wp_register_script( 'parallax', get_template_directory_uri() .  '/js/parallax.min.js', array( 'jquery' ), '1.4', true );
    wp_enqueue_script( 'parallax' );

    wp_deregister_script( 'script-script' );
    wp_register_script( 'script-script', get_template_directory_uri() . '/js/script.min.js', array( 'jquery' ), '1.0', 'all' );
    wp_enqueue_script( 'script-script' );
}
// Register Style
function add_theme_style() {

    wp_deregister_style( 'font-awesome' );
    wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, '4.5.0', 'all' );
    wp_enqueue_style( 'font-awesome' );

    wp_deregister_style( 'bootstrap' );
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.6', 'all' );

    wp_register_style( 'stylesheet-main', get_template_directory_uri() . '/css/style.min.css', array( 'bootstrap' ), '0.8.1', 'all' );
    wp_enqueue_style( 'stylesheet-main' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'wp_enqueue_scripts', 'add_theme_style' );

//activate menu
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'primary' => 'Hoofdmenu op startpagina',
            'secundairy' => 'Secundaire menu op andere pagina\'s'
        )
    );
}
//wp_bootstrap_navwalker
include_once( dirname( __FILE__ ) . '/includes/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php');
include_once( dirname( __FILE__ ) . '/includes/function_widgets.php' );


include_once( dirname( __FILE__ ) . '/includes/kirki/kirki.php' );

function mytheme_kirki_configuration() {
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/includes/kirki/' );
}
include_once (dirname( __FILE__ ) . "/includes/function_kirki.php");

add_filter( 'kirki/config', 'mytheme_kirki_configuration' );
add_filter( 'kirki/fields', 'mytheme_kirki_fields' );

add_action( 'widgets_init', 'all_widget_init' );

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}





function mt_include_content($pid) {
    $thepageinquestion = get_post($pid);
    $content = $thepageinquestion->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
    echo $content;
}

function mt_add_quicktags() {
if (wp_script_is('quicktags')) {
    ?>
    <script type="text/javascript">
        QTags.addButton('quote', 'quote-mares', '<div class="mares-quote"><blockquote><p>', '</p></blockquote><p>Naam Voornaam</p></div>', '', '', 990);
        QTags.addButton('2x-retina', 'retina-tag', 'width="{{image-width}}px" height="{{image-height}}px"',false,'','',990);
    </script>
    <?php
}
}

add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
add_action( 'admin_print_footer_scripts', 'mt_add_quicktags' );



/*
 *
 * add tags en category to pages
 *
 */
function add_taxonomies_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
    register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_taxonomies_to_pages' );
if ( ! is_admin() ) {
    add_action( 'pre_get_posts', 'category_and_tag_archives' );

}
function category_and_tag_archives( $wp_query ) {
    $my_post_array = array('post','page');

    if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
        $wp_query->set( 'post_type', $my_post_array );

    if ( $wp_query->get( 'tag' ) )
        $wp_query->set( 'post_type', $my_post_array );
}



/*
 * retinia images
 */
function adjust_image_sizes_attr( $sizes, $size ) {
    $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
    return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );
?>