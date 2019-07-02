<?php   
class charts2
{
    /* Grafico que se muestra en la página reportes con los productos más vendidos en el mes */
    public static function productos (){
    print('<script>
    var ctx = document.getElementById("chart2").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Producto 1", "Producto 2", "Producto 3", "Producto 4"],
            datasets: [{
                label: "PRODUCTOS MÁS VENDIDOS",
                
                data: [12, 19, 3, 5],
                backgroundColor: [
                    "rgba(224, 179, 68, 0.4)"
                ],
                borderColor: [
                    "rgba(224, 179, 68,1)"
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    }); 
    </script>');
    }
    
}
?>



<?php  
class charts3
{
    /* Grafico que se muestra en la página reportes con el total de productos añadidos por categoría */
    public static function productos2 (){
    print('<script>
    var ctx = document.getElementById("chart3").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Categoría 1", "Categoría 2", "Categoría 3", "Categoría 4"],
            datasets: [{
                label: "PRODUCTOS POR CATEGORÍA",
                data: [22, 18, 7, 5],
                backgroundColor: [
                    "rgba(188, 67, 67, 0.4)"
                ],
                borderColor: [
                    "rgba(188, 67, 67,1)"
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    </script>');
    }
    
}
?>



