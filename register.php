<?php
    include 'connect.php';

    if(isset($_POST['registerButton2'])){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $telefono=$_POST['telefono'];
        $edad=$_POST['edad'];

            $insertQuery="Insert into Pacientes(nombre,telefono,edad,password) values('$usuario','$telefono',$edad,'$password')";
            if($conn->query($insertQuery)===TRUE){
                echo "<script>alert('Usuario registrado')</script>";
                print("Registrado");
                
            }
}
?>
