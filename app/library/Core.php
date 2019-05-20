<?php
class Core{
    protected $controladorActual = 'pages';
    protected $metodoActaul = 'index';
    protected $parametros = [];

    //Constructor de la clase
    public function __construct(){
        $url = $this->getUrl();
    }

    public function getUrl(){
        echo $_GET['url'];
    }
}
?>