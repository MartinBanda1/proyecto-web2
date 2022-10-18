<?php
require_once './smarty-4.2.1/libs/Smarty.class.php';
class PeliView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showPeli($peliculas) {
        
        $this->smarty->assign('count', count($peliculas)); 
        $this->smarty->assign('peliculas', $peliculas);

       
        $this->smarty->display('pelilist.tpl');
    }

    function showError($msg){
       echo "<h1>Error</h1>";
        echo "<h2>$msg</h2>";
    }
    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
}