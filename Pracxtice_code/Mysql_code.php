<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conection_code</title>
</head>
<body>


    <?php
    
        $servername = "localhost";
        $username = "root";
        $password = "";

        $do  = new mysqli($servername,$username,$password);

        if($do ->connect_error){

            die("Error while connecting" . $do -> connect_error);
        }

        echo " Connection done";

        $sql = " CREATE DATABASE php_code";

        if($do -> query($sql) === true){

            echo " db create";
        }

        else{

            "Error in creating db " . $do -> error;
        }

        $do -> close();
    

    ?>


</body>
</html>