<?php
include('../config/config.php');
$salida="";
if(isset($_POST['consul'])){
  $bus=$_POST['consul'];

$consulta4=mysqli_query($con,"SELECT * from tipo_salas where id_sala='$bus'");
while($row4=mysqli_fetch_array($consulta4)){

 $salida.= '<div class="cont_cajas_peque"> <label class="etiq_caja">Nombre de Localidad</label>';
 $salida.= '<input type="txt"  value="'.$row4['nombre_localidad'].'" >';
 $salida.= '</div> <div class="cont_cajas_peque"> <label class="etiq_caja">Limite de Personas</label>';
 $salida.= '<input type="txt" value="'.$row4['cantidad_limite'].'" > </div>';  }

}
echo $salida;

 ?>
