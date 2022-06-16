<?php
	$query_areasCiencias = "SELECT * FROM uci_areas_conocimiento WHERE fk_ambito = 1";
	$exec_areasCiencias = mysqli_query($conex, $query_areasCiencias);

	while($resul_areasCiencias = mysqli_fetch_array($exec_areasCiencias)){
		echo "<option value = '".$resul_areasCiencias['id_area_conocimiento']."'>".$resul_areasCiencias['nombre_area_conocimiento']."</option>";
	}
?>