<?php

namespace Core;

class View
{

    static public function make($request, $response, $args, $container)
    {
        return $container->view->render($response,'home.phtml', $args);
    }
}