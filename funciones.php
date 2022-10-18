<?php

    function getTablas(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_especial;charset=utf8' , 'root', '');
        $query = $db->prepare("SELECT * FROM servicio_de_streaming");
        $query->execute();
        $peliculasdetalle = $query->fetchAll(PDO::FETCH_OBJ);
 
  echo "<ul>";
  foreach($peliculasdetalle as $peliculadetalle){
     $query = $db->prepare('SELECT * FROM peliculas WHERE streaming_fk=?');
     $query->execute([$peliculadetalle->id_streaming]);
     $pelicula = $query->fetch(PDO::FETCH_OBJ);

  }
    return $peliculadetalle;
    return $pelicula;

  echo "</ul>";
    }