<?php

namespace App\Controllers;

use App\Models\TodoItemsModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class addTodoController
{
    private TodoItemsModel $todoItemsModel;

    public function __construct(TodoItemsModel $todoItemsModel)
    {
        $this->todoItemsModel = $todoItemsModel;
    }

    function __invoke(RequestInterface $request,
                      ResponseInterface $response,
                      array $args): ResponseInterface
    {
        $newItem = $request->getParsedBody();
        $timeAdded = date('Y-m-d H:i:s');
        $data = $this->todoItemsModel->addTodoItem($newItem, $timeAdded);

//        $response->getBody()->write('Hello from a todoItemsController');
        return $response->withRedirect('/todo', 302);
    }
}