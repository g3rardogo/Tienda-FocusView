<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="lang" key="index-inicio">Iniciar Sesión</title>
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/login.css">
</head>

<body>
    <div class="card card-container">
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="traslate" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Idioma
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="englishOnclick" href="#" onclick="showEn()">EN</a>
                <a class="españolOnclick" href="#" onclick="showEs()">ES</a>
            </div>
        </div>
        <img src="../../resources/img/FocusViewPng.png" class="img-fluid">
        <form method="post" id="form-sesion">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="usuario" name="usuario" class="validate form-control" placeholder="Usuario" required
                autofocus>
            <br>
            <input type="password" id="clave" name="clave" class="validate form-control" placeholder="Contraseña"
                required autofocus>
            <br>
            <button class="btn btn-lg btn-primary btn-block btn-signin tooltipped lang" data-tooltip="Ingresar"
                type="submit" key="index-sesion">Iniciar Sesión</button>
            <br>
            <a href="recuperar_contrasena.php" class="forgot-password lang" key="index-clave">
                ¿Olvidaste tu cotraseña?
            </a>
            <br>
            <a href="register.php" class="forgot-password lang" key="index-registrar">
                ¿Eres nuevo?, Registrate aquí
            </a>
        </form>
    </div>
</body>


<script src="../../resources/js/jquery.min.js"></script>
<script src="../../resources/js/sweetalert.min.js"></script>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../../core/helpers/traductor.js"></script>

<script type="text/javascript" src="../../core/helpers/functions.js"></script>
<script type="text/javascript" src="../../core/controllers/public/account.js"></script>
<script type="text/javascript" src="../../core/controllers/public/index.js"></script>
</body>

</html>