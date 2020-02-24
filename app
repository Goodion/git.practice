<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use \Symfony\Component\Console\Application as Application,
    \App\Repeater as Repeater;

$app = new Application('git practice');
$app->add(new Repeater());

$app->run();
