<?php
/* Création d'un tableau */
$data = array(200, 204, 173, 98, 171, 404, 459);

/* Je place une boucle for, pour parcourir mon tableau*/
for($i = 0 ; $i < 7; $i++){
    /* Si un nombre dans mon tableau est divisible par 2, alors... */
    if($data[$i]%2 == 0){
        echo $data[$i] ." est paire <br>" ;
    }
    /* Sinon... */
    else{
        echo $data[$i] ." est impaire <br>" ;
    }

}
?>
