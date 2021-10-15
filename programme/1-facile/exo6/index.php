<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
$nombreAleatoire = rand(5,15);
echo "<h2><b>Voici le cummul des " . $nombreAleatoire . " premiers nombres (sens inverse) </b></h2>";
$resultat = 0;
for($i = $nombreAleatoire ; $i >= 1 ; $i--) {
    $resultat += $i;
    echo "Etape : ".($nombreAleatoire-$i+1)." - résultat = " .$resultat."<br />";
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
