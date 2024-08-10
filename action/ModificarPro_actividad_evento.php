<?php
 session_start();
 include('../config/config.php');
 $id_acti_eve=$_REQUEST['id'];
 //########## 1 #############
$id_usu=$_SESSION['user_id'];
$fecha=date('Y-m-d');
$titulo=$_POST['titulo'];
$direccion=$_POST['direccion'];
$nom_artis=$_POST['nombre_artis'];
$nacionalidad=$_POST['nacionali_artis'];
$id_sala=$_POST['id_sala'];
$total_entradas=$_POST['total_entradas'];
 $modifica=mysqli_query($con,"UPDATE actividad_evento SET fecha='$fecha',titulo='$titulo',direccion_evento='$direccion',nombre_artista='$nom_artis',nacionalidad='$nacionalidad',total_entradas='$total_entradas',id_sala='$id_sala',id_usuarios='$id_usu' where id_actividad_evento='$id_acti_eve'") or die ("error".mysqli_error());


//########## 2 #############
$consulta5=mysqli_query($con,"SELECT * from tipo_boletos where id_actividad_evento='$id_acti_eve'");
$cont=0;
while($row5=mysqli_fetch_array($consulta5)){
  $cont+=+1;
  if($cont==1){
    $id_ti_bo=$row5['id_tipo_boletos'];
  }
  if($cont==2){
    $id_ti_bo1=$row5['id_tipo_boletos'];
  }
  if($cont==3){
    $id_ti_bo2=$row5['id_tipo_boletos'];
  }
  if($cont==4){
    $id_ti_bo3=$row5['id_tipo_boletos'];
  }
}


if(isset($id_ti_bo) && $id_ti_bo!=""){
$id_boleto1=$_POST['id_boleto1'];
$cantidad1=$_POST['cantidad1'];
$valor1=$_POST['valor1'];
$destino1=$_POST['destino1'];
$modifica=mysqli_query($con,"UPDATE tipo_boletos SET id_boletos='$id_boleto1',cantidad='$cantidad1',precio='$valor1',localidad_destino='$destino1',id_actividad_evento='$id_acti_eve' where id_tipo_boletos='$id_ti_bo'") or die ("error".mysqli_error());
}
if(isset($id_ti_bo1) && $id_ti_bo1!=""){
$id_boleto2=$_POST['id_boleto2'];
$cantidad2=$_POST['cantidad2'];
$valor2=$_POST['valor2'];
$destino2=$_POST['destino2'];
$modifica=mysqli_query($con,"UPDATE tipo_boletos SET id_boletos='$id_boleto2',cantidad='$cantidad2',precio='$valor2',localidad_destino='$destino2',id_actividad_evento='$id_acti_eve' where id_tipo_boletos='$id_ti_bo1'") or die ("error".mysqli_error());
}
if(isset($id_ti_bo2) && $id_ti_bo2!=""){
$id_boleto3=$_POST['id_boleto3'];
$cantidad3=$_POST['cantidad3'];
$valor3=$_POST['valor3'];
$destino3=$_POST['destino3'];
$modifica=mysqli_query($con,"UPDATE tipo_boletos SET id_boletos='$id_boleto3',cantidad='$cantidad3',precio='$valor3',localidad_destino='$destino3',id_actividad_evento='$id_acti_eve' where id_tipo_boletos='$id_ti_bo2'") or die ("error".mysqli_error());
}
echo $id_boleto3;
echo $cantidad3;
echo $valor3;
echo $destino3;
echo $id_ti_bo2;
if(isset($id_ti_bo3) && $id_ti_bo3!=""){
$id_boleto4=$_POST['id_boleto4'];
$cantidad4=$_POST['cantidad4'];
$valor4=$_POST['valor4'];
$destino4=$_POST['destino4'];
$modifica=mysqli_query($con,"UPDATE tipo_boletos SET id_boletos='$id_boleto4',cantidad='$cantidad4',precio='$valor4',localidad_destino='$destino4',id_actividad_evento='$id_acti_eve' where id_tipo_boletos='$id_ti_bo3'") or die ("error".mysqli_error());
}

//########## 3 #############
  mysqli_close($con);
  header("Location:../proyectos.php");



 ?>
