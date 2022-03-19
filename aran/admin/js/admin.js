jQuery(document).ready(function () {
    var custom_uploader;
    jQuery(document).on('click', '.select-uploader', function (e) {
        e.preventDefault();
        var $this = jQuery(this);
        var $target = $this.data('target');
        var $target_type = $this.data('target-type');

        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'انتخاب تصویر',
            button: {text: 'انتخاب تصویر'},
            multiple: false
        });
        custom_uploader.on('select', function () {
            attachment = custom_uploader.state().get('selection').first().toJSON();

            switch (true) {
                case $target_type === 'image':
                    jQuery('#' + $target).attr('src', attachment.url);
                    jQuery('#' + $target + '_input').val(attachment.url);
                    break;
            }
        });
        custom_uploader.open();
    })
});
jQuery(document).ready(function () {
    //address
    var wrapper_faq = jQuery(".input_fields_wrap_faq"); //Fields wrapper
    var add_button_faq = jQuery(".add_field_faq_button"); //Add button ID

    var x = 1; //initlal text box count
    jQuery(add_button_faq).click(function (e) { //on add input button click
        e.preventDefault();

        x++; //text box increment
        if (x<=3){
            jQuery(wrapper_faq).append('<br>' + '                <fieldset class="faq_field">\n' +
                '                    <div class="format-setting">\n' +
                '                        <div class="description">\n' +
                '                            <label class="label_Button_title" for="name[]"> نام و نام خانوادگی : </label>\n' +
                '                        </div>\n' +
                '                        <div class="format-setting-inner">\n' +
                '                            <div class="row">\n' +
                '                                <input type="text" id="name[]" name="name[]" class="input-setting"\n' +
                '                                       value="<?php echo (isset($list[\'name\'])) && (!empty($list[\'name\']))? $list[\'name\']: \'\' ;?>">\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                    <div class="format-setting">\n' +
                '                        <div class="description">\n' +
                '                            <label for="desc[]">توضیحات کوتاه : </label>\n' +
                '                        </div>\n' +
                '                        <div class="format-setting-inner">\n' +
                '                            <div class="row">\n' +
                '                                <input type="text" id="desc[]" name="desc[]" class="input-setting"\n' +
                '                                       value="<?php echo (isset($list[\'desc\'])) && (!empty($list[\'desc\']))? $list[\'desc\']: \'\' ;?>">\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                    <div class="format-setting">\n' +
                '                        <div class="description">\n' +
                '                            <label class="label_Button_title" for="img[]"> تصویر : </label>\n' +
                '                        </div>\n' +
                '                        <div class="format-setting-inner">\n' +
                '                            <div class="row">\n' +
                '                                <button data-target-type="image" data-target="img[]" class="button-primary select-uploader"\n' +
                '                                        title="add media">\n' +
                '                                    <span class="icon dashicons dashicons-plus-alt"></span>\n' +
                '                                </button>\n' +
                '                            </div>\n' +
                '                            <div class="row">\n' +
                '                                <img id="img[]" class="img-setting"\n' +
                '                                     src="<?php echo (isset($list[\'img\'])) ? $list[\'img\'] : get_template_directory_uri() . \'/assets/img/download.png\'; ?>"\n' +
                '                                     alt="logo image">\n' +
                '                                <input type="hidden" name="img[]" id="img_input[]"\n' +
                '                                       value="<?php echo (isset($list[\'img\'])) ? $list[\'img\'] : get_template_directory_uri() . \'/assets/img/download.png\'; ?>">\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                    <a href="#" class="remove_field_faq">حذف عضو</a>\n' +
                '                </fieldset>'
            ); //add input box
        }

    });
    jQuery(wrapper_faq).on("click", ".remove_field_faq", function (e) { //user click on remove text
        e.preventDefault();
        jQuery(this).parent('fieldset').remove();
        x--;
    });
})