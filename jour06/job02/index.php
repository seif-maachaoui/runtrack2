<?php
//Déclaration de ma fonction
function bonjour($jour){
    if($jour == true){
        echo "Bonjour <br>";
    }else{
        echo "Bonsoir";
    }
}
//J'appelle ma fonction
bonjour(true);
bonjour(false); 
?>