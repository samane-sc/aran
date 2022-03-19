<?php
/*
* Template Name:  نمونه کار

*/
get_header();
get_template_part('partials/top-menu');

$args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 6
    );
$hello = new WP_Query($args);

?>
<main>
    <?php get_template_part('partials/page-header');?>
    <div class="dark-background"></div>
    <div class="container">
        <section id="portfolio">
            <div class="row">
                <?php if ($hello->have_posts()) : while ($hello->have_posts()) : $hello->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-12 portfolio-item">
                        <figure>
                            <a class="portfolio-item__img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <figcaption>
                                <div class="portfolio-item__caption">
                                    <span><?php the_author(); ?> / <?php the_date('F j, Y'); ?></span>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                                <div class="portfolio-item__link">
                                    <a href="<?php the_permalink(); ?>"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <?php if ($hello->found_posts > 6) { ?>
                <div class="more-portfolio t-a clearfix" data-page="2">
                    <?php _e('موارد بیشتر', 'ar') ?>
                </div>
            <?php } ?>
        </section>
        <?php get_template_part('partials/brand'); ?>
    </div>
    <?php get_template_part('partials/parallax');?>
</main>
<?php
get_template_part('partials/footer-menu');
get_footer();
