<?php

// Routes
global $dispatcher;
$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $router) {
    require __DIR__ . '/../app/routes.php';
});

//
function render(&$response)
{
    if (is_array($response)) {
        echo json_encode($response);
    } else
        echo $response;
}

function error($code=500)
{
    $r = ['error' => $code];
    render($r);
    die();
}

// Dispatch URI
function dispatch()
{
    // Fetch method and URI from somewhere
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    // Strip query string (?foo=bar) and decode URI
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }

    // Strip .php
    if (false !== $pos = strpos($uri, '.php')) {
        $uri = substr($uri, $pos + 4);
    }

    // Dispatch
    global $dispatcher;
    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

    // Action
    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            error(404);
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            //$allowedMethods = $routeInfo[1];
            error(405);
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            $s = explode('@', $handler, 2);
            require_once __DIR__ . '/../app/controllers/' . $s[0] . '.php';
            $class = ucfirst($s[0] . 'Controller');
            $instance = new $class($vars);

            $response = $instance->call($s[1]);
            render($response);

            break;
    }
}