<?php

$usuario = $_POST['correo'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('1_conexion.php');

$consulta = "Select * from usuarios where correo = '$correo' and contraseña = '$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas) {
    header('location:../menuOpc.html');
}
else {
    include('login.php');
    ?>
    <h3 class="bad" style="text-align: center; margin-bottom: 2rem; background-color: white; border-radius:2rem; padding: 1rem;">El usuario o contraseña son incorrectos</h3>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
