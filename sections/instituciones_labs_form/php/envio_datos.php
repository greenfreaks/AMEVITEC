<?php
if (isset($_POST['submit'])) {
    $institucion = $_POST['ins'];
    $entidad = $_POST['entidad'];
    $webpage = $_POST['webpage'];
    $tit_rec = $_POST['tit_rec'];
    $email_rec = $_POST['email_rec'];
    $tit_vin = $_POST['tit_vin'];
    $email_vin = $_POST['email_vin'];
    $tit_aca = $_POST['tit_aca'];
    $email_aca = $_POST['email_aca'];
    $ofertaEducativa = $_POST['ofertaEducativa'];
    $educacionContinua = $_POST['educacionContinua'];
    $password = $_POST['password'];

    //Se verifica que la instiución no esté registrada anteriormente
    $query_institucionRegistered = "SELECT * FROM uci_instituciones_pact
    WHERE fk_institucion = $institucion";
    $exec_institucionRegistered = mysqli_query($conex, $query_institucionRegistered);
    $result_institucionRegistered = mysqli_num_rows($exec_institucionRegistered);

    if ($result_institucionRegistered == 0) {

        // Se verifica constraseña
        $query_verifyPassword = "SELECT * FROM uci_catalogo_instituciones WHERE id_catalogoInstitucion = $institucion AND password = '$password'";
        $exec_verifyPassword = mysqli_query($conex, $query_verifyPassword);
        $result_verifyPassword = mysqli_num_rows($exec_verifyPassword);

        if ($result_verifyPassword == 1) {

            // Se inserta información a la tabla "uci_instituciones_pact"
            $query_insertInstitucion = "INSERT INTO uci_instituciones_pact
    (
        fk_institucion,
        webpage,
        tit_rectoria,
        email_rectoria,
        tit_vinculacion,
        email_vinculacion,
        tit_academia,
        email_academia
    )
    VALUES
    (
        $institucion,
        '$webpage',
        '$tit_rec',
        '$email_rec',
        '$tit_vin',
        '$email_vin',
        '$tit_aca',
        '$email_aca'
    )";
            $exec_insertInstitucion = mysqli_query($conex, $query_insertInstitucion);

            // Se inserta Información a la tabla "uci_oferta_educativa_as_institucion"
            foreach ($ofertaEducativa as $ofertaEdu) {
                $query_ofertaEducativa = "INSERT INTO uci_oferta_educativa_as_institucion
                (
                    fk_institucion,
                    fk_ofertaEducativa
                )
                VALUES
                (
                    $institucion,
                    $ofertaEdu
                )";
                $exec_ofertaEducativa = mysqli_query($conex, $query_ofertaEducativa);
            }

            // Se inserta Información a la tabla "uci_educacion_continua_as_institucion"
            foreach ($educacionContinua as $educacionCont) {
                $query_educacionContinua = "INSERT INTO uci_educacion_continua_as_institucion
                (
                    fk_institucion,
                    fk_educacionContinua
                )
                VALUES
                (
                    $institucion,
                    $educacionCont
                )";
                $exec_educacionContinua = mysqli_query($conex, $query_educacionContinua);
            }

            // Se actualiza el valor del campo "entidad" en la tabla "uci_catalogo_instituciones"
            $query_updateEntidad = "UPDATE uci_catalogo_instituciones SET fk_estadoInstitucion = $entidad 
            WHERE id_catalogoInstitucion = $institucion";

            $exec_updateEntidad = mysqli_query($conex, $query_updateEntidad);
            if ($exec_insertInstitucion and $exec_ofertaEducativa and $exec_educacionContinua and $exec_updateEntidad) { ?>
                <script type="text/javascript">
                    Swal.fire({
                        icon: 'success',
                        title: '¡Datos enviados correctamente!',
                        text: 'Ahora puedes continuar con el registro de capacidades de tu institución en ciencias, ingeniería y humanidades en esta misma página.',
                        footer: '<a target="_blank" href="http://amevitec.org/">amevitec.org</a>'
                    });
                </script>
            <?php
            } else {
            ?>
                <script type="text/javascript">
                    Swal.fire({
                        icon: 'error',
                        title: 'No fue posible registrar la institución',
                        text: `<p>Por favor contáctate con nosotros a este correo: contacto@amevitec.org </p>
                                <p>O bien, puedes marcar o enviar mensaje de WhatsApp a este número: 55 21 06 32 89</p>`
                    });
                </script>
            <?php
            }
        } else { ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: '¡Clave Institucional incorrecta!',
                    text: 'No ha sido posible enviar tus datos',
                    footer: `<p>Si olvidaste tu Clave Institucional, escríbenos a este correo: contacto@amevitec.org</p>
                    <p>O bien, puedes marcar o mandar mensaje de WhatsApp a este número: 55 21 06 32 89</p>`
                });
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: '¡Esta institución ya ha sido registrada anteriormente!',
                text: 'No es posible volverla a registrar',
                footer: `Puedes continuar registrando laboratorios o proyectos`
            });
        </script>
<?php
    }
}
?>