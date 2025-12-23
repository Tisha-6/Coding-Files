<?php
$conn = mysqli_connect("localhost", "root", "", "support_system");

if (!$conn) {
    die("Database connection failed");
}
session_start();
?>
