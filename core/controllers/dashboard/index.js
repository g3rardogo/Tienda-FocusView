$(document).ready(function()
{
    checkUsuarios();
    grafico();
    grafico2();
    
})

//Constante para establecer la ruta y parámetros de comunicación con la API
const apiSesion = '../../core/api/usuarios.php?site=private&action=';
const apiProductos = '../../core/api/productos.php?site=private&action=';
const apiPedidos = '../../core/api/pedidos.php?site=private&action=';

//Función para verificar si existen usuarios en el sitio privado
function checkUsuarios()
{
    $.ajax({
        url: apiSesion + 'read',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const dataset = JSON.parse(response);
            //Se comprueba que no hay usuarios registrados para redireccionar al registro del primer usuario
            if (dataset.status == 2) {
                sweetAlert(3, dataset.exception, 'register.php');
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
//aqui se hace la funcion para mandar a llamar el grafico
function grafico()
{
    
    $.ajax({
        url: apiProductos + 'Graphics',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(result.status){
                let categorias = [];
                let cantidad = [];
                result.dataset.forEach(function(row){
                    categorias.push(row.Nombre_categoria);
                    cantidad.push(row.cantidad);
                });
                
                graficoBar('chart', categorias, cantidad, 'Cantidad de productos', 'Cantidad de productos por categoria')

            }else{
                $('#chart').remove();
            }
        }else{
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        console.log('Error: ' + jqXHR.status + '' + jqXHR.statusText);
    });
}
//aqui se hace el segundo grafico
function grafico2()
{
    console.log('entro');
    $.ajax({
        url: apiPedidos + 'Graphics2',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(result.status){
                let clientes = [];
                let pedido = [];
                result.dataset.forEach(function(row){
                    clientes.push(row.id_cliente);
                    pedido.push(row.cantidad);
                });
                graficoBar2('chart2', pre_pedido, cantidad, 'Cantidad de productos', 'Cantidad de productos por usuario')

            }else{
                $('#chart2').remove();
            }
        }else{
            console.log(response);

            
        }
    })
    .fail(function(jqXHR){
        console.log('Error: ' + jqXHR.status + '' + jqXHR.statusText);
    });
}
//Función para validar el usuario al momento de iniciar sesión
$('#form-sesion').submit(function()
{
    event.preventDefault();
    $.ajax({
        url: apiSesion + 'login',
        type: 'post',
        data: $('#form-sesion').serialize(),
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const dataset = JSON.parse(response);
            //Se comprueba si la respuesta es satisfactoria, sino se muestra la excepción
            if (dataset.status) {
                sweetAlert(1, 'Autenticación correcta', 'inicio.php');
            } else {
                sweetAlert(2, dataset.exception, null);
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
