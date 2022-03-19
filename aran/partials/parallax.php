<?php global $options;?>
<section id="parallax">
    <div class="">
        <div class="row parallax-contact">
            <div class="col-md-7 col-12">
                <span><?php echo isset($options['setting']['extra_text']) && !empty($options['setting']['extra_text']) ? $options['setting']['extra_text'] : ''; ?></span>
            </div>
            <div class="col-md-5 col-12 parallax-contact__button">
                <a href="<?php echo isset($options['setting']['extra_link']) && !empty($options['setting']['extra_link']) ? $options['setting']['extra_link'] : ''; ?>">
                    <?php echo isset($options['setting']['extra_btn']) && !empty($options['setting']['extra_btn']) ? $options['setting']['extra_btn'] : ''; ?>
                </a>
            </div>
        </div>
    </div>
</section>