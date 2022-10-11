<?php
class PrestamoModel{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO prestamo(fechaInicioPresta,fechaFinPresta,Cliente_idCliente) VALUES (:fechaIni,:fechaFin,:idCliente) ");
        //bindiamos
        $this->db->bind(':fechaIni', $data['fechaIni']);
        $this->db->bind(':fechaFin', $data['fechaFin']);
        $this->db->bind(':idCliente', $data['idCliente']);
        //verificamos la ejecucion correcta del query 
        $resultado = $this->db->execute();
        return $resultado;
    }

    public function getLast(){
        $ultimo = $this->db->lastInsertId();
        return $ultimo;
    }
    public function rowCount()
    {
        $conteo = $this->db->rowCount();
        return $conteo;
    }
}