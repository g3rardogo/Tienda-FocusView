<?php
/*
    Este archivo contiene una clase para realizar el manejo de la base de datos del sistema.
*/

class Conexion 
{
/*
    Estos son los atributos de la clase para almacenar los datos necesarios para realizar las acciones respectivas.
*/
    private static $connection = null;
    private static $statement = null;
    private static $id = null;
/*
    Este método tiene por objetivo establecer la conexión con la base de datos utilizando las credenciales respectivas.
    No recibe parámetros y no devuelve ningún valor, capturando las excepciones del servidor de bases de datos.
*/
    private function connect()
    {
        $server = 'localhost';
        $db = 'FocusView';
        $username = 'root';
        $password = '';
        try {
            @self::$connection = new PDO('mysql:host='.$server.'; dbname='.$db, $username, $password);
        } catch(PDOException $error) {
            exit(self::getException($error->getCode(), $error->getMessage()));
        }
    }

/*
    Este método tiene por objetivo anular la conexión con la base de datos y capturar la información de las excepciones en las sentencias SQL.
    No recibe parámetros y no devuelve ningún valor.
*/

    private function desconnect()
    {
        self::$connection = null;
        $error = self::$statement->errorInfo();
        if ($error[0] != '00000') {
            exit(self::getException($error[1], $error[2]));
        }
    }

/*
    Este método tiene por objetivo ejecutar las siguientes sentencias SQL: insert, update y delete.
    Recibe como parámetros la sentencia SQL de tipo string y los valores de los campos respectivos en un arreglo.
    Se utiliza además, para obtener el valor de la llave primaria del último registro insertado.
    Devuelve como resultado TRUE en caso de éxito y FALSE en caso contrario.
*/

    public static function executeRow($query, $values)
    {
        self::connect();
        self::$statement = self::$connection->prepare($query);
        $state = self::$statement->execute($values);
        self::$id = self::$connection->lastInsertId();
        self::desconnect();
        return $state;
    }

/*
    Este método tiene como propósito obtener el resultado del primer registro de una consulta tipo SELECT.
    Recibe como parámetros la sentencia SQL de tipo string y los valores de los campos respectivos en un arreglo.
    Devuelve como resultado un arreglo del registro númerico y asociativo en caso de éxito, NULL en caso contrario.
*/
    public static function getRow($query, $values)
    {
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetch(PDO::FETCH_ASSOC);
    }

/*
    Este método tiene como propósito obtener todos los registros de una consulta tipo SELECT.
    Recibe como parámetros la sentencia SQL de tipo string y los valores de los campos respectivos en un arreglo.
    Devuelve como resultado un arreglo con los registros númericos y asociativos en caso de éxito, NULL en caso contrario.
*/

    public static function getRows($query, $values)
    {
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetchAll(PDO::FETCH_ASSOC);
    }

/*
    Este método tiene por objetivo devolver el valor de la llave primaria del último registro insertado.
    No recibe parámetros.
*/
    public static function getLastRowId()
    {
        return self::$id;
    }

/*
    Este método tiene por objetivo devolver un mensaje de error al ocurrir una excepción.
    No recibe parámetros.
*/

    private static function getException($code, $message)
    {
        switch ($code) {
            case 1045:
                $message = 'Autenticación desconocida';
                break;
            case 1049:
                $message = 'Base de datos desconocida';
                break;
            case 1054:
                $message = 'Nombre de campo desconocido';
                break;
            case 1062:
                $message = 'Dato duplicado, no se puede guardar';
                break;
            case 1146:
                $message = 'Nombre de tabla desconocido';
                break;
            case 1451:
                $message = 'Registro ocupado, no se puede eliminar';
                break;
            case 2002:
                $message = 'Servidor desconocido';
                break;
            default:
                $message = 'Ocurrió un problema, contacte al administrador :(';
        }
        return $message;
    }

}
?>