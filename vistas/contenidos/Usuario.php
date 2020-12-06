<?php include_once "vistas/contenidos/Pag_superior.php"; ?>
<div class="container">
   <section class="section">
      <h2 class="section-heading h1 pt-4 mb-5">Mantenimiento de Usuarios</h2>
      <form id="frm_usuario">
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12 mb-4">

                     <div class="form-group md-form">
                        <input type="text" id="contact-email" class="form-control" name="usuario" required>
                        <label for="contact-email" class="">Nombre de Usuario</label>
                     </div>
                     <div class="form-group md-form">
                        <input type="email" id="contact-name" class="form-control" name="nombre" required>
                        <label for="contact-name" class="">usuario@correo.com</label>
                     </div>
                     <div class="form-group md-form">
                        <input type="password" id="contact-Subject" class="form-control" name="clave" required>
                        <label for="contact-Subject" class="">Contraseña</label>
                     </div>
                     <div class="form-group">
                        <div class="text-muted">Tipo de Usuario</div>
                        <div class="md-form ml-4" style=" margin-top:-15px;">
                           <!-- Group of default radios - option 1 -->
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="consultas" name="tipo_usuario" value="1" checked>
                              <label class="custom-control-label" for="consultas"><span class="badge badge-primary">Consultas</span></label>
                           </div>
                           <!-- Group of default radios - option 2 -->
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="administrador" name="tipo_usuario" value="2">
                              <label class="custom-control-label" for="administrador"><span class="badge badge-secondary">Administrador</span></label>
                           </div>
                           <!-- Group of default radios - option 3 -->
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="super-administrador" name="tipo_usuario" value="3">
                              <label class="custom-control-label" for="super-administrador"><span class="badge badge-danger">Super Administrador</span></label>
                           </div>

                        </div>
                     </div>
                     <div class="form-group" style="margin-top:35px;">
                        <div class="text-muted">Imagen de Usuario</div>
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text btn-primary" id="inputGroupFileAddon01"><i class="far fa-file-image"></i></i></span>
                           </div>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="foto_usuario" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="foto_usuario">Elegir Archivo</label>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="card-footer text-muted">
               <div class="row">
                  <button type="submit" class="btn btn-primary btn-sm">Registrar</button>
                  <button type="submit" class="btn btn-secondary btn-sm">Modificar</button>
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
               </div>
            </div>
         </div>
      </form>
</div>
</section>

</div>
<?php include_once "vistas/contenidos/Pag_inferior.php"; ?>