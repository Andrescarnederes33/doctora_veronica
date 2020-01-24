<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Perineoplastia" ?>
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
                    <img src="../../public/src/img/informacion/perineo.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                <h3>Perineoplastia</h3>
                    <p>
                    Es la reparación de la zona inmediatamente cercana a la apertura vaginal. No solo se retiran los excesos de piel y cicatrices, sino que se da una mayor tensión a la zona, permitiendo recuperar la función original de esta zona eliminando la sensación de pesadez y falta de tono.                     
                    </p>

                    <a href="#!" class="waves-effect waves-light btn-large">x</a>
                    <a class="material-icons right">insert_invitation</i>Agendar cita
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