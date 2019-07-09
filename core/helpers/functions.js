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
    for(i = 0; i< xAxis.length; i++){
        colors.push('#' +(Math.random().toString(16).substring(2,8)));  
    }
    const context = $("#" + canvas);
    const chart= new Chart(context,{
        type: 'bar',
        data:{
            labels: xAxis,
            datasets: [{
                label: legend,
                data: yAxis,
                backgroundColor: colors,
                borderColor: '#000000',
                borderWith : 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: title
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }]
            }
        }
    });
}
function graficoBar2(canvas, xAxis, yAxis, legend, title)
{
    let colors = [];
    for(i = 0; i< xAxis.length; i++){
        colors.push('#' +(Math.random().toString(16).substring(2,8)));  
    }
    const context = $("#" + canvas);
    const chart= new Chart(context,{
        type: 'pie',
        data:{
            labels: xAxis,
            datasets: [{
                label: legend,
                data: yAxis,
                backgroundColor: colors,
                borderColor: '#000000',
                borderWith : 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: title
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }]
            }
        }
    });
}
function graficoBar3(canvas, xAxis, yAxis, legend, title)
{
    let colors = [];
    for(i = 0; i< xAxis.length; i++){
        colors.push('#' +(Math.random().toString(16).substring(2,8)));  
    }
    const context = $("#" + canvas);
    const MyPieChart= new Chart(context,{
        type: 'line',
        data:{
            labels: xAxis,
            datasets: [{
                label: legend,
                data: yAxis,
                backgroundColor: colors,
                borderColor: '#000000',
                borderWith : 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: title
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }]
            }
        }
    });
}

function graficoBar4(canvas, xAxis, yAxis, legend, title)
{
    let colors = [];
    for(i = 0; i< xAxis.length; i++){
        colors.push('#' +(Math.random().toString(16).substring(2,8)));  
    }
    const context = $("#" + canvas);
    const charts= new Chart(context,{
        type: 'pie',
        data:{
            labels: xAxis,
            datasets: [{
                label: legend,
                data: yAxis,
                backgroundColor: colors,
                borderColor: '#000000',
                borderWith : 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: title
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }]
            }
        }
    });
}
function graficoBar5(canvas, xAxis, yAxis, legend, title)
{
    let colors = [];
    for(i = 0; i< xAxis.length; i++){
        colors.push('#' +(Math.random().toString(16).substring(2,8)));  
    }
    const context = $("#" + canvas);
    const charts= new Chart(context,{
        type: 'bar',
        data:{
            labels: xAxis,
            datasets: [{
                label: legend,
                data: yAxis,
                backgroundColor: colors,
                borderColor: '#000000',
                borderWith : 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: title
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }]
            }
        }
    });
}