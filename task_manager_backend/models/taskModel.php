<?php

include '../config/dbConfig.php';

class TaskModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTask($username, $title, $description, $date)
    {
        $sql = "INSERT INTO tasks (username, title, description, date) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$username, $title, $description, $date]);
    }

    public function getAllTasks()
    {
        $sql = "SELECT * FROM tasks";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTaskById($id)
    {
        $sql = "SELECT * FROM tasks WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteTask($id)
    {
        $sql = "DELETE FROM tasks WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updateTask($id, $username, $title, $description, $date)
    {
        $sql = "UPDATE tasks SET username = ?, title = ?, description = ?, date = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$username, $title, $description, $date, $id]);
    }
}
