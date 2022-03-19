<?php
get_header();
get_template_part('partials/top-menu');
?>
    <main>
        <?php get_template_part('partials/page-header');?>
        <div class="dark-background"></div>
        <div class="container">
            <div id="error-page">
                <p>صفحه ی مورد نظر پیدا نشد</p>
                <img class="text-center" src="<?php echo get_template_directory_uri().'/assets/img/404.png';?>">
            </div>
        </div>
    </main>
<?php
get_template_part('partials/footer-menu');
get_footer();
