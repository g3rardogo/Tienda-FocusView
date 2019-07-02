//Función para comprobar si una cadena tiene formato JSON
function isJSONString(string)
{
    try {
        if (string != "[]") {
            JSON.parse(string);
            return true;
        } else {
            return false;
        }
    } catch(error) {
        return false;
    }
}

//Función para manejar los mensajes de notificación al usuario
function sweetAlert(type, text, url)
{
    switch (type) {
        case 1:
            title = "Éxito";
            icon = "success";
            break;
        case 2:
            title = "Error";
            icon = "error";
            break;
        case 3:
            title = "Advertencia";
            icon = "warning";
            break;
        case 4:
            title = "Aviso";
            icon = "info";
    }
    if (url) {
        swal({
            title: title,
            text: text,
            icon: icon,
            button: 'Aceptar',
            closeOnClickOutside: false,
            closeOnEsc: false
        })
        .then(function(value){
            location.href = url
        });
    } else {
        swal({
            title: title,
            text: text,
            icon: icon,
            button: 'Aceptar',
            closeOnClickOutside: false,
            closeOnEsc: false
        });
    }
}
function graficoBar(canvas, xAxis, yAxis, legend, title)
{
    let colors = [];
    let border = [];
    for(i = 0; i< xAxis.length; i++){
        r = Math.floor(Math.random()*(225-0)) + 0;
        g = Math.floor(Math.random()*(225-0)) + 0;  
        b = Math.floor(Math.random()*(225-0)) + 0;
        console.log(r)
        colors.push('rgba(' + r + ',' + g + ',' + b + ')'),
        border.push('#' +(Math.random().toString(16).substring(2,8)));  
    }
    var mostrar = $("#" +canvas);  

            var grafico = new CharacterData(mostrar, {
                type: 'bar',
                data: {
                    labels: xAxis,
                    datasets: [{
                        label: legend,
                        backgroundColor:colors,
                        bordercolor: border,
                        data: yAxis,
                        borderWith: 1,
                        hoverBackground: colors
                    }]
                },
                option: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: tittle
                    },
                    scales: {
                        yAxes:[{
                            ticks:{
                                beginAtZero: true,
                                stepSize: 1
                            }
                        }]
                    }
                }
            });
}