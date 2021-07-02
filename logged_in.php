<?php
session_start();
if ($_SESSION['user_valid'] !== true) {
    header('Location: index.php');
    die();
}
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cc35ccca45.js" crossorigin="anonymous"></script>
    <title>Logo Impsum</title>
</head>

<body>
    <header>
        <?php require_once 'partials/nav.php' ?>
    </header>
    <main class="logged_in">
        <?php if (empty($_SESSION['user_valid'])) { ?>
            <h1>¿QUIEN SOS?</h1>
            <p>ADIOS</p>
        <?php } else { ?>
            <article class="article_logged_in">
                <h1>Bievenide a ▲logoimpsum▼</h1>
                <p>Nos alegra tenerte con nosotres</p>
            </article>
        <?php } ?>
        <div class="power_off">

            <a href="sign_off.php"><i class="fas fa-power-off"></i></a>
            <p>Cerrar Sesión</p>
        </div>
    </main>
    <script src="assets/js/main.js"></script>
</body>

</html>