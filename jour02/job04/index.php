<?php
/* Déclaration de ma variable */
$x= 1 ;
/* Tant que ma variable est inférieur à 100 */
while($x <= 100){
    /* Si la valeur de ma variable est un multiple de 3 et de 5 alors... */
    if($x%3 == 0 && $x%5 == 0){
        echo $x .": FizzBuzz <br>";
    }
    /* Sinon si la valeur de ma variable est un mutliple de 3 */
    else if($x%3 == 0){ 
        echo $x .": Fizz <br>";
    }
    /* Sinon si la valeur de ma variable est un mutliple de 3 */
    else if($x%5 == 0){
        echo $x .": Buzz <br>";
    }
    /* l'incrémentation se fera en dehors des conditions */
    $x++;

}


?>