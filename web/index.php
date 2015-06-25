<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/AppController.php';
require_once __DIR__.'/../src/PostController.php';

$app = new Silex\Application();

$app->get('/', 'AppController::indexAction');
$app->get('/blog', 'PostController::indexAction');
$app->get('/blog/{id}', 'PostController::showAction');

$app->run();
