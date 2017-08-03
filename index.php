<?php

require 'vendor/autoload.php';

use musicCatalogue\Controller\Router;

$req = [
    'method' => $_SERVER['REQUEST_METHOD'],
    'uri' => $_SERVER['REQUEST_URI'],
    'search' => isset($_GET['search']) ? $_GET['search']: null,
    'track_id' =>  isset($_GET['track_id']) ? $_GET['track_id']: null,
    'name' => isset($_POST['name']) ? $_POST['name']: null,
    'surname' => isset($_POST['surname']) ? $_POST['surname']: null,
    'email' =>  isset($_POST['email']) ? $_POST['email']: null,
    'phone' =>  isset($_POST['phone']) ? $_POST['phone']: null,
    'country' =>  isset($_POST['country']) ? $_POST['country']: null,
    'message' => isset($_POST['message']) ? $_POST['message']: null,
    'author' => isset($_POST['author']) ? $_POST['author']: null,
    'body' => isset($_POST['body']) ? $_POST['body']: null,
    'comment' => isset($_POST['comment']) ? $_POST['comment']: null,
    'author' => isset($_POST['author']) ? $_POST['author']: null,
    'track_idCom' => isset($_POST['track_idCom']) ? $_POST['track_idCom']: null,
];

//var_dump($req);


$router = new Router();
$response = $router->getHandled($req);