<?php
$host = 'localhost';
$db = 'pro_models';
$user = 'root';
$pass = '';                    // leave empty for XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>