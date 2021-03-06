<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Menopausia" ?>
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
                    <img src="../../public/src/img/servicios/consulta_menopausia.png" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                    <h3>Menopausia</h3>
                    <p>
                    Es una etapa en la vida de las mujeres caracterizada por grandes cambios que se ven reflejados en síntomas que pueden resultar molestos para muchas de ellas. El factor más característico es el de la ausencia de la menstruación por un tiempo promedio de doce (12) meses ininterrumpidos. Es común que este proceso fisiológico natural llegue a la edad comprendida entre los 48 – 52 años. Gracias a los avances médicos actuales, las mujeres que atraviesan por un proceso de menopausia pueden acceder a múltiples tratamientos que les permiten llevar su vida de forma normal y digna. 
                    </p>

                    <a href="/contacto?q=0" target="_blank" rel="noopener noreferrer nofollow" class="waves-effect waves-light btn-large"><i
                            class="material-icons right">insert_invitation</i>Agendar cita</a>
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