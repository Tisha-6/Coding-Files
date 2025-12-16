<?php
include("../config/db.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $department = $_POST['department'];

    mysqli_query($conn, "INSERT INTO staff (name, department) VALUES ('$name','$department')");
    echo "Staff added successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Staff</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Add Staff</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Staff Name" required>
    <input type="text" name="department" placeholder="Department" required>
    <button type="submit" name="submit">Add Staff</button>
</form>

<a href="dashboard.php">Back</a>

</body>
</html>
