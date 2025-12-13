<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number</title>
    
</head>
<body>

    <h1>Enter a Number</h1>
    <form method="POST" action="" onsubmit="displayResult();">
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <div id="result"></div>


</body>

<script>
        function displayResult() {
            var result = "<?php echo isset($result) ? $result : ''; ?>"; // Retrieve PHP result
            var message = "this";
            
            // JavaScript logic to display the result
            if (result === "positive") {
                message = "The number is positive!";
            } else if (result === "negative") {
                message = "The number is negative!";
            } else if (result === "zero") {
                message = "The number is zero!";
            }
            
            // Display the result on the page
            document.getElementById("result").innerText = message;
        }
    </script>
</html>


    
    
