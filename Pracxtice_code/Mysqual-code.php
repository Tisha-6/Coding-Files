<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSqual-code</title>
</head>
<body>


        <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "php_code";

            $yes = mysqli_connect($servername,$username,$password,$db);

            if ($yes -> connect_error) {
                
                die("Error while connecting to db " . $yes -> connect_error);
            }

            echo " connect to db";

            $sql = " CREATE TABLE students(
            
                id INT(6) AUTO_INCREMENT PRIMARY KEY ,
                
                studentsname VARCHAR(3)
                studentsRolls INT(2)
                )";
                 
            if($yes -> query($sql) === true){

                echo ('Table is created');
            }
            

        
        ?>


</body>
</html>