<?php

class Paciente extends Controller
{
    private $MedicoModel;
    public function __construct()
    {
        //Configuremos el modelo correspondiente a este controlador
        $this->pacienteModel = $this->getModel('PacienteModel');
    }

    public function index()
    {
        //$data = 
        $data = $this->pacienteModel->listar();  //temporal porque no hay data
        $this->renderView('Paciente/PacienteInicio', $data);
    }

    public function add(){
        $data = [];  //temporal porque no hay data
        echo "Agregando paciente";
    }
    
    public function delete(){
        echo "Borrando paciente";
    }
    
    public function search(){
        echo "Buscando paciente";
    }
    /*public function generarFormula()
    {
        echo 'Esto es el metodo generar formula del medico';
    }

    public function otroMetodo()
    {
        echo 'Esto es otro metodo de la formula del medico';
    }*/
}