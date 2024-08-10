<script src="js/jquery/dist/jquery.min.js"></script>
<script src="jquery.dataTables.min.js" charset="utf-8"></script>

<div class="cont_tabla">
  <table class="tabla" >
  		<thead>
  			<tr>
        <th>NOMBRE DEL EVENTO</th>
        <th>DIRECCIÓN DEL EVENTO</th>
        <th>NOMBRE DEL ARTISTA</th>
        <th>NACIONALIDAD DEL ARTISTA</th>
        <th>TOTAL DE ENTRADAS</th>
        <th>NOMBRE DE SALA</th>
  			<th>EDITAR / BORRAR</th>
  			</tr>
        </thead>
        <tr>
          <?php

          $consulta=mysqli_query($con,"SELECT * from actividad_evento AE inner join salas S on S.id_sala=AE.id_sala ORDER BY AE.fecha DESC ");
           while($row=mysqli_fetch_array($consulta)){
          ?>
                <td><?php echo $row['titulo']; ?> </td>
                <td><?php echo $row['direccion_evento'] ?> </td>
                <td><?php echo $row['nombre_artista']; ?> </td>
                <td><?php echo $row['nacionalidad'] ?> </td>
                <td><?php echo $row['total_entradas'] ?> </td>
                <td><?php echo $row['nombre'] ?> </td>
          			<td> <div class="cont_tbn_tb"><button type="button" id="<?php echo $row['id_actividad_evento'];?>" title="Modificar" class="modificar" name="button"><i class="far fa-edit"> </i></button>
                <button type="button" class="eliminar" title="Eliminar" name="button"><i class="far fa-trash-alt"> </i></button></div></td>
    </tr>
    <script type="text/javascript">
      $('.eliminar').click(function(e){
       if (confirm("¿Está segur@ de ELIMINAR?")){
          document.location.href="eliminar_logi_proyecto.php?id=<?php echo $row['id_actividad_evento'];?>";
        }else{
          document.location.href="proyectos.php";
        }
      })
    </script>
    <?php
    $id_proy="";
    if (isset($_REQUEST['id'])) {
       $id_proy=$_REQUEST['id'];
    }
     ?>

          <?php
          			}
          ?>
  </table>
</div>
<script>
  $(document).ready( function () {
  $('.tabla').DataTable();
    } );
</script>
