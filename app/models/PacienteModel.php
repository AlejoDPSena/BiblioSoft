<?php
class PacienteModel{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function listar(){
        $this->db->query("SELECT * FROM paciente");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}