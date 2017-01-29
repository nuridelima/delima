<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Creating widget for Google Map SRM
 */
class srmgmap_widget extends WP_Widget
{

    public $base_id = 'srmgmap_widget'; //widget id
    public $widget_name = 'Google Map SRM'; //widget name
    public $widget_options = array(
        'description' => 'Google Map SRM' //widget description
    );

    public function __construct()
    {
        parent::__construct($this->base_id, $this->widget_name, $this->widget_options);
    }

    // Map display in front
    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);
        echo $before_widget. $before_title;
        echo do_shortcode($instance['srmgmap_shortcode']);
        echo $after_widget;
    }

    /**
     * Google Map Widget
     * @return String $instance
     */
    public function form($instance)
    {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('srmgmap_shortcode'); ?>"> Enter Google Map Shortcode:</label>
        </p>
        <p>
            <input id="<?php echo $this->get_field_id('srmgmap_shortcode'); ?>"
                   name="<?php echo $this->get_field_name('srmgmap_shortcode'); ?>"
                   value='<?php echo esc_attr(esc_html(isset($instance['srmgmap_shortcode'])?$instance['srmgmap_shortcode']:'')); ?>' type="text" class="widefat">
        </p>

        <?php
    }

}

add_action('widgets_init', create_function('', 'return register_widget("srmgmap_widget");'));
