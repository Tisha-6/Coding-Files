<?php
session_start();
include("../config/db.php");

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$query = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] === 'admin') {
        header("Location: ../admin/dashboard.php");
    } else {
        header("Location: ../user/my_tickets.php");
    }
    exit();

} else {
    echo "Invalid email or password";
}
