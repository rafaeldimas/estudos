<?php

namespace App\Controllers;

use App\Controllers\Controller as Controller;
use App\Models\HomeModel as HomeModel;

class HomeController extends Controller
{
    private $model;
    private $view;

    public function index()
    {
        $this->setModel(new HomeModel(CONFIG_DB));
    }

    public function getModel()
    {
        return $this->model;
    }

    private function setModel($model)
    {
        $this->model = $model;
    }

    private function getView()
    {
        return $this->view;
    }

    private function setView($view)
    {
        $this->view = $view;
    }

}