$(document).ready(function()
{
    readCarrito();
})

//Constante para establecer la ruta y parámetros de comunicación con la API
const apiCarrito = '../../core/api/clientes.php?site=commerce&action=';



function readCarrito(){
    $.ajax({
        url: apiCarrito + 'readCarrito',
        type: 'post',
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                let content = ''; 
                let total = 0;
                result.dataset.forEach(function(row){
                    subtotal = parseFloat(row.cantidad * row.Precio_producto).toFixed(2);
                    total = parseFloat(subtotal) + parseFloat(total);
                    total = parseFloat(total).toFixed(2);
                    content += `
                <tr>
                    <td><img class="img-fluid" src="../../resources/img/productos/${row.Imagen_producto}" width="120" height="80"></td>
                    <td>${row.Nombre_producto}</td>
                    <td>${row.cantidad}</td>
                    <td>$${row.Precio_producto}</td>
                    <td>$${subtotal}</td>
                    <td>
                    <a href="#" onclick="confirmDelete('${row.id_prepedido}')" class="btn btn-danger tooltipped" data-tooltip="Eliminar"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                    `;
                });
                $('#tbody-read').html(content);
                $('#total').html(total);
            } else {
                sweetAlert(3, 'No hay productos en el carrito', 'inicio.php');
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

//Función para eliminar un registro seleccionado
function confirmDelete(id)
{
    console.log(id);
    swal({
        title: 'Advertencia',
        text: '¿Quiere eliminar el producto?',
        icon: 'warning',
        buttons: ['Cancelar', 'Aceptar'],
        closeOnClickOutside: false,
        closeOnEsc: false
    })
    .then(function(value){
        if (value) {
            $.ajax({
                url: apiCarrito + 'deleteCarrito',
                type: 'post',
                data:{
                    id_prepedido: id
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
                            sweetAlert(1, 'Producto eliminado del carrito', null);
                        } else if (result.status == 2) {
                            sweetAlert(3, 'Producto eliminado. ' + result.exception, null);
                        }
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
    });
}

function confirmPago()
{
    console.log('Hola');
    event.preventDefault();
    swal({
        title: 'Advertencia',
        text: '¿Quiere realizar el pedido?',
        icon: 'warning',
        buttons: ['Cancelar', 'Aceptar'],
        closeOnClickOutside: false,
        closeOnEsc: false
    })
    .then(function(value){
        if (value) {
            $.ajax({
                url: apiCarrito + 'createPedido',
                type: 'post',
                datatype: 'json'
            })
            .done(function(response){
                //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
                if (isJSONString(response)) {
                    const result = JSON.parse(response);
                    //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
                    if (result.status) {
                        if (result.status == 1) {
                            sweetAlert(1, 'Pedido realizado', '../../core/Reportes/factura.php');
                        } else if (result.status == 2) {
                            sweetAlert(3, 'Pedido realizado. ' + result.exception, null);
                        }
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
    });
}