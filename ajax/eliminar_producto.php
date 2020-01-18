<?php
	if (empty($_POST['delete_id'])){
		$errors[] = "Id vacío.";
	} elseif (!empty($_POST['delete_id'])){
	require_once ("../sesion/conexion.php");//Contiene funcion que conecta a la base de datos
	
    $id_producto=intval($_POST['delete_id']);
	

	// eliminacion
    $sql = "DELETE FROM  productos WHERE Nro='$id_producto'";
    $query = mysqli_query($con,$sql);
    // si fue eliminado 
    if ($query) {
        $messages[] = "El producto ha sido eliminado con éxito.";
    } else {
        $errors[] = "No se ha podido  eliminar. Por favor, regrese y vuelva a intentarlo.";
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