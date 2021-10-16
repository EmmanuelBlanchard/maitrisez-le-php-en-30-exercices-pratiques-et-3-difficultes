<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 8 : La boucle while"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nombreAleatoire = rand(1, 20);
$compteur = 1;

while($nombreAleatoire < 15) {
    echo "<p>Essai " . $compteur . " : ".$nombreAleatoire. " est trop petit (<15)</p>";
    $nombreAleatoire = rand(1, 20);
    $compteur ++;
}
echo "<h2>Le chiffre choisi est : " . $nombreAleatoire . " "; 

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
