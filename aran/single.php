<?php
get_header();
get_template_part('partials/top-menu');
the_post();
$id = get_the_ID();
?>
<?php set_post_view(get_the_ID()); ?>
    <main>
        <?php get_template_part('partials/page-header') ?>
        <div class="dark-background"></div>
        <div class="container">
            <section id="blog-content" class="wp_content">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-12">
                        <section class="single-blog-post">
                            <figure>
                                <?php the_post_thumbnail(); ?>
                                <figcaption>
                                    <span><?php the_author(); ?> / <?php the_time('F j, Y'); ?></span>
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                </figcaption>
                            </figure>
                            <?php
                            global $options;
                            $imglogo = isset($options['general']['logo']) && !empty($options['general']['logo']) ? $options['general']['logo'] : get_template_directory_uri() . '/assets/img/logo.png';
                            $img = $imglogo;
                            if (has_post_thumbnail()) {
                                $img = get_the_post_thumbnail_url();
                            }
                            ?>
                            <script type="application/ld+json">
                                {
                                    "@context": "http://schema.org",
                                    "@type": "CreativeWorkSeason",
                                    "aggregateRating": {
                                        "@type": "AggregateRating",
                                        "bestRating": "5",
                                        "ratingCount": "<?php echo get_the_ID() ?>",
                                        "ratingValue": "5"
                                    },
                                    "image": "<?php echo $img; ?>",
                                    "name": "<?php echo get_the_title() ?>",
                                    "description": <?php echo wp_json_encode(get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)); ?>
                                }

                            </script>
                            <div class="single-blog-post__tags">
                                <?php
                                $tags = get_the_tags($id);
                                if (has_tag()):?>
                                    <h5>تگ ها:</h5>
                                    <?php foreach ($tags as $tag): ?>
                                        <span><?php echo $tag->name; ?></span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <?php previous_post_link('%link', '<<') ?>
                                <?php next_post_link('%link', '>>') ?>
                            </div>
                            <section class="blog_comments">
                                <?php comments_template('', true) ?>
                            </section>
                        </section>
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