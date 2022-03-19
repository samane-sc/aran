<?php
get_header();
get_template_part('partials/top-menu');
?>
<main>
<?php get_template_part('partials/page-header');?>
    <div class="dark-background"></div>
    <div class="container">
        <section id="blog-content">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12">
                    <section id="blog-posts">
                        <div class="row">
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
                        $big = 999999999;
                        global $wp_query;
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => '«',
                            'next_text' => '»'
                        ));
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
