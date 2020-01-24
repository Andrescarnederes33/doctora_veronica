<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Anticoncepción familiar" ?>
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
                <li>
                    <p>Doctora Verónica García Bedoya. </p>
                </li>
                <li>
                    <p>Teléfono <a href="tel:">(4) 313 25 05</a> / <a href="tel:">(313) 651 10 39</a></p>
                </li>
                <li>
                    <p>Medellín-Colombia </p>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- <div class="col s12">This div is 12-columns wide on all screen sizes</div> -->
            <div class="col s12 m6">
                <br>
                <div>
                    <img src="../../public/src/img/servicios/consulta_anticoncepcion.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                    <h3>Anticoncepción familiar</h3>
                    <p>
                        Planificar el número de hijos que deseas y determinar el intervalo temporal entre embarazos
                        corresponden a una excelente forma para hacer control de tus capacidades y necesidades en el
                        aspecto familiar y maternal. Este objetivo se logra mediante la aplicación de los diferentes
                        métodos anticonceptivos existentes y su adecuado uso, según las necesidades de cada pareja.
                    </p>

                    <a class="waves-effect waves-light btn-large"><i
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