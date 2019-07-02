  <!-- Llamando la clase y funcion de la herencia del header y nav -->
  <?php 
            require_once('../../core/helpers/public.php');
            Publico::headerTemplate('Carrito')
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
      <table class="table" id="tabla-detalle">
        <thead>
          <tr>
            <th></th>
            <th>PRODUCTO</th>
            <th>CANTIDAD</th>
            <th>PRECIO UNITARIO</th>
            <th>SUBTOTAL</th>
            <th>ACCIÓN</th>
          </tr>
        </thead>
        <tbody id="tbody-read">
        </tbody>
      </table>
      <div class="card-footer">
        <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
          <div class="row">

          </div>
        </div>
        <div class="pull-right" style="margin: 10px">
          <div class="pull-right" style="margin: 5px">
            Total a pagar: $<b id="total"></b>
          </div>
          <a href="" onclick="confirmPago() " class="btn btn-success pull-right">CONTINUAR</a>
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
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card card-cascade narrower card-ecommerce">
          <div class="view view-cascade overlay">
            <img src="../../resources/img/categoria5.jpg" class="card-img-top" alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade text-center">
            <h3 class="card-title">
              <strong>
                <a>Camara Xp</a>
              </strong>
            </h3>
            <p class="card-text">Camara de alta resolucion 4k ultra HD. Con resolucion en FULL HD
            </p>
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
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Products v.1 -->
  <!-- Parte de contactenos creando un formulario -->
  <br>
  <hr>
  </div>
  <br>
  <br>





  <!-- Section: Contact v.2 -->

  <!-- Llamado la clase del footer-herencia -->
  <?php
        Publico::footerTemplate('carrito.js');
    ?>