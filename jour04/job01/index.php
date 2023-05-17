<?php

/* Je génère un formulaire HTML */
echo "<form style='border:1px solid' method='get' action='form.php' enctype='multipart/form-data'>
    <label for='nom'>Quel est votre nom : </label>
    <input type='text' name='nom' id='nom'/><br>

    <label for='prenom'>Quel est votre prénom : </label> 
    <input type='text' name='prenom' id='prenom'/><br>

    <label for='age'>Quel est votre âge : </label>  
    <input type='text' name='age' id='age' /><br><br>

    <input type='submit' name='submit' value='Envoyer' />
</form>";

?>