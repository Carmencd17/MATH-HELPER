<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    include('../conexion.php');
    session_start();

    if (!isset($_SESSION['nombredelusuario'])) {
        header("Location: ../index.php");
        exit();
    }

    $nombre_usuario = $_SESSION['nombredelusuario'];

    // Conectar a la base de datos
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Consulta para obtener los datos del usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = '$nombre_usuario'";
    $result = mysqli_query($conn, $sql);

    // Verificar si hay resultados
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "No se encontraron datos";
        exit();
    }

    // Cerrar la conexión
    mysqli_close($conn);
    ?>

    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="cloud-outline"></ion-icon>
                <span>Apex</span>
            </div>
            <button class="boton">
                <ion-icon name="add-outline"></ion-icon>
                <span>Create new</span>
            </button>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="#">
                        <ion-icon name="person-outline"></ion-icon>
                        <span>Usuario</span>
                    </a>
                </li>
                <li>
                    <a href="./practicas.php">
                        <ion-icon name="star-outline"></ion-icon>
                        <span>Practicas</span>
                    </a>
                </li>
                <li>
                    <a href="./mensajes.php">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                        <span>Mensajes</span>
                    </a>
                </li>
                <li>
                    <a href="./recomendaciones.php">
                        <ion-icon name="logo-youtube"></ion-icon>
                        <span>Recomendaciones</span>
                    </a>
                </li>
                <li>
                    <a href="./noticias.php">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <span>Noticias</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Dark Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo"></div>
                    </div>
                </div>
            </div>
    
            <div class="usuario">
                <img src="./Jhampier.jpg" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Usuario</span>
                    </div>
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="student-container">
            <div class="student-profile">
                <h1>¡Bienvenido de nuevo!</h1>
                <div class="student-details">
                    <h2>Datos Básicos</h2>
                    <div class="profile-picture">
                    <ion-icon name="person-outline" style="font-size: 100px;"></ion-icon>
                    </div>
                    <p><strong>Nombre:</strong> <?php echo $user['nombre']; ?></p>
                    <p><strong>Código:</strong> <?php echo $user['codigo']; ?></p>
                    <p><strong>Correo de verificación:</strong> <?php echo $user['correo_verificacion']; ?></p>
                    <p><strong>nota practica 1:</strong> <?php echo $user['pract-1']; ?></p>
                    <button class="edit-button">Editar</button>
                </div>
            </div>
        </div>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./script.js"></script>
</body>
</html>
