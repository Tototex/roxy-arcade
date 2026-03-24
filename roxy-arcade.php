<?php
/**
 * Plugin Name: Roxy Arcade
 * Description: Modular arcade with multiple games, per-game + combined leaderboards, guest play, login-required score saving, and monthly prize via WooCommerce Subscriptions.
 * Version: 0.4.2
 */

if (!defined('ABSPATH')) exit;

define('ROXY_ARCADE_VERSION', '0.4.2');

require_once __DIR__ . '/includes/class-roxy-arcade-updater.php';

\RoxyArcade\Updater::init([
  'plugin_file' => plugin_basename(__FILE__),
  'version'     => ROXY_ARCADE_VERSION,
  'github_repo' => 'Tototex/roxy-arcade',
  'slug'        => 'roxy-arcade',
]);
