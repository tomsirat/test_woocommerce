<?php

// Plugin Name: sourceplugins

class Zero_Plugin

{
    
    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_admin_menu'));

        include_once plugin_dir_path( __FILE__ ).'/pagetitle.php';
        new One_Page_Title();

        include_once plugin_dir_path( __FILE__ ).'/newletter.php';
        new Zero_Newsletter();

        register_activation_hook(__FILE__, array('Zero_Newsletter', 'install'));
        register_uninstall_hook(__FILE__, array('Zero_Newsletter', 'uninstall'));
    }

    public function menu_html()
    {
    echo '<h1>'.get_admin_page_title().'</h1>';
    echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
    }

    public function add_admin_menu()
    {
        add_menu_page('Zero plugin', 'Zero plugin', 'manage_options', 'zero', array($this, 'menu_html'));
        add_submenu_page('zero', 'Apercu', 'Apercu', 'manage_options', 'zero', array($this, 'menu_html'));
    }

}

new Zero_Plugin();

