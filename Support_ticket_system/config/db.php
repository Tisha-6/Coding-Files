<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "support_system");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>


