<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prax_post</title>
</head>
<body>


        <?php

            if (isset($_POST["Username"])) {
                
                echo "My name is ". $_POST["Username"];

            } else {
                echo " No Usrename";
            }

        ?>


</body>
</html>