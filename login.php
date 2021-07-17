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
  <header>
    <?php require_once 'partials/nav.php' ?>
  </header>
  <main class="main">
    <?php

    $user_name = '';
    $password = '';

    if (
      !empty($_POST)
    ) {
      if (!empty($_POST['user_name']) && is_string($_POST['user_name'])) {
        $user_name = $_POST['user_name'];
      }

      if (!empty($_POST['password']) && is_string($_POST['password'])) {
        $password = $_POST['password'];
      }
    }

    if ($user_name !== '' && $password !== '') {

      $connection = new mysqli('localhost', 'root', '', 'travel_database');

      $result = $connection->query('SELECT id FROM usuaries 
    WHERE user_name = "' . $connection->real_escape_string($user_name) . '" 
    AND password = "' . $connection->real_escape_string($password) . '"');

      if ($result->fetch_assoc()) {
        session_start();
        $_SESSION['user_valid'] = true;
        header('Location: logged_in.php');
      } else {
    ?>
        <article class="error">
          <figure>
            <img src="../Logo Ipsum/assets/img/undraw_the_search_s0xf.svg" alt="">
            <figcaption class="container_text">
              <h3>¿Eres tú realmente? Por favor, inténtalo de nuevo.</h3>
              <a href="form_login.php" class="button">Iniciar Sesión</a>
            </figcaption>
          </figure>
        </article>
    <?php
      }
    }
    ?>

  </main>

</body>

</html>