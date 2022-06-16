<?php
include "../con_db.php";
	$consulta_instituciones = "SELECT * FROM uci_catalogo_instituciones
	WHERE fk_authorizedForCapacidades = 1";
	$ejecutar_instituciones = mysqli_query($conex, $consulta_instituciones);

	while($fila = mysqli_fetch_array($ejecutar_instituciones)){
		echo "<option value = '".$fila['id_catalogoInstitucion']."'>".$fila['nombre_catalogoInstitucion']."</option>";
	}
?>