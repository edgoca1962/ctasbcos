<!DOCTYPE html>
<html lang="es">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="<?= $controlador->get_atributo("descripcion"); ?>">
   <meta name=" keywords" content="<?= $controlador->get_atributo("palabras_claves"); ?>">
   <title><?= $plantilla->get_atributo("titulo") . " | " . $controlador->get_atributo("titulo"); ?></title>
   <!--icon -->
   <link rel="icon" href="<?= $plantilla->get_atributo("icono"); ?>">
   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/7a591c4a95.js" crossorigin="anonymous"></script>
   <!-- Google Font: Source Sans Pro AdminLTE-->
   <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
   <!-- Google Fonts Roboto MDB-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- Theme style AdminLTE-->
   <link rel="stylesheet" href="<?= $plantilla->get_atributo('ruta_dominio') . 'vistas/dist/css/adminlte.min.css' ?>">
   <!-- Theme style Material Design Bootstrap -->
   <link rel="stylesheet" href="<?= $plantilla->get_atributo('ruta_css'); ?>mdb.min.css">
   <!-- SweetAlert2 -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <!-- Chart.Js -->
   <script src="<?= $plantilla->get_atributo('ruta_dominio') . 'vistas/plugins/chart.js/Chart.bundle.min.js' ?>"></script>
   <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
   <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
   <script src="https://unpkg.com/dropzone"></script>
   <script src="https://unpkg.com/cropperjs"></script>

</head>

<body class="hold-transition sidebar-mini">

   <!-- class="hold-transition sidebar-mini" -->
   <?php include "vistas/contenidos/" . $controlador->get_atributo('vista'); ?>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src=" https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   <!-- AdminLTE App -->
   <script src="<?= $plantilla->get_atributo('ruta_dominio') . 'vistas/dist/js/adminlte.min.js' ?>"></script>
   <!-- JQuery UI -->
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
   <!-- Bootstrap tooltips -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <!-- Bootstrap core JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!-- MDB core JavaScript -->
   <script type="text/javascript" src="<?= $plantilla->get_atributo('ruta_js'); ?>mdb.min.js"></script>
   <!-- Your custom scripts (optional) -->
   <script type="text/javascript" src="<?= $plantilla->get_atributo('ruta_js'); ?>Jscript.js"></script>
</body>

</html>