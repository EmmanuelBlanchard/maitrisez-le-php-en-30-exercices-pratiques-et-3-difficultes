<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 12 : Les tableaux et moyenne"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
// $marc = [12,15,13,7,18];
// $matthieu = [11,14,10,4,20,8,2];

// function calculerMoyenne($nomTableau) {
//     $moyenne = 0;
//     for($i = 0 ; $i < count($nomTableau) ; $i++) {
//         $moyenne += $nomTableau[$i];
//     }
//     $moyenne = $moyenne / count($nomTableau);
//     return $moyenne;
// }
// $moyenneMarc = calculerMoyenne($marc);
// $moyenneMatthieu = calculerMoyenne($matthieu);
// echo "La moyenne des notes de <b>Marc</b> est de <b>" . $moyenneMarc . "</b> <br />";
// echo "La moyenne des notes de <b>Matthieu</b> est de <b>" . $moyenneMatthieu . "</b> <br />";

$notesMarc = [12,15,13,7,18];
$notesMatthieu = [11,14,10,4,20,8,2];

$resultat = 0;
for($i = 0 ; $i < count($notesMarc) ; $i++) {
    $resultat += $notesMarc[$i];
}
echo "La moyenne des notes de <b>Marc</b> est de <b>" . ($resultat / count($notesMarc)) . "</b>";
echo "<br />";
$resultat = 0;
foreach($notesMatthieu as $index => $noteMatthieu) {
    $resultat += $noteMatthieu;
}
echo "La moyenne des notes de <b>Matthieu</b> est de <b>" . ($resultat / count($notesMatthieu)) . "</b>";


?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
