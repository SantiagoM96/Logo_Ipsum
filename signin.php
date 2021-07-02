<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

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


  if ($first_name !== '' && $last_name !== '' && $user_name !== '' && $password !== '' && $email !== '' && $date_of_birth !== '') {

    $connection = new mysqli('localhost', 'root', '', 'travel_database');

    $sql = $connection->query('CREATE TABLE usuaries (
      id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      user_name varchar(50) NOT NULL UNIQUE,
      password varchar (50) DEFAULT NULL,
      first_name varchar (50) DEFAULT NULL,
      last_name varchar (50) DEFAULT NULL,
      email varchar (150) UNIQUE,
      date_of_birth date NOT NULL DEFAULT current_timestamp()
    )');

    $sql = $connection->query('INSERT INTO usuaries (user_name, password, first_name, last_name,
    email, date_of_birth )
    VALUES ("' . $connection->real_escape_string($user_name) . '" ,
    "' . $connection->real_escape_string($password) . '",
    "' . $connection->real_escape_string($first_name) . '" ,
    "' . $connection->real_escape_string($last_name) . '",
    "' . $connection->real_escape_string($email) .  '" ,
    "' . $connection->real_escape_string($date_of_birth) . '")
  ');
  }
  if ($sql) {
    header('Location: signup.php');
  }
}
