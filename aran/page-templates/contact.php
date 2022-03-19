<?php
/*
* Template Name: ارتباط با ما
*/
global $options;
get_header();
get_template_part('partials/top-menu');
?>
<main>
    <?php get_template_part('partials/page-header')?>
    <div class="dark-background"></div>
    <div class="container">
        <section id="contact">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <h4 class="contact-title"><?php _e('تماس با ما:','zxomarket');?></h4>
                </div>
                <div class="col-md-7 col-12">
                    <section class="contact-form">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="contactname" placeholder="<?php _e('نام', 'zxomarket');?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="contactemail" placeholder="<?php _e('ایمیل', 'zxomarket');?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="contactcontent" rows="5" placeholder="<?php _e('نظر شما', 'zxomarket');?>" required></textarea>
                            </div>
                            <input type="button" value="<?php _e('ارسال', 'zxomarket');?>" id="contact_btn" name="contact_btn" class="contact-us__button"/>
                        </form>
                    </section>
                </div>
                <div class="col-md-5 col-12">
                    <div class="contact-info">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="map"></section>
    </div>
    <?php get_template_part('partials/parallax')?>
</main>
<?php
get_template_part('partials/footer-menu');
get_footer();
?>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    let map_parameters = {center: {lat: 47.490, lng: -117.585}, zoom: 8};
    let map = new google.maps.Map(document.getElementById('map'), map_parameters);

    let position1 = {position: {lat: 47.490, lng: -117.585}, map: map};

    let marker1 = new google.maps.Marker(position1);
</script>
