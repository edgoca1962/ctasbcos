<div class="modal fade show" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true" data-gtm-vis-recent-on-screen-2340190_1302="10959" data-gtm-vis-first-on-screen-2340190_1302="10959" data-gtm-vis-total-visible-time-2340190_1302="100" data-gtm-vis-has-fired-2340190_1302="1" style="padding-right: 15px; display: block;">
   <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
      <!--Content-->
      <div class="modal-content">

         <!--Header-->
         <div class="modal-header">
            <img src="<?= $plantilla->get_atributo('ruta_img_generales'); ?>Semilla.jpg" class="rounded-circle img-responsive" alt="Logo" style="border: 5px solid white;">
         </div>
         <!--Body-->
         <div class="modal-body text-center mb-1">
            <form id="frm_ingreso">
               <h5 class="mt-1 mb-2"><strong>Semilla CR</strong></h5>

               <div class="md-form ml-0 mr-0">
                  <input type="email" id="usuario" Name="usuario" class="form-control form-control-sm validate ml-0" required="">
                  <label data-error="wrong" data-success="right" for="usuario" class="ml-0" style="font-weight:normal;">Ingresar usuario</label>
               </div>
               <div class="md-form ml-0 mr-0">
                  <input type="password" id="clave" Name="clave" class="form-control form-control-sm validate ml-0" required="">
                  <label data-error="wrong" data-success="right" for="clave" class="ml-0" style="font-weight:normal;">Ingresar contraseña</label>
               </div>

               <div class="text-center mt-4">
                  <button class="btn btn-cyan btn-sm mt-1 waves-effect waves-light">Ingresar <i class="fas fa-sign-in ml-1"></i></button>
               </div>
            </form>
         </div>

      </div>
      <!--/.Content-->
   </div>
</div>