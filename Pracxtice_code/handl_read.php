<?php

    $h = fopen("handl_read.txt","w");

    $name = fwrite($h,"What are you say ");

    fclose($h);

    echo $name; 

?>