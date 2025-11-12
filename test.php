<?php
/*
Plugin Name: Test Repo
Description: GitHub-based plugin update example
Version: 1.0.1
Author: You
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// Load the correct version loader
require_once plugin_dir_path(__FILE__) . 'updater/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
// Initialize update checker
$updateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/Vk2401/test-repo/',
    __FILE__,
    'test-repo'
);

// Optional: specify branch
$updateChecker->setBranch('main');
