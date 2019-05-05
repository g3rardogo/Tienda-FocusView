<?php
/*
    Clase para definir las plantillas en las páginas web del sitio privado.
*/
class Dashboard
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
            <title>Dashboard - '.$title.'</title>
        
            <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
            <link href="../../resources/css/font-awesome.css" rel="stylesheet">
			<link href="../../resources/css/estilo.css" rel="stylesheet">
			<link href="../../resources/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
			<link href="../../resources/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
            <script src="../../resources/js/chart.bundle.js"></script>
        </head>
        
        <body>
        <div class="d-flex" id="wrapper">
        
		');
		//Se comprueba si existe una sesión para mostrar el menú de opciones, de lo contrario se muestra un menú vacío
		if (isset($_SESSION['idUsuario'])) {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'index.php' && $filename != 'register.php') {
				self::modals();
				print('
                <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">FocusView </div>
                <div class="list-group list-group-flush">
                    <a href="pedidos.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope"></i>
                        Pedidos</a>
                    <a href="productos.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-shopping-cart"></i>
                        Productos</a>
                    <a href="categorias.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-list"></i>
                        Categorías</a>
                    <a href="clientes.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-users"></i>
                        Clientes</a>
                    <a class="list-group-item list-group-item-action bg-light nav-link dropdown-toggle" href="usuarios.php"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users-cog"></i> Usuarios </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="usuarios.php">Gestionar usuarios</a>
                        <a class="dropdown-item" href="tipo-usuarios.php">Tipos de usuario</a>
                    </div>
                </div>
            </div>

            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars"></i></button>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="inicio.php"><i class="fa fa-home"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item tooltipped modal-trigger" href="#modal-profile" data-toggle="modal"
					data-tooltip="Editar">Editar perfil</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ayuda</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
				');
			} else {
				header('location: inicio.php');
			}
		} else {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'index.php' && $filename != 'register.php') {
				header('location: index.php');
			} else {
				print('
					<header>
						<div class="navbar-fixed">
							<nav class="teal">
								<div class="nav-wrapper">
									<a href="index.php" class="brand-logo"><i class="material-icons">dashboard</i></a>
								</div>
							</nav>
						</div>
					</header>
					<main class="container">
						<h3 class="center-align">'.$title.'</h3>
				');
			}
		}
	}

	public static function footerTemplate($controller, $tabla)
	{
		print('

		<script src="../../core/helpers/table.js"></script>
        <script src="../../resources/js/jquery.min.js"></script>
        <script src="../../resources/js/estilo-dash.js"></script>
        <script src="../../resources/js/font-awesome.js"></script>
		<script src="../../resources/js/bootstrap.bundle.min.js"></script>
		<script src="../../resources/js/jquery.dataTables.min.js"></script>
		<script src="../../resources/js/dataTables.bootstrap4.min.js"></script>
		
		<script src="../../resources/js/sweetalert.min.js"></script>

        <script type="text/javascript" src="../../core/helpers/functions.js"></script>
		<script type="text/javascript" src="../../core/controllers/dashboard/account.js"></script>
		<script type="text/javascript" src="../../core/controllers/dashboard/'.$controller.'"></script>

        <!-- Menu Toggle Script -->
        <script>
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
		<script>
			$(document).ready(function() {
			$('.$tabla.').DataTable();
			});
		</script>
		
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
                            			<input id="profile_nombres" type="text" name="profile_nombres" class="form-control validate required"
                                			required>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-1">
										<i class="fa fa-user"></i>
									</div>
									<div class="col-sm-11">
                            			<input id="profile_apellidos" type="text" name="profile_apellidos" class="form-control validate required"
                                			required>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-1">
										<i class="fa fa-envelope"></i>
									</div>
									<div class="col-sm-11">
                            			<input id="profile_correo" type="email" name="profile_correo" class="form-control validate required"
                                			required>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-1">
										<i class="fa fa-user-shield"></i>
									</div>
									<div class="col-sm-11">
                            			<input id="profile_alias" type="text" name="profile_alias" class="form-control validate required"
                                			required>
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
		');
	}
}
?>