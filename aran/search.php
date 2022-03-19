<?php
get_header();
get_template_part('partials/top-menu');
$s = get_search_query();
?>
    <main>
        <?php $img_link = get_post_meta(get_the_ID(), 'page_img', true); ?>
        <?php $video_link = get_post_meta(get_the_ID(), 'page_link', true); ?>
        <section id="header">
            <div class="row">
                <div class="col-12 header-contain">
                    <span><?php _e('نتایج سرچ برای : ', 'zxomarket') ?></span>
                    <h1><?php echo $s ?></h1>
                    <div class="map">
                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb-nav">', '</p>');
                        }
                        ?>
                    </div>
                    <?php if ($video_link): ?>
                        <div class="container iframe-container">
                            <div class="iframe-img">
                                <img src="<?php echo ($img_link)?$img_link: "http://themevaly.com/template/xzomark/assets/img/hero_area/1.png" ?>" alt="hh"/>
                                <i class="far fa-play iframe-link"></i>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <iframe id="iframe" class="iframe" width="600" height="400" data-src="<?php echo $video_link?>" src="about:blank"></iframe>
        <div class="dark-background"></div>
        <div class="container">
            <section id="blog-content">
                <div class="row">
                    <section id="blog-posts">
                        <div class="row">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="col-lg-3 col-md-6 col-12 blog-post">
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
            </section>
        </div>
        <?php get_template_part('partials/parallax') ?>
    </main>
<?php
get_template_part('partials/footer-menu');
get_footer();
