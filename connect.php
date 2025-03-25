<?php
    $host="bonjpimxuxsjltpm9oil-mysql.services.clever-cloud.com";
    $user="ud5wcqjmqdiavrs0";
    $pass="8koJ59QFnFc6GxU5DHof";
    $db="bonjpimxuxsjltpm9oil";

    $conn=new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
        die("Error al conectarse con la BD".$conn->connect_error);
        print("No jalo");
    }
    else{
        print("Conexión exitosaa");
    }
?>