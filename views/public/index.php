<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/estilos.css">
    <link rel="stylesheet" href="../../resources/css/all.css">

    <title>Inicio</title>
</head>

<body>

    <!-- Llamando la clase y funcion de la herencia del header y nav -->
    <?php 
            require('../../core/models/baseheader.php');
            baseheader::bhead();
       ?>
    <!-- Llamando la clase y funcion de la herencia del header y nav -->
    <!--Esta parte es la del carousel-->
    <?php 
            require('../../core/models/modelsc.php');
            modelsc::bcarousel();
       ?>
    <!--En esta parte va un pequeño contenedor para las camaras mas vendidas-->
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView Mercury</h5>
                        <p class="card-text">Camara mercury especial para los deportes extremos con resistencia a todo
                            tipo de climas</p>
                        <form id="form">
                            <p class="clasificacion">
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <!--
                        --><label for="radio1">★</label>
                                <!--
                        --><input id="radio2" type="radio" name="estrellas" value="4">
                                <!--
                        --><label for="radio2">★</label>
                                <!--
                        --><input id="radio3" type="radio" name="estrellas" value="3">
                                <!--
                        --><label for="radio3">★</label>
                                <!--
                        --><input id="radio4" type="radio" name="estrellas" value="2">
                                <!--
                        --><label for="radio4">★</label>
                                <!--
                        --><input id="radio5" type="radio" name="estrellas" value="1">
                                <!--
                        --><label for="radio5">★</label>
                            </p>
                        </form>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView Pro</h5>
                        <p class="card-text">Camara de alta calidad que graba a 4k con resistencia al agua y al polvo</p>
                        <br>
                        <form id="form">
                            <p class="clasificacion">
                                <input id="radio6" type="radio" name="estrellas" value="5">
                                <!--
                        --><label for="radio6">★</label>
                                <!--
                        --><input id="radio7" type="radio" name="estrellas" value="4">
                                <!--
                        --><label for="radio7">★</label>
                                <!--
                        --><input id="radio8" type="radio" name="estrellas" value="3">
                                <!--
                        --><label for="radio8">★</label>
                                <!--
                        --><input id="radio9" type="radio" name="estrellas" value="2">
                                <!--
                        --><label for="radio9">★</label>
                                <!--
                        --><input id="radio10" type="radio" name="estrellas" value="1">
                                <!--
                        --><label for="radio10">★</label>
                            </p>
                        </form>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView XPro</h5>
                        <p class="card-text">Camara especializada al agua, sumergible hasta 30 metros de profundidad</p>
                        <form id="form">
                            <p class="clasificacion">
                                <input id="radio11" type="radio" name="estrellas" value="5">
                                <!--
                        --><label for="radio11">★</label>
                                <!--
                        --><input id="radio12" type="radio" name="estrellas" value="4">
                                <!--
                        --><label for="radio12">★</label>
                                <!--
                        --><input id="radio13" type="radio" name="estrellas" value="3">
                                <!--
                        --><label for="radio13">★</label>
                                <!--
                        --><input id="radio14" type="radio" name="estrellas" value="2">
                                <!--
                        --><label for="radio14">★</label>
                                <!--
                        --><input id="radio15" type="radio" name="estrellas" value="1">
                                <!--
                        --><label for="radio15">★</label>
                            </p>
                        </form>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!--Esta parte es para otro header-->
    <div id="nosotros" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Categorías</h1>
            <p class="lead">Encuentra lo que necesitas organizado por categorías</p>
        </div>
    </div>
    <br><br>
    <!-- Parte de las categorias -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="../../resources/img/categoria3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><br>Accesorios</h5>
                        <p class="card-text"><br>Camara mercury especial para los deportes extremos con resistencia a
                            todo tipo de climas</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="../../resources/img/categoria2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><br>Tripodes</h5>
                        <p class="card-text"><br><br>Camara de alta calidad que graba a 4k con resistencia al agua y al
                            polvo</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="../../resources/img/categoria5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Extremo</h5>
                        <p class="card-text">Camara especializada, sumergible hasta 30 metros de profundidad</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- En esta parte va el quienes somos -->
    <br><br><br>
    <div id="nosotros" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Quienes Somos</h1>
            <p class="lead">Nuestro equipo de FocusView es completamente increible, hace que todo lo que compres sea de
                una manera unica.</p>
        </div>
    </div>
    <!-- En esta parte va sobre nosotros personas que ayudaron a la pagina -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <figure class="snip1336">
                    <img src="../../resources/img/fondo1.jpg" alt="sample87" />
                    <figcaption>
                        <img src="../../resources/img/eze.jpg" alt="profile-sample4" class="profile" />
                        <h2>Ezequiel Avalos<span>PHP Expert</span></h2>
                        <p>"La mayoria de personas piensan que no pueden lograr las cosas por si mismos, yo les digo el
                            que no arriesga no gana"</p>

                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4">
                <figure class="snip1336 hover"><img src="../../resources/img/fondo2.jpg" alt="sample74" />
                    <figcaption>
                        <img src="../../resources/img/gerardo.jpg" alt="profile-sample2" class="profile" />
                        <h2>Gerardo Ramírez<span>PYTHON Expert</span></h2>
                        <p>"Siempre creí que el exito se alcanza logrando todo lo que te propongas"</p>

                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4">
                <figure class="snip1336"><img src="../../resources/img/fondo3.jpg" alt="sample69" />
                    <figcaption>
                        <img src="../../resources/img/carlos.jpg" alt="profile-sample5" class="profile" />
                        <h2>Carlos Quijano<span>JAVASCRIPT Expert</span></h2>
                        <p>“Las oportunidades no pasan, las creas, He fallado una y otra vez y es por ello que he
                            tenido éxito”</p>

                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <br><br>
    <!-- En esta parte se encuentra el footer de la pagina -->
    <!-- Footer -->
    <!-- Llamado la clase del footer-herencia -->
    <?php
                require('../../core/models/basefooter.php');
                basefooter::bfooter();
            ?>
    <!-- Footer -->
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