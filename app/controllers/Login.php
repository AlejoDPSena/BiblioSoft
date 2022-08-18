<?php
error_reporting(0);
class Login extends Controller
{
    public function __construct()
    {
        $this->LoginModel = $this->getModel('LoginModel');
    }

    public function index()
    {
        $data = [];
        if(isset($_SESSION['idUsuario'])){
            session_destroy();
            session_unset();
            $this->renderView('Login', $data);
          }else{
            session_start(); 
            $_SESSION['mensaje']="";
            $this->renderView('Login', $data);
          }
         //temporal porque no hay
    }

    public function login()
    {
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'usuario' => $_POST['usuario'],
                'passwordUsuario' => $_POST['passwordUser']
            ];
            $resultado = $this->LoginModel->loginUser($data);
            if ($resultado!="") {
                $data = [];
                session_start();
                $_SESSION['mensaje'] = 'Bienvenido, ';
                $_SESSION['idUsuario'] = $resultado->idUsuario;
                $_SESSION['nombre1Usuario'] = $resultado->nombre1Usuario;
                $_SESSION['nombre2Usuario'] = $resultado->nombre2Usuario;
                $_SESSION['apellido1Usuario'] = $resultado->apellido1Usuario;
                $_SESSION['apellido2Usuario'] = $resultado->apellido2Usuario; 
                $this->renderView('Inicio',$data); 
            } else {
                session_start();
                $_SESSION['mensaje'] = 'Usuario o contraseña incorrectos.';
                $this->renderView('Login',$data);
            }
        } else {
            echo 'Atención! el servidor no pudo mandar los datos.';
        }
    }
}
