<?php
use Prim\Container;

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

$config = [
    'root' => $root,
    'app' => "{$root}app/"
];

// Composer autoloading
require "{$config['root']}vendor/autoload.php";

$config = (include("{$config['app']}config/config.php")) + $config;

$container = new Container($config);

$container->get('application');
