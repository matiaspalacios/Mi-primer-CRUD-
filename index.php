<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>FrutosdelvalleGeneroso</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<br>
	<br>
	<br>
	<section class="jumbotron">
		<div class="container">
			<h1 class="titulo-blog">Frutos del Valle Generoso</h1>
			<p></p>
		</div>
	</section>
<div class="container">
	<section class="main row">
		<article class="col-xs-12 col-sm-8 col-md-9">
			<div class="container">

			<form action="usuario/validarUsuario.php" class="form-horizontal" method="POST">
				<h3 class="text-center">Ingresar a cuenta</h3>
				<div class="form-group has-primary">
				  <!--form-group encierra los contenidos y dar espaciado-->

				<label for="mail" class="control-label col-md-5">Usuario:</label>
					<div class="col-md-3">
					<input class="form-control" type="text" name="mail" id="mail" placeholder="Escribe tu correo" maxlength ="30" required="No ha ingresado sus datos correctamente.">
					</div>
				</div>
				
				<div class="form-group has-primary">
				<label for="pass" class="control-label col-md-5">Clave:</label>	
					<div class="col-md-3">
						<input class="form-control" type="password" name="pass" id="pass" placeholder="Escribe tu clave" maxlength="12" required="No ha ingresado sus datos correctamente.">
					</div>
				</div>

				<div class="form-group">
					<div class="checkbox col-md-2 col-md-offset-5">
						<label>
							<input type="checkbox">Recuerdame
						</label>
					</div>
				</div>	

				<div class="form-group">
					<div class="col-md-2 col-md-offset-5">
 					<button type="submit" id="btn" class="btn btn-primary" value="Ingresar"><span class="glyphicon glyphicon-ok"></span> Ingresar</button> 
 					</div>
				</div>

			
			</form>
			</div>
		</article>
		
	</section>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>