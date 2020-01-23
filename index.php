<!DOCTYPE html>
<html lang="en">

<head>
  <?php $title_website = "Ginecoloca obstetra"; ?>
  <?php include './backend/template_parts/head.php'; ?>
  <link rel="stylesheet" href="./public/src/css/fold.css">
</head>

<body>

  <?php include './backend/template_parts/header.php'; ?>

  <div id="home" class="col s12">
    <?php include './backend/pages/home.php'; ?>
  </div>

  <div id="doctora" class="col s12">
  <?php include './backend/pages/doctora_information.php'; ?>
  </div>

  <div id="services" class="col s12">
  <?php include './backend/pages/services.php'; ?>
  </div>

  <div id="rejuvchip" class="col s12">
  <?php include './backend/pages/rejuv_chip.php'; ?>
  </div>
  <div id="blog" class="col s12">Blog</div>
  <div id="contacto" class="col s12">Contacto</div>

  <?php include './backend/template_parts/footer.php'; ?>

  <!-- Compiled and minified JavaScript -->
  <script src="./public/src/js/materialize.min.js"></script>
  <script>
    M.AutoInit();
  </script>
</body>

</html>