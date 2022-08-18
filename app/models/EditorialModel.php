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
}