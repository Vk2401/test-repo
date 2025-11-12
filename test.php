<?php
/*
Plugin Name: Test Repo
Description: GitHub-based plugin update example with admin menu
Version: 1.0.2
Author: You
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// 🔹 Load the update checker
require_once plugin_dir_path(__FILE__) . 'updater/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

// 🔹 Initialize update checker
$updateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/Vk2401/test-repo/',
    __FILE__,
    'test-repo'
);
$updateChecker->setBranch('main');


// 🔹 Add custom admin menu
add_action('admin_menu', function() {
    add_menu_page(
        'Test Repo',                // Page title
        'Test Repo',                // Menu title in sidebar
        'manage_options',           // Capability (who can access)
        'test-repo-dashboard',      // Menu slug
        'test_repo_dashboard_page', // Callback function
        'dashicons-yes-alt',        // Icon (Dashicons)
        90                          // Position
    );
});

// 🔹 Callback function to display page content
function test_repo_dashboard_page() {
    ?>
    <div class="wrap">
        <h1>Test Successful 🎉</h1>
        <p>Your plugin is installed and running correctly.</p>
    </div>
    <?php
}
