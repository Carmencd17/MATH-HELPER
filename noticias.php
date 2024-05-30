<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
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
                <a  href="./index.php">
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
                    <a id="inbox" href="./noticias.php">
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
                    <span>Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">
                            
                        </div>
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
    
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./script.js"></script>
</body>
</html>