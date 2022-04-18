<!doctype html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
           *
            {
				margin:0px;
				padding:0px;
				text-align:center;
			}
			table
            {
				width:80%;
				margin:0px auto;
				margin-top: 50px;
				border-collapse:collapse;
				border: solid black 2px;
			}
			th
            {
				text-align:center;
				padding: 15px;
				border-bottom: solid black 2px;
			}
			td
			{
				text-align:center;
				padding: 15px;
				border-bottom: solid black 2px;
			}
			tr:nth-child(even)
            {
				background-color: #f3a683;
				
			}

			table tr td img 
			{
				width:100%;
				height:100%;
			}
            </style>
</head>
<body>

<?php
require_once "php/1_conexion.php";
$cmd="select id,correo,asunto,contenido from mensajes;";
$tab=$conexion->query($cmd);
$columnas=0;
if($tab->num_rows==0) 
return;
?>
<h1> LISTA DE MENSAJES</h1>
<table>
	<tr>
		<th>ID</th>
		<th>CORREO</th>
		<th>ASUNTO</th>
		<th>CONTENIDO</th>
	</tr>
<?php
while($reg=$tab->fetch_assoc())
{
    $id=$reg["id"];
    $nom=$reg["correo"];
    $asunto=$reg["asunto"];
	$cont=$reg["contenido"];
	
	echo "<tr>
			<td> $id </td>
			<td> $nom </td>
			<td> $asunto </td>
			<td> $cont </td>
		 </tr>";
}
?>

<div  style='text-align:center; margin:20px;' >
	<a href='../mensajesOpc.html'><input  type='button' class='btn btn-default' value='Regresar' /></a>
</div>
</body>
</html>