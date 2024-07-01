<?php 
session_start();

if (!isset($_SESSION['authenticated'])) {
  header("Location: /login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>David</title>
  </head>
  
  <body>
    
    <h1> Assignment 1 </h1>

    <p> Welcome, <?=$_SESSION['username'] ?> . The date is <?php echo date("Y-m-d");?> </p>
    
  </body>

      <footer>
        <p> <a href="/logout.php"> Click here to logout</p>
      </footer>
</html>