<?php

use app\controllers\ProductController;
use app\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();


$router->get('/', [new ProductController(), 'index']);
$router->get('/products', [new ProductController(), 'index']);
$router->get('/products/create', [new ProductController(), 'create']);
$router->post('/products/create', [ new ProductController(), 'create']);
$router->get('/products/update', [new ProductController(), 'update']);
$router->post('/products/update', [new ProductController(), 'update']);
$router->post('/products/delete', [new ProductController(), 'delete']);


$router->resolve();
