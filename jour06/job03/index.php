<?php
// Je déclare ma fonction
function getHello(){
    return "Hello LaPlateforme!";
}
// Appel de ma fonction dont le contenu va être stocker dans une variable
$msg = getHello();
//Affichage du message grâce à $msg
echo $msg;
?>