<?php

class Usuario extends Controller
{
    public function __construct()
    {
        $this->UsuarioModel = $this->getModel('UsuarioModel');
        $this->RolModel = $this->getModel('RolModel');
    }

    public function index()
    {
        $data = $this->UsuarioModel->listar(); //temporal porque no hay
        $this->renderView('Usuario/Usuario', $data);
    }
    public function formAdd(){
        $data = $this->RolModel->listarRol();  //temporal porque no hay data
        $this->renderView('Usuario/nuevoUsuario', $data);
    }

    public function formUpdate(){
        $data = $this->RolModel->listarRol();  //temporal porque no hay data
        $this->renderView('Usuario/editarUsuario', $data);
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nombre1Usuario' => $_POST['nombre1Usuario'],
                'nombre2Usuario' => $_POST['nombre2Usuario'],
                'apellido1Usuario' => $_POST['apellido1Usuario'],
                'apellido2Usuario' => $_POST['apellido2Usuario'],
                'telefonoUsuario' => $_POST['telefonoUsuario'],
                'emailUsuario' => $_POST['emailUsuario'],
                'usuarioUsuario' => $_POST['usuarioUsuario'],
                'passwordUsuario' => $_POST['passwordUsuario'],
                'Rol_idRol' => $_POST['Rol_idRol']
            ];
            $resultado = $this->UsuarioModel->add($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                $this->renderView('Usuario/nuevoUsuario', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                $this->renderView('Usuario/nuevoUsuario', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idUsuario' => $id,  //$id
                'nombre1Usuario' => $_POST['nombre1Usuario'],
                'nombre2Usuario' => $_POST['nombre2Usuario'],
                'apellido1Usuario' => $_POST['apellido1Usuario'],
                'apellido2Usuario' => $_POST['apellido2Usuario'],
                'telefonoUsuario' => $_POST['telefonoUsuario'],
                'emailUsuario' => $_POST['emailUsuario'],
                'usuarioUsuario' => $_POST['usuarioUsuario'],
                'Rol_idRol' => $_POST['Rol_idRol']
            ];

            if ($this->UsuarioModel->update($data)) {
                $data = [];
                $this->renderView('Usuario/Usuario', $data);
            } else {
                die('ocurrió un error en la edicición!');
            };
        } else {
            $usuario = $this->UsuarioModel->getOne($id);
            $data = [
                'idUsuario' => $usuario->idUsuario,
                'nombre1Usuario' => $usuario->nombre1Usuario,
                'nombre2Usuario' => $usuario->nombre2Usuario,
                'apellido1Usuario' => $usuario->apellido1Usuario,
                'apellido2Usuario' => $usuario->apellido2Usuario,
                'telefonoUsuario' => $usuario->telefonoUsuario,
                'emailUsuario' => $usuario->emailUsuario,
                'usuarioUsuario' => $usuario->usuarioUsuario,
                'Rol_idRol' => $usuario->Rol_idRol,
            ];
            $this->renderView('Usuario/editarUsuario', $data);
        }
    }
}