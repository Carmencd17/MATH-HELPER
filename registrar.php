<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Registrar</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="wrapper">
    <div class="form-wrapper sign-in">
        <form method="post" action="registrar.php" name="vaidrollteam">
            <h2>Registrar</h2>
            <div class="input-group">
                <input type="text" name="txtusuario" required>
                <label>Ingresar usuario</label>
            </div>
            <div class="input-group">
                <input type="password" name="txtpassword" required>
                <label>Ingresar Contraseña</label>
            </div>
            <div class="input-group">
                <input type="text" name="nombre" required>
                <label>Nombre Completo</label>
            </div>
            <div class="input-group">
                <input type="text" name="codigo" required>
                <label>Código</label>
            </div>
            <div class="input-group">
                <input type="email" name="correo_verificacion" required>
                <label>Correo de verificación</label>
            </div>
            <button type="submit" name="btnregistrar">Registrar</button>
            <div class="signUp-link">
                <p><a href="index.php">Iniciar sesión</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>


<?php
include('conexion.php');

session_start();
if (isset($_SESSION['nombredelusuario'])) {
    header('location: listar.php');
}

if (isset($_POST["btnregistrar"])) {
    $nombre_usuario = $_POST["txtusuario"];
    $pass = $_POST["txtpassword"];
    $codigo = $_POST["codigo"];
    $nombre_completo = $_POST["nombre"];
    $correo_verificacion = $_POST["correo_verificacion"];

    // Inserción en la tabla login
    $sql_login = "INSERT INTO login (usuario, password) VALUES ('$nombre_usuario', '$pass')";
    
    if (mysqli_query($conn, $sql_login)) {
        // Inserción en la tabla usuarios
        $sql_usuarios = "INSERT INTO usuarios (usuario, nombre, codigo, correo_verificacion) VALUES ('$nombre_usuario', '$nombre_completo', '$codigo', '$correo_verificacion')";
        
        if (mysqli_query($conn, $sql_usuarios)) {
            echo "<script>alert('Usuario registrado con éxito: $nombre_usuario'); window.location='index.php'</script>";
        } else {
            echo "Error: " . $sql_usuarios . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql_login . "<br>" . mysqli_error($conn);
    }
}
?>
