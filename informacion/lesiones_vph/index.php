<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Lesiones de VPH" ?>
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
                    <img src="../../public/src/img/informacion/lesionesPVH.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                <h3>Lesiones de VPH</h3>
                    <p>
                    Procedimiento de consultorio para vaporizar cualquier tipo de lesión por VPH (VIRUS PAPILOMA HUMANO), tipo verruga, a nivel de cuello uterino, vagina o vulva. Siendo el láser un tratamiento de actualidad. 
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