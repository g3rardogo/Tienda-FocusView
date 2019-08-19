<?php
require_once('../../core/helpers/Conexion.php');
require_once('../../core/helpers/Validator.php');
require_once('../../core/models/pedidos.php');

//Se comprueba si existe una petición del sitio web y la acción a realizar, de lo contrario se muestra una página de error
if (isset($_GET['site']) && isset($_GET['action'])) {
    session_start();
    $pedido = new Pedidos;
    $result = array('status' => 0, 'exception' => '');
    //Se verifica si existe una sesión iniciada como administrador para realizar las operaciones correspondientes
	if (isset($_SESSION['idUsuario']) && $_GET['site'] == 'private') {
        switch ($_GET['action']) {
            case 'readPedidos':
                if ($result['dataset'] = $pedido->readPedidos()) {
                    $result['status'] = 1;
                } else {
                    $result['exception'] = 'No hay pedidos registrados';
                }
                break;
            case 'readClientes':
                if ($result['dataset'] = $pedido->readClientes()) {
                    $result['status'] = 1;
                } else {
                    $result['exception'] = 'No hay clientes registrados';
                }
                break;
            case 'readDetalle':
            if ($pedido->setId($_POST['id_pedido'])){


            
                if ($result['dataset'] = $pedido->readDetalle()) {
                    $result['status'] = 1;

                } else {
                    $result['exception'] = 'No hay detalles registrados';
                }
            } else {
                $result['exception'] = 'Pedido inexistente';
            }
                break;
            case 'update':
                $_POST = $pedido->validateForm($_POST);
                    if ($pedido->setId($_POST['id_pedido'])) {
                        if ($pedido->getPedido()) {
                            if ($pedido->setEstado(isset($_POST['update_estado']) ? 1 : 0)) {
                                if ($pedido->updatePedido()) {
                                    $result['status'] = 1;
                                } else {
                                        $result['exception'] = 'Operación fallida';
                                    }
                                } else {
                                    $result['exception'] = 'Estado incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Producto inexistente';
                            }
                        } else {
                            $result['exception'] = 'Producto incorrecto';
                        }
            break;
            case 'get':
                if ($pedido->setId($_POST['id_pedido'])) {
                    if ($result['dataset'] = $pedido->getPedido()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Pedido inexistente';
                    }
                } else {
                    $result['exception'] = 'Pedido incorrecto';
                }
                break;
            case 'get2':
                if ($pedido->setId($_POST['id_pedido2'])) {
                    if ($result['dataset'] = $pedido->getPedido()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Pedido inexistente';
                    }
                } else {
                    $result['exception'] = 'Pedido incorrecto';
                }
                break;
                case 'Graphics2':
                if ($result['dataset'] = $pedido->Graphics2()) {
                    $result['status'] = 1;
                } else {
                    $result['exception'] = 'No hay pedidos registradas';
                }
            break; 
            
            default:
                exit('Acción no disponible');
        }
    } else if ($_GET['site'] == 'commerce') {
        switch ($_GET['action']) {
            case 'readClientes':
                if ($result['dataset'] = $pedido->readClientes()) {
                    $result['status'] = 1;
                } else {
                    $result['exception'] = 'Contenido no disponible';
                }
                break;
            case 'readPedidos':
                if ($pedido->setCliente($_POST['id_cliente'])) {
                    if ($result['dataset'] = $pedido->readPedidosCliente()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Contenido no disponible';
                    }
                } else {
                    $result['exception'] = 'Categoría incorrecta';
                }
                break;
            case 'detailProducto':
                if ($pedido->setId($_POST['id_producto'])) {
                    if ($result['dataset'] = $pedido->getProducto()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Contenido no disponible';
                    }
                } else {
                    $result['exception'] = 'Producto incorrecto';
                }
                break;
            default:
                exit('Acción no disponible');
    	}
    } else {
        exit('Acceso no disponible');
    }
	print(json_encode($result));
} else {
	exit('Recurso denegado');
}
?>
