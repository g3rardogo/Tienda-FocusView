<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/estilos.css">
    <title>Ayuda</title>
</head>

<body>
    <!-- En esta parte va lo que es el nav que esta fijo -->
    <?php 
            require('../../core/models/baseheader.php');
            baseheader::bhead();

       ?>
    <!--Esta es la seccion de ayuda  -->
    <!-- Aqui va la historia de la empresa -->
    <div id="nosotros" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Ayuda</h1>
            <p class="lead">En esta seccion vemos las preguntas mas frecuentes que se presentan cuando entras a la
                pagina.
                <br><br>
                <b>¿Como hago para comprar una camara?</b>
                <br>
                Respuesta: Nuestra pagina esta hecha para que de una manera simple y sencilla puedas
                adquirir nuestros productos eficazmente.
                <br><br>
                <b>¿Mis productos me llegan a casa?</b>
                <br>
                Respuesta: Los productos adquiridos te llegan completamente seguros a tu casa en el timepo estimado de
                compra.
                <br>
                <br>
                <b>¿Que productos cubren la garantia?</b>
                <br>
                Respuesta: Todos nuestros productos tienen garantia de un plazo de un mes, si el producto te llega
                defectuoso, la empresa se hace cargo de hacerte de inmediato un cambio de producto.
                De acuerdo con el nuestras normas y politicas de la empresa tiene que pasa un procedimiento de revision
                para ver si el producto realmente esta malo.<br><br>
                Informar sobre infracciones de nuestras políticas
                Investigamos las infracciones de nuestras políticas e insistimos en que se den las explicaciones
                pertinentes. Si identificas una infracción, indícanoslo inmediatamente.

                Ejemplos de infracción de nuestras políticas:<br><br>

                Un comprador no paga un artículo.<br><br>
                Se realiza una oferta para completar la transacción fuera de eBay.<br><br>
                Un usuario envía correo no solicitado (spam) a otro.<br><br>
                Infracciones de los derechos de propiedad intelectual y marcas registradas.<br><br>
                Un comprador amenaza con darte una valoración negativa si no cumples determinadas peticiones.
                <br><br>
                <b>¿Como hago para comprar una camara?</b>
                <br>
                Respuesta: Nuestra pagina esta hecha para que de una manera simple y sencilla puedas
                adquirir nuestros productos eficazmente.

            </p>
        </div>
    </div>
    <!--  -->
    <!-- Va el footer que lo manda a llamar -->
    <?php
                require('../../core/models/basefooter.php');
                basefooter::bfooter();
            ?>
    <!-- Esta parte es el footer de la pagina donde se encuentran nuestras redes sociales -->
    <script src="../../resources/js/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="../../resources/js/popper.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/modals.js"></script>
    <script src="../../resources/js/modal1.js"></script>
    <script src="../../resources/js/font-awesome.js"></script>
</body>

</html>