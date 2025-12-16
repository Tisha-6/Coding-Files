<?php
include("../config/db.php");

$result = mysqli_query($conn, "
    SELECT staff.name, staff.department, attendance.attendance_date, attendance.status
    FROM attendance
    JOIN staff ON staff.id = attendance.staff_id
    ORDER BY attendance.attendance_date DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Attendance</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Attendance Records</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Date</th>
        <th>Status</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['attendance_date']; ?></td>
        <td><?php echo $row['status']; ?></td>
    </tr>
    <?php } ?>
</table>

<a href="dashboard.php">Back</a>

</body>
</html>
