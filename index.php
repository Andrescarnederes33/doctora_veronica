<!DOCTYPE html>
<html lang="en">

<head>
  <?php $title_website = "Ginecoloca obstetra"; ?>
  <?php include './backend/template_parts/head.php'; ?>
  <link rel="stylesheet" href="./public/src/css/fold.css">
  <style>
   audio{width:50%;margin:0 auto;border-radius:50px;}
        
        @media(max-width:900px){
            audio{
                width:90%;
            }
        }
        .intro_entrevista{
            max-width: 660px;text-align: justify;
        }
    @media(max-width:900px){
        .intro_entrevista{
            max-width: 330px;text-align: justify;
        }
    }    
  </style>
</head>

<body>

  <?php include './backend/template_parts/header.php'; ?>


  <div id="home" class="col s12">
    <?php include './backend/pages/home.php'; ?>
  </div>

  <div id="doctora" class="col s12">Doctora</div>
  <div id="services" class="col s12">Servicios</div>
  <div id="rejuvchip" class="col s12">Rejuv Chip</div>
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