<?php

require_once __DIR__. "/../vendor/autoload.php";

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => 'MainController'
    ],
    'route_home');

    $router->map(
        'GET',
        '/board/[a:game]',
        [
            'method' => 'board',
            'controller' => 'MainController'
        ],
        'route_board');

$match = $router->match();

$target = $match["target"];

$methodName = $target['method'];
$controllerName = "\\Games\\Controllers\\" . $target['controller'];

$controller = new $controllerName();
$controller->$methodName($match["params"]);