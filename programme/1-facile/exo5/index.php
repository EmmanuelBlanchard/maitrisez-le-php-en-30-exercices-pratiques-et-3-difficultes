<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
$nombreAleatoire = rand(5,15);
echo "<h2><b>Voici la table de multiplication de : " . $nombreAleatoire . "</b></h2>";
for($i = 1 ; $i <= 10 ; $i++) {
    echo "<p>" . $nombreAleatoire . " * " . $i . " = " . ($nombreAleatoire * $i) . "</p>"; 
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
