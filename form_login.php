<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cc35ccca45.js" crossorigin="anonymous"></script>
    <title>Iniciar Sesión</title>
</head>

<body>

    <main>
        <?php require_once 'partials/social.php' ?>
        <section class="form_container_login">
            <article class="form_and_buttons_login">
                <form action="login.php" method="post" class="login">

                    <h2>Iniciar Sesión</h2>
                    <label for="user_name">Nombre de Usuarix:</label>
                    <input type="text" name="user_name" id="user_name" placeholder="Usuarix" required>
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" placeholder="Contraseña" required>

                    <input type="submit" value="Entrar">

                </form>
                <div class="buttons">
                    <a href="index.php">
                        <i class="fas fa-arrow-left" id="left"></i>
                        <p>Inicio</p>
                    </a>
                    <a href="form_signin.php" class="right">
                        <p>Registrarse</p>
                        <i class="fas fa-arrow-right right" id="right"></i>
                    </a>
                </div>
            </article>
        </section>
    </main>
    <script src="assets/js/main.js"></script>
</body>

</html>