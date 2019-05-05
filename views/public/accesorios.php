<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/estilos.css">
    <title>Accesorios</title>
</head>

<body>
    <!-- Llamando la clase y funcion de la herencia del header y nav -->
    <?php
            require('../../core/models/baseheader.php');
            baseheader::bhead();
        ?>
    <!-- Llamando la clase y funcion de la herencia del header y nav -->

    <!-- Card de los accesorio. -->
    <?php
            require('../../core/models/basecard.php');
            basecard::bcard();
        ?>
    <!-- Card de los accesorio. -->

    <!-- Footer -->
    <!-- Llamado la clase del footer-herencia -->
    <?php
                require('../../core/models/basefooter.php');
                basefooter::bfooter();
            ?>
    <!-- Footer -->

    <script src="../../resources/js/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="../../resources/js/popper.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/modals.js"></script>
    <script src="../../resources/js/modal1.js"></script>
    <script src="../../resources/js/font-awesome.js"></script>
</body>
</body>

</html>