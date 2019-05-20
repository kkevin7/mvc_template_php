<?php
class Paginas extends Controller{
    public function __construct() {
        //echo "Controlador de paginas cargado...<br/>";
    }

    public function articulos(){

    }

    public function index(){
        $datos = [
            'titulo' => "Bienvenidos A la plantilla MVC"
        ];

        $this->view('pages/inicio', $datos);
    }

    public function actualizar($num_registros){
        echo $num_registros;

    }
}

?>