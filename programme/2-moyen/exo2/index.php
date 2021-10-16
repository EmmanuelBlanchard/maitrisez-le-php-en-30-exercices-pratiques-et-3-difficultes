<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require("gestionTableau.php");
$tableau1 = [2,6,10,20,9,14];
$tableau2 = [4,8,2,26,18,14];
?>

<div class="row text-center">
    <div class="col">
        <h2>Tableau 1</h2>
        <?php
        afficherTableau($tableau1);
        echo "<p> La moyenne est de : " . (calculerMoyenne($tableau1)) . " </p>";
        if(estTableauPair($tableau1)) {
            echo "<p> Le tableau contient que des valeurs paires </p>";
        } else {
            echo "<p> Le tableau ne contient pas que des valeurs paires </p>";
        }
        ?>
    </div>
    <div class="col">
        <h2>Tableau 2</h2>
        <?php
        afficherTableau($tableau2);
        echo "<p> La moyenne est de : " . (calculerMoyenne($tableau2)) . " </p>";
        if(estTableauPair($tableau2)) {
            echo "<p> Le tableau contient que des valeurs paires </p>";
        } else {
            echo "<p> Le tableau ne contient pas que des valeurs paires </p>";
        }
        ?>
    </div>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


