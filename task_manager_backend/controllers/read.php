<?php

include '../models/taskModel.php';

$taskModel = new TaskModel($pdo);

try {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $task = $taskModel->getTaskById($id);
            header('Content-type: application/json');
            echo json_encode($task);
        } else {
            $tasks = $taskModel->getAllTasks();
            include '../views/taskView.php';
        }
    } else {
        throw new Exception('Invalid request method. Please try again.');
    }
} catch (Exception $e) {
    $response = [
        'status' => 'error',
        'message' => $e->getMessage()
    ];
    header('Content-type: application/json');
    echo json_encode($response);
} catch (PDOException $e) {
    $response = [
        'status' => 'error',
        'message' => 'Failed to get tasks. Please try again.'
    ];
    header('Content-type: application/json');
    echo json_encode($response);
}