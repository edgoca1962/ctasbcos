<?php include_once "vistas/contenidos/Pag_superior.php"; ?>

<div class="row m-3">
   <div class="col-md-6">
      <div class="card text-white bg-success">
         <div class="card-header">Saldos en Colones</div>
         <div class="card-body">
            <h5 class="card-title">Saldo al: AAAA-MM-DD</h5>
            <p class="card-text">$500.00</p>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="card text-white bg-warning">
         <div class="card-header">Saldos en Dólares</div>
         <div class="card-body">
            <h5 class="card-title">Saldo al: AAAA-MM-DD</h5>
            <p class="card-text">¢1 000.00</p>
         </div>
      </div>
   </div>
</div>
<div class="row m-3">
   <section class="col-lg-6 connectedSortable ui-sortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card">
         <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title" style="color:dodgerblue">
               <i class="fas fa-chart-pie mr-1"></i>
               Ingresos y Egresos (últ. 12 meses)
            </h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <div class="tab-content p-0">
               <!-- Morris chart - Sales -->
               <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div class="chartjs-size-monitor">
                     <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                     </div>
                     <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                     </div>
                  </div>
                  <canvas id="ingresos-egresos" height="600" style="height: 300px; display: block; width: 901px;" width="1802" class="chartjs-render-monitor"></canvas>
               </div>
            </div>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </section>
   <section class="col-lg-6 connectedSortable ui-sortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card">
         <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title" style="color:dodgerblue">
               <i class="fas fa-chart-pie mr-1"></i>
               Egresos acumulados por rubro de gasto
            </h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <div class="tab-content p-0">
               <!-- Morris chart - Sales -->
               <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div class="chartjs-size-monitor">
                     <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                     </div>
                     <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                     </div>
                  </div>
                  <canvas id="egresos-rubro" height="600" style="height: 300px; display: block; width: 901px;" width="1802" class="chartjs-render-monitor"></canvas>
               </div>
            </div>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </section>
</div>
<?php include_once "vistas/contenidos/Pag_inferior.php"; ?>