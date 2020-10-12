<?php
	if (empty($_POST['id'])){
		$errors[] = "estado está vacío.";
	} elseif (!empty($_POST['id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$id = intval($_POST["id"]);
    $estado = intval($_POST["email"]);
    $passwd = $_POST["passwd"]; 
	// UPDATE data into database
    $sql = "UPDATE datospersonales SET estado='".$estado."' WHERE id='".$id."'";
	$query = mysqli_query($con,$sql);
	mysqli_set_charset($con,"UTF8");
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
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