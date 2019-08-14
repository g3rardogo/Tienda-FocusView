<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/login.css">
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
    <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('reCAPTCHA_site_key', {action: 'homepage'}).then(function(token) {
            ...
        });
    });
    </script>
</head>

<body>
    <div class="card card-container">
        <img src="../../resources/img/FocusViewPng.png" class="img-fluid">
        <form method="post" id="form-sesion">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="usuario" name="usuario" class="validate form-control" placeholder="Usuario" required
                autofocus>
                <br>
            <input type="password" id="clave" name="clave" class="validate form-control" placeholder="Contraseña" required autofocus>
            <br>
            <div class="g-recaptcha" data-sitekey="6LfZ47IUAAAAAK5jOW7tdS61gVKpABlzqA104uCu"></div>
            <button class="btn btn-lg btn-primary btn-block btn-signin tooltipped" data-tooltip="Ingresar"
                type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>


<script src="../../resources/js/jquery.min.js"></script>
<script src="../../resources/js/sweetalert.min.js"></script>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="../../core/helpers/functions.js"></script>
<script type="text/javascript" src="../../core/controllers/dashboard/account.js"></script>
<script type="text/javascript" src="../../core/controllers/dashboard/index.js"></script>
</body>

</html>