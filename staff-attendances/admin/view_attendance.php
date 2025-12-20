<?php
include '../config/db.php';

$sql = "
SELECT staff.name, staff.department, attendance.date, attendance.status
FROM attendance
JOIN staff ON attendance.staff_id = staff.id
ORDER BY attendance.date DESC
";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Attendance</title>
</head>

<body>

    <h2>Attendance Records</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Date</th>
            <th>Status</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>

                    <td>
                        <span class="badge present">Present</span>
                    </td>

                </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='4'>No attendance records found</td></tr>";
        }
        ?>
    </table>

    <a href="dashboard.php">Back</a>

</body>

</html>