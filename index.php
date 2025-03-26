<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="login" >
        <h1 class="form_title">RejuveMed - Iniciar sesion</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Usuario" name="usuario" required>
                <label for="usuario">Usuario</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Contraseña" name="password" required>
                <label for="contrasena">Contraseña</label>
            </div>
            <input type="submit" class="btn" value="Iniciar sesion" name="loginButton2">
        </form>
        <div class="links">
            <p>No tengo una cuenta</p>
            <button id="registerButton">Registrarse</button> 
        </div>
    </div>
    <div class="container" id="register" style="display:none">
        <h1 class="form_title">Registrarse</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Usuario" name="usuario" required>
                <label for="usuario">Usuario</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Contraseña" name="password" required>
                <label for="contrasena">Contraseña</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirmar contraseña" name="password" required>
                <label for="contrasena">Confirmar contraseña</label>
            </div>   
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" placeholder="Telefono" name="telefono" required>
                <label for="telefono">Telefono</label>
            </div>
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" placeholder="Edad" name="edad" required>
                <label for="edad">Edad</label>
            </div>
            
            <input type="submit" class="btn" value="Registrarse" name="registerButton2">
        </form>
        <div class="links">
            <p>Ya tengo una cuenta</p>
            <button id="loginButton">Iniciar sesion</button> 
        </div>
        <script src="script.js"></script>
</body>
</html>