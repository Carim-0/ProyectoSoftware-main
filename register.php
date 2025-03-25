<?php
    include 'connect.php';

    if(isset($_POST['registerButton2'])){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $telefono=$_POST['telefono'];
        $edad=$_POST['edad'];

        $checkUser="Select * from pacientes where nombre = '$usuario' and telefono = '$telefono'";
        $result=$conn->query($checkUser);
        if($result->num_rows>0){
            echo "<script>alert('El usuario ya existe')</script>";
            print("Ya existe");
        }else{
            $insertQuery="Insert into pacientes(nombre,telefono,edad,password) values('$usuario','$telefono','$edad','$password')";
            if($conn->query($insertQuery)===TRUE){
                echo "<script>alert('Usuario registrado')</script>";
                print("Registrado");
                header("Location: index.php");
            }else{
                echo "<script>alert('Error al registrar')</script>";
                print("Error al registrar");
                echo $conn->error;
            }
        }
    }

if(isset($_POST['loginButton2'])){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    $checkUser="Select * from pacientes where nombre = '$usuario' and password = '$password'";
    $result=$conn->query($checkUser);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['idpaciente']=$row['idpaciente'];
        echo "<script>alert('Bienvenido')</script>";
        header("Location: home.php");
        exit();
    }else{
        echo "<script>alert('Usuario o contraseña incorrectos')</script>";
    }
}
?>