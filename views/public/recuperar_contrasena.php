<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/login.css">
</head>

<body>
    <div class="card card-container text-center">
        <img src="../../resources/img/FocusViewPng.png" class="img-fluid">
        <form method="post" id="form-recuperar-contrasena">
            <input type="email" id="correo" name="correo" class="form-control" placeholder="Ingrese su correo" required
                autofocus>
            <br>
            <button class="btn btn-primary btn-signin btn-block" type="submit">Recuperar contraseña</button>
        </form>
    </div>
</body>


<script src="../../resources/js/jquery.min.js"></script>
<script src="../../resources/js/sweetalert.min.js"></script>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="../../core/helpers/functions.js"></script>
<script type="text/javascript" src="../../core/controllers/public/index.js"></script>
</body>

</html>