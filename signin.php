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

    $first_name     = '';
    $last_name      = '';
    $user_name      = '';
    $password       = '';
    $email          = '';
    $date_of_birth  = '';

    if (
      !empty($_POST)
    ) {
      if (!empty(trim($_POST['user_name'])) && is_string($_POST['user_name'])) {
        $user_name = $_POST['user_name'];
      }

      if (!empty(trim($_POST['password'])) && is_string($_POST['password'])) {
        $password = $_POST['password'];
      }
      if (!empty(trim($_POST['first_name'])) && is_string($_POST['first_name'])) {
        $first_name = $_POST['first_name'];
      }
      if (!empty(trim($_POST['last_name'])) && is_string($_POST['last_name'])) {
        $last_name = $_POST['last_name'];
      }
      if (
        !empty(trim($_POST['email'])) &&
        is_string($_POST['email']) &&
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false
      ) {
        $email = $_POST['email'];
      }
      if (
        !empty($_POST['date_of_birth']) &&
        is_string($_POST['date_of_birth'])
      ) {
        $date_of_birth = strtotime($_POST['date_of_birth']);
        $date_of_birth = date('Y-m-d', $date_of_birth);
        $date_of_birth = $_POST['date_of_birth'];
      }
    }
    if (
      $first_name !== '' && $last_name !== '' && $user_name !== ''
      && $password !== '' && $email !== '' && $date_of_birth !== ''
    ) {

      $connection = new mysqli('localhost', 'root', '', 'travel_database');

      $result = $connection->query('INSERT INTO usuaries (user_name, password, first_name, last_name, 
      email, date_of_birth ) VALUES ("' . $connection->real_escape_string($user_name) . '" ,
      "' . $connection->real_escape_string($password) . '", 
      "' . $connection->real_escape_string($first_name) . '" ,
      "' . $connection->real_escape_string($last_name) . '",
      "' . $connection->real_escape_string($email) .  '" ,
      "' . $connection->real_escape_string($date_of_birth) . '")');


      if ($result) {
        header('Location: signup.php');
    ?>
      <?php
      } else {
      ?>
        <section>
          <article class="error">
            <figure>
              <img src="../Logo Ipsum/assets/img/undraw_access_denied_re_awnf.svg" alt="">
              <figcaption class="error_text">
                <h3>¡Se ha producido un error al registrarte! Por favor, inténtalo de nuevo.</h3>
                <a href="form_signin.php" class="button">Registrarse</a>
              </figcaption>
            </figure>
          </article>
        </section>
      <?php
      }
    } else {
      ?>
      <section>
        <article class="error">
          <figure>
            <img src="../Logo Ipsum/assets/img/undraw_access_denied_re_awnf.svg" alt="">
            <figcaption class="container_text">
              <h3>¡Se ha producido un error al registrarte! Tus datos no estaban completos. Por favor, inténtalo de nuevo.</h3>
              <a href="form_signin.php" class="button">Registrarse</a>
            </figcaption>
          </figure>
        </article>
      </section>
    <?php
    } ?>

  </main>

</body>

</html>