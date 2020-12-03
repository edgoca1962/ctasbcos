<div class="modal-dialog text-center" id="dialogo">
   <div class="col-sm-10 sec-prin">
      <div class="modal-content">
         <div class="col-12 img-logo">
            <img src="<?= $plantilla->get_atributo('ruta_img_generales'); ?>Semilla.jpg" class="rounded-circle img-responsive" alt="Avatar photo">
         </div>
         <form class="col-12" id="frm_ingreso">
            <div class="form-group" id="usuario">
               <input class="form-control m-2" type="email" Name="usuario" placeholder="correo@email.com" required="">
            </div>
            <div class="form-group" id="clave">
               <input class="form-control m-2" type="password" Name="clave" placeholder="Clave" required="">
            </div>
            <button class="btn btn-primary" type="submit"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
         </form>
         <div class="col-12 olvido">
            <!-- <a href="">¡Recordar clave!</a> -->
         </div>
      </div>
   </div>
</div>