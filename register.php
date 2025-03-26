<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include 'connect.php';

    if(isset($_POST['registerButton2'])){
        $usuario = $_POST['usuario'] ?? null;
        $password = $_POST['password'] ?? null;
        $telefono = $_POST['telefono'] ?? null;
        $edad = $_POST['edad'] ?? null;

        // Validate input
        if (!$usuario || !$password || !$telefono || !$edad) {
            echo "<script>alert('Todos los campos son obligatorios.')</script>";
            exit;
        }

        // Use prepared statements to prevent SQL injection
        $insertQuery = $conn->prepare("INSERT INTO Pacientes (nombre, telefono, edad, password) VALUES (?, ?, ?, ?)");
        if ($insertQuery) {
            $insertQuery->bind_param("ssis", $usuario, $telefono, $edad, $password);
            if ($insertQuery->execute()) {
                echo "<script>alert('Usuario registrado')</script>";
                print("Registrado");
            } else {
                echo "<script>alert('Error al registrar usuario: " . $insertQuery->error . "')</script>";
            }
            $insertQuery->close();
        } else {
            echo "<script>alert('Error al preparar la consulta: " . $conn->error . "')</script>";
        }
    }
?>
