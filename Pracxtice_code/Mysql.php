<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYsql_code_table</title>
</head>
<body>

    <?php
    
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "pracxtice_code";

        $now = mysqli_connect($server,$username,$password,$db);

        if ($now -> connect_error) {
            
            die("Error while conecting to db" . $now -> connect_error);
        }

        echo " connected to db";


        // create table in database

        $ok = "CREATE TABLE class(
        
            id INT(6) AUTO_INCREMENT PRIMARY KEY,
            
            classname VARCHAR(200),
            class   page VARCHAR(20),
            email VARCHAR(50)
            )";
    
        if ($now -> query($ok) === true) {
    
            
            echo ("Table is created");
        }

        else {
            
            echo " Error creating tabel" . $now->error;
        }

    ?>


</body>
</html>