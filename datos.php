<?php

require 'personas.php';


mostrarPersona($personas);
enlaceAlIndice();






function mostrarPersona($listaDePersonas){


    foreach($listaDePersonas as $persona){

        if($persona['id'] == $_GET['id']){
        echo "<b>ID:</b> " . $persona['id'];
        echo "<br><br>";
        echo "<b>Nombre: </b>" . $persona['Nombre'] . " " . $persona['Apellido'];
        echo "<br><br>";
        echo "<b>Edad: </b>" . $persona['edad'] . " años";
        echo "<br><br>";
        echo "<b>Correo electrónico: </b>" . $persona['correo'];
        }
        
        
        }
        


}

function enlaceAlIndice(){

echo "<br><br><br><br>";
echo "<a href=index.php>" . "Volver al índice" . "</a>";

}