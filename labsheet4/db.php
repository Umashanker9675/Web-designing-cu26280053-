<?php
$host = "localhost";
$dbname = "college_db";
$username = "root";
$password = "@uma123";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>