$(document).ready(function()
{
    showTable();
    
})

//Constante para establecer la ruta y parámetros de comunicación con la API
const apiPedidos = '../../core/api/pedidos.php?site=private&action=';

//Función para llenar tabla con los datos de los registros
function fillTable(rows)
{
    let content = '';
    //Se recorren las filas para armar el cuerpo de la tabla y se utiliza comilla invertida para escapar los caracteres especiales
    rows.forEach(function(row){
        (row.Estado_pedido == 1) ? icon = '<i class="fa fa-check-circle"></i>' : icon = '<i class="fa fa-shipping-fast"></i>';
        content += `
            <tr>
                <td>${row.Fecha_pedido}</td>
                <td>${row.nombre_cliente}</td>
                <td><i class="material-icons">${icon}</i></td>
                <td>
                    <a href="#" onclick="modalUpdate(${row.id_pedido})" class="btn btn-info tooltipped"><i class="fa fa-pen"></i></a>
                    <a href="#" onclick="modalDetalle(${row.id_pedido})" class="btn btn-secondary tooltipped "><i class="fa fa-list"></i></a>
                </td>
            </tr>
        `;
    });
    $('#tbody-read').html(content);
    table('#tabla-pedidos');
    $('.tooltipped').tooltip();
}

//Función para obtener y mostrar los registros disponibles
function showTable()
{
    $.ajax({
        url: apiPedidos + 'readPedidos',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (!result.status) {
                sweetAlert(4, result.exception, null);
            }
            fillTable(result.dataset);
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}

//Función para mostrar formulario con registro a modificar
function modalUpdate(id)
{
    $.ajax({
        url: apiPedidos + 'get',
        type: 'post',
        data:{
            id_pedido: id
        },
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio para mostrar los valores en el formulario, sino se muestra la excepción
            if (result.status) {
                $('#form-update')[0].reset();
                $('#id_pedido').val(result.dataset.id_pedido);
                (result.dataset.Estado_pedido == 1) ? $('#update_estado').prop('checked', true) : $('#update_estado').prop('checked', false);
                $('#modal-update').modal('show');
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

//Función para modificar un registro seleccionado previamente
$('#form-update').submit(function()
{
    event.preventDefault();
    $.ajax({
        url: apiPedidos + 'update',
        type: 'post',
        data: new FormData($('#form-update')[0]),
        datatype: 'json',
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                $('#modal-update').modal('hide');
                if (result.status == 1) {
                    sweetAlert(1, 'Pedido modificado correctamente', null);
                } else if(result.status == 2) {
                    sweetAlert(3, 'Pedido modificado. ' + result.exception, null);
                } else if(result.status == 3) {
                    sweetAlert(1, 'Pedido modificado. ' + result.exception, null);
                }
                destroy('#tabla-pedidos');
                showTable();
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
})

function fillTableDetalle(rows)
{
    let content = '';
    let total = 0;
    //Se recorren las filas para armar el cuerpo de la tabla y se utiliza comilla invertida para escapar los caracteres especiales
    rows.forEach(function(row){

        subtotal = parseFloat(row.Cantidad * row.Precio_producto).toFixed(2);
        total = parseFloat(subtotal) + parseFloat(total);
        total = parseFloat(total).toFixed(2);
        
        content += `
            <tr>
                <td>${row.Nombre_producto}</td>
                <td>${row.Cantidad}</td>
                <td>${row.Precio_producto}</td>
                <td>${subtotal}</td>
            </tr>
        `;
    });
    $("#id_pedido2").text(total);
    $('#tbody-read2').html(content);
    $('.tooltipped').tooltip();
}

function showTableDetalle(id)
{
    $.ajax({
        url: apiPedidos + 'readDetalle',
        type: 'post',
        data: {
            id_pedido: id
        },
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (!result.status) {
                sweetAlert(4, result.exception, null);
            }
            fillTableDetalle(result.dataset);
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}

function modalDetalle(id)
{
    $.ajax({
        url: apiPedidos + 'get',
        type: 'post',
        data:{
            id_pedido: id
        },
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio para mostrar los valores en el formulario, sino se muestra la excepción
            if (result.status) {
                $('#form-detalle')[0].reset();
                $('#id_pedido2').val(id);
                console.log(result.dataset);
                showTableDetalle(id);
                $('#modal-detalle').modal('show');
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






