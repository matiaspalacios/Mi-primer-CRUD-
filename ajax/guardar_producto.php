<?php
	if (empty($_POST['name'])){
		$errors[] = "Ingresa el nombre del producto.";
	} elseif (!empty($_POST['name'])){
	require_once ("../sesion/conexion.php");//Contiene funcion que conecta a la base de datos
	


    $prod_code = mysqli_real_escape_string($con,(strip_tags($_POST["code"],ENT_QUOTES)));
	$prod_name = mysqli_real_escape_string($con,(strip_tags($_POST["name"],ENT_QUOTES)));
	$prod_ctry = mysqli_real_escape_string($con,(strip_tags($_POST["category"],ENT_QUOTES)));
	$stock = intval($_POST["stock"]);
	
	

	//consulta para registrar los datos//
    $sql = "INSERT INTO productos(Nro, cod_producto, nombreproducto, descripcion, Peso) VALUES (NULL,'$prod_code','$prod_name','$prod_ctry','$stock')";
    $query = mysqli_query($con,$sql);
    // si el producto fue añadido//
    if ($query) {
        $messages[] = "El producto ha sido guardado con éxito.";
    } else {
        $errors[] = "Ha ocurrido un problema. Por favor, regrese y vuelva a intentarlo.";
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