$(document).ready(function()
{
    checkUsuarios();
    grafico();
})

//Constante para establecer la ruta y parámetros de comunicación con la API
const apiSesion = '../../core/api/usuarios.php?site=private&action=';
const apiProductos = '../../core/api/productos.php?site=private&action=';

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
function grafico()
{
    $.ajax({
        url: apiProductos + 'Graphics',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done((data)=>{
        var nombres = [];
        var id= [];
        console.log(data.dataset[0].id_categoria);
        console.log(data.dataset[0].nombre_producto);
        
        const result = data;

        result.dataset.forEach(renyer =>{

            nombres.push(renyer.nombre_producto);
            id.push(renye.c)

        });
        graficoBar("myChart" , id_categoria,nombre_producto , "Numero de productos" , "Categorias")
    })
    .fail(function(jqXHR){
        console.log('Error: ' + jqXHR.status + '' + jqXHR.statusText);
    })
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
