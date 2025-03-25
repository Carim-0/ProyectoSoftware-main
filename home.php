<?php
    session_start();
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla inicial</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Bienvenido
            <?php
                if(isset($_SESSION['idpaciente'])){
                    $idpaciente=$_SESSION['idpaciente'];
                    $query=mysqli_query($conn, "select nombre.* from 'pacientes' where idpaciente='$idpaciente'");
                    while($row=mysqli_fetch_array($query)){
                       echo $row['nombre']; 
                    }
                }
            ?>
        </p>
    </div>
</body>
</html>