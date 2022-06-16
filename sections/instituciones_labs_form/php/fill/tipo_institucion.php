<?php
include "../con_db.php";
	$consulta_tipo_institucion = "SELECT * FROM uci_tipo_institucion";
	$ejecutarTipoInstitucion = mysqli_query($conex, $consulta_tipo_institucion);

	while($fila = mysqli_fetch_array($ejecutarTipoInstitucion)){
		echo "<option value = '".$fila['id_tipoInstitucion']."'>".$fila['nombre_tipoInstitucion']."</option>";
	}
?>