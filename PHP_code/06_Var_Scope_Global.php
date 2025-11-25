<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var_Scope_Global</title>
</head>
<body>
    

    <?php

        $y = 5; 
       function mySchool(){

        echo "<p> Variable what inside function  is: </p>";
       }

       mySchool();

       echo "<p> Variable what inside function is: $y</p>";


       echo"<br>";
       echo"<br>";
       
       $gr = 45;
       $rg = 52;

       function mytest() {

        global $gr;
        global $rg;

        
       }
       
       mytest();
       echo $gr;
       echo "<br>";
       echo $rg;

    
    ?>



</body>
</html>