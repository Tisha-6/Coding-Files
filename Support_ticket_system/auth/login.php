<?php
include("../config/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($result);

if (!$user) {
    die("Email not found in database");
}

if ($password == $user['password']) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];

    echo "Login successful";
} else {
    die("Password is incorrect");
}
?>
