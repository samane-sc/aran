<?php
get_header();
get_template_part('partials/top-menu');
?>
<main>
    <?php get_template_part('partials/page-header'); ?>
    <div class="dark-background"></div>
    <div class="container">
        <section id="about" class="wp_content">
            <?php the_content(); ?>
        </section>
    </div>
    <?php get_template_part('partials/parallax'); ?>
</main>
<?php
get_template_part('partials/footer-menu');
get_footer();
