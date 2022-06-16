<?php
include "../con_db.php";
	$consulta_areas_conocimiento = "SELECT * FROM uci_areas_conocimiento";
	$ejecutarAreasConocimiento = mysqli_query($conex, $consulta_areas_conocimiento);

	while($fila = mysqli_fetch_array($ejecutarAreasConocimiento)){
		echo "<option value = '".$fila['id_area_conocimiento']."'>".$fila['nombre_area_conocimiento']."</option>";
	}
?>