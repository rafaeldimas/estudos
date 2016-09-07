<?php

namespace App\Controllers;

use App\Controllers\Controller as Controller;
use App\Models\HomeModel as HomeModel;
use Core\Interfaces\IController as IController;
use Core\View as View;

class HomeController extends Controller implements IController
{
    private $model;
    private $view;

    public function index($request, $response, $args)
    {
        $args = [
            'assets' => [
                'css' => [
                    'reset.css',
                    'home.css'
                ],
                'js' => [
                    'home.js'
                ]
            ],
            'title' => 'Pagina Inicial'
        ];

        $this->setModel(new HomeModel(CONFIG_DB));

        $this->setView($request, $response, $args, $this->container);
    }

    private function getModel()
    {
        return $this->model;
    }

    private function setModel($model)
    {
        $this->model = $model;
    }

    private function setView($request, $response, $args, $container)
    {
        $this->view = View::make($request, $response, $args, $container);
    }

}