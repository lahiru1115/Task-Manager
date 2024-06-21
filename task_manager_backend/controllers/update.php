<?php

include '../models/taskModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    try {
        $taskModel = new TaskModel($pdo);
        $taskModel->updateTask($id, $username, $title, $description, $date);
        echo json_encode(["message" => "Task updated successfully."]);
    } catch (Exception $e) {
        echo json_encode(["error" => "Failed to update task. Please try again."]);
    }
}
