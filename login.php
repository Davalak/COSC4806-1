<?php 
session_start();

if (!isset($_SESSION['failed_attempts'])){
  $_SESSION['failed_attempts'] = 0;
}
if ($_SESSION['failed_attempts'] >= 1){
  echo "Failed attempt " . $_SESSION['failed_attempts'] . " Please try again";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>

  <body>

    <h1> Login Form</h1>

    <form action="/validate.php" method="post">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Submit">
    </form>



  </body>
</html>