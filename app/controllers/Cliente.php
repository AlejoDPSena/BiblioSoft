<?php

class Cliente extends Controller
{
    public function __construct()
    {
        $this->ClienteModel = $this->getModel('ClienteModel');
    }

    public function index()
    {
        // $data = $this->ClienteModel->listar(); //temporal porque no hay
        // $perPage = 15;
        // $totalCount = $this->ClienteModel->totalClientes();
        // $pagination = new Paginator($currentPage, $perPage, $totalCount);
        // $offset = $pagination->offset();
        // $clientes = $this->ClienteModel->totalPages($perPage, $offset);

        // $data = [
        //     'clientes' => $clientes,
        //     'previous' => $pagination->previous(),
        //     'next' => $pagination->next(),
        //     'total' => $pagination->totalPages(),
        //     'currentPage' => $currentPage

        // ];
        $data = [];
        $this->renderView('Cliente/Cliente', $data);
    }

    public function formAddCliente(){
        $data = [];  //temporal porque no hay data
        $this->renderView('Cliente/nuevoCliente', $data);
    }

    public function addClient()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nombreCliente' => $_POST['nombreCliente'],
                'apellidoCliente' => $_POST['apellidoCliente'],
                'telefonoCliente' => $_POST['telefonoCliente']
            ];
            $resultado = $this->ClienteModel->add($data);
            if ($resultado) {
                echo json_encode('Exito: Cliente Creado !.');
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
                'idCliente' => $id,  //$id
                'nombreCliente' => $_POST['nombreCliente'],
                'apellidoCliente' => $_POST['apellidoCliente'],
                'telefonoCliente' => $_POST['telefonoCliente']
            ];

            if ($this->ClienteModel->update($data)) {
                $data = [];
                $this->renderView('Cliente/Cliente', $data);
            } else {
                die('ocurrió un error en la edicición!');
            };
        } else {
            $cliente = $this->ClienteModel->getOne($id);
            $data = [
                'idCliente' => $cliente->idCliente,
                'nombreCliente' => $cliente->nombreCliente,
                'apellidoCliente' => $cliente->apellidoCliente,
                'telefonoCliente' => $cliente->telefonoCliente
            ];
            $this->renderView('Cliente/editarCliente', $data);
        }
    }

    public function updateEstado($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idCliente' => $id,  //$id
                'estadoCliente' => $_POST['estadoCliente']
            ];

            if ($this->ClienteModel->updateEstado($data)) {
                $data = [];
                $this->renderView('Cliente/Cliente', $data);
            } else {
                die('ocurrió un error en la edicición!');
            };
        } else {
            $cliente = $this->ClienteModel->getOne($id);
            $data = [
                'idCliente' => $cliente->idCliente,
                'nombreCliente' => $cliente->nombreCliente,
                'apellidoCliente' => $cliente->apellidoCliente,
                'estadoCliente' => $cliente->estadoCliente
            ];
            $this->renderView('Cliente/estadoCliente', $data);
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idMedico' => $id
            ];

            if ($this->ClienteModel->delete($data)) {
                echo 'borrado';
                /* $data = [];
                $this->renderView('Inicio', $data); */
            } else {
                die('ocurrió un error !');
            };
        } else {
            $cliente = $this->ClienteModel->getOne($id);
            $data = [
                'idCliente' => $cliente->idCliente,
                'nombreCliente' => $cliente->nombreCliente,
                'apellidoCliente' => $cliente->apellidoCliente,
                'telefonoCliente' => $cliente->telefonoCliente
            ];
            $this->renderView('Cliente/borrarCliente', $data);
        }
    }

    public function detPenalizacion()
    {
        $data = [];
        $this->renderView('Cliente/Penalizacion', $data);
    }

    public function formPenalizacion()
    {
        $data = [];
        $this->renderView('Cliente/formPenalizacion', $data);
    }

    public function search()
    {
        $data = [
            "valor" => $_POST['valor']
        ];

        $data = $this->ClienteModel->search($data);
        $this->renderView('Cliente/Cliente', $data);
    }

    public function ImprimirListado()
    {
        $data = $this->ClienteModel->getAll();
        //$data = [];
        $this->renderView('Cliente/rptListadoClientes', $data);
    }
    
    /**
     * datatable
     * Llamamos los datos del modelo y los convertimos en formato json para luego ser consumidos en js en el front
     * @return void
     */
    public function datatable()
    {
        $cliente = $this->ClienteModel->getTable();
        echo json_encode($cliente);
    }

    public function crearPrestamo($id){
        $data = [];
        $data = $this->ClienteModel->getOne($id);
        /* echo "Prestamo;".$id; */
        $this->renderView('Cliente/crearPrestamo', $data);
    }
}