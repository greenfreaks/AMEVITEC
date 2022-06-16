<?php
	$query_insPact = "SELECT * FROM uci_instituciones_pact pactIns
    INNER JOIN uci_catalogo_instituciones catIns ON pactIns.fk_institucion = catIns.id_catalogoInstitucion
	ORDER BY `catIns`.`nombre_catalogoInstitucion` ASC";
	$exec_insPact = mysqli_query($conex, $query_insPact);

	while($result_insPact = mysqli_fetch_array($exec_insPact)){
		echo "<option value = '".$result_insPact['fk_institucion']."'>".$result_insPact['nombre_catalogoInstitucion']."</option>";
	}
?>