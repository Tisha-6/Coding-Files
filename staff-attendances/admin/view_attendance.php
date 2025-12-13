<?php
include '../config/db.php';

$q = mysqli_query($conn,
"SELECT staff.name, attendance.date, attendance.status
 FROM attendance
 JOIN staff ON attendance.staff_id = staff.id");
?>

<h2>Attendance Records</h2>
<table border="1">
<tr>
    <th>Name</th>
    <th>Date</th>
    <th>Status</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($q)) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['date'] ?></td>
    <td><?= $row['status'] ?></td>
</tr>
<?php } ?>
</table>
