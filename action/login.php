<?php
	session_start();

	if (isset($_POST['token']) && $_POST['token']!='') {

	//Contiene las variables de configuracion para conectar a la base de datos
	include "../config/config.php";


	$email=$_POST["email"];
	$password=$_POST["password"];

    $query = mysqli_query($con,"SELECT * FROM usuarios WHERE correo ='".$email."' and clave='".$password."' ")or die("Error al consultar " . mysqli_error());

		if ($row = mysqli_fetch_assoc($query)) {
        if ($row['id_estado']==1) {
					$_SESSION['user_id'] = $row['id_usuarios'];
					$_SESSION['nom_ape'] = $row['nombres']." ".$row['apellidos'];
					$_SESSION['id_tipoU'] = $row['id_tipo_usuario'];
					$_SESSION['id_privi'] = $row['id_privilegio'];
					header("location: ../inicio.php");
        }else{
					$invalid=sha1(md5("contrasena y email invalido"));
					header("location: ../index.php?invalid=$invalid");
				}

		}else{
			$invalid=sha1(md5("contrasena y email invalido"));
			header("location: ../index.php?invalid=$invalid");
		}
	}else{
		header("location: ../");
	}

?>
