<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create_table_with_database</title>
</head>
<body>


    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "php_code";


    $why = mysqli_connect($servername,$username,$password,$db);

    if($why ->connect_error){

        die("Error while connecting to db" . $why ->connect_error);
    }

    echo " connected  to db";


    // create tabel in database

    $yes = " CREATE TABLE class(

        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        
        classname VARCHAR(100),
        classnameRollno INT(10),
        email VARCHAR(50)
    )";

    if ($why -> query($yes) === true) {
        
        echo ("table is created");
    }
    

    ?>


</body>
</html>