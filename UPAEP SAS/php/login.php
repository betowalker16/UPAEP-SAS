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
        <img src="../image/avatar.png" class="avatar" alt="Avatar Image">
        <h1>Inicio de Sesion</h1>
        <form action="validacion.php" method="POST">

            <label for="username">Usuario</label>
            <input type="text" placeholder="Ingrese su nombre de usuario" name="usuario">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña">

            <input type="submit" value="login">

            <a href="#">¿No recuerdas tu contraseña?</a><br>
            <a href="#">¿Todavia no tienes una cuenta?</a>
        </form>
    </div>

</body>
</html>