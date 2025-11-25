<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $Name = trim($_POST['Name']);
        $email = trim($_POST['email']);
        $Age = trim($_POST['Age']);

        $errors = [];

        if(empty($Name)){

            $errors[] = " Name is required.";
        }
        elseif(!preg_match("/^[a-zA-Z-' ]*$/",subject:$Name)){

            $errors[] = "Only letter and white space allowed in name";
        }

        if(empty($email)){

            $errors[] = "Email is required.";
        }
        elseif(!filter_var($email,filter:FILTER_VALIDATE_EMAIL)){

            $errors[] = "Invalid Email";
        }

        if(empty($Age)){

            $errors[] = "Age is required.";
        }
        elseif(!filter_var($Age, filter:FILTER_VALIDATE_INT)){

            $errors[] = " Age must be a valid number";
        }

        if(empty($errors)){

            echo " <h1> validation Successful </h1>";
        }
        else{
            foreach( $errors as $error){
                echo " <h2 style= 'color:red';>$error</h2>";
            }
        }
    }


?>