<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Labioplastia" ?>
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
                    <img src="../../public/src/img/informacion/labioplastia.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                <h3>Labioplastia</h3>
                    <p>
                    Reducción de los labios menores. Cirugía íntima que ayuda a mejorar el aspecto estético de los labios menores, en muchos casos corrigiendo también funcionalidades del órgano. 
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