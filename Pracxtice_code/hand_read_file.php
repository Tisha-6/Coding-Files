<?php

    $h = fopen("handl_read_file.txt","r");

    $n = fread($h,filesize("hand_read_file.txt"));

    fclose($h);

    echo $n;


?>                     