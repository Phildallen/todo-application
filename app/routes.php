<?php
declare(strict_types=1);

use App\Controllers\doneItemsController;
use App\Controllers\todoItemsController;
use App\Controllers\formTodoController;
use App\Controllers\addTodoController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/todo', todoItemsController::class);
    $app->get('/newtodo',formTodoController::class);
    $app->post('/todo', addTodoController::class);
    $app->get('/done', doneItemsController::class);
};
