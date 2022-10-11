<?php
$_SESSION['control'] = 0 ;
class Editorial extends Controller
{
    public function __construct()
    {
        $this->EditorialModel = $this->getModel('EditorialModel');
    }

    public function index()
    {
        /* $data = $this->EditorialModel->listar(); //temporal porque no hay
        $perPage = 15;
        $totalCount = $this->EditorialModel->totalEditoriales();
        $pagination = new Paginator($currentPage, $perPage, $totalCount);
        $offset = $pagination->offset();
        $editoriales = $this->EditorialModel->totalPages($perPage, $offset);

        $data = [
            'editoriales' => $editoriales,
            'previous' => $pagination->previous(),
            'next' => $pagination->next(),
            'total' => $pagination->totalPages(),
            'currentPage' => $currentPage

        ]; */
        $data = [];
        if (isset($_SESSION['control'])){
            $this->renderView('Editorial/Editorial', $data);
        }
        else{
            $this->renderView('Login', $data);
        }
    }
    
    /**
     * dataTable
     * Devuelve la data en un objeto json, necesario para que javascript lo pueda leer y pueda manipular en frontend
     * @return void
     */
    public function dataTable()
    {
        $data = $this->EditorialModel->listar(); //temporal porque no hay
        echo json_encode($data);
    }

    public function updateEstado($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idEditorial' => $id,  //$id
                'estadoEditorial' => $_POST['estadoEditorial']
            ];

            if ($this->EditorialModel->updateEstado($data)) {
                $data = [];
                $this->renderView('Editorial/Editorial', $data);
            } else {
                die('ocurrió un error en la edicición!');
            };
        } else {
            $editorial = $this->EditorialModel->getOne($id);
            $data = [
                'idEditorial' => $editorial->idEditorial,
                'nombreEditorial' => $editorial->nombreEditorial,
                'telefonoEditorial' => $editorial->telefonoEditorial,
                'ubicacionEditorial' => $editorial->ubicacionEditorial
            ];
            $this->renderView('Editorial/estadoEditorial', $data);
        }
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
                echo json_encode('Exito: Editorial Creado !.');
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

    public function search()
    {
        $data = [
            "valor" => $_POST['valor']
        ];

        $data = $this->EditorialModel->search($data);
        $this->renderView('Editorial/Editorial', $data);
    }

    public function ImprimirListado()
    {
        $data = $this->EditorialModel->getAll();
        //$data = [];
        $this->renderView('Editorial/rptListadoEditoriales', $data);
    }

}