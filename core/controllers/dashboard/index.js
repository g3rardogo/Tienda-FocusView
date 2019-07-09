$(document).ready(function()
{
    checkUsuarios();
    grafico();
    grafico2();
    grafico3();
    grafico4();
    grafico5();
    
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
    //enviamos la url de la api productos
    $.ajax({
        url: apiProductos + 'Graphics',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            //se envia dos parametros para el grafico el primero en el eje x y el otro en el eje y
            if(result.status){
                let categorias = [];
                let cantidad = [];
                result.dataset.forEach(function(row){
                    //se manda a llamar el query 
                    categorias.push(row.categoria);
                    console.log("categoria"+ row.categoria)
                    cantidad.push(row.cantidad);
                });
                //graficoBar es la funcion que le da forma al grafico que esta en function.js
                //luego mandamos el nombre del grafico declarado en la vista, y luego los dos parametros y lo
                //lo que queremos que diga el graico segun como esta en la funcion
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
        //mandamos a lllamar a al api 
        url: apiPedidos + 'Graphics2',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        //recive una cadena tipo jason 
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(result.status){
                //se declara los parametros que se van a ubicar en el ejeX y ejeY
                let clientes = [];
                let cantidad = [];
                result.dataset.forEach(function(row){
                    clientes.push(row.clientes);
                    cantidad.push(row.cantidad);
                });
                //se manda a llamar la funcion de graficoBar2 donde esta especificado el tipo de producto que es
                graficoBar2('chart2', clientes, cantidad, 'Cantidad de productos', 'Cantidad de productos por usuario')

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
//haciendo el grafico tres
function grafico3()
{
    console.log('entro');
    $.ajax({
        //se manda a llamar a la api
        url: apiProductos + 'Graphics3',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(result.status){
                let productos = [];
                let cantidad = [];
                //se hace una funcion de poner los datos en cada row en el ejeX como en el ejeY
                result.dataset.forEach(function(row){
                    productos.push(row.producto);
                    cantidad.push(row.cantidad);
                });
                //se manda a llamar el graficoBar3 donde esta especificado
                graficoBar3('chart3', productos, cantidad, 'Cantidad de productos', 'Cantidad de productos por usuario')

            }else{
                $('#chart3').remove();
            }
        }else{
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        console.log('Error: ' + jqXHR.status + '' + jqXHR.statusText);
    });
}
//Haciendo grafico 4
function grafico4()
{
    console.log('entro');
    $.ajax({
        //se manda a llamar a la api
        url: apiProductos + 'Graphics4',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(result.status){
                //se declara los parametros que iran en el EJEX Y EN EL EJEY
                let producto = [];
                let precio = [];
                result.dataset.forEach(function(row){
                    producto.push(row.producto);
                    precio.push(row.Ganancia);
                });
                //se trae la funcion de como sera el grafico
                graficoBar4('chart4', producto, precio, 'Ganancia de productos', 'Ganancias de productos')

            }else{
                $('#chart4').remove();
            }
        }else{
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        console.log('Error: ' + jqXHR.status + '' + jqXHR.statusText);
    });
}
function grafico5()
{
    console.log('entro');
    $.ajax({
        //se manda a llamar la api
        url: apiProductos + 'Graphics5',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(result.status){
                //de declara los parametros que iran en el ejex y en el ejeY
                let cantidad = [];
                let Nombre = [];
                result.dataset.forEach(function(row){
                    cantidad.push(row.productos);
                    Nombre.push(row.ganancia);
                });
                //se manda a llamar la funcion graficoBar5 donde esta especificado el tipo de grafico
                graficoBar5('chart5', cantidad, Nombre, 'Produco de mayor precio', 'Precio de productos')

            }else{
                $('#chart5').remove();
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
