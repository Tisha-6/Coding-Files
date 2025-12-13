<?php
include '../config/db.php';

if (isset($_POST['submit'])) {
    $date = date('Y-m-d');

    foreach ($_POST['status'] as $id => $status) {
        mysqli_query($conn, "INSERT INTO attendance (staff_id, date, status)
        VALUES ('$id','$date','$status')");
    }
    echo "Attendance Marked";
}

$staff = mysqli_query($conn, "SELECT * FROM staff");
?>

<form method="post">
<h2>Mark Attendance</h2>
<table border="1">
<tr><th>Name</th><th>Status</th></tr>

<?php while ($row = mysqli_fetch_assoc($staff)) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td>
        <select name="status[<?= $row['id'] ?>]">
            <option value="Present">Present</option>
            <option value="Absent">Absent</option>
        </select>
    </td>
</tr>
<?php } ?>
</table><br>

<button name="submit">Submit</button>
</form>
