<?php
/**
 * @file
 * The index file used to load up a page. This is a thin wrapper to recieve
 * requests and do the response.
 */

// Import the composer autoloader used to autoload all the external libraries.
require_once __DIR__ . '/../vendor/autoload.php';

// @todo Include an autoloader for the code in src.

use Fortissimo\Runtime\WebRunner;
use Fortissimo\Registry;

// Retrieve the command from the GET variable ff. The URL is placed in here via
// htaccess URL Rewrite. If no url is found we fall back on the default command.
$cmd = filter_input(INPUT_GET, 'ff', FILTER_SANITIZE_STRING);
if (empty($cmd)) {
  $cmd = 'default';
}


$registry = new Registry('WebApp');
require_once __DIR__ . '/../config/config.php';

$runner = new WebRunner();
$runner->useRegistry($registry);
$runner->run($cmd);