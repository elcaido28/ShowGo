<div id="miModal2" class="modal">
  <div class="flex" id="flex2">
    <div class="contenido-modal">
      <div class="modal-body">
        <div class="cerrar">
           <span class="close" id="close2">&times;</span>
        </div>

        <?php
        $id_ae="";
        if(isset($_REQUEST['id'])){
          $id_ae=$_REQUEST['id'];
        }
         $consulta1=mysqli_query($con,"SELECT * from actividad_evento AE inner join salas S on S.id_sala=AE.id_sala where id_actividad_evento='$id_ae'");
          $row1=mysqli_fetch_assoc($consulta1) ?>
        <form id="formulari" class="formulario" action="" method="post">
          <ul id="progress">
            <li class="activo">Modificar Evento</li>
            <li>Asignar Sala</li>
            <li>Asignar Boletos</li>
          </ul>
          <fieldset class="fieldset_normal">
            <h2>Modificar Evento</h2>
            <hr>
            <!-- <h3>algunas configuraciones</h3> -->
            <div class="cont_cajas">
              <label class="etiq_caja">Nombre del Evento</label>
              <input type="text" name="titulo" value="<?php echo $row1['titulo']; ?>" placeholder="Nombre del Evento o Titulo o">
            </div>
            <div class="cont_cajas">
              <label class="etiq_caja">Direccion</label>
            <input type="txt" name="direccion" value="<?php echo $row1['direccion_evento']; ?>" placeholder="Direccion">
            </div>
            <div class="cont_cajas">
              <label class="etiq_caja">Nombre de Artista</label>
            <input type="text" name="nombre_artis" value="<?php echo $row1['nombre_artista']; ?>" placeholder="Nombre de Artista">
            </div>
            <div class="cont_cajas">
              <label class="etiq_caja">Nacionalidad de artista</label>
            <input type="text" name="nacionali_artis" value="<?php echo $row1['nacionalidad']; ?>" placeholder="Nacionalidad de artista">
            </div>

            <input id="pase5" type="submit" name="next" value="Proximo" class="next acao">
          </fieldset>

          <fieldset class="fieldset_normal">
            <h2>Asignar Sala</h2>
            <hr>
            <!-- <h3>redes sociales</h3> -->
            <div class="cont_cajas">
              <label class="etiq_caja">Seleccione una Sala</label>
              <select class="F_combo" id="local_bolet2" name="id_sala" required ><option value="<?php echo $row1['id_sala']; ?>" ><?php echo $row1['nombre']; ?></option>
             <?php $consulta4=mysqli_query($con,"SELECT * from salas");
                while($row4=mysqli_fetch_array($consulta4)){
                echo "<option value='".$row4['id_sala']."'>"; echo $row4['nombre']; echo "</option>"; } ?> </select>
            </div><div class="cont_caja2" id="cont_localidad_bol2">

              <?php
               $sa=$row1['id_sala'];
                $di="";
               $consulta9=mysqli_query($con,"SELECT * from tipo_salas where id_sala='$sa'");
              while($row9=mysqli_fetch_array($consulta9)){

               $di.= '<div class="cont_cajas_peque"> <label class="etiq_caja">Nombre de Localidad</label>';
               $di.= '<input type="txt"  value="'.$row9['nombre_localidad'].'" >';
               $di.= '</div> <div class="cont_cajas_peque"> <label class="etiq_caja">Limite de Personas</label>';
               $di.= '<input type="txt" value="'.$row9['cantidad_limite'].'" > </div>';  }
               echo $di;
 ?>
            </div><br>

            <input id="pase6" type="submit" name="prev" value="anterior" class="prev acao">
            <input id="pase7" type="submit" name="next" value="Proximo" class="next acao">
          </fieldset>
          <fieldset class="fieldset_grande">
            <h2>Asignar Boletos</h2>
            <hr>

            <!-- <h3>inormacion personal</h3> -->
            <?php
            $conta="";
             $consulta2=mysqli_query($con,"SELECT * from tipo_boletos TB inner join boletos B on B.id_boletos=TB.id_boletos where TB.id_actividad_evento='$id_ae'");
              while($row2=mysqli_fetch_assoc($consulta2)){
                $conta++;?>
            <div class="cont_caja2">
            <div class="cont_cajas_peque2">
              <label class="etiq_caja">Tipo de Boleto</label>
              <select class="F_combo" name="id_boleto<?php echo $conta;?>" required ><option value="<?php echo $row2['id_boletos']; ?>" ><?php echo $row2['nombre']; ?></option>
             <?php $consulta5=mysqli_query($con,"SELECT * from boletos");
                while($row5=mysqli_fetch_array($consulta5)){
                echo "<option value='".$row5['id_boletos']."'>"; echo $row5['nombre']; echo "</option>"; } ?> </select>
            </div>
            <div class="cont_cajas_peque2">
              <label class="etiq_caja">Cantidad </label>
            <input type="txt" name="cantidad<?php echo $conta;?>" value="<?php echo $row2['cantidad']; ?>" placeholder="Cantidad" required>
            </div>
            <div class="cont_cajas_peque2">
              <label class="etiq_caja">Valor del Boleto</label>
            <input type="txt" name="valor<?php echo $conta;?>" value="<?php echo $row2['precio']; ?>" placeholder="Valor del Boleto" required>
            </div>
            <div class="cont_cajas_peque2">
              <label class="etiq_caja">Destino</label>
              <select class="F_combo" name="destino<?php echo $conta;?>" required ><option ><?php echo $row2['localidad_destino']; ?></option>
             <?php $consulta5=mysqli_query($con,"SELECT * from tipo_salas where id_sala='$sa'");
                while($row5=mysqli_fetch_array($consulta5)){
                echo "<option>"; echo $row5['nombre_localidad']; echo "</option>"; } ?> </select>
            </div>
          </div><?php } ?>
            <div class="cont_cajas">
              <label class="etiq_caja">Total de Boletos</label>
            <input type="txt" name="total_entradas" value="<?php echo $row1['total_entradas']; ?>" placeholder="Total de Boletos a Pedir">
            </div>
            <input id="pase8" type="submit" name="prev" value="anterior" class="prev acao">
            <input id="enviar2" type="submit" name="enviar" value="Enviar" class="acao">
          </fieldset>

        </form>
          <script src="funcions.js" charset="utf-8"></script>

          <script type="text/javascript">
            $('.modificar').click(function(e){
              let abrir2 = e.target.id;
              document.location.href="?id="+abrir2;
            })
            let abrir2 ='<?php echo $id_proy; ?>';
            if(abrir2!=""){
              var url_dato="action/ModificarPro_actividad_evento.php?id="+abrir2;
              document.getElementById('formulari').action=url_dato;
              //alert(url_dato);
              //$("#formulari").attr("action",url_dato);
              let flex2 = document.getElementById('flex2');
              let cerrar2 = document.getElementById('close2');
              modal2 = document.getElementById('miModal2');

              modal2.style.display = 'block';
              cerrar2.addEventListener('click', function(){
                  modal2.style.display = 'none';
                  document.location.href="proyectos.php";
              });
              window.addEventListener('click', function(e){
                  console.log(e.target);
                  if(e.target == flex){
                      modal2.style.display = 'none';
                      document.location.href="proyectos.php";

                  }
              });
            }
          </script>
  </div>
</div>
</div>
</div>
