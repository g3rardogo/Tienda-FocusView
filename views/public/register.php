<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>

    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/login.css">
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('reCAPTCHA_site_key', {
                action: 'homepage'
            }).then(function (token) {
                ...
            });
        });
    </script>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 col-lg-3"></div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="traslate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Idioma
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="englishOnclick" href="#" onclick="showEn()">EN</a>
                        <a class="españolOnclick" href="#" onclick="showEs()">ES</a>
                        </div>
                    </div>
                    <h1 class="text-center lang" key="register-cuenta">CREAR CUENTA NUEVA</h1>
                    <br>
                    <form method="post" id="form-register">
                        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombre"
                            required autofocus>
                        <br>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos"
                            required autofocus>
                        <br>
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo" required
                            autofocus>
                        <br>
                        <input type="text" id="alias" name="alias" class="form-control" placeholder="Usuario" required
                            autofocus>
                        <br>
                        <input type="password" id="clave1" name="clave1" class="form-control" placeholder="Clave"
                            required autofocus>
                        <br>
                        <input type="password" id="clave2" name="clave2" class="form-control"
                            placeholder="Confirmar Clave" required autofocus>
                        <br>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="g-recaptcha" data-sitekey="6LfZ47IUAAAAAK5jOW7tdS61gVKpABlzqA104uCu"></div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <br>
                        <button class="btn btn-secondary btn-signin lang" data-tooltip="Registrar" type="button" key="register-cancelar"
                            href="index.php">Cancelar</button>
                        <button class="btn btn-primary btn-signin tooltipped lang" data-tooltip="Registrar" key="register-register"
                            type="submit">Registrarse</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-lg-3"></div>
        </div>
    </div>


    <script src="../../resources/js/jquery.min.js"></script>
    <script src="../../resources/js/sweetalert.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../core/helpers/traductor.js"></script>


    <script type="text/javascript" src="../../core/helpers/functions.js"></script>
    <script type="text/javascript" src="../../core/controllers/public/account.js"></script>
    <script type="text/javascript" src="../../core/controllers/public/register.js"></script>
</body>

</html>