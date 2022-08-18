<?php
class UsuarioModel{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function listar(){
        $this->db->query("SELECT usuario.idUsuario,usuario.nombre1Usuario,usuario.nombre2Usuario,usuario.apellido1Usuario,usuario.apellido2Usuario,usuario.telefonoUsuario,usuario.emailUsuario,usuario.usuarioUsuario,rol.nombreRol FROM usuario INNER JOIN rol on usuario.Rol_idRol = rol.idRol");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function getOne($id)
    {
        $this->db->query("SELECT * FROM usuario INNER JOIN rol on usuario.Rol_idRol = rol.idRol where idUsuario =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    public function add($data)
    {
        $this->db->query("INSERT INTO usuario(nombre1Usuario,nombre2Usuario,apellido1Usuario,apellido2Usuario,telefonoUsuario,emailUsuario,usuarioUsuario,passwordUsuario,Rol_idRol) VALUES (:nombre1Usuario,:nombre2Usuario,:apellido1Usuario,:apellido2Usuario,:telefonoUsuario,:emailUsuario,:usuarioUsuario,:passwordUsuario,:Rol_idRol) ");
        //bindiamos
        $this->db->bind(':nombre1Usuario', $data['nombre1Usuario']);
        $this->db->bind(':nombre2Usuario', $data['nombre2Usuario']);
        $this->db->bind(':apellido1Usuario', $data['apellido1Usuario']);
        $this->db->bind(':apellido2Usuario', $data['apellido2Usuario']);
        $this->db->bind(':telefonoUsuario', $data['telefonoUsuario']);
        $this->db->bind(':emailUsuario', $data['emailUsuario']);
        $this->db->bind(':usuarioUsuario', $data['usuarioUsuario']);
        $this->db->bind(':passwordUsuario', $data['passwordUsuario']);
        $this->db->bind(':Rol_idRol', $data['Rol_idRol']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $this->db->query('UPDATE usuario SET nombre1Usuario=:nombre1Usuario,nombre2Usuario=:nombre2Usuario,apellido1Usuario=:apellido1Usuario,apellido2Usuario=:apellido2Usuario,telefonoUsuario=:telefonoUsuario,emailUsuario=:emailUsuario,usuarioUsuario=:usuarioUsuario,Rol_idRol=:Rol_idRol WHERE idUsuario=:idUsuario       
        ');
        //vinculacion de los datos
        $this->db->bind(':nombre1Usuario', $data['nombre1Usuario']);
        $this->db->bind(':nombre2Usuario', $data['nombre2Usuario']);
        $this->db->bind(':apellido1Usuario', $data['apellido1Usuario']);
        $this->db->bind(':apellido2Usuario', $data['apellido2Usuario']);
        $this->db->bind(':telefonoUsuario', $data['telefonoUsuario']);
        $this->db->bind(':emailUsuario', $data['emailUsuario']);
        $this->db->bind(':usuarioUsuario', $data['usuarioUsuario']);
        $this->db->bind(':Rol_idRol', $data['Rol_idRol']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function totalUsuarios()
    {
        $this->db->query("SELECT COUNT(idUsuario) as numevents FROM usuario");
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
        $this->db->query("SELECT usuario.idUsuario,usuario.nombre1Usuario,usuario.nombre2Usuario,usuario.apellido1Usuario,usuario.apellido2Usuario,usuario.telefonoUsuario,usuario.emailUsuario,usuario.usuarioUsuario,rol.nombreRol from usuario INNER JOIN rol on usuario.Rol_idRol = rol.idRol ORDER BY idUsuario ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    //buscar por apellido
    public function search($data)
    {
        $this->db->query("SELECT usuario.idUsuario,usuario.nombre1Usuario,usuario.nombre2Usuario,usuario.apellido1Usuario,usuario.apellido2Usuario,usuario.telefonoUsuario,usuario.emailUsuario,usuario.usuarioUsuario,rol.nombreRol FROM usuario INNER JOIN rol on usuario.Rol_idRol = rol.idRol WHERE nombre1Usuario LIKE CONCAT(:nombreUsuario,'%')");
        $valor = $data['valor'];
        $this->db->bind(':nombreUsuario', $valor);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function getAll()
    {
        $this->db->query("SELECT usuario.idUsuario,usuario.nombre1Usuario,usuario.nombre2Usuario,usuario.apellido1Usuario,usuario.apellido2Usuario,usuario.telefonoUsuario,usuario.emailUsuario,usuario.passwordUsuario,usuario.usuarioUsuario,rol.nombreRol FROM usuario INNER JOIN rol on usuario.Rol_idRol = rol.idRol");
        $resultSet = $this->db->getAll();
        // $resultSet = json_encode($resultSet);
        return $resultSet;
    }
}