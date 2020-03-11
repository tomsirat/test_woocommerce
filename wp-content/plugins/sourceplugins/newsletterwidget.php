<?php
class Zero_Newsletter_Widget extends WP_Widget
{
    
    public function __construct()
    {
        parent::__construct('zero_newsletter', 'Newsletter', array('description' => 'Un formulaire d\'inscription à la newsletter.'));
        add_action('wp_loaded', array($this, 'save_email'));
    }
    
    
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];
        ?>
        <form action="" method="post">
            <p>
                <label for="zero_newsletter_email">Votre email :</label>
                <input id="zero_newsletter_email" name="zero_newsletter_email" type="email"/>
            </p>
            <input type="submit"/>
        </form>
        <?php
        echo $args['after_widget'];
    }
   
    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo  $title; ?>" />
        </p>
        <?php
    }

    public function save_email()
    {
        if (isset($_POST['zero_newsletter_email']) && !empty($_POST['zero_newsletter_email'])) {
            global $wpdb;
            $email = $_POST['zero_newsletter_email'];
            $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}zero_newsletter_email WHERE email = '$email'");
            if (is_null($row)) {
                $wpdb->insert("{$wpdb->prefix}zero_newsletter_email", array('email' => $email));
            }
        }
    }

}
