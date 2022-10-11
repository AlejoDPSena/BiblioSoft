<?php
class EditorialModel{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function listar(){
        $this->db->query("SELECT idEditorial,nombreEditorial, telefonoEditorial, ubicacionEditorial FROM Editorial");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function listarUpdate($id){
        $this->db->query("SELECT idEditorial,nombreEditorial, telefonoEditorial, ubicacionEditorial FROM Editorial where idEditorial=:idEditorial");
        $this->db->bind(':idEditorial', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO editorial(nombreEditorial,telefonoEditorial,ubicacionEditorial) VALUES (:nombreEditorial,:telefonoEditorial,:ubicacionEditorial) ");
        //bindiamos
        $this->db->bind(':nombreEditorial', $data['nombreEditorial']);
        $this->db->bind(':telefonoEditorial', $data['telefonoEditorial']);
        $this->db->bind(':ubicacionEditorial', $data['ubicacionEditorial']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updateEstado($data)
    {
        $this->db->query('UPDATE editorial SET estadoEditorial=:estadoEditorial WHERE idEditorial=:idEditorial       
        ');
        //vinculacion de los datos
        $this->db->bind(':idEditorial', $data['idEditorial']);
        $this->db->bind(':estadoEditorial', $data['estadoEditorial']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $this->db->query("update editorial set nombreEditorial=:nombreEditorial,telefonoEditorial=:telefonoEditorial,ubicacionEditorial=:ubicacionEditorial where idEditorial=:idEditorial ");
        //bindiamos
        $this->db->bind(':idEditorial', $data['idEditorial']);
        $this->db->bind(':nombreEditorial', $data['nombreEditorial']);
        $this->db->bind(':telefonoEditorial', $data['telefonoEditorial']);
        $this->db->bind(':ubicacionEditorial', $data['ubicacionEditorial']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->query("delete from editorial where idEditorial=:idEditorial ");
        //bindiamos
        $this->db->bind(':idEditorial', $id);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function totalEditoriales()
    {
        $this->db->query("SELECT COUNT(idEditorial) as numevents FROM editorial");
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
        $this->db->query("SELECT * from editorial ORDER BY idEditorial ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    //buscar por apellido
    public function search($data)
    {
        $this->db->query("SELECT * FROM editorial WHERE nombreEditorial LIKE CONCAT(:nombreEditorial,'%')");
        $valor = $data['valor'];
        $this->db->bind(':nombreEditorial', $valor);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM editorial");
        $resultSet = $this->db->getAll();
        // $resultSet = json_encode($resultSet);
        return $resultSet;
    }
}