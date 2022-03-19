<div class="wrapper">
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>متن قسمت دارای پس زمینه ی آبی</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" dir="ltr" type="text" name="extra_text" id="extra_text" value="<?php echo isset($options['setting']['extra_text']) && !empty($options['setting']['extra_text']) ? $options['setting']['extra_text'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>متن دکمه ی قسمت دارای پس زمینه ی آبی</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" dir="ltr" type="text" name="extra_btn" id="extra_btn" value="<?php echo isset($options['setting']['extra_btn']) && !empty($options['setting']['extra_btn']) ? $options['setting']['extra_btn'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>لینک قسمت دارای پس زمینه ی آبی</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" dir="ltr" type="text" name="extra_link" id="extra_link" value="<?php echo isset($options['setting']['extra_link']) && !empty($options['setting']['extra_link']) ? $options['setting']['extra_link'] : ''; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>اطلاعات تماس </h3>
        </div>
        <div class="format-setting">
            <div class="">
                <div class="row">
                    <?php
                    $content = isset($options['setting']['info']) && !empty($options['setting']['info']) ? $options['setting']['info'] : '';
                    wp_editor($content, 'info');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper bottom-line">
        <div class="format-setting-label">
            <h3>متن کپی رایت</h3>
        </div>
        <div class="format-setting">
            <div class="format-setting-inner">
                <div class="row">
                    <input class="input-setting" type="text" name="copy_right" id="copy_right" value="<?php echo isset($options['setting']['copy_right']) && !empty($options['setting']['copy_right']) ? $options['setting']['copy_right'] : 'حقوق سایت محفوظ است.'; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="setting-wrapper">
        <div class="format-setting-label">
            <h3>شبکه های اجتماعی</h3>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="whatsapp">ای دی whatsapp</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input type="text" id="whatsapp" name="whatsapp" class="input-setting input_rtl"
                           value="<?php echo isset($options['setting']['whatsapp']) && !empty($options['setting']['whatsapp'])? $options['setting']['whatsapp'] :''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="telegram">ای دی telegram</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input type="text" id="telegram" name="telegram" class="input-setting input_rtl"
                           value="<?php echo isset($options['setting']['telegram'])? $options['setting']['telegram'] :''; ?>">
                </div>
            </div>
        </div>
        <div class="format-setting">
            <div class="description">
                <label class="label_Button_link" for="instagram">ای دی instagram</label>
            </div>
            <div class="format-setting-inner">
                <div class="row">
                    <input type="text" id="instagram" name="instagram" class="input-setting input_rtl"
                           value="<?php echo isset($options['setting']['instagram'])? $options['setting']['instagram'] :''; ?>">
                </div>
            </div>
        </div>
    </div>
</div>
