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
        /* Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(120deg, #e0f7fa, #e8eaf6);
            min-height: 100vh;
            padding: 40px;
        }

        /* Page Title */
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            letter-spacing: 1px;
        }

        /* Table Styling */
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Sticky Table Header */
        th {
            background: #3f51b5;
            color: #fff;
            padding: 14px;
            text-transform: uppercase;
            font-size: 14px;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        /* Table Data */
        td {
            padding: 12px;
            text-align: center;
            color: #555;
            border-bottom: 1px solid #eee;
        }

        /* Zebra Striping */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Hover Effect */
        tr:hover {
            background-color: #eef1ff;
            transform: scale(1.01);
            transition: 0.2s ease-in-out;
        }

        /* Status Badge (optional enhancement) */
        td:last-child {
            font-weight: 500;
        }

        /* Example status colors */
        td:last-child:contains("Present") {
            color: green;
        }

        td:last-child:contains("Absent") {
            color: red;
        }

        /* Back Button */
        a {
            display: inline-block;
            margin: 30px auto 0;
            padding: 10px 22px;
            background: #3f51b5;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            text-align: center;
            transition: 0.3s;
            font-size: 14px;
        }

        a:hover {
            background: #303f9f;
            box-shadow: 0 5px 15px rgba(63, 81, 181, 0.4);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            table {
                width: 100%;
                font-size: 13px;
            }

            th,
            td {
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