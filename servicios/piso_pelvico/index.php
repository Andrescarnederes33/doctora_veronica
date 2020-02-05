<!DOCTYPE html>
<html lang="es">

<head>
    <?php $title_website = "Piso pélvico" ?>
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
                    <img src="../../public/src/img/servicios/piso_pelvico.png" alt="" width="100%">
                </div>
            </div>
            <div class="col s12 m6">

                <div>
                    <h3>Piso Pélvico</h3>
                    <p>
                    Existen diferentes patologias en el transcurso de la vida donde se puede ver afectado el piso
pelvico.
<br><br>
                    - EL PROLAPSO GENITAL significa la caida de los organos pelvicos, en donde
podemos tener descenso del utero, vejiga o recto , uno de los sintomas inciales es la
senacion de bola en tu parte intima. Su reparacion dependiente el grado de
severidad, existen opciones desde la fisioterapia de piso pelvico , pesarios y cirugia.
<br><br>
- Otra de las patologias del suelo pelvico es LA INCONTINENCIA URINARIA ,
estas existen de tres tipos urgencias, de esfuerzo y mixta.
<br><br>
- LESIONES DEL PERINE O ANO despues de la atencion del parto, la reparacion se
debe realizar por medicos ginecologos entrenados en suelo pelvico.
En mi consulta puedo orientar en estas patologias y dar diferentes opciones de tratamiento.                 
                    </p>

                    <a href="/contacto?q=0" target="_blank" rel="noopener noreferrer nofollow" class="waves-effect waves-light btn-small"><i
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