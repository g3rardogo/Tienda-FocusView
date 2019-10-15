<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - '.$title.' </title>

    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/login.css">
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 col-lg-3"></div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card ">
                    <h1 class="text-center">REGISTER FIRST USER</h1>
                    <br>
                    <form method="post" id="form-register">
                        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Name"
                            required autofocus>
                        <br>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Surnames"
                            required autofocus>
                        <br>
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="Mail"
                            required autofocus>
                        <br>
                        <input type="text" id="alias" name="alias" class="form-control" placeholder="User"
                            required autofocus>
                        <br>
                        <input type="password" id="clave1" name="clave1" class="form-control" placeholder="Password" required
                            autofocus>
                        <br>
                        <input type="password" id="clave2" name="clave2" class="form-control"
                            placeholder="Confirm Password" required autofocus>
                        <br>
                        <button class="btn btn-lg btn-primary btn-signin" type="submit"
                        data-tooltip="Registrar">Check in</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-lg-3"></div>
        </div>
    </div>


    <script src="../../resources/js/jquery.min.js"></script>
    <script src="../../resources/js/sweetalert.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="../../core/helpers/functions.js"></script>
    <script type="text/javascript" src="../../core/controllers/dashboard/account.js"></script>
    <script type="text/javascript" src="../../core/controllers/dashboard/register.js"></script>

</body>

</html>