<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cc35ccca45.js" crossorigin="anonymous"></script>
    <title>Registrarse</title>
</head>

<body>
    <main>
        <?php require_once 'partials/social.php'?>
        <section class="form_container">
            <article class="form_and_buttons_signin">
                <form action="signin.php" method="post" class="signin">
                    <h2>Regístrate</h2>
                    <p>Y disfrutá de nuestros servicios exclusivos</p>
                    <label for="first_name">Nombre:</label>
                    <input type="text" name="first_name" id="nombre" placeholder="Nombre" required>

                    <label for="last_name">Apellido:</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Apellido" required>

                    <label for="date_of_birth">Fecha de Nacimiento:</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" required>

                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="tuemail@email.com" required>

                    <label for="user_name">Nombre de Usuarie:</label>
                    <input type="text" name="user_name" id="user_name" placeholder="Usuarie" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" placeholder="Contraseña" required>
                    <input type="submit" value="Crear Cuenta">

                </form>
                <div class="buttons">
                    <a href="index.php">
                        <i class="fas fa-arrow-left" id="left"></i>
                        <p>Inicio</p>
                    </a>
                    <a href="form_login.php">
                        <p>Login</p>
                        <i class="fas fa-arrow-right right" id="right"></i>
                    </a>
                </div>
            </article>
        </section>
    </main>
</body>

</html>