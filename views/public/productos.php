<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/estilos.css">
    <title>Productos</title>
</head>

<body>
    <!-- Llamando la clase y funcion de la herencia del header y nav -->
    <?php
            require('../../core/models/baseheader.php');
            baseheader::bhead();
        ?>
    <!-- Llamando la clase y funcion de la herencia del header y nav -->
    <!-- Card donde se muestran los diferentes productos que se pueden comprar en focusview -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView Mercury</h5>
                        <p class="card-text">Camara mercury especial para los deportes extremos con resistencia a todo
                            tipo de climas</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png"
                                alt="+" /></button>
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png"
                                alt="-" /></button>
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png"
                                alt="+" /></button>
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
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png"
                                alt="leer mas">Leer más... </button>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView Pro</h5>
                        <p class="card-text">Camara de alta calidad que graba a 4k con resistencia al agua y al polvo</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png"
                                alt="+" /></button>
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 36%; " type="submit"><img src="../../resources/img/minus-symbol.png"
                                alt="-" /></button>
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png"
                                alt="+" /></button>
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
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png"
                                alt="leer mas">Leer más... </button>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView XPro</h5>
                        <p class="card-text">Camara especializada al agua, sumergible hasta 30 metros de profundidad</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png"
                                alt="+" /></button>
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png"
                                alt="-" /></button>
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png"
                                alt="Carrito" /></button>
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
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png"
                                alt="leer mas">Leer más... </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView Mercury</h5>
                        <p class="card-text">Camara mercury especial para los deportes extremos con resistencia a todo
                            tipo de climas</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png"
                                alt="+" /></button>
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png"
                                alt="-" /></button>
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png"
                                alt="+" /></button>
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
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png"
                                alt="leer mas">Leer más... </button>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView Pro</h5>
                        <p class="card-text">Camara de alta calidad que graba a 4k con resistencia al agua y al polvo</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png"
                                alt="+" /></button>
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 36%; " type="submit"><img src="../../resources/img/minus-symbol.png"
                                alt="-" /></button>
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png"
                                alt="+" /></button>
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
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png"
                                alt="leer mas">Leer más... </button>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/camaralogo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FocusView XPro</h5>
                        <p class="card-text">Camara especializada al agua, sumergible hasta 30 metros de profundidad</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png"
                                alt="+" /></button>
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png"
                                alt="-" /></button>
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png"
                                alt="Carrito" /></button>
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
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png"
                                alt="leer mas">Leer más... </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card donde se muestran los diferentes productos que se pueden comprar en focusview -->
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

</html>