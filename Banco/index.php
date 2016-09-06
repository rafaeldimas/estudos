<?php

    require_once "vendor/autoload.php";
    require_once "config/config.php";

    $app = new Slim\App([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    $container = $app->getContainer();

    $container['HomeController'] = function($container){
        return new App\Controllers\HomeController($container);
    };

    $app->get('/', 'HomeController:index');

    $app->run();