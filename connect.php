<?php
    $host="database-1.cf2smqo0kjdk.us-east-2.rds.amazonaws.com";
    $user="admin";
    $pass="5staLA1uAlIRIw30D";
    $db="DBrejuvemed";

    $conn=new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
        die("Error al conectarse con la BD".$conn->connect_error);
        print("No jalo");
    }
    else{
        print("Conexión exitosaa");
    }
?>