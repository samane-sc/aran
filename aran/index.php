<?php
get_header();
get_template_part('partials/top-menu');
?>
    <main>
        <div class="dark-background"></div>
        <?php if (isset($options['index']['desc1']) && !empty($options['index']['desc1'])): ?>
            <div class="container">
                <section id="introduction">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 introduction-content">
                            <p><?php echo isset($options['index']['desc1']) && !empty($options['index']['desc1']) ? $options['index']['desc1'] : ''; ?></p>
                            <a href="<?php echo isset($options['index']['btn_link1']) && !empty($options['index']['btn_link1']) ? $options['index']['btn_link1'] : ''; ?>">
                                <?php echo isset($options['index']['btn1']) && !empty($options['index']['btn1']) ?
                                    $options['index']['btn1'] : ''; ?>
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="introduction-image">
                                <img src="<?php echo isset($options['index']['img1']) && !empty($options['index']['img1']) ? $options['index']['img1'] : ''; ?>"
                                     alt="mainImage"/>
                                <?php if (isset($options['index']['video_link1']) && !empty($options['index']['video_link1'])): ?>
                                    <i class="far fa-play iframe-link"></i>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($options['index']['video_link1']) && !empty($options['index']['video_link1'])): ?>
                        <iframe class="iframe" width="600" height="400"
                                data-src="<?php echo $options['index']['video_link1'] ?>"
                                src="about:blank"></iframe>
                    <?php endif; ?>
                </section>
            </div>
        <?php endif; ?>
        <?php
        $args = array('post_type' => 'services');
        $services = new WP_Query($args);
        if ($services->have_posts()) :?>
            <div class="container">
                <section id="services">
                    <h5 class="services-header">
                        <?php echo isset($options['index']['title3']) && !empty($options['index']['title3']) ? $options['index']['title3'] : ''; ?>
                    </h5>
                    <div class="row services-items">
                        <?php while ($services->have_posts()) : $services->the_post();
                            $send = get_post_meta(get_the_ID(), 'display_service', true); ?>
                            <?php if ($send == '1'): ?>
                                <div class="col-lg-4 col-md-6 col-12 services-item">
                                    <div class="services-item__icon">
                                        <?php $service_icon = get_post_meta(get_the_ID(), 'service_icon', true); ?>
                                        <i class="<?php echo !(empty($service_icon)) && isset($service_icon)? $service_icon : 'far fa-cloud'?>"></i>
                                    </div>
                                    <h5><?php the_title(); ?></h5>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="services-item__more">
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>
        <?php if (isset($options['index']['desc2']) && !empty($options['index']['desc2'])):?>
        <div class="container">
            <section id="contact">
                <div class="row contact-items align-items-center">
                    <div class="col-lg-5 col-md-6 contact-item__cm">
                        <p><?php echo isset($options['index']['desc2']) && !empty($options['index']['desc2']) ? $options['index']['desc2'] : ''; ?></p>
                        <?php if (isset($options['index']['btn2']) && !empty($options['index']['btn2'])): ?>
                            <a href="<?php echo isset($options['index']['btn_link2']) && !empty($options['index']['btn_link2']) ? $options['index']['btn_link2'] : ''; ?>">
                                <?php echo isset($options['index']['btn2']) && !empty($options['index']['btn2']) ?
                                    $options['index']['btn2'] : ''; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="contact-item">
                            <img src="<?php echo isset($options['index']['img2']) && !empty($options['index']['img2']) ? $options['index']['img2'] : ''; ?>"
                                 alt="mainImage"/>
                            <?php if (isset($options['index']['video_link2']) && !empty($options['index']['video_link2'])): ?>
                                <i class="far fa-play iframe-link"></i>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if (isset($options['index']['video_link2']) && !empty($options['index']['video_link2'])): ?>
                    <iframe class="iframe" width="600" height="400"
                            data-src="<?php echo $options['index']['video_link2'] ?>"
                            src="about:blank"></iframe>
                <?php endif; ?>
            </section>
        </div>
        <?php endif;?>
        <section id="parallax">
            <div class="container">
                <div class="row justify-content-center">
                    <?php if (isset($options['index']['subj1']) && !empty($options['index']['subj1']) && isset($options['index']['amount1']) && !empty($options['index']['amount1'])): ?>
                        <div class="col-md-3 col-sm-6 col-12 parallax-item">
                            <span><?php echo isset($options['index']['subj1']) && !empty($options['index']['subj1']) ? $options['index']['subj1'] : ''; ?></span>
                            <span><?php echo isset($options['index']['amount1']) && !empty($options['index']['amount1']) ? $options['index']['amount1'] : ''; ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($options['index']['subj2']) && !empty($options['index']['subj2']) && isset($options['index']['amount1']) && !empty($options['index']['amount2'])): ?>
                        <div class="col-md-3 col-sm-6 col-12 parallax-item">
                            <span><?php echo isset($options['index']['subj2']) && !empty($options['index']['subj2']) ? $options['index']['subj2'] : ''; ?></span>
                            <span><?php echo isset($options['index']['amount2']) && !empty($options['index']['amount2']) ? $options['index']['amount2'] : ''; ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($options['index']['subj3']) && !empty($options['index']['subj3']) && isset($options['index']['amount3']) && !empty($options['index']['amount3'])): ?>
                        <div class="col-md-3 col-sm-6 col-12 parallax-item">
                            <span><?php echo isset($options['index']['subj3']) && !empty($options['index']['subj3']) ? $options['index']['subj3'] : ''; ?></span>
                            <span><?php echo isset($options['index']['amount3']) && !empty($options['index']['amount3']) ? $options['index']['amount3'] : ''; ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($options['index']['subj4']) && !empty($options['index']['subj4']) && isset($options['index']['amount4']) && !empty($options['index']['amount4'])): ?>
                        <div class="col-md-3 col-sm-6 col-12 parallax-item">
                            <span><?php echo isset($options['index']['subj4']) && !empty($options['index']['subj4']) ? $options['index']['subj4'] : ''; ?></span>
                            <span><?php echo isset($options['index']['amount4']) && !empty($options['index']['amount4']) ? $options['index']['amount4'] : ''; ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="container">
            <?php if (isset($options['index']['desc5']) && !empty($options['index']['desc5'])): ?>
                <section id="team">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 team-description">
                            <p><?php echo isset($options['index']['desc5']) && !empty($options['index']['desc5']) ? $options['index']['desc5'] : ''; ?></p>
                        </div>
                        <?php
                        $args = array(
                            'meta_key' => 'show_member_1',
                            'meta_value' => 1
                        );
                        $user_query = new WP_User_Query($args);
                        ?>
                        <?php if (!empty($user_query->get_results())) : ?>
                            <div class="col-lg-6 col-md-12 team-members">
                                <div class="row">
                                    <?php foreach ($user_query->get_results() as $user) : ?>
                                        <div class="col-sm-6 col-12">
                                            <div class="team-member">
                                                <img src="<?php echo get_avatar_url($user->ID); ?>" height="250" width="250"/>
                                                <?php if ($currentlang == "en-US") { ?>
                                                    <h5><?php echo get_user_meta($user->ID, 'Us_name', true)? get_user_meta($user->ID, 'Us_name', true) : $user->display_name ?></h5>
                                                <?php } else { ?>
                                                    <h5><?php echo $user->display_name; ?></h5>
                                                <?php } ?>
                                                <p><?php echo $user->description; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (isset($options['index']['desc6']) && !empty($options['index']['desc6'])): ?>
                <section id="customer">
                    <div class="row customer-items align-items-center">
                        <div class="col-lg-5 col-md-6 customer-item__cm">
                            <?php echo isset($options['index']['desc6']) && !empty($options['index']['desc6']) ? $options['index']['desc6'] : ''; ?>
                            <div class="owl-carousel customer-article">
                                <?php if (is_active_sidebar('slider-comment')): ?>
                                    <?php dynamic_sidebar('slider-comment') ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="customer-item">
                                <img src="<?php echo isset($options['index']['img6']) && !empty($options['index']['img6']) ? $options['index']['img6'] : ''; ?>"
                                     alt="img6"/>
                                <?php if (isset($options['index']['video_link6']) && !empty($options['index']['video_link6'])): ?>
                                    <i class="far fa-play iframe-link"></i>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($options['index']['video_link6']) && !empty($options['index']['video_link6'])): ?>
                        <iframe class="iframe" width="600" height="400"
                                data-src="<?php echo $options['index']['video_link6'] ?>"
                                src="about:blank"></iframe>
                    <?php endif; ?>
                </section>
            <?php endif; ?>
            <?php
            $posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'ASC'
            ));
            if ($posts->have_posts()) :?>
                <section id="blog">
                    <h5><?php _e('وبلاگ', 'zxomarket'); ?></h5>
                    <div class="row blog-items justify-content-center">
                        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                            <div class="col-lg-4 col-md-6 col-12 mt-3">
                                <figure class="blog-item">
                                    <figcaption>
                                        <span><?php the_author(); ?> / <?php the_time('F j, Y'); ?></span>
                                        <h5>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h5>
                                        <?php the_excerpt(); ?>
                                    </figcaption>
                                    <a class="blog-post__img" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </figure>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </section>
                <?php get_template_part('partials/brand') ?>
            <?php endif; ?>
        </div>
    </main>
<?php
get_template_part('partials/footer-menu');
get_footer();