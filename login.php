<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

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

  if($result->fetch_assoc()) {
    session_start();
    $_SESSION['user_valid'] = true;
    header('Location: logged_in.php');
  } else{
    header('Location: form_login.php'); 
  }
}
