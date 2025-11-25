<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>


        <?php

        $Welcome = "Latte";

        echo"<br>";
        echo "<h1>'Welcome to Starbucks'</h1>";
        echo "<h3> What's your order </h3>";

        switch ($Welcome) {
            case 'Latte':
                echo "=>Latte, Have a great day.";
                print("<br><br>");
                echo " your order is coming";
                break;
            
            case 'Black tea':
                echo "Black tea, it's good.";
                break;

            case 'Cold coffee':
                echo "Cold coffee, That's great.";
                break;
            case 'Americano':
                echo "Americano, Superb.";
                break;
            case 'Mocha':
                echo " Mocha, Amazing.";
                break;
            case 'Double espresso':
                echo " Double espresso, Fantastic.";
                break;
            case 'Cappuccino':
                echo "<h4> Cappuccino, 'Wonderful'</h4>";
                break;
            default:
                echo " <br>";
                echo "Sorry it's not available.";
                break;

        }
        
        ?>


</body>
</html>