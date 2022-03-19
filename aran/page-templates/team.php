<?php
/*
* Template Name: تیم

 * */
get_header();
get_template_part('partials/top-menu');
global $options;
global $currentlang;
$args = array(
    'meta_key' => 'show_member_team',
    'meta_value' => 1
);
$user_query = new WP_User_Query($args);
?>
    <main>
        <?php get_template_part('partials/page-header'); ?>
        <div class="dark-background"></div>
        <div class="container">
            <?php if (!empty($user_query->get_results())) { ?>
                <section id="team">
                    <div class="row">
                        <?php foreach ($user_query->get_results() as $user) { ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
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
                        <?php } ?>
                    </div>
                </section>
            <?php } ?>
            <?php get_template_part('partials/brand'); ?>
        </div>
        <?php get_template_part('partials/parallax'); ?>
    </main>
<?php
get_template_part('partials/footer-menu');
get_footer();

