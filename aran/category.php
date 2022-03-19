<?php
get_header();
get_template_part('partials/top-menu');
$category = get_queried_object();
$cat_ID = $category->term_id;

global $paged;
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

?>
    <main>
        <?php get_template_part('partials/page-header'); ?>
        <div class="dark-background"></div>
        <div class="container">
            <section id="blog-content">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-12">
                        <section id="blog-posts">
                            <div class="row">
                                <?php
                                global $options;
                                $imglogo = isset($options['general']['logo']) && !empty($options['general']['logo']) ? $options['general']['logo'] : get_template_directory_uri() . '/assets/img/logo.png';
                                $img = $imglogo;
                                $image_id = get_term_meta($cat_ID, 'category-image-id', true);
                                if ($image_id)
                                    $img = wp_get_attachment_image_url($image_id);
                                $meta = get_option('wpseo_taxonomy_meta');
                                if ($meta['category']) {
                                    $meta_ = $meta['category'][$cat_ID]['wpseo_desc'];
                                }
                                ?>
                                <script type="application/ld+json">
                                    {
                "@context": "http://schema.org",
                "@type": "CreativeWorkSeries",
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "bestRating": "5",
                    "ratingCount": "<?php echo $cat_ID ?>",
                    "ratingValue": "5"
                },
                "image": "<?php echo $img; ?>",
                "name": "<?php echo single_cat_title() ?>",
                "description": "<?php echo wp_filter_nohtml_kses($meta_); ?>"
            }


                                </script>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <div class="col-lg-6 col-md-12 blog-post">
                                        <figure>
                                            <a class="blog-post__img" href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                            <figcaption>
                                                <span><?php the_author(); ?> / <?php the_time('F j, Y'); ?></span>
                                                <h2>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>
                                                <?php the_excerpt(); ?>
                                            </figcaption>
                                        </figure>
                                    </div>
                                <?php endwhile; ?>
                                <?php else: ?>
                                    <div><?php _e('نتیجه ای برای شما یافت نشد', 'zxomarket') ?></div>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        </section>
                        <div class="pagination pager">
                            <?php
                            echo paginate_links(
                                array(
                                    'format' => 'page/%#%/',
                                    'show_all' => false,
                                    'end_size' => 1,
                                    'mid_size' => 2,
                                    'prev_next' => true,
                                    'prev_text' => __('« '),
                                    'next_text' => __(' »'),
                                    'add_args' => false,
                                    'add_fragment' => '',
                                    'before_page_number' => '',
                                    'after_page_number' => '',
                                )
                            );
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </section>
        </div>
        <?php get_template_part('partials/parallax') ?>
    </main>
<?php
get_template_part('partials/footer-menu');
get_footer();
