<div class="wrapper">
    <div class="container">
        <form action="" method="post">
            <div class="title-setting">
                <h2>تنظیمات قالب به زبان دوم</h2>
            </div>

            <div class="panel-wrapper">
                <ul class="panel-tabs">
                    <li class="<?php echo isset( $default_tab ) && ( $default_tab == 'general') ? 'active' : ''; ?>">
                        <a href="<?php echo add_query_arg('tab', 'general'); ?>">تنظیمات کلی</a>
                    </li>
                    <li class="<?php echo isset( $default_tab ) && ( $default_tab == 'page1') ? 'active' : ''; ?>">
                        <a href="<?php echo add_query_arg('tab','page1'); ?>">صفحه ی اول</a>
                    </li>
                    <li class="<?php echo isset( $default_tab ) && ( $default_tab == 'footer') ? 'active' : ''; ?>">
                        <a href="<?php echo add_query_arg('tab','footer'); ?>">تنظیمات پاصفحه</a>
                    </li>
                </ul>
                <div class="panel-content">
                    <div id="general" style="display: <?php echo isset( $default_tab ) && ( $default_tab == 'general') ? 'block' : 'none'; ?>">
                        <?php include get_template_directory() . '/admin/tpl-2/general.php'; ?>
                    </div>
                    <div id="banner" style="display: <?php echo isset( $default_tab ) && ( $default_tab == 'page1') ? 'block' : 'none'; ?>">
                        <?php include get_template_directory() . '/admin/tpl-2/page1.php'; ?>
                    </div>
                    <div id="footer" style="display: <?php echo isset( $default_tab ) && ( $default_tab == 'footer') ? 'block' : 'none'; ?>">
                        <?php include get_template_directory() . '/admin/tpl-2/footer.php'; ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
    </div>
    <div class="option-tree-ui-buttons">
        <button type="submit" name="admin_submit_2" class="button-primary">ذخیره تنظیمات</button>
    </div>
    </form>
</div>
</div>
