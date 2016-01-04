<?php 
session_start();
include 'connect_db.php';

if(isset($_SESSION['user'])){
	echo "";
}else{
	echo '<script>window.location="index.php; </script>';
}
$profile = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Goog Login</title>
  </head>
  <body>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut nisi velit optio ducimus quidem laboriosam, voluptate sed error dolore? Quaerat accusantium eligendi, ut laboriosam, unde voluptatibus. Quod distinctio blanditiis necessitatibus.
  </body>
</html>
