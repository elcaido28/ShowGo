<div id="miModal" class="modal">
  <div class="flex" id="flex">
    <div class="contenido-modal">
      <div class="modal-body">
        <div class="cerrar">
           <span class="close" id="close">&times;</span>
        </div>
          <form id="formulario" class="formulario" action="action/guardar_actividad_evento.php" method="post">
            <ul id="progress" >
              <li class="activo">Crear Evento</li>
              <li>Asignar Sala</li>
              <li>Asignar Boletos</li>
            </ul>
            <fieldset class="fieldset_normal">
              <h2>Nuevo Evento</h2>
              <hr>
              <!-- <h3>algunas configuraciones</h3> -->
              <div class="cont_cajas">
                <label class="etiq_caja">Nombre del Evento</label>
                <input type="text" name="titulo" value="" placeholder="Nombre del Evento o Titulo o">
              </div>
              <div class="cont_cajas">
                <label class="etiq_caja">Direccion</label>
              <input type="txt" name="direccion" value="" placeholder="Direccion">
              </div>
              <div class="cont_cajas">
                <label class="etiq_caja">Nombre de Artista</label>
              <input type="text" name="nombre_artis" value="" placeholder="Nombre de Artista">
              </div>
              <div class="cont_cajas">
                <label class="etiq_caja">Nacionalidad de artista</label>
              <input type="text" name="nacionali_artis" value="" placeholder="Nacionalidad de artista">
              </div>

              <input id="pase1" type="submit" name="next" value="Proximo" class="next acao">
            </fieldset>

            <fieldset class="fieldset_normal">
              <h2>Asignar Sala</h2>
              <hr>
              <!-- <h3>redes sociales</h3> -->
              <div class="cont_cajas">
                <label class="etiq_caja">Seleccione una Sala</label>
                <select class="F_combo" id="local_bolet" name="id_sala" required ><option value="" >-SELECCIONE-</option>
               <?php $consulta4=mysqli_query($con,"SELECT * from salas");
                  while($row4=mysqli_fetch_array($consulta4)){
                  echo "<option value='".$row4['id_sala']."'>"; echo $row4['nombre']; echo "</option>"; } ?> </select>
              </div><div class="cont_caja2" id="cont_localidad_bol"></div><br>

              <input id="pase2" type="submit" name="prev" value="anterior" class="prev acao">
              <input id="pase3" type="submit" name="next" value="Proximo" class="next acao">
            </fieldset>


            <fieldset class="fieldset_grande">
              <h2>Asignar Boletos</h2>
              <hr>

              <!-- <h3>inormacion personal</h3> -->
              <div class="cont_caja2">
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Tipo de Boleto</label>
                <select class="F_combo" name="id_boleto" required ><option value="" >-SELECCIONE-</option>
               <?php $consulta5=mysqli_query($con,"SELECT * from boletos");
                  while($row5=mysqli_fetch_array($consulta5)){
                  echo "<option value='".$row5['id_boletos']."'>"; echo $row5['nombre']; echo "</option>"; } ?> </select>
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Cantidad </label>
              <input type="txt" name="cantidad" value="" placeholder="Cantidad" required>
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Valor del Boleto</label>
              <input type="txt" name="valor" value="" placeholder="Valor del Boleto" required>
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Destino</label>
                <select class="F_combo" name="destino" required ><option value="" >-SELECCIONE-</option></select>
              </div>
              </div>
              <div class="cont_caja2">
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Tipo de Boleto</label>
                <select class="F_combo" name="id_boleto1"  ><option value="" >-SELECCIONE-</option>
               <?php $consulta5=mysqli_query($con,"SELECT * from boletos");
                  while($row5=mysqli_fetch_array($consulta5)){
                  echo "<option value='".$row5['id_boletos']."'>"; echo $row5['nombre']; echo "</option>"; } ?> </select>
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Cantidad </label>
              <input type="txt" name="cantidad1" value="" placeholder="Cantidad" >
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Valor del Boleto</label>
              <input type="txt" name="valor1" value="" placeholder="Valor del Boleto" >
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Destino</label>
                <select class="F_combo" id="destino1" name="destino1" ><option value="" >-SELECCIONE-</option>
                </select>
              </div>
              </div>
              <div class="cont_caja2">
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Tipo de Boleto</label>
                <select class="F_combo" name="id_boleto2" ><option value="" >-SELECCIONE-</option>
               <?php $consulta5=mysqli_query($con,"SELECT * from boletos");
                  while($row5=mysqli_fetch_array($consulta5)){
                  echo "<option value='".$row5['id_boletos']."'>"; echo $row5['nombre']; echo "</option>"; } ?> </select>
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Cantidad </label>
              <input type="txt" name="cantidad2" value="" placeholder="Cantidad" >
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Valor del Boleto</label>
              <input type="txt" name="valor2" value="" placeholder="Valor del Boleto" >
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Destino</label>
                <select class="F_combo" id="destino2" name="destino2" ><option value="" >-SELECCIONE-</option></select>
              </div>
              </div>
              <div class="cont_caja2">
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Tipo de Boleto</label>
                <select class="F_combo" name="id_boleto3" ><option value="" >-SELECCIONE-</option>
               <?php $consulta5=mysqli_query($con,"SELECT * from boletos");
                  while($row5=mysqli_fetch_array($consulta5)){
                  echo "<option value='".$row5['id_boletos']."'>"; echo $row5['nombre']; echo "</option>"; } ?> </select>
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Cantidad </label>
              <input type="txt" name="cantidad3" value="" placeholder="Cantidad" >
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Valor del Boleto</label>
              <input type="txt" name="valor3" value="" placeholder="Valor del Boleto" >
              </div>
              <div class="cont_cajas_peque2">
                <label class="etiq_caja">Destino</label>
                <select class="F_combo" name="destino3" ><option value="" >-SELECCIONE-</option> </select>
              </div>
              </div>

              <div class="cont_cajas">
                <label class="etiq_caja">Total de Boletos</label>
              <input type="txt" name="total_entradas" value="" placeholder="Total de Boletos a Pedir">
              </div>
              <input id="pase4" type="submit" name="prev" value="anterior" class="prev acao">
              <input id="enviar" type="submit" name="enviar" value="Enviar" class="acao">
            </fieldset>

          </form>
          <script src="funcions.js" charset="utf-8"></script>


  </div>
</div>
</div>
</div>
