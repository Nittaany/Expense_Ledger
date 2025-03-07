<?php

$dsn = 'mysql:host=127.0.0.1;dbname=expenseman;charset=utf8mb4'; 
$user = 'root';
$pass = 'new@password';

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connection Error! " . $e->getMessage());
}

?>
