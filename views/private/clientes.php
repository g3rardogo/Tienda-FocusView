<!-- Llamando el header -->
<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Clientes');
?>
<div class="container-fluid" id="container">
    <h1 class="text-center">CLIENTES</h1>

    <div class="row">
        <div class="col-sm-1 col-3">
            <a href="#modal-create" class="btn btn-success tooltipped modal-trigger" data-toggle="modal" data-tooltip="Agregar">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="container">
            <table class="display" id="tabla-clientes">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>USUARIO</th>
                        <th>CORREO</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody id="tbody-read">
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Fin contenido -->
<!-- Modal de Agregar -->
<div id="modal-create" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AGREGAR CLIENTE</h5>
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
                            <input id="create_nombres" name="create_nombres" type="text" placeholder="Nombres" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_apellidos" name="create_apellidos" type="text" placeholder="Apellidos" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user-shield"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_alias" name="create_alias" type="text" placeholder="Nombre De Usuario" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_correo" name="create_correo" class="form-control" type="email" placeholder="Correo" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_clave1" name="create_clave1" type="password" class="form-control validate" required
                                placeholder="Contraseña">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_clave2" name="create_clave2" type="password" class="form-control validate" required
                                placeholder="Repetir contraseña">
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-secondary tooltipped"  data-tooltip="Cancelar" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Crear">Aceptar</button>
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
                <h5 class="modal-title">AGREGAR CLIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-update">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-sm-11">
                            <input type="hidden" id="id_cliente" name="id_cliente"/>
                            <input id="update_nombres" name="update_nombres" type="text" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_apellidos" name="update_apellidos" type="text" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-user-shield"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_alias" name="update_alias" type="text" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_correo" name="update_correo" class="form-control" type="email" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-secondary tooltipped"  data-tooltip="Cancelar" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Modificar">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Llamando el footer y mandando de parametros el controlador y la tabla de datatable -->
<?php
Dashboard::footerTemplate('clientes.js', '#tabla-clientes');
?>