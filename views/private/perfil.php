<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Inicio</title>

    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/css/simple-sidebar.css" rel="stylesheet">
    <link href="../../resources/css/font-awesome.css" rel="stylesheet">
    <link href="../../resources/css/estilo.css" rel="stylesheet">
    <link href="../../resources/css/imagen.css" rel="stylesheet">
    <script src="../../resources/js/chart.bundle.js"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <?php
            require "../../core/helpers/dashboard.php";
            Dashboard::headerTemplate('perfil');
        ?>
        <!-- Fin sidebar -->
        <!-- Contenido -->
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <?php
                require "../templates/navbar-dash.php";
                navbar::menu2();
            ?>
            <!-- Fin navbar -->
            <div class="container-fluid" id="container">
                <h1 class="text-center">EDITAR PERFIL</h1>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="preview">
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 text-center">
                                <button id="triggerUpload" class="btn btn-primary"> <i class="fa fa-magic"></i>
                                    Subir imagen</button>
                                <input type="file" id="filePicker" />
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form>
                                            <div class="input-group-prepend">
                                                <label class="col-lg-3 control-label">Nombre:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="text" value="Gerardo Javier">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group-prepend">
                                                <label class="col-lg-3 control-label">Apellidos:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="text" value="Ramírez Gómez">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group-prepend">
                                                <label class="col-lg-3 control-label">Correo:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="text"
                                                        value="gerardogo145@gmail.com">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group-prepend">
                                                <label class="col-lg-3 control-label">Género:</label>
                                                <div class="col-lg-8">
                                                    <select class="custom-select" id="inputGroupSelect02">
                                                        <option selected>Masculino</option>
                                                        <option value="1">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group-prepend">
                                                <label class="col-lg-3 control-label">Tipo de usuario:</label>
                                                <div class="col-lg-8">
                                                    <select class="custom-select" id="inputGroupSelect02">
                                                        <option selected>Administrador</option>
                                                        <option value="1">Vendedor</option>
                                                        <option value="2">Gerente</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <div class="col-lg-2">
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    <button name="submit" type="submit"
                                                        class="btn btn-success btn-block">Editar</button>
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    <a href="#ventana1" class="btn btn-danger btn-block"
                                                        data-toggle="modal">
                                                        <span class="btn-label">
                                                            Contraseña
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-1">
            </div>
        </div>
    </div>
    </div>
    <!-- Modal de cambiar contraseña -->
    <div class="modal fade" id="ventana1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CAMBIAR CONTRASEÑA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-key"></i>
                        </div>
                        <div class="col-sm-11">
                            <input type="password" class="form-control" id="inputPassword"
                                placeholder="Contraseña actual">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-key"></i>
                        </div>
                        <div class="col-sm-11">
                            <input type="password" class="form-control" id="inputPassword"
                                placeholder="Contraseña nueva">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-key"></i>
                        </div>
                        <div class="col-sm-11">
                            <input type="password" class="form-control" id="inputPassword"
                                placeholder="Repetir contraseña">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin contenido -->
    </div>

    <script src="../../resources/js/jquery.min.js"></script>
    <script src="../../resources/js/estilo-dash.js"></script>
    <script src="../../resources/js/font-awesome.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>