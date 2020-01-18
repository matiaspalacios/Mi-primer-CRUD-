
<!DOCTYPE html>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
	
		<div class="collapse navbar-collapse" id="navegacion-mt">			
				<ul class="nav navbar-nav">
					<li class="active"><a href="../vistas/principal.php">Inicio</a></li>
	
				</ul>
			
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">Bienvenido :   <strong><?php echo $_SESSION['user'];?></strong> </a></li>
		   				<li><a href="../sesion/desconexion.php"> Cerrar  Session  .</a></li>
		   		</ul>	
	    </div>
	
</nav>
</html>