<?php
function blog_sidebar()
{
    register_sidebar(array(
        'name' => 'سایدبار وبلاگ',
        'id' => 'sidebar-blog',
        'description' => "سایدبار برای وبلاگ",
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'blog_sidebar');

function portfolio_sidebar()
{
    register_sidebar(array(
        'name' => 'سایدبار نمونه کارها',
        'id' => 'slider-portfolio',
        'description' => "سایدبار نمونه کارها",
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'portfolio_sidebar');

function brand_slider()
{
    register_sidebar(array(
        'name' => 'اسلایدر لوگو',
        'id' => 'slider-logo',
        'description' => "اسلایدر لوگو",
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'brand_slider');

function comment_slider()
{
    register_sidebar(array(
        'name' => 'اسلایدر کامنت های برتر',
        'id' => 'slider-comment',
        'description' => "اسلایدر کامنت های برتر",
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'comment_slider');


