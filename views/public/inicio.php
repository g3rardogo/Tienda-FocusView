<?php
require_once('../../core/helpers/public.php');
Publico::headerTemplate('Inicio');
?>
<!--En esta parte va un pequeño contenedor para las camaras mas vendidas-->

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
    <div class="row" id="catalogo">
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
        Publico::footerTemplate('catalogo.js');
    ?>