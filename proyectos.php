<?php
    $title ="Proyectos - ";
    include('menu.php');

?>
<link rel="stylesheet" href="modal.css">
<link rel="stylesheet" href="esti_formu.css">
<link rel="stylesheet" href="jquery.dataTables.min.css">
    <div class="right_col" role="main"> <!-- page content -->
  <br><br><br><br>
  <!-- BOTON NUEVO -->
  <div>
      <button type="button" class="btn btn-primary" id="abrir" data-toggle="modal" data-target=".bs-example-modal-lg-new"><i class="fa fa-plus-circle"></i> Agregar Evento</button>
  </div>

  <div class="row">

      <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Proyectos</h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
              <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <br />
                <script src="ajax/ajax_localidad_boletos.js" charset="utf-8"></script>
                <script src="ajax/ajax_localidad_combo.js" charset="utf-8"></script>
                  <!-- CONTENIDO DE LA PAGINA -->
<?php include('modal/nuevo_proyecto.php'); ?>


<?php include('listas/lista_proyectos.php'); ?>
<script src="jquery.dataTables.min.js" charset="utf-8"></script>

<?php include('modal/modificar_proyecto.php'); ?>
<script src="funcions.js" charset="utf-8"></script>
<script src="modal.js"></script>

              </div>
          </div>
      </div>
  </div>

</div><!-- /page content -->

<?php include "footer.php" ?>
<script src="jquery.dataTables.min.js" charset="utf-8"></script>
