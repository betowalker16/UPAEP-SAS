<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="body-login">

    <div class="login-box">
        <h1>Inicio de Sesion</h1>
        <form action="validacion.php" method="POST">

            <label for="username">Correo</label>
            <input type="text" placeholder="Ingrese su correo electronico" name="usuario">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña">

            <input type="submit" value="login">

            <a href="#">¿Todavia no tienes una cuenta?</a>
        </form>
    </div>

</body>
</html>