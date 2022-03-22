<?php
    require_once "1_conexion.php";
	
	#preparamos el comando de inserción

	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$tutor=$_POST["tutor"];
	
	$cmd="insert into alumno(tutor, nombre, correo, contraseña) values ('$tutor','$nombre','$correo')";
	$resp=$conexion->query($cmd);
	if($resp)
	{
		header("location:../agalumn.php?error=0");
		
	}
	else
	{
		header("location:../agalum.php?error=2");	
	}
?>