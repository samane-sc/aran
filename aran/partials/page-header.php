<?php $img_link = get_post_meta(get_the_ID(), 'page_img', true); ?>
<?php $video_link = get_post_meta(get_the_ID(), 'page_link', true); ?>
<section id="header">
    <div class="row">
        <div class="col-12 header-contain">
            <?php if (!is_category() && !is_archive()): ?>
                <h1><?php the_title(); ?></h1>
            <?php endif; ?>
            <?php if (is_category()): ?>
                <h1><?php single_cat_title(); ?></h1>
            <?php elseif (is_archive()): ?>
                <h1><?php the_archive_title() ?></h1>
            <?php endif; ?>
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
                        <img src="<?php echo ($img_link) ? $img_link : "http://themevaly.com/template/xzomark/assets/img/hero_area/1.png" ?>"
                             alt="hh"/>
                        <i class="far fa-play iframe-link"></i>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<iframe id="iframe" class="iframe" width="600" height="400" data-src="<?php echo $video_link ?>"
        src="about:blank"></iframe>