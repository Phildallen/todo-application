<?php

namespace App\Models;

use App\Entities\Todo;
use PDO;

class TodoItemsModel
{
    private PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTodoItems(): array
    {
        $sql = 'SELECT `id`, `item`, `added`, `completed`
         FROM `todoitems`;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Todo::class);
        $query->execute();
        return $query->fetchAll();
    }
}