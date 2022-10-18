<?php

    include_once './models/pelimodels.php';
    include_once './views/peliview.php';
    class PeliController {
        private $model;
        private $view;

        function __construct(){

        $this ->model =new PeliModel();
        $this ->view =new PeliView();
        }

    function showPeli(){
        $peliculas =$this->model->getPeliculas();


        $this->view->showPeli($peliculas);

    }
    function addPeli(){
        $nombre = $_POST['nombre'];
        $director= $_POST['director'];
        $duracion = $_POST['duracion'];

        $id_peliculas = $this->model->insertPeli($nombre,$director,$duracion);

        $this->view->ShowHomeLocation(); 
    }
    function finalizePeli($id) {
        $this->model->finalize($id);
        $this->view->ShowHomeLocation(); 
    }
    function deletePeli($id_peliculas) {
        $this->model->deletePeliById($id_peliculas);
        $this->view->ShowHomeLocation(); 
    }



            }

