<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Consulta obstetricia y prenatal" ?>
    <?php include '../../backend/template_parts/head_subpages.php'; ?>
</head>

<body>
    <div class="nav_services_personalized">
        <div class="box_nav_personalized">
        <a href="#!">
                    <img src="../../public/src/img/logo.png" alt="" width="160px">
                </a>    
        </div>        
        <div>
            <ul style="line-height: 1;">
                <li><p>Doctora Verónica García Bedoya. </p></li>
                <li><p>Teléfono <a href="tel:">(4) 313 25 05</a> / <a href="tel:">(313) 651 10 39</a></p></li>
                <li><p>Medellín-Colombia </p></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- <div class="col s12">This div is 12-columns wide on all screen sizes</div> -->
            <div class="col s12 m6">
                <br>
                <div>
                    <img src="../../public/src/img/servicios/consulta_obstetricia.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                    <h3>Consulta obstetricia y prenatal</h3>
                    <p>
                    La primera visita a control prenatal se realiza comúnmente en el primer trimestre, antes de completar las 12 semanas de edad gestacional. Uno de los objetivos de la primera visita es identificar y modificar los factores de riesgo tanto médicos como sociales con el fin de mejorar las condiciones del embarazo, tanto para la madre como para el feto. También es importante educar con buenos hábitos que beneficien el desarrollo del bebe, tratando de mejorar el resultado perinatal y disminuir la morbilidad materno-fetal. 
                    </p>

                        <a class="waves-effect waves-light btn-large"><i class="material-icons right">insert_invitation</i>Agendar cita</a>
                    <!-- <a href="#!" class="btn btn-success"> <img src="/img/contacto_white.svg" width="25" height="25"> Agendar cita</a> -->
                </div>

            </div>
        </div>

        <br><br>
        <div class="services_form_box">
        <?php include '../../backend/template_parts/form.php'; ?>
        </div>

    </div>

   
    <?php include '../../backend/template_parts/footer.php'; ?>

    <!-- Compiled and minified JavaScript -->
    <script src="../../public/src/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>