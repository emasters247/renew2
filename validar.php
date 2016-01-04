<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validando...</title>
</head>
<body>
	<?php 
		include 'connect_db.php';
		if(isset($_POST['login'])){
			$user = $_POST['user'];
			$passwd = $_POST['passwd'];
			$log = mysql_query("SELECT * FROM login WHERE user='$user' AND passwd='$passwd'");
			if (mysql_num_rows($log)>0) {
				$row = mysql_fetch_array($log);
				$_SESSION['user'] = $row['user'];
				echo 'Iniciando sesion';
				echo '<script>window.location="good.php";</script>';
			}
			else{
				echo '<script>alert("Usuario o contraseña icorrectos");</script';
				echo '<script>window.location="../index.php";</script>';
			}
		}

	 ?>
</body>
</html>