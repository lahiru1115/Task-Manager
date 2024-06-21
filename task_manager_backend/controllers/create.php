<?php

include '../models/taskModel.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_POST['username']) || !isset($_POST['title']) || !isset($_POST['description']) || !isset($_POST['date'])) {
            throw new Exception('Failed to add task. Please try again.');
            exit;
        }

        if (empty($_POST['username']) || empty($_POST['title']) || empty($_POST['description']) || empty($_POST['date'])) {
            throw new Exception('Please provide all required fields.');
            exit;
        }

        $username = $_POST['username'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        $taskModel = new TaskModel($pdo);
        $taskModel->createTask($username, $title, $description, $date);

        $response = [
            'status' => 'success',
            'message' => 'Task added successfully.'
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
        'message' => 'Failed to add task. Please try again.'
    ];
} finally {
    header('Content-type: application/json');
    echo json_encode($response);
}
