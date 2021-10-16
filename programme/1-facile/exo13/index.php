<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 13 : Les tableaux et fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

// $notesMarc = [12,15,13,7,18];
// $notesMatthieu = [11,14,10,4,20,8,2];

// $resultat = 0;
// for($i = 0 ; $i < count($notesMarc) ; $i++) {
//     $resultat += $notesMarc[$i];
// }
// echo "La moyenne des notes de <b>Marc</b> est de <b>" . ($resultat / count($notesMarc)) . "</b>";
// echo "<br />";
// $resultat = 0;
// foreach($notesMatthieu as $index => $noteMatthieu) {
//     $resultat += $noteMatthieu;
// }
// echo "La moyenne des notes de <b>Matthieu</b> est de <b>" . ($resultat / count($notesMatthieu)) . "</b>";


$notesDeMarc = [12,15,13,7,18];
$notesDeMatthieu = [11,14,10,4,20,8,2];
$notesDePierre = [5,13,9,3];
$notesDePaul = [6,11,15,2];

function calculerMoyenne($nomTableau) {
    $moyenne = 0;
    for($i = 0 ; $i < count($nomTableau) ; $i++) {
        $moyenne += $nomTableau[$i];
    }
    return $moyenne / count($nomTableau);
}

echo "La moyenne des notes de <b>Marc</b> est de <b>" . calculerMoyenne($notesDeMarc) . "</b> <br />";
echo "La moyenne des notes de <b>Matthieu</b> est de <b>" . calculerMoyenne($notesDeMatthieu) . "</b> <br />";
echo "La moyenne des notes de <b>Pierre</b> est de <b>" . calculerMoyenne($notesDePierre) . "</b> <br />";
echo "La moyenne des notes de <b>Paul</b> est de <b>" . calculerMoyenne($notesDePaul) . "</b> <br />";

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
