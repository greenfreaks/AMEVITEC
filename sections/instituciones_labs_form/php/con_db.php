<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	//$user = 'tecnotr1_webmstr';
	//$password = 'Oa?*&2#Bzuqt';
	$db = 'tecnotr1_bd_tbr_plataforma';

	$conex = @mysqli_connect($host, $user, $password, $db);
	if(!$conex){
		echo "Error en la conexión";
	}/*else{
		echo "Conexión exitosa";
	}*/
	$conex -> set_charset("utf8");
?>