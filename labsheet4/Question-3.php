<?php
$servername = "localhost";
$username = "root";
$password = "@uma123";

// MySQL se connection
$conn = new mysqli($servername, $username, $password);

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Database create
$sql = "CREATE DATABASE college_db";

if ($conn->query($sql) === TRUE) {
    echo "Database college_db created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>