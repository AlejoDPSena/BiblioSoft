<?php
class LibroModel{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function listar(){
        $this->db->query("SELECT idLibro,nombreLibro,categoriaLibro,autorLibro,cantidadLibro,detallesLibro,publicacionLibro,Editorial_idEditorial,nombreEditorial FROM Libro INNER JOIN Editorial on Libro.Editorial_idEditorial = Editorial.idEditorial; ");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function listarUpdate($id){
        $this->db->query("SELECT idLibro,nombreLibro,categoriaLibro,autorLibro,cantidadLibro,detallesLibro,publicacionLibro,Editorial_idEditorial,nombreEditorial FROM Libro INNER JOIN Editorial on Libro.Editorial_idEditorial = Editorial.idEditorial where idLibro=:idLibro; ");
        $this->db->bind(':idLibro', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    public function listarEditorial(){
        $this->db->query("SELECT idEditorial,nombreEditorial FROM Editorial");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO libro(nombreLibro,categoriaLibro,autorLibro,cantidadLibro,detallesLibro,publicacionLibro,Editorial_idEditorial) VALUES (:nombreLibro,:categoriaLibro,:autorLibro,:cantidadLibro,:detallesLibro,:publicacionLibro,:idEditorial) ");
        //bindiamos
        $this->db->bind(':nombreLibro', $data['nombreLibro']);
        $this->db->bind(':categoriaLibro', $data['categoriaLibro']);
        $this->db->bind(':autorLibro', $data['autorLibro']);
        $this->db->bind(':cantidadLibro', $data['cantidadLibro']);
        $this->db->bind(':detallesLibro', $data['detallesLibro']);
        $this->db->bind(':publicacionLibro', $data['publicacionLibro']);
        $this->db->bind(':idEditorial', $data['idEditorial']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $this->db->query("update libro set nombreLibro=:nombreLibro,categoriaLibro=:categoriaLibro,autorLibro=:autorLibro,cantidadLibro=:cantidadLibro,detallesLibro=:detallesLibro,publicacionLibro=:publicacionLibro,Editorial_idEditorial=:idEditorial where idLibro=:idLibro ");
        //bindiamos
        $this->db->bind(':idLibro', $data['idLibro']);
        $this->db->bind(':nombreLibro', $data['nombreLibro']);
        $this->db->bind(':categoriaLibro', $data['categoriaLibro']);
        $this->db->bind(':autorLibro', $data['autorLibro']);
        $this->db->bind(':cantidadLibro', $data['cantidadLibro']);
        $this->db->bind(':detallesLibro', $data['detallesLibro']);
        $this->db->bind(':publicacionLibro', $data['publicacionLibro']);
        $this->db->bind(':idEditorial', $data['idEditorial']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->query("delete from libro where idLibro=:idLibro ");
        //bindiamos
        $this->db->bind(':idLibro', $id);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function totalLibros()
    {
        $this->db->query("SELECT COUNT(idLibro) as numevents FROM libro");
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
        $this->db->query("SELECT idLibro,nombreLibro,categoriaLibro,autorLibro,cantidadLibro,detallesLibro,publicacionLibro,Editorial_idEditorial,nombreEditorial from libro INNER JOIN Editorial on Libro.Editorial_idEditorial = Editorial.idEditorial ORDER BY idLibro ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    //buscar por apellido
    public function search($data)
    {
        $this->db->query("SELECT * FROM libro WHERE nombreLibro LIKE CONCAT(:nombreLibro,'%')");
        $valor = $data['valor'];
        $this->db->bind(':nombreLibro', $valor);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function getAll()
    {
        $this->db->query("SELECT idLibro,nombreLibro,categoriaLibro,autorLibro,cantidadLibro,detallesLibro,publicacionLibro,Editorial_idEditorial,nombreEditorial FROM libro INNER JOIN Editorial on Libro.Editorial_idEditorial = Editorial.idEditorial;");
        $resultSet = $this->db->getAll();
        // $resultSet = json_encode($resultSet);
        return $resultSet;
    }
}