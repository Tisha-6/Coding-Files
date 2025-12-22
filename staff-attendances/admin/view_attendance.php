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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #e3f2fd, #ede7f6);
            padding: 40px;
        }

        /* Card Container */
        .attendance-card {
            max-width: 1100px;
            margin: auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        /* Title */
        h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #2c2c2c;
        }

        /* Legend */
        .legend {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .legend span {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #5c6bc0;
            color: white;
            padding: 14px;
            font-size: 13px;
            text-transform: uppercase;
        }

        td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        /* Hover */
        tbody tr:hover {
            background: #f5f7ff;
        }

        /* Status Badges */
        .badge {
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 500;
            display: inline-block;
        }

        .present {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .absent {
            background: #ffebee;
            color: #c62828;
        }

        .leave {
            background: #fff8e1;
            color: #f9a825;
        }

        /* Back Button */
        .back-btn {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 25px;
            background: #5c6bc0;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #3f51b5;
        }

        /* Responsive */
        @media(max-width: 768px) {

            th,
            td {
                font-size: 12px;
                padding: 10px;
            }
        }
    </style>

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