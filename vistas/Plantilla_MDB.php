<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="<?= $controlador->get_atributo("descripcion"); ?>">
  <meta name=" keywords" content="<?= $controlador->get_atributo("palabras_claves"); ?>">
  <title><?= $plantilla->get_atributo("titulo") . " | " . $controlador->get_atributo("titulo"); ?></title>
  <!--icon -->
  <link rel="icon" href="<?= $plantilla->get_atributo("icono"); ?>">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/7a591c4a95.js" crossorigin="anonymous"></script>
  <!-- Google Fonts Roboto -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= $plantilla->get_atributo('ruta_css'); ?>bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?= $plantilla->get_atributo('ruta_css'); ?>mdb.min.css">
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- ChartJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?= $plantilla->get_atributo('ruta_css'); ?>ingreso.css">
</head>

<body class="fixed-sn navy-blue-skin dark-bg-admin">

  <?php include_once $plantilla->get_atributo("ruta_contenidos") . $controlador->get_atributo("vista"); ?>

  <!-- jQuery -->
  <script type="text/javascript" src="<?= $plantilla->get_atributo('ruta_js'); ?>jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= $plantilla->get_atributo('ruta_js'); ?>popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= $plantilla->get_atributo('ruta_js'); ?>bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= $plantilla->get_atributo('ruta_js'); ?>mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="<?= $plantilla->get_atributo('ruta_js'); ?>Jscript.js"></script>

</body>

</html>