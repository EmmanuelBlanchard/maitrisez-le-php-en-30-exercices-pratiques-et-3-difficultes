<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 16 : Tableau de tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$personneMatthieu = [
    "nom" => "Matthieu",
    "age" => 30,
    "sexe" => true
];
$personneMarie = [
    "nom" => "Marie",
    "age" => 30,
    "sexe" => false
];
$personneMarc = [
    "nom" => "Marc",
    "age" => 25,
    "sexe" => true
];
$personneMathilde = [
    "nom" => "Mathilde",
    "age" => 21,
    "sexe" => false
];

$tableauxDePersonnes = [
    $personneMatthieu,
    $personneMarie,
    $personneMarc,
    $personneMathilde 
];

foreach($tableauxDePersonnes as $index => $tableauDePesonne) {
    afficherAffichagePersonne($tableauDePesonne);
    echo "--------------------------- <br />";
}

function afficherAffichagePersonne($tableauDePesonnes){
    echo "Nom : " .$tableauDePesonnes["nom"] . "<br />";
    echo "Age : " .$tableauDePesonnes["age"] . "<br />";
    if($tableauDePesonnes["sexe"]) {
        echo "Sexe : Homme <br />";
    } else {
        echo "Sexe : Femme <br />";
    }
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


