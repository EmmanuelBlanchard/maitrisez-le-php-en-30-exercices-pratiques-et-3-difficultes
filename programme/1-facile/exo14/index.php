<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 14 : Tableau de tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$notesDeMarc = [12,15,13,7,18];
$notesDeMatthieu = [11,14,10,4,20,8,2];
$notesDePierre = [5,13,9,3];
$notesDePaul = [6,11,15,2];

$tableauDesNotesEleves = [$notesDeMarc,$notesDeMatthieu,$notesDePierre,$notesDePaul];

for($i = 0 ; $i < count($tableauDesNotesEleves) ; $i++) {
    if($i === 0) {
        echo "La moyenne des notes de <b> ". ($i+1) . "er élève </b> est de <b>" . calculerMoyenne($tableauDesNotesEleves[$i]) . "</b> <br />";
    } else {
        echo "La moyenne des notes de <b> ". ($i+1) . "ème élève </b> est de <b>" . calculerMoyenne($tableauDesNotesEleves[$i]) . "</b> <br />";
    }
}

function calculerMoyenne($nomTableau) {
    $moyenne = 0;
    for($i = 0 ; $i < count($nomTableau) ; $i++) {
        $moyenne += $nomTableau[$i];
    }
    return $moyenne / count($nomTableau);
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
