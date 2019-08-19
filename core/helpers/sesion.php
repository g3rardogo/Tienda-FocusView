<?php
session_start();
$result = array('status' => 0, 'exception' => '', 'sesion' => 1);
if(isset($_SESSION['tiempo']) ) {
    $inactivo = 5;
    $vida_session = time() - $_SESSION['tiempo'];
    if($vida_session > $inactivo)
        {
            session_unset();
            session_destroy();   
            $result['sesion'] = 0;
            print json_encode($result);
            exit();
        } else { 
            $_SESSION['tiempo'] = time();
        }
} else {
    $_SESSION['tiempo'] = time();
}

?>
