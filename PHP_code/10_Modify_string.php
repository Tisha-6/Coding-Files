<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify_string</title>
</head>
<body>


    <?php


        echo "<H2>Upper case</H2>";

        $u = "Hello World!";
        echo strtoupper ($u);

        echo "<h2>Lower case</h2>";

        $r = "Hello World!";
        echo strtolower ($r);
        
        echo "<h2> Replace String</h2>";

        $w = "Hello world?";
        echo str_replace ("Woeld","dolly", $w);


        echo "<h2>Strrev</h2>";

        $t = "Z Y X W U V T S R Q P O N M L K J I H G F E D C B A  ";
        
        echo strrev($t);

        // $d = 'A B C D E F G H I J K L M N L O Q R S T U V W X Y Z';
        // echo strrev($d);
        
       


    ?>



</body>
</html>