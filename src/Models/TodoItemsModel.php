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

    public function getTodoItems($completed): array
    {
        $sql = 'SELECT `id`, `tasktitle`, `taskbody`, `added`, `completeby`, `completed`
         FROM `todoitems`';

        $params = [];

        if ($completed !== null) {
            $sql .= ' WHERE `completed` = :completed';
            $params['completed'] = $completed;
        }

        $sql .= ';';

        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Todo::class);
        $query->execute($params);
        return $query->fetchAll();
    }

    public function addTodoItem($newItem, string $timeAdded)
    {
        $sql = 'INSERT INTO `todoitems` (`tasktitle`, `taskbody`, `added`, `completeby`)
            VALUES (:tasktitle, :taskbody, :added, :completeby);';
        $query = $this->db->prepare($sql);
        $params = [
            'tasktitle' => $newItem['tasktitle'],
            'taskbody' => $newItem['taskbody'],
            'added' => $timeAdded,
            'completeby' => $newItem['completeby']
        ];
        $query->execute($params);
    }
}