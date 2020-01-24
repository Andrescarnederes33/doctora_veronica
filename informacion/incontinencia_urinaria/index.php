<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Incotinencia urinaria" ?>
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
                    <img src="../../public/src/img/informacion/incontinencia-urinaria.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                <h3>Incotinencia urinaria</h3>
                    <p>
                    Procedimiento no quirúrgico para mejorar los síntomas de la menopausia a nivel vaginal como resequedad, sensacion de escozor, picor, irritacion o quemazon en la vagina, dolor con las relaciones sexuales y/o dolor o ardor para orinar. 
                    </p>

                    <a href="/contacto?q=5" target="_blank" rel="noopener noreferrer nofollow" class="waves-effect waves-light btn-large"><i
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