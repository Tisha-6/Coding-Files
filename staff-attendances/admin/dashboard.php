<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../index.php");
}
?>

<h2>Welcome Admin</h2>
<a href="add_staff.php">Add Staff</a><br>
<a href="mark_attendance.php">Mark Attendance</a><br>
<a href="view_attendance.php">View Attendance</a><br>
<a href="../logout.php">Logout</a>
