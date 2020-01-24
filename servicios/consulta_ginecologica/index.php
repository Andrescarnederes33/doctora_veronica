<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Consulta ginecológica" ?>
    <?php include '../../backend/template_parts/head_subpages.php'; ?>
</head>

<body>
<?php include '../../backend/template_parts/nav_services.php'; ?>

    <div class="container">
        <div class="row">
            <!-- <div class="col s12">This div is 12-columns wide on all screen sizes</div> -->
            <div class="col s12 m6">
                <br>
                <div>
                    <img src="../../public/src/img/servicios/consulta_ginecologica.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                    <h3>CONSULTA GINECOLÓGICA</h3>
                    <p> Convertir ese momento de compartir tus inquietudes de salud íntima con un especialista que te
                        brinda profesionalismo y confianza dándote mayor seguridad. "Es de suma importancia que cada
                        mujer aprenda a comprender su cuerpo, de esta manera puede lograr conocer si existe alguna señal
                        de alerta o cambio en él".</p>

                        <a class="waves-effect waves-light btn-large"><i class="material-icons right">insert_invitation</i>Agendar cita</a>
                    <!-- <a href="#!" class="btn btn-success"> <img src="/img/contacto_white.svg" width="25" height="25"> Agendar cita</a> -->
                </div>

            </div>
        </div>
        <br><br>
        <div class="services_form_box">
        <?php include '../../backend/template_parts/form.php'; ?>
        </div>
        <br>

    </div>

    <?php include '../../backend/template_parts/footer.php'; ?>

    <!-- Compiled and minified JavaScript -->
    <script src="../../public/src/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>