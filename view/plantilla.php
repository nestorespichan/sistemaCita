<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Citas Médicas">
  <meta name="author" content="Néstor Espichán Lévano">
  <title>Citas Médicas | CitMed</title>
  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  <link class="js-stylesheet" href="assets/css/light.css" rel="stylesheet">
  <!--<script src="js/settings.js"></script>-->
</head>
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
  <?php
    if(isset($_SESSION["SesionActiva"]) && $_SESSION["SesionActiva"] == "true") {      
      echo '<div class="wrapper">';
        include "shared/sidebar.php";
        echo '<div class="main">';
          include "shared/navbar.php";
          echo '<main class="content">';
            echo '<div class="container-fluid p-0">';
              if (isset($_GET["ruta"])) {
                if ($_GET["ruta"] == "salir" || $_GET["ruta"] == "inicio" || $_GET["ruta"] == "rol" || $_GET["ruta"] == "usuario" || $_GET["ruta"] == "disponibilidad" || $_GET["ruta"] == "especialidad" || $_GET["ruta"] == "especialista" || $_GET["ruta"] == "registro") 
                if ($_GET["ruta"] == "salir") 
                {
                  session_destroy();
                  session_unset(); 
                  echo '<script>window.location = "inicio";</script>';
                }
                else if ($_GET["ruta"] == "inicio")  {
                  include "home.php";
                } else {
                  include $_GET["ruta"].".php";
                }
              }
            echo '</div>';
          echo '</main>';
          include "shared/footer.php";
        echo '</div>';
      echo '</div>';
    } else {
        include "login.php";
    } ?>

  <script src="assets/js/app.js"></script>
  <?php
    if(isset($_SESSION["SesionActiva"]) && $_SESSION["SesionActiva"] == "true") {      
      if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "rol") 
        {
          echo '<script src="js/rol.js"></script>';
        }
        if ($_GET["ruta"] == "disponibilidad") 
        {
          echo '<script src="js/disponibilidad.js"></script>';
        }
      }
    }
  ?>

</body>

</html>