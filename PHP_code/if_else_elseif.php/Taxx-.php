<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Positive, Negative or Zero</title>
</head>
<body>

     <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Check</button>
    </form> 

      <?php
      
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     //  Get the user-defined number from the form
    //     $number = $_POST['number'];

    //     // Check if the number is positive, negative, or zero
    //     if ($number > 0) {
    //         echo "<p>The number is positive.</p>";
    //     } elseif ($number < 0) {
    //         echo "<p>The number is negative.</p>";
    //     } else {
    //         echo "<p>The number is zero.</p>";
    //     }
    // } 
    ?> 

        <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                
                $no = $_POST["number"];


                if ($no > 0) {

                    echo " <p>It's positive.</p>";
                }
                elseif ($no < 0) {
                    print(" <p> It's zero </p>")
                }
                else {
                    print("<p> it's nagetive</p>");
                }
            }


        ?>







</body>
</html>