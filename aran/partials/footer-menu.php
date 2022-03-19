<?php global $options; ?>
<footer>
    <div class="row footer-menu">
        <div class="col-lg-3 col-12 mt-4">
            <nav>
                <h5><?php _e('ارتباط با ما','zxomarket');?></h5>
                <p><?php _e('برای ارتباط با ما وارد لینک های زیر شوید','zxomarket');?></p>
                <ul class="social-link">
                    <?php if (isset($options['setting']['telegram']) && !empty($options['setting']['telegram'])):?>
                    <li><a href="<?php echo isset($options['setting']['telegram']) && !empty($options['setting']['telegram'])? $options['setting']['telegram'] :''; ?>"><i class="fab fa-telegram"></i></a></li>
                    <?php endif;?>
                    <?php if (isset($options['setting']['whatsapp']) && !empty($options['setting']['whatsapp'])):?>
                    <li><a href="<?php echo isset($options['setting']['whatsapp']) && !empty($options['setting']['whatsapp'])? $options['setting']['whatsapp'] :''; ?>"><i class="fab fa-whatsapp"></i></a></li>
                    <?php endif;?>
                    <?php if (isset($options['setting']['instagram']) && !empty($options['setting']['instagram'])):?>
                    <li><a href="<?php echo isset($options['setting']['instagram']) && !empty($options['setting']['instagram'])? $options['setting']['instagram'] :''; ?>"><i class="fab fa-instagram"></i></a></li>
                    <?php endif;?>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4">
            <nav>
                <h5><?php echo wp_get_nav_menu_name('footer-menu-one');?></h5>
                <?php if (has_nav_menu('footer-menu-one')): ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-one'
                    )) ?>
                <?php endif; ?>
            </nav>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4">
            <nav>
                <h5><?php echo wp_get_nav_menu_name('footer-menu-two');?></h5>
                <?php if (has_nav_menu('footer-menu-two')): ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-two'
                    )) ?>
                <?php endif; ?>
            </nav>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4">
            <nav>
                <h5><?php echo wp_get_nav_menu_name('footer-menu-three');?></h5>
                <?php if (has_nav_menu('footer-menu-three')): ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-three'
                    )) ?>
                <?php endif; ?>
            </nav>
        </div>
    </div>
    <div class="row footer-licence">
        <p><?php echo isset($options['setting']['copy_right']) && !empty($options['setting']['copy_right'])? $options['setting']['copy_right'] :''; ?></p>
    </div>
</footer>
<div class="go-up">
    <a href="#"><i class="fal fa-angle-up" aria-hidden="true"></i></a>
</div>