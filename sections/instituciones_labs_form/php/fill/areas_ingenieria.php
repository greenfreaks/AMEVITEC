<?php
	$query_areasIng = "SELECT * FROM uci_areas_conocimiento WHERE fk_ambito = 2";
	$exec_areasIng = mysqli_query($conex, $query_areasIng);

	while($resul_areasIng = mysqli_fetch_array($exec_areasIng)){
		echo "<option value = '".$resul_areasIng['id_area_conocimiento']."'>".$resul_areasIng['nombre_area_conocimiento']."</option>";
	}
?>