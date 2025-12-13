<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_table_php</title>
</head>
<body>


        <?php
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "why";

            $conner = mysqli_connect($servername,$username,$password,$db);

            if ($conner ->connect_error) {
               
                die("Error ". $conner->connect_error);
            }

            echo " Connection done";

            // create table in database


            $but = "CREATE TABLE vote(
            
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                
                votename VARCHAR(100),
                voteno INT(10)
                )";

            if ($conner -> query($but) === true) {
                
                echo ("table is created");
            }

        ?>



</body>
</html>