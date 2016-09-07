<?php

    require_once "vendor/autoload.php";
    require_once "config/config.php";

    $app = new Slim\App([
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    $container = $app->getContainer();

    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig(BASE_DIR.'Public/Views', [
            'cache' => false
        ]);
        $view->addExtension(new \Slim\Views\TwigExtension(
            $container['router'],
            $container['request']->getUri()
        ));

        return $view;
    };

    $container['HomeController'] = function($container){
        return new App\Controllers\HomeController($container);
    };

    $app->get('/', 'HomeController:index');

    $app->run();