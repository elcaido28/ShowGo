<?php

	//update profile by abisoft https://github.com/amnersaucedososa
	session_start();

	if (!isset($_SESSION['user_id']) && $_SESSION['user_id']==null) {
		header("location: ../");
	}

	include "../config/config.php";


	$id = $_SESSION['user_id'];
	$status=0;
	if(isset($_POST['status'])){$status=1;}

	$name = $_POST['name'];
	$email = $_POST['email'];


	if(isset($_POST['token'])){
		$update=mysqli_query($con,"UPDATE usuarios SET apellidos='$name', correo='$email' WHERE id_usuarios='$id' ");

		if ($update) {
			$success=sha1(md5("datos actualizados"));
            header("location: ../inicio.php?success=$success");
	   	}else{
	   		// echo "error";
	   	}

	   	// CHANGE PASSWORD
		if($_POST['password']!=""){

			$password = $_POST['password'];
			$new_password = $_POST['new_password'];
			$confirm_new_password = $_POST['confirm_new_password'];

			if($_POST['new_password']==$_POST['confirm_new_password']){

				$sql = mysqli_query($con,"SELECT * from usuarios where id_usuarios='$id'");
				while ($row = mysqli_fetch_array($sql)) {
			    	$p = $row['password'];
				}

				if ($p==$password){ //comprobamos que la contraseña sea igual ala anterior

					$update_passwd=mysqli_query($con,"UPDATE usuarios set clave='$password' where id_usuarios='$id' ");
					if ($update_passwd) {
						$success_pass=sha1(md5("contrasena actualizada"));
            			header("location: ../inicio.php?success_pass=$success_pass");
					}
				}else{
					$invalid=sha1(md5("la contrasena no coincide la contraseña con la anterior"));
            		header("location: ../inicio.php?invalid=$invalid");
				}
			}else{
				$error=sha1(md5("las nuevas  contraseñas no coinciden"));
            	header("location: ../inicio.php?error=$error");
			}
		}
	}else{
		header("location: ../");
	}

?>
