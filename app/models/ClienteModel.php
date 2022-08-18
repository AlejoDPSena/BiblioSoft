<?php
class ClienteModel{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function listar(){
        $this->db->query("SELECT idCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente FROM Cliente");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function getOne($id)
    {
        $this->db->query("SELECT * FROM cliente where idCliente =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO cliente(nombreCliente,apellidoCliente,telefonoCliente,estadoCliente) VALUES (:nombreCliente,:apellidoCliente,:telefonoCliente,:estadoCliente) ");
        //bindiamos
        $this->db->bind(':nombreCliente', $data['nombreCliente']);
        $this->db->bind(':apellidoCliente', $data['apellidoCliente']);
        $this->db->bind(':telefonoCliente', $data['telefonoCliente']);
        $this->db->bind(':estadoCliente', 'Activo');
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $this->db->query('UPDATE cliente SET nombreCliente=:nombreCliente,
        apellidoCliente=:apellidoCliente,telefonoCliente=:telefonoCliente WHERE idCliente=:idCliente       
        ');
        //vinculacion de los datos
        $this->db->bind(':idCliente', $data['idCliente']);
        $this->db->bind(':nombreCliente', $data['nombreCliente']);
        $this->db->bind(':apellidoCliente', $data['apellidoCliente']);
        $this->db->bind(':telefonoCliente', $data['telefonoCliente']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateEstado($data)
    {
        $this->db->query('UPDATE cliente SET estadoCliente=:estadoCliente WHERE idCliente=:idCliente       
        ');
        //vinculacion de los datos
        $this->db->bind(':idCliente', $data['idCliente']);
        $this->db->bind(':estadoCliente', $data['estadoCliente']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function totalClientes()
    {
        $this->db->query("SELECT COUNT(idCliente) as numevents FROM cliente");
        $resultSet = $this->db->getOne();
        return  $resultSet;
    }

    /**
     * totalPages
     * devuelve el total de paginas de acuerdo al limite y al offset
     * @param  mixed $perPage
     * @param  mixed $offset
     * @return void
     */
    public function totalPages($perPage, $offset)
    {
        $this->db->query("SELECT * from cliente ORDER BY apellidoCliente ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    //buscar por apellido
    public function search($data)
    {
        $this->db->query("SELECT * FROM cliente WHERE apellidoCliente LIKE CONCAT(:nombreCliente,'%')");
        $valor = $data['valor'];
        $this->db->bind(':nombreCliente', $valor);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM cliente");
        $resultSet = $this->db->getAll();
        // $resultSet = json_encode($resultSet);
        return $resultSet;
    }
}