<?php

require 'vendor/autoload.php';

use musicCatalogue\Controller\Router;

$router = new Router();
$response = $router->getHandled();