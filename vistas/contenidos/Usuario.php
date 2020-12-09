<?php include_once "vistas/contenidos/Pag_superior.php"; ?>
<div class="container">
   <section class="section">
      <h2 class="section-heading h1 pt-4 mb-5">Mantenimiento de Usuarios</h2>
      <form id="frm_usuario" enctype="multipart/form-data">
         <div class="card">

            <div class="card-body">

               <div class="row">
                  <div class="col-sm-6">
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
                  </div>
                  <div class="col-sm">
                     <div class="container">
                        <div class="form-group">
                           <div class="text-muted" style="margin-top: 30px;">Tipo de Usuario</div>
                           <div class="md-form ml-4">
                              <div class="custom-control custom-radio">
                                 <input type="radio" class="custom-control-input" id="consultas" name="tipo_usuario" value="1" checked>
                                 <label class="custom-control-label" for="consultas"><span class="badge badge-primary">Consultas</span></label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" class="custom-control-input" id="administrador" name="tipo_usuario" value="2">
                                 <label class="custom-control-label" for="administrador"><span class="badge badge-secondary">Administrador</span></label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" class="custom-control-input" id="super-administrador" name="tipo_usuario" value="3">
                                 <label class="custom-control-label" for="super-administrador"><span class="badge badge-danger">Super Administrador</span></label>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="col-sm text-centered justify-content-center">
                     <div class=" text-muted" style="margin-top: 30px;">Click para imagen del usuario</div>
                     <div class="col-lg-8">&nbsp;</div>
                     <div class="col-lg-8">
                        <div class="image_area" style="margin-top: -20px;">
                           <form method="post">
                              <label for="upload_image">
                                 <img src="./vistas/img/usuarios/generico.png" id="uploaded_image" class="img-fluid img-circle" />
                                 <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                              </label>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title">Ajustar Imagen de Perfil</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="img-container">
                                 <div class="row">
                                    <div class="col-md-8">
                                       <img src="" id="sample_image" class="image-fluid" />
                                    </div>
                                    <div class="col-md-4">
                                       <div class="preview"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button type="button" id="crop" class="btn btn-primary">Ajustar</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
            <div class="card-footer text-muted">
               <div class="row justify-content-center">
                  <button type="submit" class="btn btn-primary btn-sm">Registrar</button>
                  <button type="submit" class="btn btn-secondary btn-sm">Modificar</button>
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
               </div>
            </div>
         </div>
      </form>
   </section>

</div>
<?php include_once "vistas/contenidos/Pag_inferior.php"; ?>