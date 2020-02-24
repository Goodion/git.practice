<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use \Symfony\Component\Console\Application as Application,
    \App\SayHello as SayHello,
    \App\Repeater as Repeater,
    \App\Profiler as Profiler;

$app = new Application('git practice');

$app->add(new SayHello());
$app->add(new Repeater());
$app->add(new Profiler());

$app->run();
