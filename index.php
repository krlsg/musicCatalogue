<?php

//v1
require 'vendor/autoload.php';

use musicCatalogue\Router;

$req = [
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
    isset($_GET['track_id']) ? $_GET['track_id']: null,
    isset($_POST['track_id']) ? $_POST['track_id']: null,
    isset($_POST['name']) ? $_POST['name']: null,
    isset($_POST['surname']) ? $_POST['surname']: null,
    isset($_POST['email']) ? $_POST['email']: null,
    isset($_POST['phone']) ? $_POST['phone']: null,
    isset($_POST['country']) ? $_POST['country']: null,
    isset($_POST['message']) ? $_POST['message']: null,
];

var_dump($req);


$router = new Router();
$response = $router->getHandled($req);