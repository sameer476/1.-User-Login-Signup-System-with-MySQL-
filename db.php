<?php
$conn = new mysqli("localhost", "root", "", "auth_system");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
