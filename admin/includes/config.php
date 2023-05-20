<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'your_db_username');
define('DB_PASSWORD', 'your_db_password');
define('DB_NAME', 'your_db_name');

// Site Configuration
define('SITE_URL', 'http://localhost/php-project'); // Replace with your site URL
define('SITE_NAME', 'Your Site Name');

// Admin Configuration
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'admin');

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();
