<?php


require 'vendor/autoload.php';


use musicCatalogue\Router;

//echo 'Index working.<br> Type /home, /categories, /results, /tracks, /about.php, /contact to navigate.';

$req = [
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI']
];

//var_dump($req);


$router = new Router();
$response = $router->getHandled($req);