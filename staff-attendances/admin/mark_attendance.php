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

    <head>
    <title>Mark Attendance</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

        * {
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #e3f2fd, #ede7f6);
            padding: 40px;
        }

        .card {
            max-width: 1100px;
            margin: auto;
            background: #fff;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c2c2c;
        }

        /* Date Picker */
        .date-box {
            display: flex;
            justify-content: center;
            margin-bottom: 25px;
        }

        input[type="date"] {
            padding: 10px 18px;
            border-radius: 25px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #5c6bc0;
            color: #fff;
            padding: 14px;
            font-size: 13px;
            text-transform: uppercase;
            position: sticky;
            top: 0;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #eee;
            text-align: center;
            font-size: 14px;
        }

        tbody tr:hover {
            background: #f5f7ff;
        }

        /* Status Select */
        select {
            padding: 6px 12px;
            border-radius: 20px;
            border: 1px solid #ccc;
            font-size: 13px;
            cursor: pointer;
        }

        select option[value="Present"] {
            color: green;
        }

        select option[value="Absent"] {
            color: red;
        }

        /* Buttons */
        .actions {
            text-align: center;
            margin-top: 25px;
        }

        button {
            padding: 10px 30px;
            background: #5c6bc0;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #3f51b5;
        }

        .back {
            display: inline-block;
            margin-left: 15px;
            padding: 10px 25px;
            background: #eee;
            color: #333;
            text-decoration: none;
            border-radius: 25px;
            font-size: 14px;
        }

        .back:hover {
            background: #ddd;
        }

        @media(max-width: 768px) {
            th, td {
                font-size: 12px;
                padding: 10px;
            }
        }
    </style>
</head>

</head>

<body>

<div class="card">

    <h2>Mark Attendance</h2>

    <form method="POST">

        <div class="date-box">
            <input type="date" name="date" required>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Department</th>
                    <th>Attendance Status</th>
                </tr>
            </thead>
            <tbody>

            <?php if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['department']; ?></td>
                        <td>
                            <select name="status[<?= $row['id']; ?>]">
                                <option value="Present">✔ Present</option>
                                <option value="Absent">✖ Absent</option>
                            </select>
                        </td>
                    </tr>
            <?php }
            } else { ?>
                <tr>
                    <td colspan="3">No staff found</td>
                </tr>
            <?php } ?>

            </tbody>
        </table>

        <div class="actions">
            <button type="submit" name="submit">Save Attendance</button>
            <a href="dashboard.php" class="back">Back</a>
        </div>

    </form>

</div>

</body>

</html>