<?php
include '../config/db.php';

// Fetch staff ONCE
$result = mysqli_query($conn, "SELECT * FROM staff");
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Handle form submission
if (isset($_POST['submit']) && isset($_POST['status']) && is_array($_POST['status'])) {

    $date = $_POST['date'];
    $status = $_POST['status'];

    foreach ($status as $staff_id => $attendance) {
        mysqli_query($conn, "INSERT INTO attendance (staff_id, date, status)
                             VALUES ('$staff_id', '$date', '$attendance')");
    }

    echo "<p>Attendance marked successfully</p>";
}

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

            <?php if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['department']; ?></td>
                        <td>
                            <select name="status[<?= $row['id']; ?>]">
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                            </select>
                        </td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="3">No staff found</td>
                </tr>
            <?php } ?>

        </table>

        <button type="submit" name="submit">Save Attendance</button>
    </form>

    <a href="dashboard.php">Back</a>

</body>

</html>