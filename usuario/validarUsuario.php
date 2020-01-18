<?php

session_start();
	require("../sesion/conexion.php");

	$username=$_POST['mail'];  //*Nombre del campo del input del formulario
	$pass=$_POST['pass'];

	$resultado1=mysqli_query($con, "SELECT * FROM usuarios WHERE email='$username'");
	if ($x1=mysqli_fetch_assoc($resultado1)){
		if ($pass==$x1['pass_admin']){
			$_SESSION['id']=$x1['id'];
			$_SESSION['user']=$x1['user'];
			$_SESSION['tipo_usuario']=$x1['tipo_usuario'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../usuario/admin.php'</script>";
		}
	}

	$resultado2=mysqli_query($con, "SELECT * FROM usuarios WHERE email='$username'");
	if ($x2=mysqli_fetch_assoc($resultado2)) {
		if ($pass==$x2['password']){
			$_SESSION['id']=$x2['id'];
			$_SESSION['user']=$x2['user'];
			$_SESSION['tipo_usuario']=$x2['tipo_usuario'];
			header("Location:../vistas/principal.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../index.php'</script>";

			}
		}else{
			echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../index.php'</script>";	

	}

?>