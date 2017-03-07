<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=jh439';
    $username = 'jh439';
    $password = 'i94WqvXJ';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
