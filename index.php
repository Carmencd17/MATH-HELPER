<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="wrapper">
    <div class="form-wrapper sign-in">
        <form method="post" action="index.php" name="vaidrollteam">
            <h2>Login</h2>
            <div class="input-group">
                <input type="text" name="txtusuario" required>
                <label>Ingresar usuario</label>
            </div>
            <div class="input-group">
                <input type="password" name="txtpassword" required>
                <label>Ingresar Contraseña</label>
            </div>
            <button type="submit" name="btningresar">Ingresar</button>
            <div class="signUp-link">
                <p>No tienes una cuenta? <a href="registrar.php">Crear una cuenta</a></p>
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
  session_destroy();
}

if (isset($_POST['btningresar'])) {
    $nombre = $_POST["txtusuario"];
    $pass = $_POST["txtpassword"];

    $query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$nombre' and password = '$pass'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
        $_SESSION['nombredelusuario'] = $nombre;
        header("Location: Menu/index.php");
    } else if ($nr == 0) {
        echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
    }
}
?>
