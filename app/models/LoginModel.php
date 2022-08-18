<?php
class LoginModel{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function loginUser($data){
        $usuarioValidado = "";
        $this->db->query("select idUsuario, nombre1Usuario,nombre2Usuario,apellido1Usuario,apellido2Usuario from usuario where usuarioUsuario=:usuario and passwordUsuario=:passwordUsuario");
        $this->db->bind(':usuario',$data['usuario']);
        $this->db->bind(':passwordUsuario',$data['passwordUsuario']);
        $resultSet = $this->db->rowCount();
        if ($resultSet!=0){
            $usuarioValidado = $this->db->getOne();
        }
        return $usuarioValidado;
    }
}