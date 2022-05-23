<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <!--Link para que funcione las alertas que saltan cuando no rellenas el formulario!-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Link para el JS que valida que el login esté lleno!-->
    <script src="../js/validacion.js"></script>
    <title>Inicio de sesion</title>
</head>
<body>
    <div>
        <!--Cuando le de al boton irá al js para ver que todo esté rellenado (validarLogin();)!-->
        <form action="../process/login.proc.php" method="post" onsubmit="return validarLogin();">
            <h1>Iniciar sesión</h1>
            <div>
                <input type="text" id="username" name="username" placeholder="Usuario..."/>
            </div>
            <br>
            <div>
                <input type="password" id="password" name="password" placeholder="Contraseña..."/>
            </div>
            <br><br>
            <button type="submit" name="register" value="register">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
