<?php
if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', get_template_directory());
}
if (!defined('ROOT_URI')) {
    define('ROOT_URI', get_template_directory_uri());
}
define('VER', "10.4");
//language
$currentlang = get_bloginfo('language');
if($currentlang=="en-US"){
    $options = get_option('data_options_2');
}
else{
    $options = get_option('data_options');
}
add_filter('show_admin_bar', '__return_false');
add_theme_support("title-tag");
add_theme_support("post-thumbnails");
//menu
add_action('after_setup_theme', 'menu_setup');
function menu_setup()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'top-menu' => "a menu for top one",
        'footer-menu-one' => "a menu for footer one",
        'footer-menu-two' => "a menu for footer two",
        'footer-menu-three' => "a menu for footer three"
    ));
}
//js
add_action('wp_enqueue_scripts', 'add_script');
function add_script()
{
    global $currentlang;
    //owl slider
    if ($currentlang=="en-US"){
        wp_enqueue_script('mk_owl_ltr_js', get_template_directory_uri() . '/assets/js/owl-ltr.js', array('jquery'), VER, true);
    }
    else{
        wp_enqueue_script('mk_owl_ltr_js', get_template_directory_uri() . '/assets/js/owl-rtl.js', array('jquery'), VER, true);
    }
    //index
    wp_enqueue_script('mk_main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), VER, true);
    // owl
    wp_enqueue_script('owl.script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), VER, true);
    //js for ajax
    wp_enqueue_script('mk_ajax.js', get_template_directory_uri() . '/assets/js/ajax.js', array('jquery'), VER, true);
    // add variable for ajax data
    wp_localize_script('mk_ajax.js', 'data', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'redirecturl' => home_url()
    ));
    //add bootstrap
    wp_enqueue_script('mk_bootstrap_min_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', null, VER, true);
}
//css
add_action('wp_enqueue_scripts', 'add_styles', 99);
function add_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', '', VER);
    wp_enqueue_style('bootstrap_rtl', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-rtl.css', '', VER);
    wp_enqueue_style('font_awesome', get_template_directory_uri() . '/assets/css/bootstrap/all.css', '', VER);
    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/assets/css/owl/owl.carousel.min.css', '', VER);
    wp_enqueue_style('owl_theme', get_template_directory_uri() . '/assets/css/owl/owl.theme.default.min.css', '', VER);
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', '', VER);
    if (!is_home()){
        wp_enqueue_style('shared', get_template_directory_uri() . '/assets/css/shared.css', '', VER);
    }
    wp_enqueue_style('main_style', get_stylesheet_uri(), '', VER);
}
//admin js,css
add_action('admin_enqueue_scripts', 'mk_register_style');
function mk_register_style()
{
    wp_enqueue_style('mk_admin_style', get_template_directory_uri() . '/admin/css/admin.css', '', VER);
    wp_enqueue_script('mk_admin_js', get_template_directory_uri() . '/admin/js/admin.js', array('jquery'), VER, true);
}
//post view
function get_post_view($post_id)
{
    if (intval($post_id)) {
        $post_view = get_post_meta($post_id, 'views', true);
        return intval($post_view);
    }
    return 0;
}
function set_post_view($post_id)
{
    if (intval($post_id)) {
        $view = get_post_view($post_id);
        $view++;
        update_post_meta($post_id, 'views', $view);
    }
}
/* Filter to unset website URL Field from WordPress comment form */
add_filter('comment_form_default_fields', 'remove_website_field');
function remove_website_field($fields){
    if(isset($fields['url']))
        unset($fields['url']);
    return $fields;
}
/* remove make_clickable filter to disable autolinking of urls in WordPress comment text */
remove_filter( 'comment_text', 'make_clickable', 9 );
/* get the page url by the name of page templates */
function getTplPageURL($TEMPLATE_NAME){

    $pages = get_pages(array(
        'post_type' =>'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => $TEMPLATE_NAME
    ));
    $url = null;
    if(isset($pages[0])) {
        $url = get_page_link($pages[0]->ID);
    }
    return $url;
}
/* =====================================
                optimize
===================================== */
//remove yoast structure
add_filter('wpseo_json_ld_output', '__return_false');

//remove emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove WP embed script
add_action('init', 'speed_stop_loading_wp_embed');
function speed_stop_loading_wp_embed()
{
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}

// Defer Javascripts Speed up loading for external js
if (!is_admin()) {
    function defer_parsing_of_js($url)
    {
        if (FALSE === strpos($url, '.js')) return $url;
        if (strpos($url, 'jquery.min.js')) return $url;
        return "$url' defer='defer";
    }
    add_filter('clean_url', 'defer_parsing_of_js', 11, 1);
}

add_filter('the_content', 'add_alt_tags', 99);
function add_alt_tags($content)
{
    global $post;
    if (is_single()) {
        $tags = get_the_tags($post->ID);
        preg_match_all('/<img (.*?)\/>/', $content, $images);
        if (!is_null($images)) {
            $j = 0;
            foreach ($images[1] as $index => $value) {
                $alt_ = [];
                $alt = '';
                if ($tags) {
                    $count_tags = count($tags);
                    if ($count_tags > 0) {

                        for ($a = 0; $a < 3; $a++) {
                            if ($j >= $count_tags) {
                                $j = 0;
                            }

                            $alt_[] = $tags[$j]->name;
                            $j++;
                        }
                        $alt = implode(",", $alt_);
                    }

                } else {
                    $alt = $post->post_title;
                }
                $new_img = str_replace('<img', '<a target = "_blank" href = "' . get_the_permalink() . '"><img alt="' . $alt . '" title="' . $post->post_title . '"', $images[0][$index]);
                $new_img = str_replace('/>', '/></a>', $new_img);

                $content = str_replace($images[0][$index], $new_img, $content);
            }
        }
    }
    return $content;
}

add_action('wp_head', 'wt_meta_keyword');
function wt_meta_keyword()
{
    global $post;
    if (is_single()) {
        if (has_tag()) {
            $tags = get_the_tags($post->ID);
            $tag_post = "";
            foreach ($tags as $tag) {
                $tag_post .= $tag->name . ',';
            }
            echo '<meta name="keyword" content="' . $tag_post . '" />' . "\n";
        }
    }

}

add_filter("wpseo_robots", function ($robots) {
    if (is_paged()) {
        return 'noindex,follow';
    } else {
        return $robots;
    }
});

//breadcrumb
add_filter('wpseo_breadcrumb_links', 'jj_add_crumb_schema', 10, 1);
function jj_add_crumb_schema($crumbs)
{

    if (!is_array($crumbs) || $crumbs === array()) {
        return $crumbs;
    }

    $listItems = [];

    $j = 1;

    foreach ($crumbs as $i => $crumb) {

        $item = [];

        if (isset($crumb['id'])) {
            $item = [
                '@id' => get_permalink($crumb['id']),
                'name' => strip_tags(get_the_title($crumb['id']))
            ];
        }

        if (isset($crumb['term'])) {
            $term = $crumb['term'];

            $item = [
                '@id' => get_term_link($term),
                'name' => $term->name
            ];
        }

        if (isset($crumb['ptarchive'])) {
            $postType = get_post_type_object($crumb['ptarchive']);

            $item = [
                '@id' => get_post_type_archive_link($crumb['ptarchive']),
                'name' => $postType->label
            ];
        }

        if (isset($crumb['url'])) {

            if ($crumb['text'] !== '') {
                $title = $crumb['text'];
            } else {
                $title = get_bloginfo('name');
            }


            $item = [
                '@id' => $crumb['url'],
                'name' => $title
            ];


        }

        $listItem = [
            '@type' => 'ListItem',
            'position' => $j,
            'item' => $item
        ];

        $listItems[] = $listItem;

        $j++;

    }

    $schema = [
        '@context' => 'http://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $listItems
    ];

    $html = '<script type="application/ld+json">' . json_encode($schema) . '</script> ';

    echo $html;

    return $crumbs;
}

/* =====================================
                includes
===================================== */
include get_template_directory() . '/admin/admin.php';
include get_template_directory() . '/inc/widgets.php';
include get_template_directory() . '/inc/widgets-tpl.php';
include get_template_directory() . '/inc/contact-DB.php';
include get_template_directory() . '/inc/load-more.php';
include get_template_directory() . '/inc/meta-box.php';
include get_template_directory() . '/inc/post-type.php';
