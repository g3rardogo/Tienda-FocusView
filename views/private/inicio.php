<!-- Llamando el header -->
<?php
    require_once('../../core/helpers/dashboard.php');
    Dashboard::headerTemplate('Inicio');
?>
<div class="container-fluid" id="container">
    <!-- Subiendo la parte de arriba -->
    <h1 class="text-center lang" key="titulo-inicio">RESUMEN</h1>
    <br>
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="circle-tile ">
                <a href="clientes.php">
                    <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                </a>
                <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded lang" key="titulo-cliente"> Clientes </div>
                    <div class="circle-tile-number text-faded ">2</div>
                    <a class="circle-tile-footer lang" href="clientes.php" key="info-cliente">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-12">
            <div class="circle-tile ">
                <a href="productos.php">
                    <div class="circle-tile-heading red"><i class="fa fa-camera fa-fw fa-3x"></i></div>
                </a>
                <div class="circle-tile-content red">
                    <div class="circle-tile-description text-faded lang" key="titulo-productos"> Productos </div>
                    <div class="circle-tile-number text-faded ">9</div>
                    <a class="circle-tile-footer lang" href="productos.php" key="info-productos">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-12">
            <div class="circle-tile ">
                <a href="categorias.php">
                    <div class="circle-tile-heading green"><i class="fa fa-list fa-fw fa-3x"></i></div>
                </a>
                <div class="circle-tile-content green">
                    <div class="circle-tile-description text-faded lang" key="titulo-categorias"> Categorías </div>
                    <div class="circle-tile-number text-faded">4</div>
                    <a class="circle-tile-footer lang" href="categorias.php" key="info-categorias">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-12">
            <div class="circle-tile ">
                <a href="pedidos.php">
                    <div class="circle-tile-heading orange"><i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                    </div>
                </a>

                <div class="circle-tile-content orange">
                    <div class="circle-tile-description text-faded lang" key="titulo-pedidos"> Pedidos </div>
                    <div class="circle-tile-number text-faded ">6</div>
                    <a class="circle-tile-footer lang" href="pedidos.php" key="info-pedidos">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <br>
    <h1 class="text-center lang" key="titulo-reportes">Reportes</h1>
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="circle-tile ">
                <a href="../../core/reportes/reporte1.php">
                    <div class="circle-tile-heading dark-blue"><i class="fa fa-list-alt fa-fw fa-3x"></i></div>
                </a>
                <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded lang" key="titulo-reporte1">Productos por categoría</div>
                    <a class="circle-tile-footer lang" href="../../core/reportes/reporte1.php" key="info-reporte1">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="circle-tile ">
                <a href="../../core/reportes/reporte2.php">
                    <div class="circle-tile-heading red"><i class="fa fa-shopping-bag fa-fw fa-3x"></i></div>
                </a>
                <div class="circle-tile-content red">
                    <div class="circle-tile-description text-faded lang" key="titulo-reporte2">Ordenes por usuario </div>
                    <a class="circle-tile-footer lang" href="../../core/reportes/reporte2.php" key="info-reporte2">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="circle-tile ">
                <a href="../../core/reportes/reporte3.php">
                    <div class="circle-tile-heading green"><i class="fa fa-dollar-sign fa-fw fa-3x"></i></div>
                </a>
                <div class="circle-tile-content green">
                    <div class="circle-tile-description text-faded lang" key="titulo-reporte3"> Ganancias </div>
                    <a class="circle-tile-footer lang" href="../../core/reportes/reporte3.php" key="info-reporte3">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="circle-tile ">
                <a href="../../core/reportes/reporte4.php">
                    <div class="circle-tile-heading orange"><i class="fa fa-search-dollar fa-fw fa-3x"></i>
                    </div>
                </a>

                <div class="circle-tile-content orange">
                    <div class="circle-tile-description text-faded lang" key="titulo-reporte4">Productos más vendidos</div>
                    <a class="circle-tile-footer lang" href="../../core/reportes/reporte4.php" key="info-reporte4">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="circle-tile ">
                <a href="../../core/reportes/reporte5.php">
                    <div class="circle-tile-heading gray"><i class="fa fa-clipboard fa-fw fa-3x"></i>
                    </div>
                </a>

                <div class="circle-tile-content gray">
                    <div class="circle-tile-description text-faded lang" key="titulo-reporte5"> Bitacora </div>
                    <a class="circle-tile-footer lang" href="../../core/reportes/reporte5.php" key="info-reporte5">Más información<i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

    </div>
    <br><br>
    <hr>
    <div class="col-12">
        <div class="container-fluid" id="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h4>Product chart by category</h4>
                    <canvas id="chart"></canvas>
                </div>
                
                <div class="col-lg-6 col-sm-12">
                <br><br>
                    <h4>Order chart by customer</h4>
                    <canvas id="chart2"></canvas>
                </div>
                
                <div class="col-lg-6 col-sm-12">
                <br><br>
                    <h4>Most requested products chart</h4>
                    <canvas id="chart3"></canvas>
                </div>
                <hr>
                <div class="col-lg-6 col-sm-12">
                    <br><br>
                    <h4>Product earnings chart</h4>
                    <canvas id="chart4"></canvas>
                </div>
                <br><br><br><br><br>
                <div class="col-lg-12 col-sm-12">
                    <br><br>
                    <h4>Most expensive product chart</h4>
                    <canvas id="chart5"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Fin contenido -->

<script src="../../resources/js/chart.js"></script>
<?php

Dashboard::footerTemplate('index.js', '');


?>