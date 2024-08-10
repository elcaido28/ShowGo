<?php
include('../config/config.php');
$salida="";
if(isset($_POST['consul'])){
  $bus=$_POST['consul'];

  $consulta5=mysqli_query($con,"SELECT * from tipo_salas where id_sala='$bus'");
    while($row5=mysqli_fetch_array($consulta5)){
     $salida.= "<option>".$row5['nombre_localidad']."</option>";  
   }

}
echo $salida;

 ?>
