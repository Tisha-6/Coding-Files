<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison_operatorss</title>
</head>
<body>



    <?php


        //  Returns true if $w is equal to $f 

        $f = "12";
        $w = 12;

        var_dump($w == $f);

        echo "<br>";
        echo "<br>";        

        //  <h5> Reaturs true if $s is equal to $n, and they are of the same type </h5>

        $s = 12;
        $n = "12";

        var_dump($n === $s);

        echo "<br>";
        echo "<br>";

        //  Returns true if $c is not equal to %v

        $c = 44;
        $v = "44";

        var_dump($c != $v);

        echo "<br>";
        print("<br>");

        //  Returns true is $w is not equal to $i

        $w = 78;
        $i = 54;

        var_dump($i <> $w);

        echo "<br>";
        print("<br>");

        //  Returns true is $g is not equal to $u

        $k = 21;
        $t = 19;

        var_dump($k !== $t);

        echo "<br>";
        print("<br>");

        // Greater Than 

        $c = 89;
        $v = 19;

        var_dump($c > $v);

        echo "<br>";
        print("<br>");

        // Less than

        $c = 55;
        $v = 92;

        var_dump($c < $v);

        echo "<br>";
        print("<br>");

        // Returns True If $c Greater than or equal to $v

        $c = 12;
        $v = 19;

        var_dump($c >= $v);

        echo "<br>";
        print("<br>");

        // Returns ture if %c less than or equal to $v

        $c = 36;
        $v = 36;

        var_dump($c <= $v);

        echo "<br>";
        print("<br>");

        // Return -1 because $c is less than $v 

        $c = 9;
        $v = 10;

        var_dump($c <=> $v);
        
        echo "<br>";
        print("<br>");

        // Return 0 because value are equal 

        $c = 78;
        $v = 78;

        var_dump($c <=> $v);

        echo "<br>";
        print("<br>");

        // Return 1 because value are $c is greater than $v

        $c = 92;
        $v = 45;

        var_dump($c <=> $v);

    ?>



</body>
</html>