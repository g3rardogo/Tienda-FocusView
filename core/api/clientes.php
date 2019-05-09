<?php
require_once('../../core/helpers/Conexion.php');
require_once('../../core/helpers/validator.php');
require_once('../../core/models/clientes.php');

//Se comprueba si existe una petición del sitio web y la acción a realizar, de lo contrario se muestra una página de error
if (isset($_GET['site']) && isset($_GET['action'])) {
	session_start();
	$cliente = new Clientes;
	$result = array('status' => 0, 'exception' => '');
	//Se verifica si existe una sesión iniciada como administrador para realizar las operaciones correspondientes
		switch ($_GET['action']) {
			case 'read':
				if ($result['dataset'] = $cliente->readClientes()) {
					$result['status'] = 1;
				} else {
					$result['exception'] = 'No hay clientes registrados';
				}
				break;
			case 'search':
				$_POST = $cliente->validateForm($_POST);
				if ($_POST['busqueda'] != '') {
					if ($result['dataset'] = $cliente->searchClientes($_POST['busqueda'])) {
						$result['status'] = 1;
					} else {
						$result['exception'] = 'No hay coincidencias';
					}
				} else {
					$result['exception'] = 'Ingrese un valor para buscar';
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
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
                case 'create':
                $_POST = $cliente->validateForm($_POST);
                if ($cliente->setNombres($_POST['create_nombres'])) {
                    if ($cliente->setApellidos($_POST['create_apellidos'])) {
                        if ($cliente->setCorreo($_POST['create_correo'])) {
                            if ($cliente->setUsuario($_POST['create_alias'])) {
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
                                    if ($cliente->setUsuario($_POST['update_alias'])) {
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
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
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
                            $result['exception'] = 'Usuario inexistente';
                        }
                    } else {
                        $result['exception'] = 'Usuario incorrecto';
                    }
                break;
                case 'register':
                $_POST = $cliente->validateForm($_POST);
                if ($cliente->setNombres($_POST['nombres'])) {
                    if ($cliente->setApellidos($_POST['apellidos'])) {
                        if ($cliente->setCorreo($_POST['correo'])) {
                            if ($cliente->setUsuario($_POST['alias'])) {
                                if ($_POST['clave1'] == $_POST['clave2']) {
                                    if ($cliente->setClave($_POST['clave1'])) {
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
                case 'login':
                $_POST = $cliente->validateForm($_POST);
                if ($cliente->setUsuario($_POST['usuario'])) {
                    if ($cliente->checkUsuario_Cliente()) {
                        if ($cliente->setClave($_POST['clave'])) {
                            if ($cliente->checkPassword()) {
                                $_SESSION['idCliente'] = $cliente->getId();
                                $_SESSION['aliasCliente'] = $cliente->getUsuario();
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
			default:
				exit('Acción no disponible');
		}
	print(json_encode($result));
} else {
	exit('Recurso denegado');
}
?>
