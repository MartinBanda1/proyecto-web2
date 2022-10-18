<?php

class StreamingView{

    function showStreaming($streamings){

        echo "<h1>Streamings</h1>";
        echo "<ul>";
        foreach ($streamings as $streaming){
            echo "<li> $streaming->nombre
            
            </li>";
    
        }
        echo "</ul>";
    
        }
    }