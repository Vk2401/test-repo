<?php
/**
 * Plugin Name: My GitHub Update Plugin
 * Plugin URI: https://github.com/Vk2401/test-repo.git
 * Description: Test plugin that auto-updates from GitHub releases.
 * Version: 1.0.0
 * Author: Your Name
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include the update checker library
require_once plugin_dir_path(__FILE__) . 'updater/load-v5p6.php';


$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/Vk2401/test-repo/',
    __FILE__,
    'test-repo'
);

// Optional: specify the branch to check for updates
$updateChecker->setBranch('main');

