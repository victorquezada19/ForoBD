<?php
    $conex = mysqli_connect("localhost", "root","","registro");

    if($conex->connect_error){
        die("failed to connect to MySQL" . $conex-> connect_error);
    }
    $conex->set_charset("utf8");
?>