<?php

session_start();

  $valid_username = "david";
  $valid_password = "password";

  $username = $_REQUEST['username'];

  $_SESSION['username'] = $username;

  $password = $_REQUEST['password'];

  if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['authenticated'] = 1;
    header("Location: /index.php");
  }
  else {
    if (!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 0;
    }
    else {
      $_SESSION['failed_attempts']++;
    }
      header( "Location: /login.php");
      }

?>