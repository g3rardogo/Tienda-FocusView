<?php
    /*Creamos una clase con una funcion que imprime el codigo html del nav
    para ahorrar codigo y colocar el nav */

class basefooter{
    static function bfooter(){
        print('
        <footer id="footer" class="page-footer font-small pt-4 text-white">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4  font-weight-bold">FocusView</h6>
            <p>Si realmente eres amante de los deporte entonces compra algo que te dejara recuerdos
                en todo momento y que siempre seras un gran deportista...
            </p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">
            <!-- Grid column -->
            <div id="link" class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Productos</h6>
            <p>
            <a href="#!">FocusView Mercury</a>
            </p>
            <p>
              <a href="#!">FocusView XS</a>
            </p>
            <p>
              <a href="#!">FocusView Xpro</a>
            </p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">
            <!-- Grid column -->
            <div id="link" class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Links mas usados</h6>
            <p>
                <a href="https://www.facebook.com/">Facebook</a>
            </p>
            <p>
                <a href="https://www.youtube.com/">Youtube</a>
            </p>
            <p>
                <a href="https://www.instagram.com/?hl=es-la">Instagram</a>
            </p>
            <p>
                <a href="https://twitter.com/?lang=es">Twitter</a>
            </p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contáctenos</h6>
            <p>
                <i class="fas fa-home mr-3"></i> San Salvador, SV 10012, ES</p>
            <p>
                <i class="fas fa-envelope mr-3"></i>focusview@gmail.com</p>
            <p>
                <i class="fas fa-phone mr-3"></i> + 503 77213922</p>
            <p>
                <i class="fas fa-print mr-3"></i> + 503 78321389</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Footer links -->
        <hr>
        <!-- Grid row -->
        <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">
            <!--Copyright-->
            <p class="text-center text-md-left">© 2018 Copyright:
                <strong >FocusView.com</strong>
                </a>
            </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">
            <!-- Social buttons -->
            <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                </ul>
            </div>
          </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        </footer>     
        ');
    }
}