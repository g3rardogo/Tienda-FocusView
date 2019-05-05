<?php
  /*Creamos una clase con una funcion que imprime el codigo html del header
    para ahorrar codigo y colocar el header */
 class baseheader {
   static function bhead(){
        print('
        
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #000000;">
  <div class="container">
    
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accesorios.php">Accesorios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos.php">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ayuda.php">Ayuda</a>
        </li>
        <li class="nav-item">
        <a href="#ventana1" class="nav-link" data-toggle="modal">Iniciar Sesión</a>

        
        </li>
      </ul>
      
    </div><a class="nav-link" href="carrito.php"> <img src="../../resources/img/shopping-cart.png"> </a>
  </div>
  
</nav>
<div class="modal fade" id="ventana1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">INICIAR SESIÓN</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                <div class="col-sm-1">
                                        <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-1">
                                        <i class="fa fa-lock"></i>
                                        </div>
                                        <div class="col-sm-11">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                                        </div>
                                        </div>
                                        </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <a href="../private/login.php"> <button href="../private/login.php" type="button" class="btn btn-primary">Aceptar</button></a>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>

<br>
<br>
        
        ');
    }
}