<?php

require 'personas.php';



mostrarIndiceDePersonas($personas);








function mostrarIndiceDePersonas($listaDePersonas){

    echo "<b>Lista de Personas</b><br><br>";


    foreach($listaDePersonas as $persona){

        echo "* <a href=datos.php?id=" . $persona['id'] . ">" . $persona['Nombre'] . " " . $persona['Apellido'] . "</a>";
        echo "<br><br>";
        
    
    }
    

    
}



