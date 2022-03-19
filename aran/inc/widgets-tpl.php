<?php
// slidebar_post
class ws_slidebar_post extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'My_Widget',  // Base ID
            'پست اخیر'   // Name
        );
    }
    public $args = array(
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div>',
        'after_widget' => '</div></div>'
    );
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        $widget_post = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'post'
        ));
        if ($widget_post->have_posts()) {
            echo '<ul class="blog-post__posts">';
            while ($widget_post->have_posts()): $widget_post->the_post();
                echo '<li>   
                         <a class="blog-post__recent" href="' . get_the_permalink($widget_post->post->ID) . '">                         
                            ' . get_the_post_thumbnail($widget_post->post->ID) . '
                            <div>
                                <h5>' . get_the_title($widget_post->post->ID) . '</h5>
                                <span>' . get_the_date('Y/m/d') . '</span>
                            </div>
                         </a>
                        </li>';
            endwhile;
            echo '</ul>';
        }
        wp_reset_postdata();
        echo $args['after_widget'];
    }
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('New Title', 'zxomarket');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('عنوان:', 'zxomarket'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
// slidebar_portfolio
class ws_slidebar_porfolio extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'My_portfolio_Widget',  // Base ID
            'نمونه کار های اخیر'   // Name
        );
    }
    public $args = array(
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div>',
        'after_widget' => '</div></div>'
    );
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        $widget_post = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'portfolio'
        ));
        if ($widget_post->have_posts()) {
            echo '<ul class="blog-post__posts">';
            while ($widget_post->have_posts()): $widget_post->the_post();
                echo '<li>   
                         <a class="blog-post__recent" href="' . get_the_permalink($widget_post->post->ID) . '">                         
                            ' . get_the_post_thumbnail($widget_post->post->ID) . '
                            <div>
                                <h5>' . get_the_title($widget_post->post->ID) . '</h5>
                                <span>' . get_the_date('Y/m/d') . '</span>
                            </div>
                         </a>
                        </li>';
            endwhile;
            echo '</ul>';
        }
        wp_reset_postdata();
        echo $args['after_widget'];
    }
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('New Title', 'zxomarket');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('عنوان:', 'zxomarket'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
// brand_Widget
class ws_brand_slider extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'ws_brand_slider', // Base ID
            'ابزارک برند' // Name
        );
    }
    public function widget($args, $instance)
    {
        ?>
        <div class="logo">
            <a href="<?php echo $instance['link'] ?>">
                <img src="<?php echo $instance['img'] ?>" alt="<?php echo $instance['title'] ?>" class="lazy" width="100px" height="100px">
            </a>
        </div>
        <?php
    }
    public function form($instance)
    {
        $link = !empty($instance['link']) ? $instance['link'] : '';
        $img = !empty($instance['img']) ? $instance['img'] : '';
        $title = !empty($instance['title']) ? $instance['title'] : '';
        ?>
        <label for="<?php echo esc_attr($this->get_field_id('link')); ?>">لینک</label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>"
               name="<?php echo esc_attr($this->get_field_name('link')); ?>" type="text"
               value="<?php echo esc_attr($link); ?>">
        <label for="<?php echo esc_attr($this->get_field_id('img')); ?>">url تصویر</label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('img')); ?>"
               name="<?php echo esc_attr($this->get_field_name('img')); ?>" type="text"
               value="<?php echo esc_attr($img); ?>">
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">عنوان تصویر</label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
               name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
               value="<?php echo esc_attr($title); ?>">
        <?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['link'] = (!empty($new_instance['link'])) ? strip_tags($new_instance['link']) : '';
        $instance['img'] = (!empty($new_instance['img'])) ? strip_tags($new_instance['img']) : '';
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
// comment_Widget
class ws_comment_slider extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'ws_comment_slider', // Base ID
            'ابزارک کامنت ها' // Name
        );
    }
    public function widget($args, $instance)
    {
        ?>
        <article>
            <p><?php echo $instance['cm'] ?></p>
            <h6><?php echo $instance['name'] ?></h6>
            <p><?php echo $instance['role'] ?></p>
        </article>
        <?php
    }
    public function form($instance)
    {
        $cm = !empty($instance['cm']) ? $instance['cm'] : '';
        $name = !empty($instance['name']) ? $instance['name'] : '';
        $role = !empty($instance['role']) ? $instance['role'] : '';
        ?>
        <label for="<?php echo esc_attr($this->get_field_id('cm')); ?>">متن کامنت</label>
        <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('cm')); ?>"
               name="<?php echo esc_attr($this->get_field_name('cm')); ?>" type="text"><?php echo esc_attr($cm); ?></textarea>
        <label for="<?php echo esc_attr($this->get_field_id('name')); ?>">نویسنده ی کامنت</label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('name')); ?>"
               name="<?php echo esc_attr($this->get_field_name('name')); ?>" type="text"
               value="<?php echo esc_attr($name); ?>">
        <label for="<?php echo esc_attr($this->get_field_id('role')); ?>">اطلاعات مرتبط با نویسنده</label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('role')); ?>"
               name="<?php echo esc_attr($this->get_field_name('role')); ?>" type="text"
               value="<?php echo esc_attr($role); ?>">
        <?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['cm'] = (!empty($new_instance['cm'])) ? strip_tags($new_instance['cm']) : '';
        $instance['name'] = (!empty($new_instance['name'])) ? strip_tags($new_instance['name']) : '';
        $instance['role'] = (!empty($new_instance['role'])) ? strip_tags($new_instance['role']) : '';
        return $instance;
    }
}

//register
add_action('widgets_init', 'widget_func');
function widget_func()
{
    register_widget('ws_slidebar_post');
    register_widget('ws_slidebar_porfolio');
    register_widget('ws_brand_slider');
    register_widget('ws_comment_slider');
}
