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
        // $data = $this->UsuarioModel->listar(); //temporal porque no hay
        // $perPage = 15;
        // $totalCount = $this->UsuarioModel->totalUsuarios();
        // $pagination = new Paginator($currentPage, $perPage, $totalCount);
        // $offset = $pagination->offset();
        // $usuarios = $this->UsuarioModel->totalPages($perPage, $offset);

        // $data = [
        //     'usuarios' => $usuarios,
        //     'previous' => $pagination->previous(),
        //     'next' => $pagination->next(),
        //     'total' => $pagination->totalPages(),
        //     'currentPage' => $currentPage

        // ];
        $data = [];
        $this->renderView('Usuario/Usuario', $data);
    }
    
    public function formAdd(){
        $data = $this->RolModel->listarRol();  //temporal porque no hay data
        $this->renderView('Usuario/nuevoUsuario', $data);
    }

    public function formUpdate(){
        $data = $this->RolModel->listarRol(); 
        var_dump($data); //temporal porque no hay data
        /* $this->renderView('Usuario/editarUsuario', $data); */
    }

    public function updateEstado($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idUsuario' => $id,  //$id
                'estadoUsuario' => $_POST['estadoUsuario']
            ];

            if ($this->UsuarioModel->updateEstado($data)) {
                $data = [];
                $this->renderView('Usuario/Usuario', $data);
            } else {
                die('ocurrió un error en la edicición!');
            };
        } else {
            $usuario = $this->UsuarioModel->getOne($id);
            $data = [
                'idEditorial' => $usuario->idEditorial,
                'nombreEditorial' => $usuario->nombreEditorial,
                'telefonoEditorial' => $usuario->telefonoEditorial,
                'ubicacionEditorial' => $usuario->ubicacionEditorial
            ];
            $this->renderView('Editorial/estadoEditorial', $data);
        }
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
                echo json_encode('Exito: Usuario Creado!.');
            } else {
                echo json_encode("Hubo un error!");
            }
        } else {
            echo json_encode('Atención! los datos no fueron enviados de un formulario');
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
            $dataRol = $this->RolModel->listarRol();
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
                'nombreRol' => $dataRol
            ];
            $this->renderView('Usuario/editarUsuario', $data);
        }
    }

    public function search()
    {
        $data = [
            "valor" => $_POST['valor']
        ];

        $data = $this->UsuarioModel->search($data);
        $this->renderView('Usuario/Usuario', $data);
    }

    public function ImprimirListado()
    {
        $data = $this->UsuarioModel->getAll();
        //$data = [];
        $this->renderView('Usuario/rptListadoUsuarios', $data);
    }
    
    /**
     * datatable
     * Devuelve la data en formato json # necesario para que js lo capture y lo manipule en el Front.
     * @return void
     */
    public function datatable()
    {
        $usuario = $this->UsuarioModel->getTable();
        echo json_encode($usuario);
    }
}