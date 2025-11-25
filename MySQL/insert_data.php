<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert_data_php</title>
</head>
<body>


        <?php

            $server = "localhost";
            $username = "root";
            $password = "";
            $db = "php_code";

            $conn = new mysqli($server,$username,$password,$db);

            if ($conn -> connect_error) {
                
                die("Errors ". $conn-> connect_error);

            }
  
            echo "connected ";

            $sql = "INSERT INTO class(classname, classnameRollno) VALUES ('Tisha' , '5')";

            if ($conn ->query($sql) === true) {
                
                echo ("Data inserted!");
            }
            else {
                echo (" error".$sql ."" (mysql:($conn)));
            }

            $conn->close();

        ?>


</body>
</html>