<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Blanqueamiento genital" ?>
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
                    <img src="../../public/src/img/informacion/blanqueamiento.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                <h3>Blanqueamiento genital</h3>
                    <p>
                    Es un nuevo tratamiento estético que combina el láser CO2 con un peeling químico despigmentante, con el fin de alcanzar un color rosado o aclarar la zona íntima como tú la deseas. 
                    </p>

                    <a href="/contacto?q=10" target="_blank" rel="noopener noreferrer nofollow" class="waves-effect waves-light btn-large"><i
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