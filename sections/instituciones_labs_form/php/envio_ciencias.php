<?php
if (isset($_POST['submitCienciasLab'])) {

    // ?Se obtieenen valores del fomualrio
    $institucionLab = trim($_POST['insLab']);
    $areaConocimientoLab = trim($_POST['areaConocimientoLab']);
    $nombreLab = trim($_POST['nombreLab']);
    $secIndustrialLab = $_POST['secIndustrialLab'];
    $equipamientoLab = trim($_POST['equipamientoLab']);
    $serviciosLab = trim($_POST['serviciosLab']);
    $nombreResponsableLab = trim($_POST['nombreResponsableLab']);
    $emailResponsableLab = trim($_POST['emailResponsableLab']);
    $telefonoResponsableLab = trim($_POST['telefonoResponsableLab']);
    $passwordLab = trim($_POST['passwordLab']);


    // ?Se verifica que la Clave institucional sea correcta
    $query_verifyPassword = "SELECT * FROM uci_catalogo_instituciones
    WHERE id_catalogoInstitucion = $institucionLab AND password = '$passwordLab'";
    $exec_verifyPasswor = mysqli_query($conex, $query_verifyPassword);
    $result_verifyPassword = mysqli_num_rows($exec_verifyPasswor);
    if ($result_verifyPassword == 1) {

    // ?Se inserta nuevo laboratorio
        $query_insertLab = "INSERT INTO uci_labs_pact
    (
        fk_institucion,
        fk_ambito,
        fk_area_conocimiento,
        nombreLaboratorio,
        equipoLaboratorio,
        servicioLaboratorio,
        nombreResponsable,
        emailResponsable,
        telefonoResponsable
    )
    VALUES
    (
        $institucionLab,
        1,
        $areaConocimientoLab,
        '$nombreLab',
        '$equipamientoLab',
        '$serviciosLab',
        '$nombreResponsableLab',
        '$emailResponsableLab',
        '$telefonoResponsableLab'

    )";
        $exec_insertLab = mysqli_query($conex, $query_insertLab);

        //?Se obtiene el valor del último ID insertado
        $query_getIdLab = "SELECT MAX(id_lab) AS id_lab FROM uci_labs_pact";
        $execute_getIdLab = mysqli_query($conex, $query_getIdLab);
        $result_getIdLab = mysqli_fetch_array($execute_getIdLab);
        $id_lab = $result_getIdLab['id_lab'];
        

        // ?Se insertan los sectores industriales del último laboratorio registrado 
        foreach ($secIndustrialLab as $secIndustrial) {
            $query_insertSector = "INSERT INTO uci_labs_as_sector_industrial
        (
            fk_lab,
            fk_institucion,
            fk_sectorIndustrial
        )
        VALUES
        (
            $id_lab,
            $institucionLab,
            $secIndustrial
        )";
            $exec_insertSector = mysqli_query($conex, $query_insertSector);
        }
        if ($exec_insertLab and $exec_insertSector) {
?>
            <script type="text/javascript">
                Swal.fire({
                    icon: 'success',
                    title: '¡Datos enviados correctamente!',
                    text: 'Si deseas registrar otro laboratorio o línea de investigación, repite este mismo proceso.',
                    footer: '<a target="_blank" href="http://amevitec.org/">amevitec.org</a>'
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo salió mal',
                    footer: '<a href="">Contacta a un asesor de AMEVITEC para ayudarte a resolver esta situación.</a>'
                });
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: '¡Clave Institucional incorrecta!',
                text: 'No ha sido posible enviar tus datos',
                footer: '<a href="">Contacta a un asesor de amevitec para ayudarte a resolver esta situación.</a>'
                });
            </script>
<?php
    }
}
?>