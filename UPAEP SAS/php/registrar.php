<?php
    require_once "1_conexion.php";
	
	#preparamos el comando de inserción

	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$contraseña=$_POST["contraseña"];
	
	$cmd="insert into profesor(nombre, correo, contraseña) values ('$nombre','$correo','$contraseña')";
	$resp=$conexion->query($cmd);
	if($resp)
	{
		header("location:../agprof.php?error=0");
		
	}
	else
	{
		header("location:../agprof.php?error=2");	
	}
?>