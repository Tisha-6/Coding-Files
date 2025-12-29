<?php
session_start();
include("../Support_ticket_system/config/db.php");

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo "Invalid email or password";
    exit;
}

if (!password_verify($password, $user['password'])) {
    echo "Invalid email or password";
    exit;
}

// ✅ SUCCESS
$_SESSION['user_id'] = $user['id'];
$_SESSION['role'] = $user['role'];

header("Location: " . ($user['role'] === 'admin'
    ? "../admin/dashboard.php"
    : "../user/my_tickets.php"));
exit;

