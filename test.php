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
require 'plugin-update-checker/plugin-update-checker.php';

$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/Vk2401/test-repo.git/',
    __FILE__,
    'my-github-plugin'
);

// Optional: specify branch if not using "main"
$updateChecker->setBranch('main');
