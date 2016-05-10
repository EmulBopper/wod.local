<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces([
    'Wod\Models'      => $config->application->modelsDir,
    'Wod\Controllers' => $config->application->controllersDir,
    'Wod\Forms'       => $config->application->formsDir,
    'Wod'             => $config->application->libraryDir
]);

$loader->register();

// Use composer autoloader to load vendor classes
require_once __DIR__ . '\vendor\autoload.php';
