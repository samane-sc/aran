<?php
get_header();
get_template_part('partials/top-menu');
the_post();
$id = get_the_ID();
// get the custom post type's taxonomy terms
$custom_taxterms = wp_get_object_terms( $id, 'portfolio_cat', array('fields' => 'ids'));
$related = new WP_Query(
    array(
        'post_type' => 'portfolio',
        'post__not_in' => array($id),
        'tax_query' => array(
            array(
                'taxonomy' => 'portfolio_cat',
                'field' => 'id',
                'terms' => $custom_taxterms
            )
        )
    )
);
?>
<main>
<?php get_template_part('partials/page-header') ?>
    <div class="dark-background"></div>
    <div class="container">
        <section id="portfolio-detailed">
            <section>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                            <div class="img-inner-wrap">
                                <?php the_post_thumbnail(); ?>
                            </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="col-md-9 col-12 portfolio-detailed__content wp_content">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <?php $portfolio_info = get_post_meta(get_the_ID(), 'portfolio_info', true); ?>
                    <?php $portfolio_cat = get_the_term_list(get_the_ID(), 'portfolio_cat', '', ','); ?>
                    <?php if (isset($portfolio_info) || isset($portfolio_cat) ): ?>
                    <div class="col-md-3 col-12">
                        <div class="portfolio-detailed__sidebar">
                            <h4><?php _e('اطلاعات','zxomarket');?></h4>
                            <div class="portfolio__sidebar-items">
                                <div class="portfolio__sidebar-item">
                                    <?php if (get_the_term_list(get_the_ID(), 'portfolio_cat', '', ',')): ?>
                                        <h5><?php _e('دسته بندی','zxomarket');?></h5>
                                        <p><?php echo $portfolio_cat; ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php echo $portfolio_info; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php if ($related->have_posts()): ?>
                <section>
                    <h4 class="related-portfolio__title"><?php _e('موارد مرتبط','zxomarket');?></h4>
                    <div id="portfolio" class="owl-carousel related-portfolio">
                        <?php
                            while ($related->have_posts()): $related->the_post(); ?>
                                <div class="portfolio-item">
                                    <figure>
                                        <a class="portfolio-item__img"><?php the_post_thumbnail(); ?></a>
                                        <figcaption>
                                            <div class="portfolio-item__caption">
                                                <span><?php the_author(); ?> / <?php the_time('F j, Y'); ?></span>
                                                <h2><a href="#"><?php the_title(); ?></a></h2>
                                            </div>
                                            <div class="portfolio-item__link">
                                                <a href="<?php the_permalink(); ?>"><i class="fal fa-arrow-right"></i></a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </section>
            <?php endif; ?>
        </section>
    </div>
<?php get_template_part('partials/parallax') ?>
</main>
<?php
get_template_part('partials/footer-menu');
get_footer();