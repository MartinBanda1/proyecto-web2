<?php
    include_once "./models/streamingmodels.php";
    include_once "./views/streamingview.php";


    class StreamingController {
        private $model;
        private $view;

        function __construct(){

        $this ->model =new StreamingModel();
        $this ->view =new StreamingView();
        }

    function showStreaming(){
        
        $streamings =$this->model->getStreaming();

        $this->view->showStreaming($streamings);

    }
}