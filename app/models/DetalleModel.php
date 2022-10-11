<?php
class DetalleModel{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function add($data, $numPrestamo){
        $numFilas = 0;
        while ($numFilas < count($data["idLibro"])){
            $this->db->query("insert into detalle (cantidad,Prestamo_idPrestamo,Libro_idLibro) values (:cantidad,:idPrestamo,:idLibro)");
            $this->db->bind(':cantidad',$data['cantidad'][$numFilas]);
            $this->db->bind(':idPrestamo',$numPrestamo);
            $this->db->bind(':idLibro',$data['idLibro'][$numFilas]);
            $resultado = $this->db->execute();
            $numFilas = $numFilas + 1;
        }
        return $resultado;
    }
}