<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Datos generales</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Mi mascota</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <!-- Main content -->
    <section class="content">
 <div class="row">

      <?php


      include "cajas/cajas.php"


      ?>
      
    </div>


</div>

      <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="vistas/img/plantilla/descarga.jpeg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina</h3>

              <p class="text-muted text-center">Pitbull Terrier</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>peso</b> <a class="pull-right">5.3 KG</a>
                </li>
                <li class="list-group-item">
                  <b>comidas diarias</b> <a class="pull-right">3</a>
                </li>
                <li class="list-group-item">
                  <b>Porcion en gramos</b> <a class="pull-right">400 Gr</a>
                </li>
              </ul>

            
              <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalAgregarComidas">Configurar horario de comida</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <div class="col-md-2"></div>
     
      </div>
      <!-- /.row -->

    </section>
      </div>
      <!-- /.box-body -->
   
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--=====================================
MODAL AGREGAR HORARIO
======================================-->

<div id="modalAgregarComidas" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" class="formularioHora">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar horario de comida</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg numeroComidas" name="nuevoHorario">
                  
                  <option value="">Selecionar numero de comidas</option>

                  <option value="1">1</option>

                  <option value="2">2</option>

                  <option value="3">3</option>

                  <option value="4">4</option>

                  <option value="5">5</option>

                </select>
              </div>

            </div>

            <!-- ENTRADA PARA EL HORARIO -->
              <div id="mostrar" class="mostrar" style="display:none;">

             <div class="form-group mostrar" id="mostrar" style="display:none;">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <div class="horarioComidas">

                    <input type="time" class="form-control input-lg" name="nuevoHorario" placeholder="Ingresar usuario" required>

                  
                </div>

              
              </div>

            </div>

            <!-- ENTRADA PARA LA PORCION -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar porcion en gramos" required>
                

              </div>

            </div>


            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 200 MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

      </form>

    </div>

  </div>

</div>