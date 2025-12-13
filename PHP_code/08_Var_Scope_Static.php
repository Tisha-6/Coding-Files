<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static</title>
</head>
<body>
    


<?php

    function mytest(){
        static $h = 10;
        echo $h;
        $h--;
    }

    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    

?>



</body>
</html>