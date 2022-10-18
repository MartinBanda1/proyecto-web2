<?php

class PeliModel{


private function connect(){

    $db = new PDO('mysql:host=localhost;'
    .'dbname=db_especial;charset=utf8'
    , 'root', '');
    return $db;

}

function getPeliculas(){


    $db = $this->connect();
    
    $query= $db-> prepare('SELECT * FROM peliculas');
    $query-> execute();
    
    $peliculas= $query-> fetchAll(PDO::FETCH_OBJ);
    
    return $peliculas;
    }



    function insertPeli($nombre,$director,$duracion){
            
        $db= $this->connect();

        $query = $db->prepare('INSERT INTO peliculas (nombre, director, duracion, streaming_fk)VALUES (?, ?, ?, ?)');
        $query->execute([$nombre,$director,$duracion, true]);

        return $this->$db->LastInsertId();

    }
    public function finalize($id_peliculas) {
        $query = $this->db->prepare('UPDATE peliculas SET streaming_fk = 1 WHERE id = ?');
        $query->execute([$id_peliculas]);
        var_dump($query->errorInfo()); 
    }

    function deletePeliById($id_peliculas) {
        $db= $this->connect();
        $query = $db->prepare('DELETE FROM peliculas WHERE id_peliculas = ?');
        $query->execute([$id_peliculas]);
    }



} 