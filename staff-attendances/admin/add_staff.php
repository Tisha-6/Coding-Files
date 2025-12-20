<?php
include("../config/db.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $department = $_POST['department'];

    mysqli_query($conn, "INSERT INTO staff (name, department) VALUES ('$name','$department')");
    $success = "Staff added successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Staff</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="form-container">
    <h2>Add Staff</h2>

    <?php if (!empty($success)) { ?>
        <div class="success-msg"><?php echo $success; ?></div>
    <?php } ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Staff Name" required>
        <input type="text" name="department" placeholder="Department" required>
        <button type="submit" name="submit">Add Staff</button>
    </form>

    <a href="dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>
