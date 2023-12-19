<?php

class Routeur
{
    public function routes()
    {
        session_start();

        $controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'home';
        $controller = $controller . 'Controller';

        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        $controller = new $controller();
        $controller->$action();
    }
}
