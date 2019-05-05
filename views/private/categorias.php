<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Categorías');
?>
<div class="container-fluid" id="container">
    <h1 class="text-center">CATEGORÍAS</h1>
    <!-- Barra de busqueda -->
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
            <table class="class=" display" id="tabla-categorias">
                <thead>
                    <tr>
                        <th>IMAGEN</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCIÓN</th>
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
</div>
<!-- Modal de agregar -->
<div id="modal-create" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AGREGAR CATEGORÍA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-create">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-camera"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_nombre" type="text" name="create_nombre" class=" form-control validate"
                                placeholder="Nombre" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-file-alt"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_descripcion" type="text" name="create_descripcion"
                                class="form-control validate" placeholder="Descripción" required />
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="custom-file col s11 m6">
                            <input type="file" class="custom-file-input" id="create_archivo" name="create_archivo">
                            <label class="custom-file-label" for="create_archivo">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-secondary tooltipped" data-tooltip="Cancelar" data-dismiss="modal">Cancelar</button>
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
                <h5 class="modal-title">MODIFICAR CATEGORÍA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-update" enctype="multipart/form-data">
                <input type="hidden" id="id_categoria" name="id_categoria" />
                <input type="hidden" id="imagen_categoria" name="imagen_categoria" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-hashtag"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_nombre" type="text" name="update_nombre" class="form-control validate"
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_descripcion" type="text" name="update_descripcion"
                                class="form-control validate">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="custom-file col s11 m6">
                            <input type="file" class="custom-file-input" id="update_archivo" name="update_archivo">
                            <label class="custom-file-label" for="create_archivo">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-secondary tooltipped" data-tooltip="Cancelar" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Crear">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal de Eliminar -->
<div class="modal fade" id="ventana3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ELIMINAR CATEGORÍA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>¿Está seguro de que desea eliminar esta categoría?
                </h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<?php
Dashboard::footerTemplate('categorias.js', '#tabla-categorias');
?>