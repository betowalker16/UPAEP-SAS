<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcademicAlert</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body__restaurantes">

    <header class="header">

        <div class="contenedor">
            <div class="barra">

                <nav class="navegacion">
                    <a href="menuOpcProf.html" style="font-size: 4rem;" class="navegacion__enlace">AcademicAlert</a>
                </nav>

                <div class="iconos">
                    <a href="Perfil.php"><div><img src="image/user-solid.svg"></div></a>
                </div>

            </div>
        </div>

    </header>
    
    <div class="contenedor contenido-principal">

        <main class="local">
        <?php
        require_once "php/1_conexion.php";
        $cmd="select id,nombre,correo from profesor;";
        $tab=$conexion->query($cmd);
        $columnas=0;
        if($tab->num_rows==0) 
        return;

        $reg=$tab->fetch_assoc();

        $id=$reg["id"];
        $nom=$reg["nombre"];
        $correo=$reg["correo"];

        echo" <h3> $nom </h3>
        
        <article class='info_local'>
                <div class='contenido__local'>
                    <p> <b>ID: </b>
                        <b> $id </b><br>
                    </p>
                </div>
                <div class='contenido__local'>
                    <p> <b>Correo:</b> <br>
                        <b> $correo </b><br>
                    </p>
                </div>
            </article>
        ";

        ?>
            
        </main>

        <aside class="productos">
            <h2>Alumnos</h2>   

            <div class="grid_prod">

                <div class="producto" data-name="p-1">
                        <div class="producto__info">
                            <p class="producto__nombre no-margin">Emmanuel Garrido</p>
                        </div>    
                </div>
                <div class="producto" data-name="p-2">
                        <div class="producto__info">
                            <p class="producto__nombre no-margin">Gilberto Fernandez</p>    
                        </div>    
                </div>
        </div>
        </aside>

    </div>
</body>
</html>