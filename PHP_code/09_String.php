<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String_Data_Types</title>
</head>
<body>
    

<?php



// Double quotes process special characters.

    $bh = "Raj";
    echo "Hello $bh";

         echo "<br>";
    echo "<br>";

    // single quote does not.
    $why = "raj";
    echo 'hello $why';

    
    // The php strlen function returns the length of a string
    echo "<h3>Strlen</h3>";

    echo strlen("Good Morning");


    echo "<h3> str_word_count</h3>";

    echo str_word_count(" Hello Sir");

    echo "<h3> strpos</h3>";

    echo strpos( "Hello world","world");

    


?>
</body>
</html>