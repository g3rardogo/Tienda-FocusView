<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/estilos.css">
  <link rel="stylesheet" href="../../resources/css/all.css">

  <title>Document</title>
</head>

<body>
  <!-- Llamando la clase y funcion de la herencia del header y nav -->
  <?php 
            require('../../core/models/baseheader.php');
            baseheader::bhead();
       ?>
  <!--FocusView Carito  -->
  <br><br>
  <div class="container">
    <div class="card shopping-cart">
      <div class="card-header bg-dark text-light">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        Carrito
        <div class="clearfix"></div>
      </div>
      <div class="card-body">
        <!-- PRODUCT -->
        <div class="row">
          <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-fluidy" src="../../resources/img/Acc2.jpg" alt="prewiew" width="120" height="80">
          </div>
          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h3 class="product-name"><strong>Camara Mercury</strong></h3>
            <h3>
              <small>Camara aprueba de todo con estabilizacion de imagen optica y
                con resolucion 4K
              </small>
            </h3>
          </div>
          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
              <h6><strong>$25.00 <span class="text-muted">x</span></strong></h6>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
              <div class="quantity">

                <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty" size="4">

              </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 text-right">
              <button type="button" class="btn btn-outline-danger btn-xs">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <hr>
        <!-- END PRODUCT -->
        <!-- PRODUCT -->
        <div class="row">
          <div class="col-12 col-sm-12 col-md-2 text-center">
            <img class="img-responsive" src="../../resources/img/Acc3.jpg" alt="prewiew" width="120" height="80">
          </div>
          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
            <h3 class="product-name"><strong>Product Name</strong></h3s>
              <h3>
                <small>Product description</small>
              </h3>
          </div>
          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
              <h6><strong>$30.00 <span class="text-muted">x</span></strong></h6>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
              <div class="quantity">
                <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty" size="4">
              </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 text-right">
              <button type="button" class="btn btn-outline-danger btn-xs">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <hr>
        <!-- END PRODUCT -->
        <div class="pull-right">
        </div>
      </div>
      <div class="card-footer">
        <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
          <div class="row">

          </div>
        </div>
        <div class="pull-right" style="margin: 10px">
          <a href="" class="btn btn-success pull-right">CONTINUAR</a>
          <div class="pull-right" style="margin: 5px">
            Total a pagar: <b>$55.00</b>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
  <!-- seccion de productos recomendados -->
  <div id="link" class="card text-center white-text" style="background-color: #585858">
    <div class="card-body">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <h3 class="text-white">Productos Recomendados</h3>
        </li>
      </ul>
    </div>
  </div>
  <br><br>
  <!-- Carrosuel de productos recomendados -->

  <!-- Section: Products v.1 -->
  <section class="text-center my-5">


    <!-- Section description -->
    <p class="grey-text text-center w-responsive mx-auto mb-5"> </p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <!-- Card -->
        <div class="card card-cascade narrower card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="../../resources/img/camaralogo3.jpg" class="card-img-top" alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">
            <!-- Category & Title -->
            <h3 class="card-title">
              <strong>
                <a>Camara Deportiva</a>
              </strong>
            </h3>
            <!--Rating-->

            <!-- Description -->
            <p class="card-text">Camara que cuenta con diferentes funciones con un focal de alta angular.
            </p>
            <!-- Card footer -->
            <div class="card-footer px-1">
              <span class="float-left font-weight-bold">
                <strong>49$</strong>
              </span>
              <span class="float-right">
                <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fas fa-shopping-cart grey-text ml-3"></i>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Share">
                  <i class="fas fa-share-alt grey-text ml-3"></i>
                </a>
                <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                  <i class="fas fa-heart ml-3"></i>
                </a>
              </span>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <!-- Card -->
        <div class="card card-cascade narrower card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="../../resources/img/camaralogo.jpg" class="card-img-top" alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">
            <!-- Category & Title -->
            <h3 class="card-title">
              <strong>
                <a>High heels</a>
              </strong>
            </h3>
            <!--Rating-->

            <!-- Description -->
            <p class="card-text">Camara resistente al agua y al polvo con profundidad de hasta 30 metros
            </p>
            <!-- Card footer -->
            <div class="card-footer px-1">
              <span class="float-left font-weight-bold">
                <strong>89$</strong>
              </span>
              <span class="float-right">
                <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fas fa-shopping-cart grey-text ml-3"></i>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Share">
                  <i class="fas fa-share-alt grey-text ml-3"></i>
                </a>
                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fas fa-heart grey-text ml-3"></i>
                </a>
              </span>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
        <!-- Card -->
        <div class="card card-cascade narrower card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="../../resources/img/camaralogo2.jpg" class="card-img-top" alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">
            <!-- Category & Title -->
            <h3 class="card-title">
              <strong>
                <a>Camara XSPro</a>
              </strong>
            </h3>
            <!--Rating-->
            <!-- Description -->
            <p class="card-text">De las mejores camaras de alta calidad que cuenta con inteligencia artificial
            </p>
            <!-- Card footer -->
            <div class="card-footer px-1">
              <span class="float-left font-weight-bold">
                <strong>59$</strong>
              </span>
              <span class="float-right">
                <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fas fa-shopping-cart grey-text ml-3"></i>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Share">
                  <i class="fas fa-share-alt grey-text ml-3"></i>
                </a>
                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fas fa-heart grey-text ml-3"></i>
                </a>
              </span>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-3 col-md-6">
        <!-- Card -->
        <div class="card card-cascade narrower card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="../../resources/img/categoria5.jpg" class="card-img-top" alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">
            <!-- Category & Title -->
            <h3 class="card-title">
              <strong>
                <a>Camara Xp</a>
              </strong>
            </h3>
            <!--Rating-->

            <!-- Description -->
            <p class="card-text">Camara de alta resolucion 4k ultra HD. Con resolucion en FULL HD
            </p>
            <!-- Card footer -->
            <div class="card-footer px-1">
              <span class="float-left font-weight-bold">
                <strong>119$</strong>
              </span>
              <span class="float-right">
                <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fas fa-shopping-cart grey-text ml-3"></i>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Share">
                  <i class="fas fa-share-alt grey-text ml-3"></i>
                </a>
                <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                  <i class="fas fa-heart ml-3"></i>
                </a>
              </span>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Products v.1 -->
  <!-- Parte de contactenos creando un formulario -->
  <br>
  <hr>
  <!-- Section: Contact v.2 -->

  <div class="row">
    <div class="col-sm-12 col-lg-12">
      <h2 class="text-center">
        Contactanos
      </h2>
      <br>
      <br>
    </div>
  </div>
  </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="well">
          <h3 style="line-height:20%;"><i class="fa fa-user fa-1x"></i> Nombre:</h3>
          <input placeholder="Nombre" class="form-control">
          <br>
          <br>
          <h3 style="line-height:20%;"><i class="fa fa-envelope fa-1x"></i> Correo:</h3>
          <input placeholder="Correo" class="form-control">
          <br>
          <br>
          <h3 style="line-height:20%;"><i class="fa fa-file-alt fa-1x"></i> Mensaje:</h3>
          <textarea placeholder="Descripción" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

        </div>
      </div>
      <div class="col-sm-6">
        <br>
        <img src="../../resources/img/mapa.png" class=img-fluid>
        <br>
        <br>
      </div>
    </div>
    <div class=row>
      <div class="col-sm-6">
        <br>
        <button class="btn btn-info btn-block">Enviar</button>
      </div>
    </div>


  </div>
  <br>
  <br>





  <!-- Section: Contact v.2 -->

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
  <script src="../../resources/js/all.js"></script>

</body>

</html>