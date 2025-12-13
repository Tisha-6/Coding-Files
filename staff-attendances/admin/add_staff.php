<?php
include '../config/db.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $dept = $_POST['dept'];

    mysqli_query($conn, "INSERT INTO staff (name, department) VALUES ('$name','$dept')");
    echo "Staff Added Successfully";
}
?>

<form method="post">
    <h2>Add Staff</h2>
    <input type="text" name="name" placeholder="Staff Name" required><br><br>
    <input type="text" name="dept" placeholder="Department" required><br><br>
    <button name="add">Add Staff</button>
</form>
