<?php
$loader = require '../vendor/autoload.php';

$loader->addPsr4("Mystore\\", __DIR__ . '/../src/');

$app = new \Msoroka\Framework\Application(include(__DIR__ . '/../config/config.php'));
$app->run();

function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

