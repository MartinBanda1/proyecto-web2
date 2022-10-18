<?php

class StreamingModel{


function connect(){

    $db = new PDO('mysql:host=localhost;'
    .'dbname=db_especial;charset=utf8'
    , 'root', '');
    return $db;
}

function getStreaming(){


    $db = $this->connect();
    
    $query= $db-> prepare('SELECT * FROM servicio_de_streaming');
    $query-> execute();
    
    $streamings= $query-> fetchAll(PDO::FETCH_OBJ);
    
    return $streamings;
    }

}  