<?php

    // $g = fopen("handl_file.txt","r");

    // $why = fread($g,filesize("handl_file.txt"));

    // fclose($g);

    // echo $why; 


?>

<?php

    $h = fopen("handl_file.txt",'w');

    $Hello = fwrite($h,"ZYXWVUTSRQPONMLKJIHGFEDCBA");

    fclose($h);

    echo $Hello;

?>

<?php


        $name = fopen("handl_file.txt","a");

        $jk   = fwrite($name,"okay");

        fclose($name);

        
    echo " Z Y X W _U V_ T S R Q P O N M L K J I H G F E D C B A ";

    

?>