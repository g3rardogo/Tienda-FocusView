<!-- Llamando el header -->
<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Categorías');
?>
<div class="container-fluid" id="container">
    <h1 class="text-center">CATEGORIES</h1>
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
            <table class="display" id="tabla-categorias">
                <thead>
                    <tr>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
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
                <h5 class="modal-title">ADD CATEGORY</h5>
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
                                placeholder="Name" required>
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
                                class="form-control validate" placeholder="Description" required />
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
                    <button type="button" class="btn btn-secondary tooltipped" data-tooltip="Cancelar" data-dismiss="modal">Cancel</button>
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
                <h5 class="modal-title">MODIFY CATEGORY</h5>
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
                    <button type="button" class="btn btn-secondary tooltipped" data-tooltip="Cancelar" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Modificar">Accept</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Llamando el footer y mandando de parametros el controlador y la tabla de datatable -->
<?php
Dashboard::footerTemplate('categorias.js', '#tabla-categorias');
?>