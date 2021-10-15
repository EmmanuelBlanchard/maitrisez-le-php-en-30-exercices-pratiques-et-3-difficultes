<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 

$nombreAleatoire = rand(1,100);
$nombreAleatoire2 = rand(1,100);

echo "<p>Chiffre 1 : <b>" . $nombreAleatoire . "</b> <br /> </p>";
echo "<p>Chiffre 2 : <b>" . $nombreAleatoire2 . "</b> <br /> </p>";

$resultat = abs($nombreAleatoire - $nombreAleatoire2);
// echo "<p>Resultat : <b>" . $resultat . "</b> <br /> </p>";

if ($resultat >= 25 && $resultat <= 75) {
    echo "<p>La valeur absolue de : <b>$nombreAleatoire - $nombreAleatoire2</b> est comprise entre 25 et 75 <br /> </p>";
} else {
    echo "<p>La valeur absolue de : <b>$nombreAleatoire - $nombreAleatoire2</b> n'est pas comprise entre 25 et 75 <br /> </p>";
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
