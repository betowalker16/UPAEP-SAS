<?php
    require_once "1_conexion.php";
	
	#preparamos el comando de inserción

	$nombre=$_POST["usuario"];
	$correo=$_POST["email"];
	$contraseña=$_POST["contraseña"];
	
	$cmd="insert into profesor(nombre, correo, contraseña) values ('$nombre','$correo','$contraseña')";
	$resp=$conexion->query($cmd);
	if($resp)
	{
		header("location:login.php?error=0");
		
	}
	else
	{
		header("location:login.php?error=2");	
	}
?>