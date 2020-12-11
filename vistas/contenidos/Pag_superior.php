   <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="<?= $plantilla->get_atributo('ruta_dominio') . 'Inicio' ?>" class="nav-link">Inicio</a>
            </li>
         </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="<?= $plantilla->get_atributo('ruta_dominio') . 'Inicio' ?>" class="brand-link">
            <img src="<?= $plantilla->get_atributo('ruta_img_generales') . 'Semilla.jpg' ?>" alt="Semilla Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Semilla CR</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="<?= $plantilla->get_atributo("ruta_img_usrs") . $controlador->get_atributo("foto_usuario"); ?>" class="img-circle elevation-2" alt="Imagen del Usuario">
               </div>
               <div class="info">
                  <a href="#" class="d-block"><?= $controlador->get_atributo("nombre_usuario"); ?></a>
               </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2 text-sm">
               <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <?php if ($controlador->get_atributo("tipo_usuario") >= 1) : ?>
                     <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                              Consultas
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Panel de Control</p>
                                 <span class="right badge badge-danger">New</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Capturar Movimientos</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Clasificar Movimientos</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Consultar Movimientos</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                  <?php endif ?>
                  <?php if ($controlador->get_atributo("tipo_usuario") >= 2) : ?>
                     <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                           <i class="fas fa-cogs"></i>
                           <p>
                              Configurar Parámetros
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Bancos</p>
                                 <span class="right badge badge-danger">New</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Cuentas Bancarias</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tipos Movimientos</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Rubros</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                  <?php endif ?>
                  <?php if ($controlador->get_atributo("tipo_usuario") >= 3) : ?>
                     <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                           <i class="fas fa-cogs"></i>
                           <p>
                              Mantenimiento del Sitio
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                           <li class="nav-item">
                              <a href="<?= $plantilla->get_atributo("ruta_dominio"); ?>Usuario" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Usuarios</p>
                                 <span class="badge badge-danger navbar-badge"><i class="fas fa-bell"></i> 3</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Rutas</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Elementos</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Entidades</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                  <?php endif ?>
                  <?php if ($controlador->get_atributo("tipo_usuario") >= 4) : ?>
                     <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                           <i class="fas fa-cogs"></i>
                           <p>
                              Pruebas
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                           <li class="nav-item">
                              <a href="<?= $plantilla->get_atributo("ruta_dominio"); ?>Usuario" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Manejo Imagenes</p>
                                 <span class="badge badge-danger navbar-badge"><i class="fas fa-bell"></i> 3</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                  <?php endif ?>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Inicio</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $plantilla->get_atributo('ruta_dominio'); ?>Inicio">Inicio</a></li>
                        <li class="breadcrumb-item active"><a href="<?= $plantilla->get_atributo('ruta_dominio'); ?>Sesion/cierra_sesion">Cerrar Sesión</a></li>
                     </ol>
                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->