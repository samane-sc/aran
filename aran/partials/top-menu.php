<?php global $options; ?>
<header>
    <nav class="nav-menu">
        <div class="container nav-menu-con">
            <div class="row">
                <div class="col-md-9 d-none d-md-block">
                    <div class="nav-menu__items">
                        <?php if (has_nav_menu('top-menu')): ?>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'top-menu'
                            )) ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 d-md-none">
                    <div class="nav-menu__items-sm">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <div class="col-md-3 col-6 nav-menu__logo nav-menu__logo-shared">
                    <?php if (is_home()): ?>
                        <h1><a href="<?php echo home_url(); ?>"><img
                                        src="<?php echo isset($options['general']['logo']) && !empty($options['general']['logo']) ? $options['general']['logo'] :
                                            get_template_directory_uri() . '/assets/img/download.png'; ?>" width="106px"
                                        height="17px" class="lazy"></a></h1>
                    <?php else: ?>
                        <a href="<?php echo home_url(); ?>"><img
                                    src="<?php echo isset($options['general']['logo']) && !empty($options['general']['logo']) ? $options['general']['logo'] :
                                        get_template_directory_uri() . '/assets/img/download.png'; ?>" width="106px"
                                    height="17px" class="lazy"></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="nav-menu__items-sm__content">
                <div class="nav-menu__items">
                    <?php if (has_nav_menu('top-menu')): ?>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'top-menu'
                        )) ?>
                    <?php endif; ?>
                </div>
            </div>
    </nav>
</header>