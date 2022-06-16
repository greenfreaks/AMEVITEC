<?php

	$query_ofertaEducativa = "SELECT * FROM uci_areas_oferta_educativa";
	$exec_ofertaEducativa = mysqli_query($conex, $query_ofertaEducativa);

	while($fila = mysqli_fetch_array($exec_ofertaEducativa)){
		echo "<p>
		<label>
			<input type='checkbox' name='ofertaEducativa[]' value='".$fila['id_area_oferta']."' />
			<span>".$fila['nombre_area_oferta']."</span>
		</label>
	</p>";
	}
?>