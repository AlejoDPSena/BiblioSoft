<?php
/*
clase base para manipular el gestor de base de datos
CRM Basico
*/

class Dbase
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $bdatos = DB_NAME;

    //Variables para la consulta

    private $dbh; //Para almacenar la conexion
    private $stmt; // Para los resultados de querys statement
    private $error; // Para los errores

    //hacemos la conexion
    public function __construct()
    {
        //FIXME:agrega opciones de mysql
        //$dsn: almacena la ruta
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->bdatos.";charset=utf8";
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo "se ha generado un error en la conexion: " . $this->error;
        }
    }

    //metodo para parametrizar la consulta
    //le deben llegar 3 parametros:
    //El parametro, el valor adjunto y el tipo de parametro
    //@return parametro
    public function bind($parameter, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($parameter, $value, $type);
    }

    //procesar la consulta y aplicar el prepare
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    //Ejecuta la consulta
    public function execute()
    {
        return $this->stmt->execute();
    }

    //Ejecuta la consulta y devuelve arreglo de objeto
    public function getAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Ejecuta la consulta y devuelve una fila del arreglo
    //
    public function getOne()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Para la paginacion se necesita contar el numero de registros de la consulta
    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}
