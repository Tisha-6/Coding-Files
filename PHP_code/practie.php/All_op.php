<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo_op</title>
</head>
<body>


        <?php

        print(" <h2> This is arithmetic op</h2>");

        $g = 45;
        $h = 32; 

        $u = $g + $h;

        echo $u;


        echo " <h2> This is assignment op</h2>";

        $y = 678;
        $y += 89;

        print( $y);
        
        print(" <h2>The comparison op, <br> In This op there are var_dump </h2>");

        
        $these = 64;
        $those = 27;

        var_dump($these == $those);

        echo " <h2> I know this </h2>";

       
         
        $do = 26;
        $did = 39;

        var_dump($do === $did);

        print(" <h2>Both are same</h2> ");

        $does = 52;
        $did = 52;

        var_dump($does != $did);

        $why = 98;
        $then = 84;

        var_dump($why <> $then);


        print("<h2> Incerement_Decremant</h2>");

        $y = 79;   //Pre Incerement
        echo ++$y;

        echo "<br>";

        $f = 6.3;  // Post Incerement
        echo $f++;

        echo "<br><br>";

        $h = 45;   //Pre Decrement
        echo --$h;

        print("<br>");

        $j = 12;  //Post Decrement 
        echo $j--; 

        print("<h2>Logical_op</h2>");

        $l = 85;
        $u = 78;

        if ($l == 85 && $u == 78) {
            
            echo "then It's Right";
        }

        echo "<br><br>";

        $j = 75;
        $a = 23;

        if ($j == 95 || $a == 23) {
            print(" There are some doing");
        }

        echo "<br>";

        $n =  508;
        $y =  909;

        if ($n == 525 xor $y == 909) {
            print("There are not working");
        }




        

 


        
        






        ?>



</body>
</html>