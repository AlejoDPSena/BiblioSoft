<?php

//modelo correspondiente a cada controlador
class MedicoModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //retorna todos los registros
    public function getAll()
    {
        $this->db->query("SELECT * FROM medico");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    // retorna un registro de acuerdo al id
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM medico where idMedico =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    } 
    // agrega un registro
    public function add($data)
    {
        $this->db->query("INSERT INTO medico(nombreMedico,apellidosMedico,emailMedico,especialidadMedico) VALUES (:nombreMedico,:apellidosMedico,:emailMedico,:especialidadMedico) ");
        //bindiamos
        $this->db->bind(':nombreMedico', $data['nombreMedico']);
        $this->db->bind(':apellidosMedico', $data['apellidosMedico']);
        $this->db->bind(':emailMedico', $data['emailMedico']);
        $this->db->bind(':especialidadMedico', $data['especialidadMedico']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //actualiza un registro
    public function update($data)
    {
        $this->db->query('UPDATE medico SET nombreMedico=:nombreMedico,
        apellidosMedico=:apellidosMedico,emailMedico=:emailMedico,
        especialidadMedico=:especialidadMedico WHERE idMedico=:idMedico       
        ');
        //vinculacion de los datos
        $this->db->bind(':idMedico', $data['idMedico']);
        $this->db->bind(':nombreMedico', $data['nombreMedico']);
        $this->db->bind(':apellidosMedico', $data['apellidosMedico']);
        $this->db->bind(':emailMedico', $data['emailMedico']);
        $this->db->bind(':especialidadMedico', $data['especialidadMedico']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    //borra un registro
    public function delete($data)
    {
        $this->db->query('DELETE FROM medico WHERE idMedico = :idMedico');
        //vinculacion de los datos
        $this->db->bind(':idMedico', $data['idMedico']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function searchById($id)
    {
        //TODO
    }
}