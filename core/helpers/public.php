<?php
/*
    Clase para definir las plantillas en las páginas web del sitio privado.
*/
class Publico
{
	public static function headerTemplate($title)
	{
		session_start();
		print('
        <!DOCTYPE html>
		<html lang="es">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>'.$title.'</title>
			<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
			<link rel="stylesheet" href="../../resources/css/estilos.css">
            <link rel="stylesheet" href="../../resources/css/font-awesome.css">
		</head>
		<body>
		');
		//Se comprueba si existe una sesión para mostrar el menú de opciones, de lo contrario se muestra un menú vacío
		if (isset($_SESSION['idCliente'])) {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'index.php' && $filename != 'register.php') {
				self::modals();
				print('
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #000000;">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="inicio.php">Inicio
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="quienes_somos.php">Sobre Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ayuda.php">Ayuda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link modal-trigger" href="#" data-toggle="modal" onclick="modalProfile()">Perfil</a>
                                </li>
                                </li>
                            </ul>
            
                        </div><a class="nav-link" href="carrito.php"> <img src="../../resources/img/shopping-cart.png"></a>
                    </div>
                </nav>
            </div>
        </div>
        
            <br>
            <br>
				');
			} else {
				header('location: main.php');
			}
		} else {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'inicio.php' && $filename != 'register.php') {
				header('location: inicio.php');
			} else {
				print('
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #000000;">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="nav-link" href="quienes_somos.php">Sobre Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ayuda.php">Ayuda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link" data-toggle="modal">Iniciar Sesión</a>
                                </li>
                            </ul>
            
                        </div><a class="nav-link" href="carrito.php"> <img src="../../resources/img/shopping-cart.png"> </a>
                    </div>
                </nav>
            <br>
            <br>
				');
			}
		}
	}

	public static function footerTemplate($controller)
	{
        print('
        <br>
        <br>   
        <footer id="footer" class="page-footer font-small pt-4 text-white">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left mt-3 pb-3">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4  font-weight-bold">FocusView</h6>
                        <p>Si realmente eres amante de los deporte entonces compra algo que te dejara recuerdos
                            en todo momento y que siempre seras un gran deportista...
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none">
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
                            <strong>FocusView.com</strong>
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
        
    <script src="../../resources/js/jquery.min.js"> </script>
    <script src="../../resources/js/popper.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>
    
    <script src="../../resources/js/font-awesome.js"></script>
    <script src="../../resources/js/jquery.dataTables.min.js"></script>
    <script src="../../resources/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="../../resources/js/sweetalert.min.js"></script>
    
    <script type="text/javascript" src="../../core/helpers/functions.js"></script>
    <script type="text/javascript" src="../../core/controllers/public/account.js"></script>
    <script type="text/javascript" src="../../core/controllers/public/'.$controller.'"></script>
    </body>
    </html>
		');
	}

	private function modals()
	{
		print('
        <div id="modal-profile" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EDITAR PERFIL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form method="post" id="form-profile">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="profile_nombres" type="text" name="profile_nombres" class="form-control validate" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="profile_apellidos" type="text" name="profile_apellidos" class="form-control validate" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="profile_correo" type="email" name="profile_correo" class="form-control validate" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user-shield"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="profile_alias" type="text" name="profile_alias" class="form-control validate" required>
                            </div>
                        </div>
                    </div>
                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-secondary tooltipped" data-tooltip="Cancelar" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Guardar">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>

    <div id="modal-password" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CAMBIAR CONTRASEÑA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form method="post" id="form-password">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="clave_actual_1" type="password" name="clave_actual_1" class="form-control validate" required placeholder="Clave Actual">
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="clave_actual_2" type="password" name="clave_actual_2" class="form-control validate" required placeholder="Confirmar Clave">
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="clave_nueva_1" type="password" name="clave_nueva_1" class="form-control validate" required placeholder="Nueva Clave">
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-sm-11">
                                <input id="clave_nueva_2" type="password" name="clave_nueva_2" class="form-control validate" required placeholder="Confirmar Clave">
                            </div>
                        </div>
                    </div>
                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-secondary tooltipped" data-tooltip="Cancelar" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Cambiar">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
		');
	}
}
?>
