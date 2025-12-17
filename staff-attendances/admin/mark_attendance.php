<?php
include '../config/db.php';

// Fetch all staff
$result = mysqli_query($conn, "SELECT * FROM staff");

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "Staff Name: " . $row['name'] . "<br>";
}

echo "Attendance marked successfully";


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

            <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
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
            <?php
            }
        } else {
            echo "<tr><td colspan='3'>No staff found</td></tr>";
        }
        ?>
        </table>

        <button type="submit" name="submit">Save Attendance</button>
    </form>

    <a href="dashboard.php">Back</a>

</body>

</html>