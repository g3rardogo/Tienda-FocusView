<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Usuarios');
?>
    <div class="d-flex" id="wrapper">
        <!-- Contenido -->
        <div id="page-content-wrapper">
            <div class="container-fluid" id="container">
                <h1 class="text-center">USUARIOS</h1>
                <!-- Barra de busqueda -->
                <div class="search-box">
                    <div class="row">
                        <div class="col-sm-11 col-9">
                            <input type="text" id="myInput" name="myInput" class="form-control" placeholder="Buscar">
                        </div>
                        <div class="col-sm-1 col-3">
                            <a href="#modal-create" class="btn btn-success tooltipped modal-trigger" data-toggle="modal"
                                data-tooltip="Agregar">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin contenido -->

    <!-- Modal de Agregar -->
    <div id="modal-create" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">AGREGAR USUARIO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="form-create">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="create_nombres" type="text" name="create_nombres"
                                    class="validate form-control" placeholder="Nombres" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="create_apellidos" type="text" name="create_apellidos"
                                    class="validate form-control" placeholder="Apellidos" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user-shield"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="create_nombre_usuario" type="text" name="create_nombre_usuario"
                                    class="validate form-control" placeholder="Nombre De Usuario" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="create_correo" type="email" name="create_correo"
                                    class="validate form-control" placeholder="Correo" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="create_clave1" type="password" name="create_clave1"
                                    class="validate form-control" placeholder="Contraseña" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="create_clave2" type="password" name="create_clave2"
                                    class="validate form-control" placeholder="Repetir contraseña" required>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Crear">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <?php
Dashboard::footerTemplate('productos.js');
?>