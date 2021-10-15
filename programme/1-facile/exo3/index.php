<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 

$nombreAleatoire = rand(1,20);

echo "<h2>Le nombre aléatoire est " . $nombreAleatoire . "<br /> </h2>";

if($nombreAleatoire <= 5) {
    echo "Il est compris entre un et cinq";
} else if ($nombreAleatoire <= 10 ) {
    echo "Il est compris entre six et dix";
} else if ($nombreAleatoire <= 15 ) {
    echo "Il est compris entre onze et quinze";
} else if ($nombreAleatoire <= 20 ) {
    echo "Il est compris entre seize et vingt";
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
