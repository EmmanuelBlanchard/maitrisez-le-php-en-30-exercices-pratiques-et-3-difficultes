<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 10 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$monMot = "Coucou";
$monMotSansVoyelle = retourneMotSansVoyelles($monMot);
$b = 122;

function retourneMotSansVoyelles($monMot) {
    $voyelle = ["a","e","i","o","u","y"];

    $resultat = str_replace($voyelle,"",$monMot);

    return $resultat;
}

echo "<p>" .$monMot . " sans voyelle est : " .$monMotSansVoyelle ." </p>";

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
