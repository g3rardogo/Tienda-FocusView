//Constante para establecer la ruta y parámetros de comunicación con la API
const apiRegister = '../../core/api/clientes.php?site=private&action=';


//Función para validar el usuario al momento de iniciar sesión
$('#form-register').submit(function()
{
    event.preventDefault();
    $.ajax({
        url: apiRegister + 'register',
        type: 'post',
        data: $('#form-register').serialize(),
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const dataset = JSON.parse(response);
            //Se comprueba si la respuesta es satisfactoria, sino se muestra la excepción
            if (dataset.status) {
                sweetAlert(1, 'Usuario registrado correctamente', 'index.php');
            } else {
                sweetAlert(2, dataset.exception, null);
            }
        } else {
            console.log(response);
            sweetAlert(2, error2(response), null);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
});

function error2(response){
    switch (response){
        case 'Dato duplicado, no se puede guardar':
            mensaje = 'Usuario y/o correo ya existen';
            break;
        default:
            mensaje = 'Ocurrió un problema, consulte al administrador'
            break;
    }
    return mensaje;
}
