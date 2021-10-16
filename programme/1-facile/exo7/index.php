<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 7 : Switch"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nombreAleatoire = rand(1, 12);
$mois = "";

switch ($nombreAleatoire) {
    case 1: $mois = "Janvier";
    break;
    case 2: $mois = "Février";
    break;
    case 3: $mois = "Mars";
    break;
    case 4: $mois = "Avril";
    break;
    case 5: $mois = "Mai";
    break;
    case 6: $mois = "Juin";
    break;
    case 7: $mois = "Juillet";
    break;
    case 8: $mois = "Août";
    break;
    case 9: $mois = "Septembre";
    break;
    case 10: $mois = "Octobre";
    break;
    case 11: $mois = "Novembre";
    break;
    case 12: $mois = "Décembre";
    break;
    default: $mois = "Inconnu";
    break;
}

echo "<h2>Le mois <b>" . $nombreAleatoire . "</b> en chiffre correspond au mois <b>" . $mois . "</b> en lettre </h2>";

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
