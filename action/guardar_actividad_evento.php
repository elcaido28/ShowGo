<?php
 session_start();
 include('../config/config.php');
 //########## 1 #############
$id_usu=$_SESSION['user_id'];
$fecha=date('Y-m-d');
$titulo=$_POST['titulo'];
$direccion=$_POST['direccion'];
$nom_artis=$_POST['nombre_artis'];
$nacionalidad=$_POST['nacionali_artis'];
$id_sala=$_POST['id_sala'];
$total_entradas=$_POST['total_entradas'];
$ingreso=mysqli_query($con,"INSERT into actividad_evento (fecha,titulo,direccion_evento,nombre_artista,nacionalidad,total_entradas,id_sala,id_usuarios) values ('$fecha','$titulo','$direccion','$nom_artis','$nacionalidad','$total_entradas','$id_sala','$id_usu')") or die ("error".mysqli_error());

//########## 2 #############
$consulta5=mysqli_query($con,"SELECT * from actividad_evento order by id_actividad_evento DESC");
while($row5=mysqli_fetch_array($consulta5)){
$id_acti_eve=$row5['id_actividad_evento'];
}

$id_boleto=$_POST['id_boleto'];
$cantidad=$_POST['cantidad'];
$valor=$_POST['valor'];
$destino=$_POST['destino'];
$ingreso=mysqli_query($con,"INSERT into tipo_boletos (id_boletos,cantidad,precio,localidad_destino,id_actividad_evento) values ('$id_boleto','$cantidad','$valor','$destino','$id_acti_eve')") or die ("error".mysqli_error());

if(isset($_POST['id_boleto1']) && $_POST['id_boleto1']!=""){
$id_boleto1=$_POST['id_boleto1'];
$cantidad1=$_POST['cantidad1'];
$valor1=$_POST['valor1'];
$destino1=$_POST['destino1'];
$ingreso=mysqli_query($con,"INSERT into tipo_boletos (id_boletos,cantidad,precio,localidad_destino,id_actividad_evento) values ('$id_boleto1','$cantidad1','$valor1','$destino1','$id_acti_eve')") or die ("error".mysqli_error());
}
if(isset($_POST['id_boleto2']) && $_POST['id_boleto2']!=""){
$id_boleto2=$_POST['id_boleto2'];
$cantidad2=$_POST['cantidad2'];
$valor2=$_POST['valor2'];
$destino2=$_POST['destino2'];
$ingreso=mysqli_query($con,"INSERT into tipo_boletos (id_boletos,cantidad,precio,localidad_destino,id_actividad_evento) values ('$id_boleto2','$cantidad2','$valor2','$destino2','$id_acti_eve')") or die ("error".mysqli_error());
}
if(isset($_POST['id_boleto3']) && $_POST['id_boleto3']!=""){
$id_boleto3=$_POST['id_boleto3'];
$cantidad3=$_POST['cantidad3'];
$valor3=$_POST['valor3'];
$destino3=$_POST['destino3'];
$ingreso=mysqli_query($con,"INSERT into tipo_boletos (id_boletos,cantidad,precio,localidad_destino,id_actividad_evento) values ('$id_boleto3','$cantidad3','$valor3','$destino3','$id_acti_eve')") or die ("error".mysqli_error());
}
//########## 3 #############
  mysqli_close($con);
  header("Location:../proyectos.php");



 ?>
