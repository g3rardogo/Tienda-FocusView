<?php
require_once('../../core/helpers/Conexion.php');
require_once('../../core/helpers/validator.php');
require_once('../../core/models/clientes.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../core/libraries/PHPMailer/src/Exception.php';
require '../../core/libraries/PHPMailer/src/PHPMailer.php';
require '../../core/libraries/PHPMailer/src/SMTP.php';
$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
//Se comprueba si existe una petición del sitio web y la acción a realizar, de lo contrario se muestra una página de error
if (isset($_GET['site']) && isset($_GET['action'])) {
	session_start();
	$cliente = new Clientes;
	$result = array('status' => 0, 'exception' => '');
	//Se verifica si existe una sesión iniciada como administrador para realizar las operaciones correspondientes
		switch ($_GET['action']) {
            case 'logout':
                if (session_destroy()) {
                    header('location: ../../views/public/inicio.php');
                } else {
                    header('location: ../../views/public/inicio.php');
                }
            break;
			case 'read':
				if ($result['dataset'] = $cliente->readClientes()) {
					$result['status'] = 1;
				} else {
					$result['exception'] = 'No hay clientes registrados';
				}
                break;
                case 'readProfile':
                if ($cliente->setId($_SESSION['idCliente'])) {
                    if ($result['dataset'] = $cliente->getCliente()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Cliente inexistente';
                    }
                } else {
                    $result['exception'] = 'Cliente incorrecto';
                }
                break;
                case 'editProfile':
                if ($cliente->setId($_SESSION['idCliente'])) {
                    if ($cliente->getClientes()) {
                        $_POST = $cliente->validateForm($_POST);
                        if ($cliente->setNombres($_POST['profile_nombres'])) {
                            if ($cliente->setApellidos($_POST['profile_apellidos'])) {
                                if ($cliente->setCorreo($_POST['profile_correo'])) {
                                    if ($cliente->setUsuario($_POST['profile_alias'])) {
                                        if ($cliente->updateCliente()) {
                                            $_SESSION['aliascliente'] = $_POST['profile_alias'];
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Alias incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Correo incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['exception'] = 'cliente inexistente';
                    }
                } else {
                    $result['exception'] = 'cliente incorrecto';
                }
                break;
                case 'password':
                if ($cliente->setId($_SESSION['idCliente'])) {
                    $_POST = $cliente->validateForm($_POST);
                    if ($_POST['clave_actual_1'] == $_POST['clave_actual_2']) {
                        if ($cliente->setClave($_POST['clave_actual_1'])) {
                            if ($cliente->checkPassword()) {
                                if ($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']) {
                                    if ($cliente->setClave($_POST['clave_nueva_1'])) {
                                        if ($cliente->changePassword()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Clave nueva menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves nuevas diferentes';
                                }
                            } else {
                                $result['exception'] = 'Clave actual incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Clave actual menor a 6 caracteres';
                        }
                    } else {
                        $result['exception'] = 'Claves actuales diferentes';
                    }
                } else {
                    $result['exception'] = 'cliente incorrecto';
                }
                break;
                case 'create':
                $_POST = $cliente->validateForm($_POST);
                if ($cliente->setNombres($_POST['create_nombres'])) {
                    if ($cliente->setApellidos($_POST['create_apellidos'])) {
                        if ($cliente->setCorreo($_POST['create_correo'])) {
                            if ($cliente->setCliente($_POST['create_alias'])) {
                                if ($_POST['create_clave1'] == $_POST['create_clave2']) {
                                    if ($cliente->setClave($_POST['create_clave1'])) {
                                        if ($cliente->createClientes()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Clave menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves diferentes';
                                }
                            } else {
                                $result['exception'] = 'Alias incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Correo incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            case 'get':
                if ($cliente->setId($_POST['id_cliente'])) {
                    if ($result['dataset'] = $cliente->getClientes()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Categoría inexistente';
                    }
                } else {
                    $result['exception'] = 'Categoría incorrecta';
                }
            	break;
                case 'update':
                $_POST = $cliente->validateForm($_POST);
                if ($cliente->setId($_POST['id_cliente'])) {
                    if ($cliente->getClientes()) {
                        if ($cliente->setNombres($_POST['update_nombres'])) {
                            if ($cliente->setApellidos($_POST['update_apellidos'])) {
                                if ($cliente->setCorreo($_POST['update_correo'])) {
                                    if ($cliente->setCliente($_POST['update_alias'])) {
                                        if ($cliente->updateCliente()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Alias incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Correo incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['exception'] = 'cliente inexistente';
                    }
                } else {
                    $result['exception'] = 'cliente incorrecto';
                }
                break;
                case 'agregarCarrito':
                    $_POST = $cliente->validateForm($_POST);
                    if ($cliente->setIdCliente($_SESSION['idCliente'])) {
                        if ($cliente->setIdProducto($_POST['id_producto'])){
                            if ($cliente->setCantidad($_POST['cantidad'])){
                                if ($cliente->agregarCarrito()) {
                                    $result['status'] = 1;
                                } else {
                                        $result['exception'] = 'Operación fallida';
                                    }
                            } else {
                                $result['exception'] = 'Cantidad Incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Producto Incorrecto';
                        }
                            
                    } else {
                        $result['exception'] = 'Inicie Sesion';
                    }
                break;
                case 'readCarrito':
                    //$_POST = $cliente->validateForm($_POST);
                    if ($cliente->setId($_SESSION['idCliente'])) {
                        if ($result['dataset'] = $cliente->readCarrito()) {
                            $result['status'] = 1;
                        } else {
                            
                            }
                    } else {
                        $result['exception'] = 'Inicie Sesion';
                    }
                break;
                case 'deleteCarrito':
                if($cliente->setIdPrepedido($_POST['id_prepedido'])){
                    if ($cliente->getPre()){
                        if ($cliente->deleteCarrito()){
                            $result['status'] = 1;
                        } else {

                        }
                    } else {

                    }
                } else {

                }      
                break;
                case 'createPedido':
                if($cliente->setId($_SESSION['idCliente'])){
                    if ($cliente->setIdCliente($_SESSION['idCliente'])){
                            if($cliente->createPedido()){
                                if($cliente->readUltimoPedido()){
                                    if ($cliente->readPrepedido()){
                                        if($data = $cliente->readCarrito()){
                                            foreach($data as $producto){
                                                if($cliente->setIdProducto($producto['id_producto'])){
                                                    if($cliente->setCantidad($producto['cantidad'])){
                                                        if($cliente->createDetallePedido()){
                                                            
                                                        }
                                                    } else {
                                                        $result['exception'] = 'Cantidad incorrecta';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Producto incorrecto';
                                                }
                                            }
                                            if($cliente->deletePrepedido()){
                                                $result['status'] = 1;
                                            } else {
                                                $result['exception'] = 'Ocurrió un problema al eliminar el pre pedido';
                                            }
                                        } else {
                                            $result['exception'] = 'Ocurrió un problema al obtener los productos';
                                        }
                                    } else {
                                        $result['exception'] = 'Ocurrió un problema al obtener los datos de pre pedido';
                                    }
                                } else {
                                    $result['exception'] = 'Ocurrió un problema al obtener el ultimo pedido';
                                }
                            } else {
                                $result['exception'] = 'Ocurrió un problema al crear el pedido';
                            }
                    } else {
                        $result['exception'] = 'Cliente incorrecto';
                    }
                    
                } else {
                    $result['exception'] = 'Inicie Sesión';
                }  
                break;
            case 'delete':
                    if ($cliente->setId($_POST['id_cliente'])) {
                        if ($cliente->getClientes()) {
                            if ($cliente->deleteCliente()) {
                                $result['status'] = 1;
                            } else {
                                $result['exception'] = 'Operación fallida';
                            }
                        } else {
                            $result['exception'] = 'cliente inexistente';
                        }
                    } else {
                        $result['exception'] = 'cliente incorrecto';
                    }
                break;
                case 'register':
                $_POST = $cliente->validateForm($_POST);
                $captcha = $_POST['g-recaptcha-response'];
                if ($cliente->setNombres($_POST['nombres'])) {
                    if ($cliente->setApellidos($_POST['apellidos'])) {
                        if ($cliente->setCorreo($_POST['correo'])) {
                            if ($cliente->setUsuario($_POST['alias'])) {
                                if ($_POST['clave1'] == $_POST['clave2']) {
                                    if ($cliente->setClave($_POST['clave1'])) {
                                        if(!$captcha){
                                            $result['exception'] = 'Verifica el captcha';
                                        } else {
                                            if ($cliente->createClientes()) {
                                                $result['status'] = 1;
                                            } else {
                                                $result['exception'] = 'Operación fallida';
                                            }  
                                        }
                                    } else {
                                        $result['exception'] = 'Clave menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves diferentes';
                                }
                            } else {
                                $result['exception'] = 'Alias incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Correo incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
                case 'login':
                $_POST = $cliente->validateForm($_POST);
                if ($cliente->setUsuario($_POST['usuario'])) {
                    if ($cliente->checkUsuario_Cliente()) {
                        if ($cliente->setClave($_POST['clave'])) {
                            if ($cliente->checkPassword()) {
                                $_SESSION['idCliente'] = $cliente->getId();
                                $_SESSION['aliasCliente'] = $cliente->getCliente();
                                $result['status'] = 1;
                            } else {
                                $result['exception'] = 'Clave inexistente';
                            }
                        } else {
                            $result['exception'] = 'Clave menor a 6 caracteres';
                        }
                    } else {
                        $result['exception'] = 'Alias inexistente';
                    }
                } else {
                    $result['exception'] = 'Alias incorrecto';
                }
                break;
                case 'recuperarContrasena':
                $_POST = $cliente->validateForm($_POST);
                if ($cliente->setCorreo($_POST['correo'])) {
                    if($cliente->checkCorreo()){
                        $correo = $cliente->getCorreo();
                        $token = uniqid();
                        if($cliente->setToken($token)){
                            if($cliente->updateToken()){
                                try {
                                $mail->isSMTP();                                            // Set mailer to use SMTP
                                $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                                $mail->Username   = 'test503sv@gmail.com';                             // SMTP username
                                $mail->Password   = '71096669';                             // SMTP password
                                $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                                $mail->Port       = 587;
                                //Recipients
                                $mail->setFrom('test503sv@gmail.com', 'FocusView - Recuperar contraseña');
                                $mail->addAddress($correo);
                                // Content
                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = 'Recuperar contraseña';
                                $mail->Body    = 'Haga click <a href="http://localhost/Tienda-FocusView/views/public/nueva_contrasena.php?token='.$token.'">aqui</a> para recuperar su contraseña';
                            
                                $mail->send();
                                $result['status'] = 1;
                                } catch (Exception $e) {
                                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                }
                            } else{
                                $result['exception'] = 'Error al actualizar el token';
                            }
                            
                        } else {
                            $result['exception'] = 'Error al setear el token';
                        }
                        
                    } else{
                        $result['exception'] = 'El correo no coincide con ningún usuario';
                    }
                } else {
                    $result['exception'] = 'Correo incorrecto';
                }
                break;
                case 'nuevaPassword':
                $_POST = $cliente->validateForm($_POST);
                if($cliente->setToken($_POST['token'])){
                    if($cliente->getDatosToken()){
                        if ($_POST['nueva_contrasena'] == $_POST['nueva_contrasena2']) {
                            if ($cliente->setClave($_POST['nueva_contrasena'])) {
                                if ($cliente->changePassword()) {
                                    $result['status'] = 1;
                                } else {
                                    $result['exception'] = 'Operación fallida';
                                }
                            } else {
                                $result['exception'] = 'Clave menor a 6 caracteres';
                            }
                        } else {
                            $result['exception'] = 'Claves diferentes';
                            
                        } 
                    } else {
                        $result['exception'] = 'Error al obtener los datos del usuario';
                    }
                } else {
                    $result['exception'] = 'Error al setear el token';
                }
                
                break;

			default:
				exit('Acción no disponible');
		}
	print(json_encode($result));
} else {
	exit('Recurso denegado');
}
?>
