<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cc35ccca45.js" crossorigin="anonymous"></script>
    <title>Logo Ipsum</title>
</head>

<body>
    <header class="header" id="home">
        <?php
        require_once 'partials/nav.php';
        ?>
        <h1>logo impsum</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
    </header>
    <section id="nosotros">
        <figure>
            <figcaption>
                <h2>Sobre Nosotros</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum possimus provident minima a! Debitis neque similique ut eius esse repellat, molestias maiores nobis deleniti voluptate sed architecto distinctio provident voluptas?</p>
                <a href="">Presentación</a>
            </figcaption>
            <img src="assets/img/about_us.svg" alt="">
        </figure>
    </section>
    <section id="projects" class="container_slider">
        <div class="slider" id="slider">
            <figure class="slider_section">
                <img src="assets/img/computadora.jpg" alt="" class="slider_img">
                </img>
                <figcaption>
                    <h3>DESARROLLO</h3>
                </figcaption>
            </figure>
            <figure class="slider_section">
                <img src="assets/img/estadisticas.jpg" alt="" class="slider_img">
                </img>
                <figcaption>
                    <h3>ESTADISTICAS</h3>
                </figcaption>
            </figure>
            <figure class="slider_section">
                <img src="assets/img/trabajadora.jpg" alt="" class="slider_img">
                </img>
                <figcaption>
                    <h3>TRABAJO</h3>
                </figcaption>
            </figure>
        </div>
        <div class="slider_btn slider_btn-right" id="btn_right">&#62;</div>
        <div class="slider_btn slider_btn-left" id="btn_left">&#60;</div>
    </section>
    <section class="login_and_signin" id="contact">
        <img src="assets/img/undraw_Access_account_re_8spm.svg" alt="" class="man">
        <div class="session_container">
            <p>¿Tienes una cuenta? ¡Entra!</p>
            <a href="form_login.php" class="button">Iniciar Sesión</a>
            <p>Si aún no, puedes:</p>
            <a href="form_signin.php" class="button">Registrarte</a>
        </div>
    </section>
    <div id="buttonUp">
        <i class="fas fa-angle-up fa-lg"></i>
    </div>
    <script src="assets/js/main.js"></script>
</body>

</html>