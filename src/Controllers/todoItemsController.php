<?php

namespace App\Controllers;

use App\Models\TodoItemsModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class todoItemsController
{
    private PhpRenderer $renderer;
    private TodoItemsModel $todoItemsModel;

    public function __construct(PhpRenderer $phpRenderer, TodoItemsModel $todoItemsModel)
    {
        $this->renderer = $phpRenderer;
        $this->todoItemsModel = $todoItemsModel;
    }

    function __invoke(RequestInterface $request,
                        ResponseInterface $response,
                        array $args): ResponseInterface
    {
//        $data = $this->todoItemsModel->getTodoItems();
//        $response = $this->renderer->render($response,'todoItems.php', ['todoItems' => $data]);
        $response->getBody()->write('Hello from a todoItemsController');
        return $response;
    }
}