<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/AppController.php';
require_once __DIR__.'/../src/PostController.php';

$app = new Silex\Application();

// Register providers
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'dbname'   => 'db10',
        'user'     => 'root',
        'password' => 'usbw',
        'port'     => 3307,
    ),
));

$app->get('/', 'AppController::indexAction');
$app->get('/blog', 'PostController::indexAction');
$app->get('/blog/{id}', 'PostController::showAction');

$app->run();
