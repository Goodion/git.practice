<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use \Symfony\Component\Console\Application as Application,
    \App\Profiler as Profiler;

$app = new Application('git practice');
$app->add(new Profiler());

$app->run();