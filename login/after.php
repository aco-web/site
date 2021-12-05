<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
  <body>
  <h1>Welcome to ACO:</h1>
    <h2><?php echo $_SESSION["usr"]; ?></h2>
  </body>
</html>