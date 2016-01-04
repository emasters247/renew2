<?php 
	
	$conect = mysql_connect("mynet.com","root","lol") or die("No se encontro el servidor");
	mysql_select_db("mynet2", $conect) or die("No se  encontro la base de datos");

 ?>