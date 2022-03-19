<?php
/*
* Template Name: سرویس

*/
get_header();
get_template_part('partials/top-menu');

$args = array(
        'post_type' => 'services',
        'posts_per_page' => 6
);
$hello = new WP_Query($args);
?>
    <main>
        <?php get_template_part('partials/page-header'); ?>
        <div class="dark-background"></div>
        <div class="container">
            <section id="services">
                <div class="row">
                    <?php if ($hello->have_posts()) : while ($hello->have_posts()) : $hello->the_post(); ?>
                        <div class="col-lg-4 col-md-6 col-12 services-item">
                            <div class="services-item__icon">
                                <?php $service_icon = get_post_meta(get_the_ID(), 'service_icon', true); ?>
                                <i class="<?php echo !(empty($service_icon)) && isset($service_icon)? $service_icon : 'far fa-cloud'?>"></i>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="services-item__more">
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <?php if ($hello->found_posts > 6) { ?>
                    <div class="more-services t-a clearfix" data-page="2">
                        <?php _e('سرویس بیشتر', 'ar') ?>
                    </div>
                <?php } ?>
            </section>
            <?php get_template_part('partials/brand'); ?>
        </div>
        <?php get_template_part('partials/parallax'); ?>
    </main>
<?php
get_template_part('partials/footer-menu');
get_footer();
