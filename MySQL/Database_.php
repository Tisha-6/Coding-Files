<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conncation_database</title>
</head>
<body>

    <?php

        $servername = "localhost";
        $username = 'root';
        $password = '';

        $connec = new mysqli($servername,$username,$password);

        if($connec -> connect_error){

            die( "Error while connecting " . $connec -> connect_error);
        }

        echo " connection Successful";


        $sql = "CREATE DATABASE Pracxtice_code";

        if ($connec -> query($sql) === true ) {

             echo " Db Create";
        }


        else{

            "Error in creating db " . $connec -> error;
        }
    
        $connec -> close();

    ?>


</body>
</html>