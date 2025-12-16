<?php
include("../config/db.php");

if (isset($_POST['submit'])) {
    $date = $_POST['date'];

    foreach ($_POST['status'] as $staff_id => $status) {
        mysqli_query($conn, "INSERT INTO attendance (staff_id, attendance_date, status)
        VALUES ('$staff_id','$date','$status')");
    }
    echo "Attendance marked successfully";
}

$staff = mysqli_query($conn, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mark Attendance</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Mark Attendance</h2>

<form method="POST">
    <input type="date" name="date" required><br><br>

    <table>
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Status</th>
        </tr>

        <?php $result = mysqli_query($conn, "SELECT * FROM staff");
$row = mysqli_fetch_assoc($result);
?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td>
                <select name="status[<?php echo $row['id']; ?>]">
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                </select>
            </td>
        </tr>
        <?php } ?>
    </table>

    <button type="submit" name="submit">Save Attendance</button>
</form>

<a href="dashboard.php">Back</a>

</body>
</html>
