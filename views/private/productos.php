<!-- Llamando el header -->
<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Productos');
?>
<div class="container-fluid" id="container">
    <h1 class="text-center">PRODUCTS</h1>
    <div class="search-box">
        <div class="row">
            <div class="col-sm-1 col-3">
                <a href="#modal-create" class="btn btn-success btn-md tooltipped modal-trigger" data-toggle="modal"
                    data-tooltip="Agregar">
                    <span class="btn-label">
                        <i class="fa fa-plus"></i>
                    </span>
                </a>
            </div>
            <div class="container">
                <table class="display" id="tabla-productos">
                    <thead>
                        <tr>
                            <th>IMAGE</th>
                            <th>NAME</th>
                            <th>PRICE (US$)</th>
                            <th>CATEGORY</th>
                            <th>STATE</th>
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
<!-- Modal de Agregar -->
<div id="modal-create" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-create" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_nombre" type="text" name="create_nombre" class="form-control validate"
                                placeholder="Name" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-dollar-sign"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_precio" type="number" name="create_precio" class="form-control validate"
                                max="999.99" min="0.01" step="any" placeholder="Price" required>
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
                            <i class="fa fa-box-open"></i>
                        </div>
                        <div class="col-sm-11">
                            <select id="create_categoria" name="create_categoria" class="form-control">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="col-sm-11">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="create_archivo" name="create_archivo">
                                <label class="custom-file-label" for="create_archivo">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-eye-slash"></i>
                        </div>
                        <div class="col-sm-11">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="create_estado"
                                    name="create_estado">

                                <label class="custom-control-label" for="create_estado"><i
                                        class="fa fa-eye"></i></label>
                            </div>
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
                <h5 class="modal-title">MODIFY PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-update" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="col-sm-11">
                            <input type="hidden" id="imagen_producto" name="imagen_producto" />
                            <input id="id_producto" type="hidden" name="id_producto" class="form-control validate"
                                placeholder="Name" required>
                            <input id="update_nombre" type="text" name="update_nombre" class="form-control validate"
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-dollar-sign"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_precio" type="number" name="update_precio" class="form-control validate"
                                max="999.99" min="0.01" step="any" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-file-alt"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="update_descripcion" type="text" name="update_descripcion"
                                class="form-control validate" required />
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-box-open"></i>
                        </div>
                        <div class="col-sm-11">
                            <select id="update_categoria" name="update_categoria" class="form-control">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="col-sm-11">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="update_archivo" name="update_archivo">
                                <label class="custom-file-label" for="update_archivo">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-eye-slash"></i>
                        </div>
                        <div class="col-sm-11">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="update_estado"
                                    name="update_estado">
                                <label class="custom-control-label" for="update_estado"><i
                                        class="fa fa-eye"></i></label>
                            </div>
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
Dashboard::footerTemplate('productos.js','#tabla-productos');
?>