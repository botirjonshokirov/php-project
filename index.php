<?php
// Include the necessary files and initialize the application
require_once 'config/config.php';
require_once 'vendor/autoload.php';

use App\Core\App;

// Create an instance of the application
$app = new App();

// Run the application
$app->run();
