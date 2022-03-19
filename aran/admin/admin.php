<?php
add_action('admin_menu', 'add_admin_menus');
function add_admin_menus()
{
    $admin_setting_hook = add_menu_page('تنظیمات قالب', 'تنظیمات قالب', 'read',
        'admin-setting', 'admin_setting_option', 'dashicons-admin-generic', 60);
    add_action("load-{$admin_setting_hook}", 'admin_setting_callback');

    $admin_setting_hook_2 = add_menu_page('تنظیمات قالب زبان دوم', 'تنظیمات قالب زبان دوم', 'read',
        'admin-2-setting', 'admin_2_setting_option', 'dashicons-admin-generic', 61);
    add_action("load-{$admin_setting_hook_2}", 'admin_setting_callback');
}

function admin_setting_callback()
{
    wp_enqueue_media();
}

function admin_setting_option()
{
    $options = get_option('data_options');
    $contacts = array();
    $list = array('general', 'page1', 'footer');
    $default_tab = isset($_GET['tab']) && in_array($_GET['tab'], $list) ? $_GET['tab'] : 'general';
    if (isset($_POST['admin_submit'])) {
        switch ($default_tab) {
            case 'general':
                $options['general']['logo'] = sanitize_text_field($_POST['logo']);
                $options['general']['favicon'] = sanitize_text_field($_POST['favicon']);
                $options['general']['alt_logo'] = sanitize_text_field($_POST['alt_logo']);
                break;
            case 'page1':
                $options['index']['img1'] = sanitize_text_field($_POST['img1']);
                $options['index']['desc1'] = wp_unslash($_POST['desc1']);
                $options['index']['btn1'] = sanitize_text_field($_POST['btn1']);
                $options['index']['btn_link1'] = sanitize_text_field($_POST['btn_link1']);
                $options['index']['video_link1'] = sanitize_text_field($_POST['video_link1']);
                $options['index']['img2'] = sanitize_text_field($_POST['img2']);
                $options['index']['desc2'] = wp_unslash($_POST['desc2']);
                $options['index']['btn2'] = sanitize_text_field($_POST['btn2']);
                $options['index']['btn_link2'] = sanitize_text_field($_POST['btn_link2']);
                $options['index']['video_link2'] = sanitize_text_field($_POST['video_link2']);
                $options['index']['title3'] = sanitize_text_field($_POST['title3']);
                $options['index']['desc5'] = wp_unslash($_POST['desc5']);
                $options['index']['desc6'] = wp_unslash($_POST['desc6']);
                $options['index']['img6'] = wp_unslash($_POST['img6']);
                $options['index']['video_link6'] = sanitize_text_field($_POST['video_link6']);
                $options['index']['subj1'] = sanitize_text_field($_POST['subj1']);
                $options['index']['subj2'] = sanitize_text_field($_POST['subj2']);
                $options['index']['subj3'] = sanitize_text_field($_POST['subj3']);
                $options['index']['subj4'] = sanitize_text_field($_POST['subj4']);
                $options['index']['amount1'] = sanitize_text_field($_POST['amount1']);
                $options['index']['amount2'] = sanitize_text_field($_POST['amount2']);
                $options['index']['amount3'] = sanitize_text_field($_POST['amount3']);
                $options['index']['amount4'] = sanitize_text_field($_POST['amount4']);
                break;
            case 'footer':
                $options['setting']['copy_right'] = sanitize_text_field($_POST['copy_right']);
                $options['setting']['extra_text'] = sanitize_text_field($_POST['extra_text']);
                $options['setting']['extra_btn'] = sanitize_text_field($_POST['extra_btn']);
                $options['setting']['extra_link'] = sanitize_text_field($_POST['extra_link']);
                $options['setting']['info'] = wp_unslash($_POST['info']);
                $options['setting']['instagram'] = sanitize_text_field($_POST['instagram']);
                $options['setting']['telegram'] = sanitize_text_field($_POST['telegram']);
                $options['setting']['whatsapp'] = sanitize_text_field($_POST['whatsapp']);
                break;
        }
    }
    update_option('data_options', $options);
    include get_template_directory() . '/admin/admin-tpl.php';
}

function admin_2_setting_option()
{
    $options = get_option('data_options_2');
    $contacts = array();
    $list = array('general', 'page1', 'footer');
    $default_tab = isset($_GET['tab']) && in_array($_GET['tab'], $list) ? $_GET['tab'] : 'general';
    if (isset($_POST['admin_submit_2'])) {
        switch ($default_tab) {
            case 'general':
                $options['general']['logo'] = sanitize_text_field($_POST['logo']);
                $options['general']['favicon'] = sanitize_text_field($_POST['favicon']);
                $options['general']['alt_logo'] = sanitize_text_field($_POST['alt_logo']);
                break;
            case 'page1':
                $options['index']['img1'] = sanitize_text_field($_POST['img1']);
                $options['index']['desc1'] = wp_unslash($_POST['desc1']);
                $options['index']['btn1'] = sanitize_text_field($_POST['btn1']);
                $options['index']['btn_link1'] = sanitize_text_field($_POST['btn_link1']);
                $options['index']['video_link1'] = sanitize_text_field($_POST['video_link1']);
                $options['index']['img2'] = sanitize_text_field($_POST['img2']);
                $options['index']['desc2'] = wp_unslash($_POST['desc2']);
                $options['index']['btn2'] = sanitize_text_field($_POST['btn2']);
                $options['index']['btn_link2'] = sanitize_text_field($_POST['btn_link2']);
                $options['index']['video_link2'] = sanitize_text_field($_POST['video_link2']);
                $options['index']['title3'] = sanitize_text_field($_POST['title3']);
                $options['index']['desc5'] = wp_unslash($_POST['desc5']);
                $options['index']['desc6'] = wp_unslash($_POST['desc6']);
                $options['index']['img6'] = wp_unslash($_POST['img6']);
                $options['index']['video_link6'] = sanitize_text_field($_POST['video_link6']);
                $options['index']['subj1'] = sanitize_text_field($_POST['subj1']);
                $options['index']['subj2'] = sanitize_text_field($_POST['subj2']);
                $options['index']['subj3'] = sanitize_text_field($_POST['subj3']);
                $options['index']['subj4'] = sanitize_text_field($_POST['subj4']);
                $options['index']['amount1'] = sanitize_text_field($_POST['amount1']);
                $options['index']['amount2'] = sanitize_text_field($_POST['amount2']);
                $options['index']['amount3'] = sanitize_text_field($_POST['amount3']);
                $options['index']['amount4'] = sanitize_text_field($_POST['amount4']);
                break;
            case 'footer':
                $options['setting']['copy_right'] = sanitize_text_field($_POST['copy_right']);
                $options['setting']['extra_text'] = sanitize_text_field($_POST['extra_text']);
                $options['setting']['extra_btn'] = sanitize_text_field($_POST['extra_btn']);
                $options['setting']['extra_link'] = sanitize_text_field($_POST['extra_link']);
                $options['setting']['info'] = wp_unslash($_POST['info']);
                $options['setting']['instagram'] = sanitize_text_field($_POST['instagram']);
                $options['setting']['telegram'] = sanitize_text_field($_POST['telegram']);
                $options['setting']['whatsapp'] = sanitize_text_field($_POST['whatsapp']);
                break;
        }
    }
    update_option('data_options_2', $options);
    include get_template_directory() . '/admin/admin-tpl-2.php';
}