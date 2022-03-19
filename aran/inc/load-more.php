<?php
add_action('wp_ajax_load_page_ajax', 'load_more_page');
add_action('wp_ajax_nopriv_load_page_ajax', 'load_more_page');
function load_more_page(){
    $posts_per_page = 6;
    $page = intval($_POST['page']);
    $output_html = load_query($page);
    $post_query = new WP_Query( array(
        'post_type'        => 'portfolio',
        'post_status'      => 'publish',
        'category'         => 0
    ));
    $total = $post_query->found_posts;
    $total_pages = ceil( $total / $posts_per_page );

    $result = array(
        'total_pages' => $total_pages,
        'content' => $output_html
    );

    wp_send_json($result);
}
function load_query($page){
    $posts_per_page = 6;
    $offset = ($page - 1) * $posts_per_page;
    $load_more_args = array(
        'post_type' => 'portfolio',
        'offset' => $offset,
        'posts_per_page' => $posts_per_page
    );

    $load_more_query = new WP_Query($load_more_args);
    $output_html = '';

    if ($load_more_query->have_posts()) {
        $output_html .= '<div class="row">';
        while ($load_more_query->have_posts()): $load_more_query->the_post();

            $output_html .= '<div class="col-lg-4 col-md-6 col-12 portfolio-item">';
            $output_html .= '<figure>';
            $output_html .= '<a class="portfolio-item__img" href="'.get_the_permalink().'">'.get_the_post_thumbnail().'</a>';
            $output_html .= '<figcaption>';
            $output_html .= '<div class="portfolio-item__caption">';
            $output_html .= '<span>'.get_the_author().' / '.get_the_date('F j, Y').'</span>';
            $output_html .= '<h2><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
            $output_html .= '</div>';
            $output_html .= '<div class="portfolio-item__link">';
            $output_html .= '<a href="'.get_the_permalink().'"><i class="fal fa-arrow-right"></i></a>';
            $output_html .= '</div></figcaption></figure></div>';
            endwhile;
        $output_html .= '</div>';
    }

    return $output_html;
}

add_action('wp_ajax_load_service_ajax', 'load_service_ajax');
add_action('wp_ajax_nopriv_load_service_ajax', 'load_service_ajax');
function load_service_ajax(){
    $posts_per_page = 6;
    $page = intval($_POST['page']);
    $output_html = load_service_query($page);
    $post_query = new WP_Query( array(
        'post_type'        => 'services',
        'post_status'      => 'publish'
    ));
    $total = $post_query->found_posts;
    $total_pages = ceil( $total / $posts_per_page );

    $result = array(
        'total_pages' => $total_pages,
        'content' => $output_html
    );

    wp_send_json($result);
}
function load_service_query($page){
    $posts_per_page = 6;
    $offset = ($page - 1) * $posts_per_page;
    $load_more_args = array(
        'post_type' => 'services',
        'offset' => $offset,
        'posts_per_page' => $posts_per_page
    );

    $load_more_query = new WP_Query($load_more_args);
    $output_html = '';

    if ($load_more_query->have_posts()) {
        $output_html .= '<div class="row">';
        while ($load_more_query->have_posts()): $load_more_query->the_post();

            $output_html .= '<div class="col-lg-4 col-md-6 col-12 services-item">';
            $service_icon = get_post_meta(get_the_ID(), 'service_icon', true);
            $output_html .= '<div class="services-item__icon">';
            $output_html .= '<i class="'.$service_icon.'"></i>';
            $output_html .= '</div>';
            $output_html .= '<h5>'.get_the_title().'</h5>';
            $output_html .=  get_the_excerpt();
            $output_html .= '<a href="'.get_the_permalink().'" class="services-item__more">';
            $output_html .= '<i class="fal fa-arrow-right"></i></a>';
            $output_html .= '</a></div>';
        endwhile;
        $output_html .= '</div>';
    }

    return $output_html;
}
