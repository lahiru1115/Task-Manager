<?php

include '../models/taskModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    try {
        $taskModel = new TaskModel($pdo);
        $taskModel->createTask($username, $title, $description, $date);
        echo json_encode(["message" => "Task added successfully."]);
    } catch (Exception $e) {
        echo json_encode(["error" => "Failed to add task. Please try again."]);
    }
}
