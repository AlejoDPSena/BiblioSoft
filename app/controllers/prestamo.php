<?php
class Prestamo extends Controller
{
    public function __construct()
    {
        $this->ClienteModel = $this->getModel('ClienteModel');
        $this->LibroModel = $this->getModel('LibroModel');
        $this->detalleModel = $this->getModel('detalleModel');
        $this->prestamoModel = $this->getModel('prestamoModel');
    }

    public function guardar()
    {
        $data = [];
        $fechaActual = date ( 'd-m-Y H:i:s' );

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'fechaIni' => $fechaActual,
                'fechaFin' => $_POST['fechaFin'],
                'idCliente' => $_POST['idCliente'],
                'cantidad' => $_POST['cantidad'],
                'idLibro' => $_POST['idLibro']
            ];
            $resultado = $this->prestamoModel->add($data);
            if ($resultado) {
                $numFormula = $this->prestamoModel->getLast();
                echo $numFormula;
                $respuesta = $this->detalleModel->add($data,$numFormula);
            }
            if ($respuesta){
                echo json_encode("Prestamo Creado!");
            }else{
                echo json_encode("Hubo un error!");
            }
        } else {
            echo json_encode('Atención! el servidor no pudo mandar los datos.');
        }
    }
}
