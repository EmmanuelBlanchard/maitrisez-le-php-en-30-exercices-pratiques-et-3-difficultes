<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 18 : Méthode GET"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->


<form action="" method="get">
    <div class="form-group">
        <label>Pseudo : </label>
        <input type="text" class="form-control" name="pseudo"/>
    </div>
    <div class="form-group">
        <label>Age : </label>
        <input type="number" class="form-control" name="age"/>
    </div>
        <input type="submit" class="btn btn-primary" value="Valider" ></p>
</form>

<?php

if(isset($_GET['pseudo']) && !empty($_GET['pseudo']) && 
isset($_GET['age']) && !empty($_GET['age'])) {
    $pseudo = $_GET['pseudo'];
    $age = $_GET['age'];
    echo $pseudo . " a " . $age . " ans";
}

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


