<?php 
session_start();
include 'connect_db.php';
if(isset($_SESSION['user'])){
  echo "<script>location.href='good.php'</script>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <main>
      <div id="formaction">
          <form action="validar.php" method="post">
            <h2>LOGIN</h2>
            <label for="usuario">Nombre</label><br>
            <input type="text" name="user" class="texts" value=""><br>
            <label for="contraseña">Contraseña</label><br>
            <input type="password" name="passwd" class="texts" value=""><br>
            <input type="submit" class="btn  btn-danger" name="login" value="Login">
          </form>
      </div>
    </main>
  </body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</html>
