<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting_Types</title>
</head>
<body>


    <?php
    

    $why = 567;
    $why = (string) $why;
    var_dump( $why );


    $what = "hello Php";
    $what = (int) $what;
    var_dump( $what );


    $age = 56787;
    $age = (bool) $age;
    var_dump( $age );


    $No = 12987;
    $No = (array) $No;
    var_dump( $No );


    $name = true;
    $name = (float) $name;
    var_dump( $name );


    $www = NULL;
    $www = (string) $www;
    var_dump( $www );

    $gg = NULL;
    $gg = (int) $gg;
    var_dump( $gg );

    $er = NULL;
    $er = (float) $er;
    var_dump( $er );

    $we = NULL;
    $we = (bool) $we;
    var_dump($we);
    
    
    $hh = NULL;
    $hh = (array) $hh;
    var_dump( $hh );


    // string //
    $pp = "asfghjk";
    $pp = (bool) $pp;
    var_dump( $pp );


    $a = 4;
    $b = 2.3;
    $c = "shfghh";
    $d = "";
    $e = true;
    $f = NULL;

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;


    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    

    $y = "fghjk";
    $y = (bool) $y;
    var_dump($y);
    




    ?>



    
</body>
</html>