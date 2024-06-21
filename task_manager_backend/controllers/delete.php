<?php

include '../models/taskModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    try {
        $taskModel = new TaskModel($pdo);
        $taskModel->deleteTask($id);
        echo json_encode(["message" => "Task deleted successfully."]);
    } catch (Exception $e) {
        echo json_encode(["error" => "Failed to delete task. Please try again."]);
    }
}
