<?php
class RolModel{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function listarRol(){
        $this->db->query("SELECT idRol, nombreRol FROM rol");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}