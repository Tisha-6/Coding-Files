<?php include("../config/db.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">

    <style>
        /* ===== DASHBOARD CONTAINER ===== */
        body {
            background: linear-gradient(120deg, #e0f7fa, #e8eaf6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Dashboard Card */
        .dashboard {
            background: #ffffff;
            padding: 40px;
            width: 400px;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        /* Title */
        .dashboard h2 {
            color: #3f51b5;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        /* Dashboard Links */
        .dashboard a {
            display: block;
            margin: 12px 0;
            padding: 14px;
            background: #3f51b5;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-size: 15px;
            transition: 0.3s;
        }

        /* Hover Effect */
        .dashboard a:hover {
            background: #303f9f;
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(63, 81, 181, 0.4);
        }

        /* Divider removal */
        .dashboard a+span {
            display: none;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile Friendly */
        @media (max-width: 500px) {
            .dashboard {
                width: 90%;
                padding: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard">
        <h2>Admin Dashboard</h2>

        <a href="add_staff.php">Add Staff</a>
        <a href="mark_attendance.php">Mark Attendance</a>
        <a href="view_attendance.php">View Attendance</a>
    </div>
</body>

</html>