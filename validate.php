<?php

  $valid_username = "david";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($username == $valid_username && $password == $valid_password) {
    echo "Welcome $username";
  }
  else {echo "Invalid username or password";}

?>