<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title_website = "Blog -> dispositivos intrauterinos" ?>
    <?php include '../../backend/template_parts/head_subpages.php'; ?>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <div class="col s12">
                <!-- <a href="/" class="breadcrumb">&nbsp;Dra. Verónica Garcia Bedoya</a> -->
                <a href="/blog" class="breadcrumb">&nbsp;Blog</a>
                <a href="./" class="breadcrumb">Dispositivo intrauterino</a>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div align="center">
            <img src="../../public/src/img/post/viajar_en_avion.jpeg" alt="" width="80%">
        </div>

        <div style="margin:0 auto;max-width:750px;">

            <?php include '../../backend/template_parts/comments.php'; ?>
            <br>
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