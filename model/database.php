<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=sk2437';
    $username = 'sk2437';
    $password = 'headroom5';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
