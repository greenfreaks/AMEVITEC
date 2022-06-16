<?php
	$query_secIndustrial = "SELECT * FROM uci_sector_industrial_labs";
	$exec_secIndustrial = mysqli_query($conex, $query_secIndustrial);

	while($result_secIndustrial = mysqli_fetch_array($exec_secIndustrial)){
		echo "<option value = '".$result_secIndustrial['id_sectorIndustrial']."'>".$result_secIndustrial['nombre_sectorIndustrial']."</option>";
	}
?>