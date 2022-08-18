<?php
/*
Clase base que arma las rutas abreviadas del mvc
controlador/metodo/parametro
P.ej: medico/crearFormulaMedica/$id
*/

class Core
{
    //setear los controlardores, metodos y parametros iniciales del MVC
    protected $defaultController = 'Inicio';
    protected $defaultMethod = 'index';
    protected $parameters = [];
    public function __construct()
    {
        $url = $this->getUrl(); // Construye la clase y setea la url del MVC
        //1.0 Verificamos si existe el controlador y lo invocamos
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->defaultController = ucwords($url[0]);
            unset($url[0]);
        }
        //Invocamos el controlador

        require_once '../app/controllers/' . $this->defaultController . '.php';
        $this->defaultController = new $this->defaultController;

        //2.0 invovamos el metodo correspondiente

        if (isset($url[1])) {
            if (method_exists($this->defaultController, $url[1])) {
                $this->defaultMethod = $url[1];
                unset($url[1]);
            }
        }

        //3.0 obtenemos los parametros que pasamos por la url

        $this->parameters = $url ? array_values($url) : []; //Si existen parametros los extrae del arreglo
        call_user_func_array([$this->defaultController, $this->defaultMethod], $this->parameters); //asigna los parametros usando una funcion callback
    }

    /*
    *toma la ruta de la url, la vuelve un arreglo y posteriormente en una ruta abreviada
    *@return $url
    */
    public function getUrl()
    {
        $url = ""; //Para almacenar la ruta abreviada

        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //Separa la ruta por porciones de acuerdo al / 
            $url = filter_var($url, FILTER_SANITIZE_URL); // sanitiza la ruta para asegurar la url
            $url = explode('/', $url);
            return $url;
        }
        return ['Login'];
    }
}
