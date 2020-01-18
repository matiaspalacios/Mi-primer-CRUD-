<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['tipo_usuario']==2) {
	header("Location:principal.php");
}
?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>FrutosdelValleGeneroso</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="container">
		<header class="header">
			<div class="row">
			<?php
			include("include/intro.php");
			?>
			</div>
		</header>
	
	<?php
	include("include/barradesession.php");
	?>
	
	<div class="row">
		
			<div class="caption">
			<h2> Administración de usuarios registrados</h2>	
			<div class="well well-small">
			
			<h4>Tabla de Usuarios</h4>
				

				<?php
				require("conexion.php");
				$resultado2=("SELECT * FROM usuarios");
				$query=mysqli_query($mysqli,$resultado2);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usuario</td>";
						echo "<td>Correo</td>";
						echo "<td>password</td>";
						echo "<td>Password del administrador</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

				?>


				<?php
				while($arreglo=mysqli_fetch_array($query)){
					echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='img/arrows.ico' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='img/trash.ico' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
					}

					echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM usuaros WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

					?>
				</div>
			</div>
		</div>
</div>			
<script src="jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>			
</body>
</html>