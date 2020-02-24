<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use \Symfony\Component\Console\Application as Application,
    \App\SayHello as SayHello;

$app = new Application('git practice');
$app->add(new SayHello());

$app->run();