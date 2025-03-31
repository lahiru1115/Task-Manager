<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'task-manager';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // error_log("Database connection error: " . $e->getMessage(), 0);
    // http_response_code(500);
    include '../views/dbError.php';
    exit();
}
?>
