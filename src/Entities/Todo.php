<?php

namespace App\Entities;

class Todo
{
    private int $id;
    private string $tasktitle;
    private string $taskbody;
    private string $added;
    private string $completeby;
    private int $completed;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTasktitle(): string
    {
        return $this->tasktitle;
    }

    /**
     * @param string $tasktitle
     */
    public function setTasktitle(string $tasktitle): void
    {
        $this->tasktitle = $tasktitle;
    }

    /**
     * @return string
     */
    public function getTaskbody(): string
    {
        return $this->taskbody;
    }

    /**
     * @param string $taskbody
     */
    public function setTaskbody(string $taskbody): void
    {
        $this->taskbody = $taskbody;
    }

    /**
     * @return string
     */
    public function getAdded(): string
    {
        return $this->added;
    }

    /**
     * @param string $added
     */
    public function setAdded(string $added): void
    {
        $this->added = $added;
    }

    /**
     * @return string
     */
    public function getCompleteby(): string
    {
        return $this->completeby;
    }

    /**
     * @param string $completeby
     */
    public function setCompleteby(string $completeby): void
    {
        $this->completeby = $completeby;
    }

    /**
     * @return int
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed): void
    {
        $this->completed = $completed;
    }



}