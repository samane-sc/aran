<div class="wrapper">
    <div class="format-setting-label">
        <h3>تنظیمات قسمت اول سایت</h3>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>تصویر</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <!--                    <input class="input-setting" type="text" name="logo" id="logo" value="-->
                    <?php //echo isset($options['general']['logo'])? $options['general']['logo'] :   get_template_directory_uri().'/assets/img/download.png'; ?><!--">-->
                    <button data-target-type="image" data-target="img1" class="button-primary select-uploader"
                            title="add media">
                        <span class="icon dashicons dashicons-plus-alt"></span>
                    </button>
                </div>
                <div class="row">
                    <img id="img1" class="img-setting"
                         src="<?php echo isset($options['index']['img1']) ? $options['index']['img1'] : get_template_directory_uri() . '/assets/img/download.png'; ?>"
                         alt="logo image">
                    <input type="hidden" name="img1" id="img1_input"
                           value="<?php echo isset($options['index']['img1']) ? $options['index']['img1'] : get_template_directory_uri() . '/assets/images/download.png'; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>توضیحات</h3>
        </div>
        <div class="format-setting">
            <div class="">
                <div class="row">
                    <?php
                    $content = isset($options['index']['desc1']) && !empty($options['index']['desc1']) ? $options['index']['desc1'] : '';
                    wp_editor($content, 'desc1');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>متن روی دکمه</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="btn1" id="btn1" dir="ltr"
                           value="<?php echo isset($options['index']['btn1']) && !empty($options['index']['btn1']) ? $options['index']['btn1'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>لینک دکمه(لینک صفحه را به صورت کامل از قسمت برگه کپی کرده و در اینجا قرار دهید)</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="btn_link1" id="btn_link1" dir="ltr"
                           value="<?php echo isset($options['index']['btn_link1']) && !empty($options['index']['btn_link1']) ? $options['index']['btn_link1'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>لینک ویدیو</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="video_link1" id="video_link1" dir="ltr"
                           value="<?php echo isset($options['index']['video_link1']) && !empty($options['index']['video_link1']) ? $options['index']['video_link1'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="format-setting-label">
        <h3>تنظیمات قسمت دوم سایت</h3>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>عنوان</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="title3" id="title3"  dir="ltr"
                           value="<?php echo isset($options['index']['title3']) && !empty($options['index']['title3']) ? $options['index']['title3'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="format-setting-label">
        <h3>تنظیمات قسمت سوم سایت</h3>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>تصویر</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <!--                    <input class="input-setting" type="text" name="logo" id="logo" value="-->
                    <?php //echo isset($options['general']['logo'])? $options['general']['logo'] :   get_template_directory_uri().'/assets/img/download.png'; ?><!--">-->
                    <button data-target-type="image" data-target="img2" class="button-primary select-uploader"
                            title="add media">
                        <span class="icon dashicons dashicons-plus-alt"></span>
                    </button>
                </div>
                <div class="row">
                    <img id="img2" class="img-setting"
                         src="<?php echo isset($options['index']['img2']) ? $options['index']['img2'] : get_template_directory_uri() . '/assets/img/download.png'; ?>"
                         alt="logo image">
                    <input type="hidden" name="img2" id="img2_input"
                           value="<?php echo isset($options['index']['img2']) ? $options['index']['img2'] : get_template_directory_uri() . '/assets/images/download.png'; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>توضیحات</h3>
        </div>
        <div class="format-setting">
            <div class="">
                <div class="row">
                    <?php
                    $content = isset($options['index']['desc2']) && !empty($options['index']['desc2']) ? $options['index']['desc2'] : '';
                    wp_editor($content, 'desc2');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>متن روی دکمه</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="btn2" id="btn2" dir="ltr"
                           value="<?php echo isset($options['index']['btn2']) && !empty($options['index']['btn2']) ? $options['index']['btn2'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>لینک دکمه(لینک صفحه را به صورل کامل از قسمت برگه کپی کرده و در اینجا قرار دهید)</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="btn_link2" id="btn_link2" dir="ltr"
                           value="<?php echo isset($options['index']['btn_link2']) && !empty($options['index']['btn_link2']) ? $options['index']['btn_link2'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>لینک ویدیو</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="video_link2" id="video_link2" dir="ltr"
                           value="<?php echo isset($options['index']['video_link2']) && !empty($options['index']['video_link2']) ? $options['index']['video_link2'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="format-setting-label">
        <h3>تنظیمات قسمت چهارم سایت</h3>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>آمار و ارقام</h3>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="subj1">عنوان 1</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="subj1" id="subj1" dir="ltr"
                           value="<?php echo isset($options['index']['subj1']) && !empty($options['index']['subj1']) ? $options['index']['subj1'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="amount1">مقدار 1</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="amount1" id="amount1" dir="ltr"
                           value="<?php echo isset($options['index']['amount1']) && !empty($options['index']['amount1']) ? $options['index']['amount1'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="subj2">عنوان 2</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="subj2" id="subj2" dir="ltr"
                           value="<?php echo isset($options['index']['subj2']) && !empty($options['index']['subj2']) ? $options['index']['subj2'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="amount2">مقدار 2</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="amount2" id="amount2" dir="ltr"
                           value="<?php echo isset($options['index']['amount2']) && !empty($options['index']['amount2']) ? $options['index']['amount2'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="subj3">عنوان 3</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="subj3" id="subj3" dir="ltr"
                           value="<?php echo isset($options['index']['subj3']) && !empty($options['index']['subj3']) ? $options['index']['subj3'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="amount3">مقدار 3</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="amount3" id="amount3" dir="ltr"
                           value="<?php echo isset($options['index']['amount3']) && !empty($options['index']['amount3']) ? $options['index']['amount3'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="subj4">عنوان 4</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="subj4" id="subj4" dir="ltr"
                           value="<?php echo isset($options['index']['subj4']) && !empty($options['index']['subj4']) ? $options['index']['subj4'] : ''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="amount4">مقدار 4</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="amount4" id="amount4" dir="ltr"
                           value="<?php echo isset($options['index']['amount4']) && !empty($options['index']['amount4']) ? $options['index']['amount4'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="format-setting-label">
        <h3>تنظیمات قسمت پنجم سایت</h3>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>توضیحات</h3>
        </div>
        <div class="format-setting">
            <div class="">
                <div class="row">
                    <?php
                    $content = isset($options['index']['desc5']) && !empty($options['index']['desc5']) ? $options['index']['desc5'] : '';
                    wp_editor($content, 'desc5');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="format-setting-label">
        <h3>تنظیمات قسمت ششم سایت</h3>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>توضیحات</h3>
        </div>
        <div class="format-setting">
            <div class="">
                <div class="row">
                    <?php
                    $content = isset($options['index']['desc6']) && !empty($options['index']['desc6']) ? $options['index']['desc6'] : '';
                    wp_editor($content, 'desc6');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>تصویر</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <!--                    <input class="input-setting" type="text" name="logo" id="logo" value="-->
                    <?php //echo isset($options['general']['logo'])? $options['general']['logo'] :   get_template_directory_uri().'/assets/img/download.png'; ?><!--">-->
                    <button data-target-type="image" data-target="img6" class="button-primary select-uploader"
                            title="add media">
                        <span class="icon dashicons dashicons-plus-alt"></span>
                    </button>
                </div>
                <div class="row">
                    <img id="img6" class="img-setting"
                         src="<?php echo isset($options['index']['img6']) ? $options['index']['img6'] : get_template_directory_uri() . '/assets/img/download.png'; ?>"
                         alt="logo image">
                    <input type="hidden" name="img6" id="img6_input"
                           value="<?php echo isset($options['index']['img6']) ? $options['index']['img6'] : get_template_directory_uri() . '/assets/images/download.png'; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>لینک ویدیو</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="video_link6" id="video_link6" dir="ltr"
                           value="<?php echo isset($options['index']['video_link6']) && !empty($options['index']['video_link6']) ? $options['index']['video_link6'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
</div>
