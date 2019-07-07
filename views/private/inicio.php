<!-- Llamando el header -->
<?php
    require_once('../../core/helpers/dashboard.php');
    Dashboard::headerTemplate('Inicio');
?>
            <div class="container-fluid" id="container">
                <!-- Subiendo la parte de arriba -->
                <h1 class="text-center">RESUMEN</h1>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="circle-tile ">
                            <a href="clientes.php">
                                <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded"> Clientes </div>
                                <div class="circle-tile-number text-faded ">265</div>
                                <a class="circle-tile-footer" href="clientes.php">Más información<i
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
                                <div class="circle-tile-description text-faded"> Productos </div>
                                <div class="circle-tile-number text-faded ">10</div>
                                <a class="circle-tile-footer" href="productos.php">Más información<i
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
                                <div class="circle-tile-description text-faded"> Categorías </div>
                                <div class="circle-tile-number text-faded ">10</div>
                                <a class="circle-tile-footer" href="categorias.php">Más información<i
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
                                <div class="circle-tile-description text-faded"> Pedidos </div>
                                <div class="circle-tile-number text-faded ">10</div>
                                <a class="circle-tile-footer" href="pedidos.php">Más información<i
                                        class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                <h4>Grafico de categorias
                    <div class="col s10 m2">
                        <canvas id="chart"></canvas>
                        
                    </div>
                    <h4>Grafico de clientes
                    <div class="col s10 m2">
                        <canvas id="chart1"></canvas>
                        
                    </div>    
                </div>
                <br>
                <hr>
                
            </div>
            <!-- Fin contenido -->
        </div>
        <script src="../../resources/js/chart.js"></script>
        <!-- <script src="../../core/controllers/index.js"></script> -->
        

<!-- Llamando el footer y mandando de parametros el controlador y la tabla de datatable -->
        <?php

Dashboard::footerTemplate('index.js', '');


?>