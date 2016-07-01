<?php

/** @var FastRoute\RouteCollector  $router */

$router->addRoute('GET', '/', 'default@index');

$router->addRoute('GET', '/auth/{action}', 'default@auth');