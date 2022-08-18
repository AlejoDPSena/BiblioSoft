<?php

class Editorial extends Controller
{
    public function __construct()
    {
        $this->EditorialModel = $this->getModel('EditorialModel');
    }

    public function index()
    {
        $data = $this->EditorialModel->listar(); //temporal porque no hay
        $this->renderView('Editorial/Editorial', $data);
    }

    public function formUpdateEditorial($id)
    {
        $data = $this->EditorialModel->listarUpdate($id);
        $this->renderView('Editorial/editarEditorial', $data);
    }

    public function formAddEditorial()
    {
        $data = $this->EditorialModel->listar(); //temporal porque no hay
        $this->renderView('Editorial/nuevaEditorial', $data);
    }

    public function addEditorial()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nombreEditorial' => $_POST['nombreEditorial'],
                'telefonoEditorial' => $_POST['telefonoEditorial'],
                'ubicacionEditorial' => $_POST['ubicacionEditorial']
            ];
            $resultado = $this->EditorialModel->add($data);
            if ($resultado) {
                $data = [
                    'mensajeLibro' => 'Insercion exitosa'
                ];
                $this->renderView('Editorial/Editorial', $data);
            } else {
                $data = [
                    'mensajeLibro' => 'Error en la insercion'
                ];
                $this->renderView('Editorial/Editorial', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function updateEditorial()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'idEditorial' => $_POST['idEditorial'],
                'nombreEditorial' => $_POST['nombreEditorial'],
                'telefonoEditorial' => $_POST['telefonoEditorial'],
                'ubicacionEditorial' => $_POST['ubicacionEditorial']
            ];
            $resultado = $this->EditorialModel->update($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'Edicion exitosa'
                ];
                $this->renderView('Editorial/Editorial', $data);
            } else {
                $data = [
                    'mensaje' => 'Error en la edicion'
                ];
                $this->renderView('Editorial/Editorial', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function deleteEditorial($id)
    {
        $resultado = $this->EditorialModel->delete($id);
        if($resultado){
            $data = [
                'mensaje' => 'Eliminación exitosa'
            ];
            $this->renderView('Editorial/Editorial', $data);
        }else{
            $data = [
                'mensaje' => 'Error en la eliminación'
            ];
            $this->renderView('Editorial/Editorial', $data);
        }
    }

}