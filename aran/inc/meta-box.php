<?php
// display user meta box
add_action('show_user_profile', 'user_profile_fields');
add_action('edit_user_profile', 'user_profile_fields');
$user = get_current_user();
function user_profile_fields($user)
{
    ?>
    <table class="form-table">
        <tr>
            <th><label for="show_member_1">نام و نام خانوادگی در زبان دوم</label></th>
            <td>
                <input id="member_name" name="member_name" type="text" class="input-setting input_rtl"
                       style="width: 50%; height: 30px"
                       value="<?php echo get_user_meta($user->ID, 'Us_name', true); ?>" >
            </td>
        </tr>
        <tr>
            <th><label for="show_member_1">نمایش بعنوان اعضای تیم در صفحه ی اول</label></th>
            <td>
                <input id="show_member_1" name="show_member_1" type="checkbox"
                <?php checked(1, get_user_meta($user->ID, 'show_member_1', true)); ?>">
            </td>
        </tr>
        <tr>
            <th><label for="show_member_team">نمایش بعنوان اعضای تیم در صفحه ی تیم</label></th>
            <td>
                <input id="show_member_team" name="show_member_team" type="checkbox"
                <?php checked(1, get_user_meta($user->ID, 'show_member_team', true)); ?>">
            </td>
        </tr>
    </table>
<?php }
add_action('personal_options_update', 'save_user_profile_fields');
add_action('edit_user_profile_update', 'save_user_profile_fields');
function save_user_profile_fields($user_id)
{
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    } else {
        if (isset($_POST['show_member_1']) && isset($_POST['show_member_team']) && isset($_POST['member_name'])) {
            update_user_meta($user_id, 'show_member_1', 1);
            update_user_meta($user_id, 'show_member_team', 1);
            update_user_meta($user_id, 'Us_name', $_POST['member_name']);
        } elseif (!isset($_POST['show_member_1']) && isset($_POST['show_member_team']) && isset($_POST['member_name'])){
            update_user_meta($user_id, 'show_member_1', 0);
            update_user_meta($user_id, 'show_member_team', 1);
            update_user_meta($user_id, 'Us_name', $_POST['member_name']);
        } elseif (isset($_POST['show_member_1']) && !isset($_POST['show_member_team']) && isset($_POST['member_name'])){
            update_user_meta($user_id, 'show_member_1', 1);
            update_user_meta($user_id, 'show_member_team', 0);
            update_user_meta($user_id, 'Us_name', $_POST['member_name']);
        } else {
            update_user_meta($user_id, 'show_member_1', 0);
            update_user_meta($user_id, 'show_member_team', 0);
            delete_user_meta($user_id, 'Us_name', $_POST['member_name']);
        }
    }
}
// slider meta box
add_action('add_meta_boxes', 'service_meta_box');
add_action('save_post', 'service_meta_save');
function service_meta_box()
{
    add_meta_box('service_box', 'آیکون هر سرویس(فقط نام class را بنویسید مانند : far fa-cloud )', 'service_meta_box_content', 'services');
}
function service_meta_box_content($post)
{
    $post_id = get_post_meta($post->ID, 'service_icon', true);
    ?>
    <input type="text" name="service_input" style="width: 100%; height: 30px" value="<?php echo $post_id; ?>">
    <?php
}
function service_meta_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['service_input'])) {
        $comment = sanitize_text_field($_POST['service_input']);
        update_post_meta($post_id, 'service_icon', $comment);
    }
}
//checkbox meta services
add_action('add_meta_boxes', 'display_meta_box');
add_action('save_post', 'display_meta_save');
function display_meta_box()
{
    add_meta_box('display_box', 'نمایش سرویس در صفحه اول', 'display_meta_box_content', 'services');
}
function display_meta_box_content($post)
{
    ?>
    <?php $post_id = get_post_meta($post->ID, 'display_service', true);?>
    <input id="display_service" name="display_service" type="checkbox"
    <?php checked(1, get_post_meta($post->ID, 'display_service', true)); ?>">
    <?php
}
function display_meta_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['display_service'])) {
        update_post_meta($post_id, 'display_service', 1);
    }
    else{
        update_post_meta($post_id, 'display_service', 0);
    }
}
// single portfolio meta box
add_action('add_meta_boxes', 'portfolio_meta_box');
add_action('save_post', 'portfolio_meta_save');
function portfolio_meta_box()
{
    add_meta_box('portfolio_box', 'اطلاعات سایدبار', 'portfolio_meta_box_content', 'portfolio');
}
function portfolio_meta_box_content($post)
{
    $post_id = get_post_meta($post->ID, 'portfolio_info', true);
    $content = isset($_POST['portfolio_input']) ? $_POST['portfolio_input'] : $post_id;
    wp_editor($content, 'post_meta_box', array('textarea_name'=>'portfolio_input'));
}
function portfolio_meta_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['portfolio_input'])) {
        update_post_meta($post_id, 'portfolio_info', $_POST['portfolio_input']);
    }
}
// pages meta box
add_action('add_meta_boxes', 'page_meta_box');
add_action('save_post', 'page_meta_save');
function page_meta_box()
{
    $screens = array( 'post', 'page', 'services', 'portfolio');
    add_meta_box('page_box', 'لینک عکس در ابتدای صفحه', 'page_meta_box_content', $screens);
}
function page_meta_box_content($post)
{
    $post_id = get_post_meta($post->ID, 'page_img', true);
    ?>
    <input type="text" name="page_input" style="width: 100%; height: 30px" value="<?php echo $post_id; ?>">
    <?php
}
function page_meta_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['page_input'])) {
        $comment = sanitize_text_field($_POST['page_input']);
        update_post_meta($post_id, 'page_img', $comment);
    }
}
// pages meta box
add_action('add_meta_boxes', 'page_link_meta_box');
add_action('save_post', 'page_link_meta_save');
function page_link_meta_box()
{
    $screens = array( 'post', 'page', 'services', 'portfolio' );
    add_meta_box('page_link_box', 'لینک ویدیو در ابتدای صفحه', 'page_link_meta_box_content', $screens);
}
function page_link_meta_box_content($post)
{
    $post_id = get_post_meta($post->ID, 'page_link', true);
    ?>
    <input type="text" name="page_link_input" style="width: 100%; height: 30px" value="<?php echo $post_id; ?>">
    <?php
}
function page_link_meta_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['page_link_input'])) {
        $comment = sanitize_text_field($_POST['page_link_input']);
        update_post_meta($post_id, 'page_link', $comment);
    }
}