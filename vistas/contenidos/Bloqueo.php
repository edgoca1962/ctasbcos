<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
      <!--Content-->
      <div class="modal-content">

         <!--Header-->
         <div class="modal-header">
            <img src="<?= $plantilla->get_atributo("ruta_img_usrs") . $controlador->get_atributo("foto_usuario"); ?>" class="img-circle elevation-2" alt="Imagen del Usuario">
         </div>
         <!--Body-->
         <form id="frm_bloqueo">
            <div class="modal-body text-center mb-1">
               <h5 class="mt-1 mb-2"><?= $controlador->get_atributo("nombre_usuario"); ?></h5>
               <div class="md-form ml-0 mr-0">
                  <input type="password" type="text" id="form29" class="form-control form-control-sm validate ml-0" required>
                  <label data-error="wrong" data-success="right" for="form29" class="ml-0">Ingresar contraseña</label>
               </div>
               <div class="text-center mt-4">
                  <button class="btn btn-cyan mt-1">Desbloquear <i class="fas fa-sign-in ml-1"></i></button>
               </div>
            </div>
         </form>
      </div>
      <!--/.Content-->
   </div>
</div>
<!--Modal: Login with Avatar Form-->