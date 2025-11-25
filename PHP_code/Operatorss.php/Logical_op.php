<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical_op </title>
</head>
<body>


        <?php

            $g = 10;
            $y = 80;

            if ($g == 100 xor $y == 80) {

                echo "What's name ?";
            } 


            // True if Both $u and $y are true 
            $y = 78;
            $u = 56;

            if ($u == 56 && $y == 78) {
                echo "Good ";

            }


            // Write a message if at least one of the conditions are true.


            $y = 12;
            $u =  45;

            if ($u == 4 xor $y == 12) {

                echo "Eccho and print are differnt ";
            }


            // write a conditions is NOT true.

            $y = 63;
             
            if (!($y == 12)) {
                echo "world";
                
            }

        ?>



</body>
</html>