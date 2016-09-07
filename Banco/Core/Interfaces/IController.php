<?php

namespace Core\Interfaces;

interface IController
{
    public function index($request, $response, $args);
}