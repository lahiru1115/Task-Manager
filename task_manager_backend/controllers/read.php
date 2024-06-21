<?php

include '../models/taskModel.php';

$taskModel = new TaskModel($pdo);

try {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $task = $taskModel->getTaskById($id);
        echo json_encode($task);
    } else {
        $tasks = $taskModel->getAllTasks();
        include '../views/taskView.php';
    }
} catch (Exception $e) {
    echo json_encode(["error" => "Failed to fetch tasks. Please try again."]);
}
