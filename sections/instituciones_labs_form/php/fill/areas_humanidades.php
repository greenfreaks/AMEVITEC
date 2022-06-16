<?php
	$query_areasHumanidades = "SELECT * FROM uci_areas_conocimiento WHERE fk_ambito = 3";
	$exec_areasHumanidades = mysqli_query($conex, $query_areasHumanidades);

	while($resul_areasHumanidades = mysqli_fetch_array($exec_areasHumanidades)){
		echo "<option value = '".$resul_areasHumanidades['id_area_conocimiento']."'>".$resul_areasHumanidades['nombre_area_conocimiento']."</option>";
	}
?>