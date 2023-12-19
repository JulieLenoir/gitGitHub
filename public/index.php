<?php
// Toujours penser a include le controller. 

include '../Core/Routeur.php';
include '../Controllers/Controller.php';
include '../Controllers/HomeController.php';



$route = new Routeur();

$route->routes();
