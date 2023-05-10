<?php

/* Déclaration d'un tableau qui contient plusieurs valeurs */
$name = "Seif";
$age = 26 ;
$size = 1.80 ;
$is_student = true ;

/* Mise en place du tableau HTML */
echo "<table border style='margin:5% auto'>";

/* L'en-tête du tableau, suivi de la ligne d'un tableau et enfin
les cellules d'en-tête*/
echo "<thead>
    <tr> 
        <th>type</th>
        <th>nom</th>
        <th>valeur</th>
    </tr>
   </thead>";

   /* le corps du tableau, suivi de la ligne du tableau et des 
   cellules du tableau,  */
   echo "<tbody>";
   echo "<tr>
    <td>String</td>
    <td>Name</td>
    <td>" . $name ."</td>
    </tr>";
 /* Une fois une ligne remplie, la balise tr permet de passer
 à la ligne suivante au sein du tableau */
   echo "<tr>
   <td>Integer</td>
   <td>Age</td>
   <td>" . $age . "</td>
   </tr>";
   echo "<tr>
   <td>Float</td>
   <td>Size</td>
   <td>" . $size . "</td></tr>";

   echo "<tr>
   <td>Boolean</td>
   <td>Is Student</td>
   <td>" . ($is_student ? "true" : "false") ."</td></tr>";

echo "</tbody>";
echo "</table>";

?>