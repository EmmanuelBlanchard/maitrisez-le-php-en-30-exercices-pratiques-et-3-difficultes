<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 19 : Formulaire et Méthode POST"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action="" method="post">
    <div class="form-group">
        <label>Saisir un chiffre : </label>
        <input type="number" class="form-control" name="chiffre"/>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider" ></p>
</form>

<?php

if(isset($_POST['chiffre']) && !empty($_POST['chiffre'])) {
    $chiffreSaisi = $_POST['chiffre'];
    if($chiffreSaisi % 2 === 0) {
        echo "<p>Le chiffre saisi est pair </p>";
    } else {
        echo "<p>Le chiffre saisi n'est pas pair </p>";
    }
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


