$(document).ready(function()
{
    readCategorias();
})

//Constante para establecer la ruta y parámetros de comunicación con la API
const apiCatalogo = '../../core/api/productos.php?site=commerce&action=';
const apiClientes = '../../core/api/clientes.php?site=private&action=';

//Función para obtener y mostrar las categorías de productos
function readCategorias()
{
    $.ajax({
        url: apiCatalogo + 'readCategorias',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                let content = '';
                result.dataset.forEach(function(row){
                    content += `
                            <div class="card col-md-3 col-sm-3 col-lg-3 col-xl-3">
                                    <img class="card-img-top" src="../../resources/img/categorias/${row.imagen_categoria}">
                                <div class="card-body">
                                    <h5 class="card-title">${row.nombre_categoria}</h5>
                                    <p class="card-text"> ${row.descripcion_categoria} </p>
                                    <a href="#" onclick="readProductosCategoria(${row.id_categoria}, '${row.nombre_categoria}')"><i class="fa fa-camera"></i>.VER PRODUCTOS</a>
                                </div>
                            </div>
                    `;
                });
                $('#catalogo').html(content);
                $('.tooltipped').tooltip();
            } else {
                sweetAlert(2, result.exception, null);
            }
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}

//Función para obtener y mostrar los productos de acuerdo a la categoría seleccionada
function readProductosCategoria(id, categoria)
{
    $.ajax({
        url: apiCatalogo + 'readProductos',
        type: 'post',
        data:{
            id_categoria: id
        },
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                let content = '';
                result.dataset.forEach(function(row){
                    content += `
                    <div class="card col-md-3 col-sm-3 col-lg-3 col-xl-3">
                        <img class="card-img-top" src="../../resources/img/productos/${row.imagen_producto}">
                            <div class="card-body">
                                <h5 class="card-title">${row.nombre_producto}</h5>
                                <p class="card-text">Precio(US$) ${row.precio_producto} </p>
                                <a href="#" onclick="getProducto(${row.id_producto})"><i class="fa fa-plus-circle" data-toggle="tooltip" data-placement="top" title="Ver más"></i></a>
                            </div>
                    </div>
                    `
                    
                    ;
                });
                $('#catalogo').html(content);
                $('.tooltipped').tooltip();
            } else {
                console.log(result.exception);
                sweetAlert(2, error(response), null);
                
            }
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}

//Función para obtener y mostrar los datos del producto seleccionado
function getProducto(id)
{
    $.ajax({
        url: apiCatalogo + 'detailProducto',
        type: 'post',
        data:{
            id_producto: id
        },
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                let content = `
                    <div class="card">
                        <div class="card-image">
                            <img src="../../resources/img/productos/${result.dataset.imagen_producto}">
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <input id="producto2" name="producto2" type="hidden">
                                <h3 class="header">${result.dataset.nombre_producto}</h3>
                                <p>${result.dataset.descripcion_producto}</p>
                                <p><b>Precio(US$) ${result.dataset.precio_producto}</b></p>
                            </div>
                            <div class="card">
                                <form method="post" id="form-cantidad">
                                    <div class="row center">
                                        <div class="input-field col-sm-10">
                                            <i class="fa fa-list"></i>
                                            <input id="cantidad" type="number" name="cantidad" min="1" class="validate">
                                            <label for="cantidad">Cantidad</label>
                                        </div>
                                        <div class="input-field col-sm-2">
                                            <a href="#" onclick="agregarCarrito(${result.dataset.id_producto})" class="btn btn-block btn-info"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                `;
                $('#catalogo').html(content);
                $('.tooltipped').tooltip();
                $('#producto2').val(result.dataset.id_producto);
            } else {
                $('#title').html('<i class="material-icons small">cloud_off</i><span class="red-text">' + result.exception + '</span>');
            }
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}

function agregarCarrito(id){    
    $.ajax({
        url: apiClientes + 'agregarCarrito',
        type: 'post',
        data:{
            id_producto: id,
            cantidad: $('#cantidad').val(),
        },
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                if (result.status == 1) {
                    sweetAlert(1, 'Producto agregado al carrito', null);
                } else if (result.status == 2) {
                    sweetAlert(3, 'Producto agregado. ' + result.exception, null);
                }
            } else {

            }
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });

}


function error(response){
    switch (response){
        case 'Contenido no disponible':
            mensaje = 'No hay productos para esta categoría';
            break;
        default:
            mensaje = 'No hay productos para esta categoría'
            break;
    }
    return mensaje;
}