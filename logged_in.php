<?php
session_start();
if ($_SESSION['user_valid'] !== true) {
    header('Location: form_login.php');
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
    <title>Bienvenide</title>
</head>

<body>
    <header>
        <?php require_once 'partials/nav.php' ?>
    </header>
    <main class="main">
        <section>
            <article class="success">
                <figure>
                    <img src="../Logo Ipsum/assets/img/undraw_young_and_happy_hfpe.svg" alt="">
                    <figcaption class="container_text" id="space_text">
                        <h3>Bievenide a ▲logoimpsum▼</h3>
                        <p>Nos alegra tenerte con nosotres</p>
                    </figcaption>
                </figure>
            </article>
            <div class="power_off">

                <a href="sign_off.php"><i class="fas fa-power-off"></i></a>
                <p>Cerrar Sesión</p>
            </div>
        </section>
    </main>
    <script src="assets/js/main.js"></script>
</body>

</html>