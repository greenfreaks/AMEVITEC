<?php
	$query_educacionContinua = "SELECT * FROM uci_areas_educacion_continua";
	$exec_educaionContinua = mysqli_query($conex, $query_educacionContinua);

	while($fila = mysqli_fetch_array($exec_educaionContinua)){
		echo "<p>
		<label>
			<input type='checkbox' name='educacionContinua[]' value='".$fila['id_area_educacion_continua']."' />
			<span>".$fila['nombre_area_educacion_continua']."</span>
		</label>
	</p>";
	}
?>