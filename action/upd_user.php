<?php

	//upd user by abisoft https://github.com/amnersaucedososa
	session_start();

	if (empty($_POST['mod_name'])) {
           $errors[] = "Nombre vacío";
        }else if (empty($_POST['mod_email'])){
			$errors[] = "Correo Vacio vacío";
		} else if ($_POST['mod_status']==""){
			$errors[] = "Selecciona el estado";
		}else if (
			!empty($_POST['mod_name']) &&
			!empty($_POST['mod_email']) &&
			$_POST['mod_status']!=""
		){

		include "../config/config.php";//Contiene funcion que conecta a la base de datos

		$name=$_POST["mod_name"];
		$email=$_POST["mod_email"];
		$password=$_POST["password"];
		$status=intval($_POST['mod_status']);
		$id=$_POST['mod_id'];

		$sql="UPDATE usuarios SET apellidos='$name', correo='$email' WHERE id_usuarios='$id'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Datos actualizados satisfactoriamente.";

				// update password by abisoft
				if($_POST["password"]!=""){
					$update_passwd=mysqli_query($con,"UPDATE usuarios set clave='$password' where id_usuarios='$id'");
					if ($update_passwd) {
						$messages[] = " Y la Contraseña ah sido actualizada.";
					}
				}

			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}

		if (isset($errors)){

			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){

				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>
