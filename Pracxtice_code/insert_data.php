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
        $db = "why";


        $conne = new mysqli($server,$username,$password,$db);

        if ($conne -> connect_error) {
            
            die("Error " . $conne -> connect_error);
        }

        echo "connection done";

        $sqq = "INSERT INTO vote(votename, voteno) VALUES ('sir','4')";

        if($conne ->query($sqq) === true){

            echo ("Data inserted");
        }

        else {
            echo ("error " . $sqq . "".mysqli_error(mysql:($conne)));
        }

    
    ?>


</body>
</html>