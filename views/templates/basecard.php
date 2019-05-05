<?php

class basecard{
    static function bcard(){
        print('
        <!-- Card donde se muestran los diferentes productos que se pueden comprar en focusview -->
        <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div id="cd" class="card text-center" style="width: 18rem;">
                        <img src="../../resources/img/Acc1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kit de aventura</h5>
                            <p class="card-text">Aprovecha una suculenta oferta ideal para hacerte selfies, fotos de grupo y mucho más mientras exploras.</p>
                            <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png" alt="+" /></button>                                        
                            <input class="myinput" type="text" name="nombredelacaja">
                            <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png" alt="-" /></button>                                                                       
                            <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png" alt="+" /></button>
                        <form id="form">
                            <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                            </p>
                        </form>
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png" alt="leer mas">Leer más... </button>                       
                        </div>
                        </div>
                    </div>
                        <div class="col-sm">
                            <div id="cd" class="card text-center" style="width: 18rem;">
                            <img src="../../resources/img/Acc2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Kit de viaje</h5>
                            <p class="card-text">Equípate con soportes imprescindibles para capturar contenido inmersivo en primera persona y cámara en mano.</p>
                            <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png" alt="+" /></button>                                        
                            <input class="myinput" type="text" name="nombredelacaja">
                            <button style="position: absolute; right: 36%; " type="submit"><img src="../../resources/img/minus-symbol.png" alt="-" /></button>                                        
                            <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png" alt="+" /></button>                       
                            <br>
                        <form id="form">
                            <p class="clasificacion">
                            <input id="radio6" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio6">★</label><!--
                            --><input id="radio7" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio7">★</label><!--
                            --><input id="radio8" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio8">★</label><!--
                            --><input id="radio9" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio9">★</label><!--
                            --><input id="radio10" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio10">★</label>
                            </p>
                        </form>
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png" alt="leer mas">Leer más... </button>                       
                            </div>
                            </div>
                       </div>
                    <div class="col-sm">
                    <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/Acc3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kit de deporte</h5>
                        <p class="card-text">Hazte con dos de nuestros soportes más populares para capturar contenido sin manos y montando la cámara en tu equipo.</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png" alt="+" /></button>                                        
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png" alt="-" /></button>                                        
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png" alt="Carrito" /></button>                    
                        <form id="form">
                            <p class="clasificacion">
                            <input id="radio11" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio11">★</label><!--
                            --><input id="radio12" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio12">★</label><!--
                            --><input id="radio13" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio13">★</label><!--
                            --><input id="radio14" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio14">★</label><!--
                            --><input id="radio15" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio15">★</label>
                            </p>
                        </form>
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png" alt="leer mas">Leer más... </button>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div id="cd" class="card text-center" style="width: 18rem;">
                        <img src="../../resources/img/Acc4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Estuche compacto</h5>
                            <p class="card-text">Este estuche ligero y portátil tiene espacio para tu cámara, soportes y accesorios, pero es lo suficientemente compacto como para llevarlo contigo o en una mochila.</p>
                            <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png" alt="+" /></button>                                        
                            <input class="myinput" type="text" name="nombredelacaja">
                            <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png" alt="-" /></button>                                                                       
                            <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png" alt="+" /></button>
                        <form id="form">
                            <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                            </p>
                        </form>
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png" alt="leer mas">Leer más... </button>                       
                        </div>
                        </div>
                    </div>
                        <div class="col-sm">
                            <div id="cd" class="card text-center" style="width: 18rem;">
                            <img src="../../resources/img/Acc5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Soporte para manubrio</h5>
                            <p class="card-text">Un soporte compacto de aluminio que permite opciones de captura de 360°.</p>
                            <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png" alt="+" /></button>                                        
                            <input class="myinput" type="text" name="nombredelacaja">
                            <button style="position: absolute; right: 36%; " type="submit"><img src="../../resources/img/minus-symbol.png" alt="-" /></button>                                        
                            <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png" alt="+" /></button>                       
                            <br>
                        <form id="form">
                            <p class="clasificacion">
                            <input id="radio6" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio6">★</label><!--
                            --><input id="radio7" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio7">★</label><!--
                            --><input id="radio8" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio8">★</label><!--
                            --><input id="radio9" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio9">★</label><!--
                            --><input id="radio10" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio10">★</label>
                            </p>
                        </form>
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png" alt="leer mas">Leer más... </button>                       
                            </div>
                            </div>
                       </div>
                    <div class="col-sm">
                    <div id="cd" class="card text-center" style="width: 18rem;">
                    <img src="../../resources/img/Acc6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Soporte frontal y lateral para casco</h5>
                        <p class="card-text">Sujeta tu GoPro a la parte frontal o lateral de los cascos.</p>
                        <button style="position: absolute; left: 35%; " type="submit"><img src="../../resources/img/plus-symbol.png" alt="+" /></button>                                        
                        <input class="myinput" type="text" name="nombredelacaja">
                        <button style="position: absolute; right: 35%; " type="submit"><img src="../../resources/img/minus-symbol.png" alt="-" /></button>                                        
                        <button style="position: absolute; right: 10%; " type="submit"><img src="../../resources/img/shopping-cart.png" alt="Carrito" /></button>                    
                        <form id="form">
                            <p class="clasificacion">
                            <input id="radio11" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio11">★</label><!--
                            --><input id="radio12" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio12">★</label><!--
                            --><input id="radio13" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio13">★</label><!--
                            --><input id="radio14" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio14">★</label><!--
                            --><input id="radio15" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio15">★</label>
                            </p>
                        </form>
                        <button class="btn btn-light"> <img style="position: absolute; left: 25%;" src="../../resources/img/right-arrow.png" alt="leer mas">Leer más... </button>
                    </div>
                    </div>
                    </div>
                </div>
          </div>
        ');
    }
}