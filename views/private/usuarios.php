<!-- Llamando el header -->
<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Usuarios');
?>
<div class="container-fluid" id="container">
    <h1 class="text-center">USERS</h1>
    <div class="row">
        <div class="col-sm-1 col-3">
            <a href="#modal-create" class="btn btn-success tooltipped modal-trigger" data-toggle="modal"
                data-tooltip="Agregar">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="container">
            <table class="display" id="tabla-usuarios">
                <thead>
                    <tr>
                        <th>NAMES</th>
                        <th>SURNAMES</th>
                        <th>MAIL</th>
                        <th>USER</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody id="tbody-read">
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Fin contenido -->

<!-- Modal de Agregar -->
<div id="modal-create" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD USER</h5>
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
                            <input id="create_nombres" type="text" name="create_nombres" class="validate form-control"
                                placeholder="Names" required>
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
                                class="validate form-control" placeholder="Surnames" required>
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
                                class="validate form-control" placeholder="Username" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_correo" type="email" name="create_correo" class="validate form-control"
                                placeholder="Mail" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_clave1" type="password" name="create_clave1" class="validate form-control"
                                placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_clave2" type="password" name="create_clave2" class="validate form-control"
                                placeholder="Repeat password" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Crear">Accept</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de Modificar -->
<div id="modal-update" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">MODIFY USER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-update">
            <input type="hidden" id="id_usuario" name="id_usuario"/>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_nombres" type="text" name="update_nombres" class="validate form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_apellidos" type="text" name="update_apellidos"class="validate form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_correo" type="email" name="update_correo"
                                class="validate form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user-shield"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_alias" type="text" name="update_alias" class="validate form-control" required>
                        </div>
                    </div>
                </div>
                
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Modificar">Accept</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Llamando el footer y mandando de parametros el controlador y la tabla de datatable -->
<?php
Dashboard::footerTemplate('usuarios.js', '#tabla-usuarios');
?>