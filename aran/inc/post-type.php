<?php
//custom post types
add_action('init', 'portfolio_postType');
function portfolio_postType()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => __('نمونه کارها', 'portfolio'),
        'singular_name' => __("نمونه کار",'portfolio'),
        'menu_name' => __("نمونه کارها",'portfolio'),
        'parent_item_colon' => "نمونه کارهای مادر",
        'all_items' => "تمامی نمونه کارها",
        'view_item' => "مشاهده ی نمونه کار",
        'add_new_item' => "افزودن نمونه کار",
        'add_new' => "نمونه کار جدید",
        'edit_item' => "ویرایش نمونه کار",
        'update_item' => "اپدیت نمونه کار",
        'search_items' => "سرچ در نمونه کارها",
        'not_found' => "نمونه کار موردنظر پیدا نشد",
        'not_found_in_trash' => "نمونه کار موردنظر در زباله دان پیدا نشد",
    );

// Set other options for Custom Post Type
    $args = array(
        'description' => "نمونه کارهای سایت",
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies' => array('portfolio_cat'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => null,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('portfolio', $args);
    flush_rewrite_rules();
}
//custom taxonomies
add_action('init', 'portfolio_category', 0);
function portfolio_category()
{
    $labels = array(
        'name' => 'دسته بندی نمونه کارها', 'taxonomy general name',
        'singular_name' => 'دسته نمونه کارها', 'taxonomy singular name',
        'search_items' => 'جستجوی دسته نمونه کارها ',
        'all_items' => 'تمامی دسته بندی های نمونه کارها',
        'parent_item' =>'دسته نمونه کار مادر',
        'parent_item_colon' => 'دسته نمونه کار مادر:',
        'edit_item' => 'دسته ویرایش نمونه کار',
        'update_item' => 'دسته اپدیت نمونه کار',
        'add_new_item' => 'اضافه کردن دسته نمونه کار جدید',
        'new_item_name' => 'نام دسته نمونه کار جدید',
        'menu_name' => 'دسته ی نمونه کار',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio_cat'),
    );
    register_taxonomy('portfolio_cat', array('portfolio'), $args);
}
//custom tags
add_action('init', 'portfolio_tag', 0);
function portfolio_tag()
{
    $labels = array(
        'name' => 'برچسب نمونه کارها', 'taxonomy general name',
        'singular_name' => 'برچسب نمونه کارها', 'taxonomy singular name',
        'search_items' => 'جستجوی برچسب نمونه کارها ',
        'popular_items' => 'برچسب نمونه کارهای پرکاربرد',
        'all_items' => 'تمامی برچسب نمونه کارها',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'ویرایش برچسب نمونه کار',
        'update_item' => 'اپدیت برچسب نمونه کار',
        'add_new_item' => 'اضافه کردن برچسب نمونه کار جدید',
        'new_item_name' => 'نام برچسب نمونه کار جدید',
        'menu_name' => 'برچسب نمونه کار',
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio_tag'),
    );
    register_taxonomy('portfolio_tag', array('portfolio'), $args);
}
//custom post type
add_action('init', 'service_postType');
function service_postType()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => __('سرویس','service'),
        'singular_name' => __("سرویسها", 'service'),
        'menu_name' => __("سرویسها", 'service'),
        'parent_item_colon' => "سرویس های مادر",
        'all_items' => "تمامی سرویس ها",
        'view_item' => "مشاهده ی سرویس",
        'add_new_item' => "ایتم سرویس جدید",
        'add_new' => "سرویس جدید",
        'edit_item' => "ادیت سرویس",
        'update_item' => "اپدیت سرویس",
        'search_items' => "سرچ سرویس",
        'not_found' => "سرویس پیدا نشد",
        'not_found_in_trash' => "سرویس در زباله دان پیدا نشد",
    );
// Set other options for Custom Post Type
    $args = array(
        'description' => "سرویس های ما",
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies' => array('genres'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => null,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,

    );
    register_post_type('services', $args);
}