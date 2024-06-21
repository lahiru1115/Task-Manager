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
        try {
            $sql = "INSERT INTO tasks (username, title, description, date) VALUES (?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$username, $title, $description, $date]);
        } catch (PDOException $e) {
            throw new Exception('Failed to add task. Please try again.');
        }
    }

    public function getAllTasks()
    {
        try {
            $sql = "SELECT * FROM tasks";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Failed to get tasks. Please try again.');
        }
    }

    public function getTaskById($id)
    {
        try {
            $sql = "SELECT * FROM tasks WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Failed to fetch task details. Please try again.');
        }
    }

    public function updateTask($id, $username, $title, $description, $date)
    {
        try {
            $sql = "UPDATE tasks SET username = ?, title = ?, description = ?, date = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$username, $title, $description, $date, $id]);
        } catch (PDOException $e) {
            throw new Exception('Failed to update task. Please try again.');
        }
    }

    public function deleteTask($id)
    {
        try {
            $sql = "DELETE FROM tasks WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            throw new Exception('Failed to delete task. Please try again.');
        }
    }
}
