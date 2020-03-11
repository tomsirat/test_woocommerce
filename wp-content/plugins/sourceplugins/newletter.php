<?php


include_once plugin_dir_path( __FILE__ ).'/newsletterwidget.php';
    
class Zero_Newsletter
{
    public function __construct()
    {
        add_action('widgets_init', function(){register_widget('Zero_Newsletter_Widget');});
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_admin_menu()
    {
        add_submenu_page('zero', 'Newsletter', 'Newsletter', 'manage_options', 'zero_newsletter', array($this, 'menu_html'));
    }

    public static function install()
    {
    global $wpdb;
    $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zero_newsletter_email (id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL);");
    }

    public static function uninstall()
    {
    global $wpdb;
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}zero_newsletter_email;");
    }

    public function register_settings()
    {
    register_setting('zero_newsletter_settings', 'zero_newsletter_sender');
    }

    public function menu_html()
    {
        echo '<h1>'.get_admin_page_title().'</h1>';
        ?>
        <form method="post" action="options.php">
        <?php settings_fields('zero_newsletter_settings') ?>
            <label>Expéditeur de la newsletter</label>
            <input type="text" name="zero_newsletter_sender" value="<?php echo get_option('zero_newsletter_sender')?>"/>
            <?php submit_button(); ?>
        </form>
        <?php
    }
    
    
    
}