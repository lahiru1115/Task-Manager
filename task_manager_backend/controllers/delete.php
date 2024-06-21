<?php

include '../models/taskModel.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_POST['id'])) {
            throw new Exception('Failed to delete task. Please try again.');
            exit;
        }

        $id = $_POST['id'];

        $taskModel = new TaskModel($pdo);
        $taskModel->deleteTask($id);

        $response = [
            'status' => 'success',
            'message' => 'Task deleted successfully.'
        ];

    } else {
        throw new Exception('Invalid request method. Please try again.');
    }
} catch (Exception $e) {
    $response = [
        'status' => 'error',
        'message' => $e->getMessage()
    ];
} catch (PDOException $e) {
    $response = [
        'status' => 'error',
        'message' => 'Failed to delete task. Please try again.'
    ];
} finally {
    header('Content-type: application/json');
    echo json_encode($response);
}
